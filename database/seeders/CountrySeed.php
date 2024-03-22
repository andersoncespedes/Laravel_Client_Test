<?php

namespace Database\Seeders;
use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://restcountries.com/v3.1/lang/spanish",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
            "cache-control: no-cache"
        ),
        ));
        $response = curl_exec($curl);
        $data = json_decode($response);
        $names = array_map(function($elem){
            return ["name" => $elem->name->official];
        }, $data);
        Country::insert($names);
        $err = curl_error($curl);
        curl_close($curl);
    }
}
