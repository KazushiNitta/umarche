<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shops')->insert([
            [
                'owner_id' => '1',
                'name' => 'テスト店',
                'information' => 'テスト店へようこそ',
                'filename' => 'sample1.jpg',
                'is_selling' => true,
            ],
            [
                'owner_id' => '2',
                'name' => 'ダミー店',
                'information' => 'ダミー店へようこそ',
                'filename' => 'sample2.jpg',
                'is_selling' => true,
            ],
        ]);
    }
}
