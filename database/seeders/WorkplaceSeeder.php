<?php

namespace Database\Seeders;

use App\Models\Workplace;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkplaceSeeder extends Seeder
{
    public function run(): void
    {
        DB::transaction(function () {
            $estrutura = [
                'I - NÍVEL DE DECISÃO COLEGIADA' => [
                    '1. Conferência Estadual de Saúde' => [],
                    '2. Conselho Estadual de Saúde' => [
                        '2.1. Ouvidoria Geral do Conselho Estadual de Saúde' => [],
                        '2.2. Secretaria Geral do Conselho Estadual de Saúde' => [],
                    ],
                    '3. Comissão Intergestora Bipartite' => [
                        '3.1. Secretaria Executiva da Comissão Intergestora Bipartite' => [],
                    ],
                ],
                'II - NÍVEL DE DIREÇÃO SUPERIOR' => [
                    '1. Gabinete do Secretário de Estado de Saúde' => [
                        '1.1 Gabinete do Secretário Adjunto Executivo de Saúde' => [],
                        '1.2. Gabinete do Secretário Adjunto de Gestão Hospitalar' => [],
                        '1.3. Gabinete do Secretário Adjunto de Unidades Especializadas' => [],
                        '1.4. Gabinete do Secretário Adjunto do Complexo Regulador' => [],
                        '1.5. Gabinete do Secretário Adjunto de Atenção e Vigilância em Saúde' => [],
                        '1.6. Gabinete do Secretário Adjunto de Orçamento e Finanças' => [],
                        '1.7. Gabinete do Secretário Adjunto de Administração Sistêmica' => [],
                        '1.8. Gabinete do Secretário Adjunto de Aquisições e Contratos' => [],
                        '1.9. Gabinete do Secretário Adjunto de Infraestrutura e Tecnologia da Informação' => [],
                    ],
                ],
                'III - NÍVEL DE APOIO ESTRATÉGICO E ESPECIALIZADO' => [
                    '1. Unidade de Desenvolvimento Organizacional' => [],
                    '2. Ouvidoria Setorial de Saúde' => [],
                    '3. Auditoria Geral do Sistema Único de Saúde - SUS' => [],
                    '4. Unidade Setorial de Controle Interno - UNISECI' => [],
                    '5. Comissão de Ética' => [],
                    '6. Unidade Setorial de Correição' => [],
                    '7. Núcleo de Gestão Estratégica para Resultados - NGER' => [],
                    '8. Núcleo do Telessaúde e Saúde Digital' => [],
                    '9. Unidade de Informações Estratégicas de Vigilância em Saúde' => [],
                    '10. Unidade de Inteligência Estratégica para a Gestão Estadual do SUS' => [],
                    '11. Unidade Jurídica' => [],
                    '12. Comissão Permanente de Farmácia e Terapêutica' => [],
                    '13. Núcleo de Apoio Técnico à Regulação de Urgência e Emergência' => [],
                ],
                'IV - NÍVEL DE ASSESSORAMENTO SUPERIOR' => [
                    '1. Gabinete de Direção' => [],
                    '2. Unidade de Assessoria' => [],
                ],
                'V - NÍVEL DE ADMINISTRAÇÃO SISTÊMICA' => [
                    '1. Superintendência de Orçamento' => [
                        '1.1. Coordenadoria de Execução Orçamentária' => [],
                        '1.2. Coordenadoria de Convênios' => [],
                    ],
                    '2. Superintendência de Finanças' => [
                        '2.1. Coordenadoria da Receita' => [],
                        '2.2. Coordenadoria de Execução Financeira' => [],
                    ],
                    '3. Superintendência de Contabilidade' => [
                        '3.1. Coordenadoria Contábil' => [],
                        '3.2. Coordenadoria de Prestação de Contas' => [],
                    ],
                    '4. Superintendência de Gestão de Pessoas' => [
                        '4.1. Coordenadoria de Provimento e Movimentação de Pessoal' => [],
                        '4.2. Coordenadoria de Monitoramento e Vida Funcional' => [],
                        '4.3. Coordenadoria de Gestão de Folha de Pagamento' => [],
                        '4.4. Coordenadoria de Aplicação e Desenvolvimento' => [],
                        '4.5. Coordenadoria de Saúde e Segurança no Trabalho' => [],
                    ],
                    '5. Superintendência Administrativa' => [
                        '5.1. Coordenadoria de Apoio Logístico' => [],
                        '5.2. Coordenadoria de Transportes' => [],
                        '5.3. Coordenadoria de Protocolo e Arquivo' => [],
                        '5.4. Coordenadoria de Patrimônio' => [],
                        '5.5. Coordenadoria de Materiais' => [],
                    ],
                    '6. Superintendência de Tecnologia da Informação' => [
                        '6.1. Coordenadoria de Infraestrutura de TI' => [],
                        '6.2. Coordenadoria de Assistência Técnica e Suporte à Usuários de TI' => [],
                        '6.3. Coordenadoria de Desenvolvimento e Manutenção de Sistemas de Informação' => [],
                    ],
                    '7. Superintendência de Obras, Reformas e Manutenção' => [
                        '7.1 Coordenadoria de Fiscalização' => [],
                        '7.2 Coordenadoria de Manutenção' => [],
                    ],
                    '8. Superintendência de Aquisições e Contratos' => [
                        '8.1. Coordenadoria de Aquisições' => [],
                        '8.2. Coordenadoria de Contratos' => [],
                    ],
                ],
                'VI - NÍVEL DE EXECUÇÃO PROGRAMÁTICA' => [
                    '1. Superintendência de Gestão e Acompanhamento de Serviços Hospitalares' => [
                        '1.1. Coordenadoria de Gestão e Organização de Serviços' => [],
                        '1.2. Coordenadoria de Acompanhamento da Execução Administrativa, Contábil e Financeira' => [
                            '1.2.1.Gerência de Acompanhamento de Prestação de Contas Hospitalares' => [],
                        ],
                        '1.3.Coordenadoria de Acompanhamento da Execução de Serviços Hospitalares' => [],
                    ],
                    '2. Superintendência de Unidades Especializadas' => [
                        '2.1. Coordenadoria de Apoio Administrativo às Unidades Especializadas' => [],
                    ],
                    '3. Superintendência de Assistência Farmacêutica' => [
                        '3.1. Coordenadoria da Farmácia de Atendimento ao Componente Especializado' => [],
                        '3.2. Coordenadoria de Assistência Farmacêutica Primária e Estratégica' => [],
                        '3.3. Coordenadoria de Farmácia de Demanda Extraordinária' => [],
                        '3.4. Coordenadoria de Abastecimento e Distribuição de Insumos e Medicamentos' => [],
                        '3.5. Coordenadoria de Gestão de Medicamentos e Insumos' => [],
                    ],
                    '4. Superintendência de Regulação da Saúde' => [
                        '4.1. Coordenadoria de Tratamento Fora do Domicílio' => [],
                        '4.2. Coordenadoria de Apoio Administrativo' => [],
                        '4.3. Coordenadoria de Apoio Técnico às Centrais de Regulação' => [],
                        '4.4. Coordenadoria de Transplantes' => [
                            '4.4.1. Gerência de Acompanhamento e Controle de Transplantes' => [],
                            '4.4.2. Gerência de Captação de Órgãos e Tecidos' => [],
                        ],
                    ],
                    '5. Superintendência de Regulação de Urgência e Emergência' => [
                        '5.1. Coordenadoria do Serviço de Atendimento Móvel de Urgência - SAMU' => [],
                        '5.2. Coordenadoria de Articulação à Regulação de Urgência e Emergência de Leitos Hospitalares.' => [],
                    ],
                    '6. Superintendência de Programação, Controle e Avaliação' => [
                        '6.1. Coordenadoria de Monitoramento, Controle e Avaliação dos Serviços de Saúde' => [
                            '6.1.1.Gerência de Monitoramento das Ações e Serviços da Média e Alta complexidade - MAC' => [],
                        ],
                        '6.2. Coordenadoria de Programação de Ações e Serviços de Saúde' => [],
                        '6.3. Coordenadoria de Processamento de Informações de Serviços de Saúde' => [],
                        '6.4. Coordenadoria de Contratualização de Serviços de Saúde' => [],
                    ],
                    '7. Superintendência de Vigilância em Saúde' => [
                        '7.1. Coordenadoria do Programa Estadual de Imunização' => [],
                        '7.2. Coordenadoria de Vigilância Sanitária' => [
                            '7.2.1. Gerência de Fiscalização, Inspeção e Monitoramento em Vigilância Sanitária' => [],
                            '7.2.2. Gerência de Certificação de Alvará Sanitário' => [],
                            '7.2.3. Gerência de Monitoramento e Avaliação em Vigilância Sanitária' => [],
                            '7.2.4. Gerência de Análise do Projeto Arquitetônico' => [],
                        ],
                        '7.3. Coordenadoria de Vigilância Epidemiológica' => [
                            '7.3.1. Gerência de Vigilância em Doenças e Agravos Endêmicos' => [],
                            '7.3.2. Gerência de Vigilância em Doenças e Agravos Não Transmissíveis' => [],
                            '7.3.3. Gerência de Informação e Análise em Vigilância Epidemiológica' => [],
                            '7.3.4. Gerência do Serviço de Verificação de Óbitos' => [],
                        ],
                        '7.4. Coordenadoria de Vigilância em Saúde Ambiental' => [
                            '7.4.1. Gerência de Controle de Vetores e Zoonoses' => [],
                            '7.4.2. Gerência de Vigilância em Saúde Ambiental' => [],
                        ],
                        '7.5.Coordenadoria de Vigilância em Saúde do Trabalhador' => [],
                    ],
                    '8. Superintendência de Atenção à Saúde' => [
                        '8.1. Coordenadoria de Atenção Primária' => [
                            '8.1.1. Gerência de Monitoramento da Atenção Primária à Saúde' => [],
                        ],
                        '8.2. Coordenadoria de Atenção Secundária' => [],
                        '8.3. Coordenadoria de Organização de Redes de Atenção a Saúde' => [],
                        '8.4. Coordenadoria de Promoção e Humanização da Saúde' => [],
                        '8.5. Coordenadoria de Saúde Bucal' => [],
                        '8.6. Coordenadoria de Consórcios de Ações e Serviços de Saúde' => [],
                        '8.7. Coordenadoria de Atenção às Condições de Saúde' => [],
                        '8.8. Coordenadoria de Atenção Terciária' => [],
                    ],
                    '9. Superintendência de Gestão de Parcerias Hospitalares' => [
                        '9.1. Coordenadoria de Fiscalização e Monitoramento de Parcerias Hospitalares' => [],
                    ],
                ],
                'VII - NÍVEL DE ADMINISTRAÇÃO REGIONALIZADA E DESCONCENTRADA' => [
                    '1. Superintendência de Gestão Regional' => [
                        '1.1. Coordenadoria Administrativa Regional' => [],
                        '1.2 Coordenadoria Técnica de Gestão Regional' => [],
                        '1.3. Escritório Regional de Saúde de Água Boa' => [
                            '1.3.1. Diretoria do Escritório Regional de Saúde de Água Boa' => [],
                        ],
                        '1.4. Escritório Regional de Saúde de Alta Floresta' => [
                            '1.4.1. Diretoria do Escritório Regional de Saúde de Alta Floresta' => [],
                        ],
                        '1.5. Escritório Regional de Saúde da Baixada Cuiabana' => [
                            '1.5.1.Diretoria do Escritório Regional de Saúde da Baixada Cuiabana' => [],
                        ],
                        '1.6. Escritório Regional de Saúde de Barra do Garças' => [
                            '1.6.1. Diretoria do Escritório Regional de Saúde de Barra do Garças' => [],
                        ],
                        '1.7. Escritório Regional de Saúde de Cáceres' => [
                            '1.7.1. Diretoria do Escritório Regional de Saúde de Cáceres' => [],
                        ],
                        '1.8. Escritório Regional de Saúde de Colíder' => [
                            '1.8.1. Diretoria do Escritório Regional de Saúde de Colíder' => [],
                        ],
                        '1.9. Escritório Regional de Saúde de Diamantino' => [
                            '1.9.1. Diretoria do Escritório Regional de Saúde de Diamantino' => [],
                        ],
                        '1.10. Escritório Regional de Saúde de Juara' => [
                            '1.10.1. Diretoria do Escritório Regional de Saúde de Juara' => [],
                        ],
                        '1.11. Escritório Regional de Saúde de Juína' => [
                            '1.11.1. Diretoria do Escritório Regional de Saúde de Juína' => [],
                        ],
                        '1.12. Escritório Regional de Saúde de Peixoto de Azevedo' => [
                            '1.12.1. Diretoria do Escritório Regional de Saúde de Peixoto de Azevedo' => [],
                        ],
                        '1.13. Escritório Regional de Saúde de Pontes e Lacerda' => [
                            '1.13.1. Diretoria do Escritório Regional de Saúde de Pontes e Lacerda' => [],
                        ],
                        '1.14. Escritório Regional de Saúde de Porto Alegre do Norte' => [
                            '1.14.1. Diretoria do Escritório Regional de Saúde de Porto Alegre do Norte' => [],
                        ],
                        '1.15. Escritório Regional de Saúde de Rondonópolis' => [
                            '1.15.1. Diretoria do Escritório Regional de Saúde de Rondonópolis' => [],
                        ],
                        '1.16. Escritório Regional de Saúde de São Félix do Araguaia' => [
                            '1.16.1. Diretoria do Escritório Regional de Saúde de São Félix do Araguaia' => [],
                        ],
                        '1.17. Escritório Regional de Saúde de Sinop' => [
                            '1.17.1. Diretoria do Escritório Regional de Saúde de Sinop' => [],
                        ],
                        '1.18. Escritório Regional de Saúde de Tangará da Serra' => [
                            '1.18.1. Diretoria do Escritório Regional de Saúde de Tangará da Serra' => [],
                        ],
                    ],
                    '2. Laboratório Central de Saúde Pública do Estado de Mato Grosso - LACEN/MT' => [
                        '2.1. Diretoria do Laboratório Central de Saúde Pública do Estado de Mato Grosso' => [
                            '2.1.1. Gerência da Qualidade e Biossegurança do LACEN' => [],
                            '2.1.2. Gerência de Planejamento e Informação do LACEN' => [],
                            '2.1.3. Gerência Administrativa do LACEN' => [],
                            '2.1.4. Coordenadoria Técnica de Análises de Saúde Pública' => [
                                '2.1.4.1. Gerência de Análises de Vigilância Epidemiológica' => [],
                                '2.1.4.2. Gerência de Análises de Vigilância Ambiental e Sanitária' => [],
                                '2.1.4.3. Gerência de Vigilância Laboratorial na Fronteira' => [],
                            ],
                        ],
                    ],
                    '3. MT-Hemocentro' => [
                        '3.1. Diretoria do MT - Hemocentro' => [
                            '3.1.1. Coordenadoria Administrativa do MT-Hemocentro' => [],
                            '3.1.2. Coordenadoria Técnica do MT-Hemocentro' => [
                                '3.1.2.1. Gerência de Doação de Sangue' => [],
                                '3.1.2.2. Gerência de Diagnóstico Laboratorial' => [],
                                '3.1.2.3. Gerência de Produção, Estoque e Distribuição de Hemocomponentes' => [],
                                '3.1.2.4. Gerência Ambulatorial e Transfusional' => [],
                            ],
                            '3.1.3.Coordenadoria da Hemorrede Estadual' => [],
                        ],
                    ],
                    '4. Centro Estadual de Referência de Média e Alta Complexidades de Mato Grosso - CERMAC' => [
                        '4.1. Diretoria do Centro Estadual de Referência de Média e Alta Complexidades de Mato Grosso' => [
                            '4.1.1. Coordenadoria Administrativa do CERMAC' => [],
                            '4.1.2. Coordenadoria Técnica do CERMAC' => [],
                            '4.1.3. Coordenadoria de Gestão Ambulatorial do CERMAC' => [],
                        ],
                    ],
                    '5. Centro de Reabilitação Integral Dom Aquino Corrêa do Sistema Único de Saúde - CRIDAC/CER III' => [
                        '5.1. Diretoria do Centro de Reabilitação Integral Dom Aquino Corrêa do Sistema Único de Saúde - CRIDAC/CER III' => [
                            '5.1.1. Coordenadoria Administrativa do CRIDAC/CER III' => [],
                            '5.1.2. Coordenadoria Técnica do CRIDAC/CER III' => [],
                            '5.1.3. Coordenadoria de Gestão Ambulatorial CRIDAC/CER III' => [],
                        ],
                    ],
                    '6. Centro Estadual de Odontologia para Pacientes Especiais - CEOPE' => [
                        '6.1. Diretoria do Centro Estadual de Odontologia para Pacientes Especiais - CEOPE' => [
                            '6.1.1. Gerência Administrativa do CEOPE' => [],
                            '6.1.2. Gerência Técnica do CEOPE' => [],
                        ],
                    ],
                    '7. Escola de Saúde Pública do Estado de Mato Grosso - ESP/MT' => [
                        '7.1. Conselho Escolar' => [],
                        '7.2. Superintendência da Escola de Saúde Pública do Estado de Mato Grosso' => [
                            '7.2.1. Coordenadoria de Gestão Pedagógica' => [],
                            '7.2.2. Coordenadoria de Ensino, Pesquisa e Extensão' => [],
                            '7.2.3. Coordenadoria de Formação Técnica em Saúde' => [],
                            '7.2.4. Coordenadoria de Administração Escolar' => [
                                '7.2.4.1. Gerência de Documentação e Registro Escolar' => [],
                                '7.2.4.2. Gerência Administrativa da ESP/MT' => [],
                            ],
                            '7.2.5. Coordenadoria de Tecnologia de Educação à Distância' => [],
                        ],
                    ],
                    '8. Hospital Regional de Rondonópolis “Irmã Elza Giovanella”' => [
                        '8.1. Superintendência Administrativa e Financeira' => [],
                        '8.2. Superintendência de Enfermagem' => [
                            '8.2.1. Coordenadoria de Enfermagem Cirúrgica e CME' => [],
                            '8.2.2. Coordenadoria de Clínica Médica e Pediátrica' => [],
                        ],
                    ],
                    '9. Hospital Regional de Sorriso' => [
                        '9.1.Superintendência Administrativa e Financeira' => [],
                        '9.2. Superintendência de Enfermagem' => [
                            '9.2.1. Coordenadoria de Urgência e Emergência' => [],
                            '9.2.2. Coordenadoria de Clínica Médica e Pediátrica' => [],
                            '9.2.3. Coordenadoria de Medicina Intensiva' => [],
                        ],
                    ],
                    '10. Hospital Regional de Colíder' => [
                        '10.1. Superintendência Administrativa e Financeira' => [],
                        '10.2. Superintendência de Enfermagem' => [
                            '10.2.1. Coordenadoria de Enfermagem Cirúrgica e CME' => [],
                            '10.2.2. Coordenadoria de Urgência e Emergência' => [],
                            '10.2.3. Coordenadoria de Clínica Médica e Pediátrica' => [],
                            '10.2.4. Coordenadoria de Medicina Intensiva' => [],
                        ],
                    ],
                    '11. Hospital Regional de Alta Floresta “Albert Sabin”' => [
                        '11.1. Superintendência Administrativa e Financeira' => [],
                        '11.2. Superintendência de Enfermagem' => [
                            '11.2.1. Coordenadoria de Urgência e Emergência' => [],
                            '11.2.2. Coordenadoria de Medicina Intensiva' => [],
                        ],
                    ],
                    '12. Hospital Regional de Sinop' => [
                        '12.1. Superintendência Administrativa e Financeira' => [],
                        '12.2. Superintendência de Enfermagem' => [
                            '12.2.1. Coordenadoria de Enfermagem Cirúrgica e CME' => [],
                            '12.2.2. Coordenadoria de Urgência e Emergência' => [],
                            '12.2.3. Coordenadoria de Clínica Médica e Pediátrica' => [],
                            '12.2.4. Coordenadoria de Medicina Intensiva' => [],
                        ],
                    ],
                    '13. Hospital Estadual “Lousite Ferreira da Silva”' => [
                        '13.1. Superintendência Administrativa e Financeira' => [],
                        '13.2. Superintendência de Enfermagem' => [
                            '13.2.1. Coordenadoria de Enfermagem Cirúrgica e CME' => [],
                            '13.2.2. Coordenadoria de Urgência e Emergência' => [],
                        ],
                    ],
                    '14. Hospital Estadual Santa Casa' => [
                        '14.1. Superintendência Administrativa e Financeira' => [],
                        '14.2. Superintendência de Enfermagem' => [
                            '14.2.1. Coordenadoria de Enfermagem Cirúrgica e CME' => [],
                            '14.2.2. Coordenadoria de Urgência e Emergência' => [],
                            '14.2.3. Coordenadoria de Clínica Médica e Pediátrica' => [],
                            '14.2.4. Coordenadoria de Medicina Intensiva' => [],
                        ],
                    ],
                    '15. Centro Integrado de Atenção Psicossocial Adauto Botelho - CIAPS' => [
                        '15.1. Superintendência do CIAPS' => [
                            '15.1.1. Coordenadoria de Apoio Administrativo do CIAPS' => [],
                            '15.1.2. Coordenadoria de Apoio Técnico do CIAPS' => [],
                            '15.1.3. Coordenadoria da Unidade II' => [],
                            '15.1.4. Coordenadoria da Unidade III' => [],
                            '15.1.5. Coordenadoria do Centro de Atenção Psicossocial Álcool e Drogas (CAPSAD)' => [],
                            '15.1.6. Coordenadoria do Centro de Atenção Psicossocial Infanto-Juvenil (CAPSI)' => [],
                            '15.1.7. Coordenadoria do “Lar Doce Lar”' => [],
                        ],
                    ],
                ],
            ];

            $this->processarNos($estrutura);
        });
    }

    private function processarNos(array $nos, ?int $parentId = null): void
    {
        foreach ($nos as $nome => $filhos) {
            $workplace = Workplace::create([
                'parent_id' => $parentId,
                'nome' => trim($nome),
            ]);

            if (!empty($filhos)) {
                $this->processarNos($filhos, $workplace->id);
            }
        }
    }
}