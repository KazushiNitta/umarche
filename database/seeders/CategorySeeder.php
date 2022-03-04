<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('primary_categories')->insert([
            [
                'name' => '家電',
                'sort_order' => 1,
            ],
            [
                'name' => '衣類',
                'sort_order' => 2,
            ],
            [
                'name' => '食品',
                'sort_order' => 3,
            ],
        ]);

        DB::table('secondary_categories')->insert([
            [
                'name' => 'パソコン',
                'sort_order' => 1,
                'primary_category_id' => 1,
            ],
            [
                'name' => 'テレビ',
                'sort_order' => 2,
                'primary_category_id' => 1,
            ],
            [
                'name' => 'イヤホン',
                'sort_order' => 3,
                'primary_category_id' => 1,
            ],
            [
                'name' => 'コート',
                'sort_order' => 4,
                'primary_category_id' => 2,
            ],
            [
                'name' => 'ズボン',
                'sort_order' => 5,
                'primary_category_id' => 2,
            ],
        ]);
    }
}
