<?php

namespace Database\Seeders;

use App\Models\Byt;
use Illuminate\Database\Seeder;

class BytSeeder extends Seeder
{
    public function run(): void
    {
        Byt::insert([
            ['id' => '11', 'value' => 'Nebytový prostor – I'],
            ['id' => '12', 'value' => 'Nebytový prostor – II'],
            ['id' => '21', 'value' => 'Byt "A" – 2+kk'],
            ['id' => '31', 'value' => 'Byt "B" – 3+kk'],
            ['id' => '41', 'value' => 'Byt "C" – 4+kk'],
        ]);
    }
}
