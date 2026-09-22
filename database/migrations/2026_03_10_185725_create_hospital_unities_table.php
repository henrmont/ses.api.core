<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('hospital_unities', function (Blueprint $table) {
            $table->id();

            // Identificadores Oficiais
            $table->string('cnes')->unique(); // codigo_cnes
            $table->string('health_facility_code')->nullable(); // codigo_estabelecimento_saude
            $table->string('cnpj')->nullable(); // numero_cnpj ou numero_cnpj_entidade
            
            // Nomes e Razão Social
            $table->string('name'); // nome_fantasia
            $table->string('corporate_name')->nullable(); // nome_razao_social
            
            // Unidade e Gestão
            $table->integer('unit_type_code')->nullable(); // codigo_tipo_unidade
            $table->string('management_type', 5)->nullable(); // tipo_gestao (ex: M, E, D)
            $table->string('administrative_sphere')->nullable(); // descricao_esfera_administrativa
            $table->string('legal_nature_code')->nullable(); // descricao_natureza_juridica_estabelecimento
            
            // Endereço e Geolocalização
            $table->string('zip_code', 10)->nullable(); // codigo_cep_estabelecimento
            $table->string('address')->nullable(); // endereco_estabelecimento
            $table->string('address_number', 20)->nullable(); // numero_estabelecimento
            $table->string('neighborhood')->nullable(); // bairro_estabelecimento
            $table->integer('city_ibge_code')->nullable(); // codigo_municipio
            $table->integer('state_code')->nullable(); // codigo_uf
            $table->double('latitude', 10, 8)->nullable(); // latitude_estabelecimento_decimo_grau
            $table->double('longitude', 11, 8)->nullable(); // longitude_estabelecimento_decimo_grau

            // Contato e Funcionamento
            $table->string('phone')->nullable(); // numero_telefone_estabelecimento
            $table->string('email')->nullable(); // endereco_email_estabelecimento
            $table->string('attendance_shift_code')->nullable(); // codigo_identificador_turno_atendimento
            $table->string('attendance_shift')->nullable(); // descricao_turno_atendimento
            
            // Flags e Atendimento (Booleanos)
            $table->boolean('has_sus_ambulatory_care')->default(false); // estabelecimento_faz_atendimento_ambulatorial_sus
            $table->boolean('has_surgical_center')->default(false); // estabelecimento_possui_centro_cirurgico
            $table->boolean('has_obstetric_center')->default(false); // estabelecimento_possui_centro_obstetrico
            $table->boolean('has_neonatal_center')->default(false); // estabelecimento_possui_centro_neonatal
            $table->boolean('has_hospital_care')->default(false); // estabelecimento_possui_atendimento_hospitalar
            $table->boolean('has_support_services')->default(false); // estabelecimento_possui_servico_apoio
            $table->boolean('has_ambulatory_care')->default(false); // estabelecimento_possui_atendimento_ambulatorial
            
            // Informações de Atualização no Órgão de Origem
            $table->date('datasus_updated_at')->nullable(); // data_atualizacao

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hospital_unities');
    }
};