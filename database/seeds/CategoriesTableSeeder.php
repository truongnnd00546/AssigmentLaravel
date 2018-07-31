<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('categories')->truncate();
        \Illuminate\Support\Facades\DB::table('categories')->insert([
            [
                'name' => 'danh muc 1',
                'image' => 'https://images.foody.vn/res/g25/240463/prof/s576x330/foody-mobile-12-jpg-977-636163764339001083.jpg\'',
                'description' => 'danh muc 1 description'
            ], [
                'name' => 'danh muc 2',
                'image' => 'https://images.foody.vn/res/g25/240463/prof/s576x330/foody-mobile-12-jpg-977-636163764339001083.jpg\'',
                'description' => 'danh muc 2 description'
            ], [
                'name' => 'danh muc 3',
                'image' => 'https://images.foody.vn/res/g25/240463/prof/s576x330/foody-mobile-12-jpg-977-636163764339001083.jpg\'',
                'description' => 'danh muc 3 description'
            ], [
                'name' => 'danh muc 4',
                'image' => 'https://images.foody.vn/res/g25/240463/prof/s576x330/foody-mobile-12-jpg-977-636163764339001083.jpg\'',
                'description' => 'danh muc 4 description'
            ], [
                'name' => 'danh muc 5',
                'image' => 'https://images.foody.vn/res/g25/240463/prof/s576x330/foody-mobile-12-jpg-977-636163764339001083.jpg\'',
                'description' => 'danh muc 5 description'
            ],
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
