<?php

namespace Database\Seeders;

use App\Models\Cities;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = json_decode(file_get_contents(database_path()."/seeders/Cities.json"), true);

        foreach($cities as $item)
        {
            Cities::create([
                "id" => $item['id'],
                "name" => $item['name'],
                "name_en" => $item['name_en'],
                "cities_id" => $item['cities_id'],
                "order" => $item['order'],
                "order_en" => $item['order_en'],
                "name_ar" => $item['name_ar'],
                "lat" => $item['lat'],
                "long" => $item['lng'],
                "is_other" => $item['is_other'],
                "searchable_text" => $item['searchable_text'],
                "url_name_ar" => $item['url_name_ar'],
                "url_name_en" => $item['url_name_en'],
            ]);
        }
    }
}
