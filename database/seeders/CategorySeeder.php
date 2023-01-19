<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = json_decode(file_get_contents(database_path() . "/seeders/Categories.json"));
        $order = 0;
        foreach ($category as $parent => $sub) {
            $category = Category::create(['name' => $parent, 'isActive' => true, 'order' => $order]);
            $order++;
            foreach ($sub as $value) {
                SubCategory::create([
                    'category_id' => $category->id,
                    'name' => $value,
                ]);
            }
        }
    }
}
