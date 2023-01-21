<?php

namespace Database\Seeders;

use App\Models\Byt;
use Illuminate\Database\Seeder;

class BytSeeder extends Seeder
{
    public function run(): void
    {
        Byt::insert([
            ['id' => '11', 'name' => 'Prodejna I.', 'useful_area' => '49.9'],
            ['id' => '12', 'name' => 'Prodejna II.', 'useful_area' => '47.7'],
            ['id' => '21', 'name' => 'Byt "A" – 2+kk', 'useful_area' => '66.5'],
            ['id' => '31', 'name' => 'Byt "B" – 3+kk', 'useful_area' => '94.3'],
            ['id' => '41', 'name' => 'Byt "C" – 3+kk', 'useful_area' => '117.1'],
        ]);
    }
}
