<?php

namespace Database\Seeders;

use App\Models\Workstation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WorkstationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Workstation::insert([
            [
                'name' => 'TRATAMENTO FORA DE DOMÍCILIO (TFD)',
                'code' => '123',
            ],
            [
                'name' => 'HOSPITAL CENTRAL',
                'code' => '456',
            ],
            [
                'name' => 'SECRETARIA ESTADUAL DE SAÚDE (SES)',
                'code' => '789',
            ]
        ]);
    }
}
