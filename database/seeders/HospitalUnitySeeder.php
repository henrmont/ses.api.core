<?php

namespace Database\Seeders;

use App\Models\HospitalUnity;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class HospitalUnitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $baseUrl = 'https://apidadosabertos.saude.gov.br/cnes/estabelecimentos';
        
        // --- CONFIGURAÇÃO DE LIMITES ---
        $maxRecords = 10000; // <--- DEFINA AQUI O NÚMERO MÁXIMO DE REGISTROS DESEJADO
        $limit = 20;       // Tamanho de cada bloco retornado pela API
        
        $offset = 0;
        $importedCount = 0;
        $hasMoreData = true;

        $this->command->info("Iniciando sincronização com a API do CNES (Limite máximo: {$maxRecords} registros)...");

        while ($hasMoreData && $importedCount < $maxRecords) {
            $this->command->comment("Buscando registros: offset {$offset}...");

            try {
                $response = Http::timeout(60)
                    ->retry(3, 1000)
                    ->get($baseUrl, [
                        'limit'  => $limit,
                        'offset' => $offset,
                    ]);

                if ($response->failed()) {
                    $this->command->error("Falha ao comunicar com a API no offset {$offset}. Status: " . $response->status());
                    break;
                }

                $data = $response->json();
                $records = $data['estabelecimentos'] ?? (is_array($data) && isset($data[0]) ? $data : []);

                if (empty($records)) {
                    $hasMoreData = false;
                    $this->command->info('Nenhum outro registro retornado.');
                    break;
                }

                foreach ($records as $item) {
                    $mappedData = $this->mapFromDatasusApi($item);

                    if (!empty($mappedData['cnes'])) {
                        HospitalUnity::updateOrCreate(
                            ['cnes' => (string) $mappedData['cnes']],
                            $mappedData
                        );

                        $importedCount++;

                        // Interrompe imediatamente ao atingir a quantidade exata limite
                        if ($importedCount >= $maxRecords) {
                            $this->command->info("Limite máximo de {$maxRecords} registros atingido!");
                            break 2; // Encerra tanto o foreach quanto o while
                        }
                    }
                }

                $count = count($records);
                $this->command->info("Total importado até o momento: {$importedCount}/{$maxRecords}.");

                if ($count < $limit) {
                    $hasMoreData = false;
                } else {
                    $offset += $count;
                }

            } catch (\Exception $e) {
                Log::error("Erro no HospitalUnitySeeder com offset {$offset}: " . $e->getMessage());
                $this->command->error("Erro ao importar no offset {$offset}: " . $e->getMessage());
                break;
            }
        }

        $this->command->info("Sincronização concluída! Total de {$importedCount} registros salvos no banco.");
    }

    /**
     * Mapeia os dados brutos da API para o schema da aplicação.
     */
    private function mapFromDatasusApi(array $data): array
    {
        return [
            'cnes' => $data['codigo_cnes'] ?? null,
            'health_facility_code' => $data['codigo_estabelecimento_saude'] ?? null,
            'cnpj' => $data['numero_cnpj'] ?? $data['numero_cnpj_entidade'] ?? null,
            'name' => $data['nome_fantasia'] ?? $data['nome_razao_social'] ?? 'UNIDADE SEM NOME',
            'corporate_name' => $data['nome_razao_social'] ?? null,
            'unit_type_code' => isset($data['codigo_tipo_unidade']) ? (int) $data['codigo_tipo_unidade'] : null,
            'management_type' => $data['tipo_gestao'] ?? null,
            'administrative_sphere' => $data['descricao_esfera_administrativa'] ?? null,
            'legal_nature_code' => $data['descricao_natureza_juridica_estabelecimento'] ?? null,
            'zip_code' => $data['codigo_cep_estabelecimento'] ?? null,
            'address' => $data['endereco_estabelecimento'] ?? null,
            'address_number' => $data['numero_estabelecimento'] ?? null,
            'neighborhood' => $data['bairro_estabelecimento'] ?? null,
            'city_ibge_code' => isset($data['codigo_municipio']) ? (int) $data['codigo_municipio'] : null,
            'state_code' => isset($data['codigo_uf']) ? (int) $data['codigo_uf'] : null,
            'latitude' => isset($data['latitude_estabelecimento_decimo_grau']) ? (float) $data['latitude_estabelecimento_decimo_grau'] : null,
            'longitude' => isset($data['longitude_estabelecimento_decimo_grau']) ? (float) $data['longitude_estabelecimento_decimo_grau'] : null,
            'phone' => $data['numero_telefone_estabelecimento'] ?? null,
            'email' => $data['endereco_email_estabelecimento'] ?? null,
            'attendance_shift_code' => $data['codigo_identificador_turno_atendimento'] ?? null,
            'attendance_shift' => $data['descricao_turno_atendimento'] ?? null,
            'has_sus_ambulatory_care' => strtoupper($data['estabelecimento_faz_atendimento_ambulatorial_sus'] ?? '') === 'SIM',
            'has_surgical_center' => (bool) ($data['estabelecimento_possui_centro_cirurgico'] ?? 0),
            'has_obstetric_center' => (bool) ($data['estabelecimento_possui_centro_obstetrico'] ?? 0),
            'has_neonatal_center' => (bool) ($data['estabelecimento_possui_centro_neonatal'] ?? 0),
            'has_hospital_care' => (bool) ($data['estabelecimento_possui_atendimento_hospitalar'] ?? 0),
            'has_support_services' => (bool) ($data['estabelecimento_possui_servico_apoio'] ?? 0),
            'has_ambulatory_care' => (bool) ($data['estabelecimento_possui_atendimento_ambulatorial'] ?? 0),
            'datasus_updated_at' => $data['data_atualizacao'] ?? null,
        ];
    }
}