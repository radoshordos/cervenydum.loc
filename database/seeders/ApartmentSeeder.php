<?php

namespace Database\Seeders;

use App\Models\Apartment;
use Illuminate\Database\Seeder;

class ApartmentSeeder extends Seeder
{
    public function run(): void
    {
        $apartment = [
            ['id' => '1', 'byt_id' => '11', 'floor' => '1NP', 'loggia' => 'NE', 'cellar' => 'NE', 'garage' => 'NE', 'selling_price' => '15000000', 'selling_status' => 'Nestanovena'],
            ['id' => '2', 'byt_id' => '12', 'floor' => '1NP', 'loggia' => 'NE', 'cellar' => 'NE', 'garage' => 'NE', 'selling_price' => '15000000', 'selling_status' => 'Nestanovena'],
            ['id' => '3', 'byt_id' => '21', 'floor' => '2NP', 'loggia' => 'ANO', 'cellar' => 'ANO', 'garage' => 'ANO 1x', 'selling_price' => '15000000', 'selling_status' => 'Nestanovena'],
            ['id' => '4', 'byt_id' => '31', 'floor' => '2NP', 'loggia' => 'ANO', 'cellar' => 'ANO', 'garage' => 'ANO 1x', 'selling_price' => '15000000', 'selling_status' => 'Nestanovena'],
            ['id' => '5', 'byt_id' => '21', 'floor' => '3NP', 'loggia' => 'ANO', 'cellar' => 'ANO', 'garage' => 'ANO 1x', 'selling_price' => '15000000', 'selling_status' => 'Nestanovena'],
            ['id' => '6', 'byt_id' => '31', 'floor' => '3NP', 'loggia' => 'ANO', 'cellar' => 'ANO', 'garage' => 'ANO 1x', 'selling_price' => '15000000', 'selling_status' => 'Nestanovena'],
            ['id' => '7', 'byt_id' => '21', 'floor' => '4NP', 'loggia' => 'ANO', 'cellar' => 'ANO', 'garage' => 'ANO 1x', 'selling_price' => '15000000', 'selling_status' => 'Nestanovena'],
            ['id' => '8', 'byt_id' => '31', 'floor' => '4NP', 'loggia' => 'ANO', 'cellar' => 'ANO', 'garage' => 'ANO 1x', 'selling_price' => '15000000', 'selling_status' => 'Nestanovena'],
            ['id' => '9', 'byt_id' => '21', 'floor' => '5NP', 'loggia' => 'ANO', 'cellar' => 'ANO', 'garage' => 'ANO 1x', 'selling_price' => '15000000', 'selling_status' => 'Nestanovena'],
            ['id' => '10', 'byt_id' => '31', 'floor' => '5NP', 'loggia' => 'ANO', 'cellar' => 'ANO', 'garage' => 'ANO 1x', 'selling_price' => '15000000', 'selling_status' => 'Nestanovena'],
            ['id' => '11', 'byt_id' => '41', 'floor' => '6NP', 'loggia' => 'ANO', 'cellar' => 'ANO', 'garage' => 'ANO 1x', 'selling_price' => '15000000', 'selling_status' => 'Nestanovena']
        ];
        Apartment::insert($apartment);
    }
}
