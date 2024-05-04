<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\Constraint\Count;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = [
            ['code' => 'vnm', 'name' => 'Viet Nam', 'states' => null],
            ['code' => 'afg', 'name' => 'Afghanistan', 'states' => null],
            ['code' => 'bra', 'name' => 'Brazil', 'states' => null],
            ['code' => 'geo', 'name' => 'Georgia', 'states' => null],
            ['code' => 'ind', 'name' => 'India', 'states' => null],
            ['code' => 'usa', 'name' => 'United States of America', 'states' => json_encode([
                "AL" => 'Alabama',
                "AK" => 'Alaska',
                "AZ" => 'Arizona',
                "AR" => 'Arkansas',
                "CA" => 'California',
            ])],
            ['code' => 'ger', 'name' => 'Germany', 'states' => null],
        ];
        Country::insert($countries);
    }
}
