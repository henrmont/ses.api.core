<?php

namespace Database\Seeders;

use App\Models\HospitalUnity;
use Illuminate\Database\Seeder;

class HospitalUnitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HospitalUnity::insert([
            [
                'name' => 'HOSPITAL DAS CLÍNICAS',
                'cnes' => '123456',
                'city' => 'São Paulo',
                'state' => 'SP'
            ],
            [
                'name' => 'HOSPITAL DO AMOR',
                'cnes' => '123456',
                'city' => 'Rio de Janeiro',
                'state' => 'RJ'
            ]
        ]);
    }
}
