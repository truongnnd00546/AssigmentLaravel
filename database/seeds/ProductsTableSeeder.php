<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \Illuminate\Support\Facades\DB::table('products')->truncate();
        \Illuminate\Support\Facades\DB::table('products')->insert([
            [
                'categories'=>'1',
                'name' => 'san pham1',

                'image' => 'https://images.foody.vn/res/g25/240463/prof/s576x330/foody-mobile-12-jpg-977-636163764339001083.jpg',
                'description' => 'rat ngon'
            ],
            [
                'categories'=>'1',
                'name' => 'san pham2',
                'image' => 'https://images.foody.vn/res/g25/240463/prof/s576x330/foody-mobile-12-jpg-977-636163764339001083.jpg',
                'description' => 'rat ngon'
            ],
            [
                'categories'=>'1',
                'name' => 'san pham3',
                'image' => 'https://images.foody.vn/res/g25/240463/prof/s576x330/foody-mobile-12-jpg-977-636163764339001083.jpg',
                'description' => 'rat ngon'
            ],
            [
                'categories'=>'1',
                'name' => 'san pham4',
                'image' => 'https://images.foody.vn/res/g25/240463/prof/s576x330/foody-mobile-12-jpg-977-636163764339001083.jpg',
                'description' => 'rat ngon'
            ],
            [
                'categories'=>'1',
                'name' => 'san pham5',
                'image' => 'https://images.foody.vn/res/g25/240463/prof/s576x330/foody-mobile-12-jpg-977-636163764339001083.jpg',
                'description' => 'rat ngon'
            ],
            [
                'categories'=>'1',
                'name' => 'san pham6',
                'image' => 'https://images.foody.vn/res/g25/240463/prof/s576x330/foody-mobile-12-jpg-977-636163764339001083.jpg',
                'description' => 'rat ngon'
            ],
            [
                'categories'=>'2',
                'name' => 'san pham7',
                'image' => 'https://images.foody.vn/res/g25/240463/prof/s576x330/foody-mobile-12-jpg-977-636163764339001083.jpg',
                'description' => 'rat ngon'
            ],
            [
                'categories'=>'2',
                'name' => 'san pham8',
                'image' => 'https://images.foody.vn/res/g25/240463/prof/s576x330/foody-mobile-12-jpg-977-636163764339001083.jpg',
                'description' => 'rat ngon'
            ],
            [
                'categories'=>'3',
                'name' => 'san pham9',
                'image' => 'https://images.foody.vn/res/g25/240463/prof/s576x330/foody-mobile-12-jpg-977-636163764339001083.jpg',
                'description' => 'rat ngon'
            ],
            [
                'categories'=>'3',
                'name' => 'san pham10',
                'image' => 'https://images.foody.vn/res/g25/240463/prof/s576x330/foody-mobile-12-jpg-977-636163764339001083.jpg',
                'description' => 'rat ngon'
            ],
            [
                'categories'=>'3',
                'name' => 'san pham11',
                'image' => 'https://images.foody.vn/res/g25/240463/prof/s576x330/foody-mobile-12-jpg-977-636163764339001083.jpg',
                'description' => 'rat ngon'
            ],
            [
                'categories'=>'4',
                'name' => 'san pham12',
                'image' => 'https://images.foody.vn/res/g25/240463/prof/s576x330/foody-mobile-12-jpg-977-636163764339001083.jpg',
                'description' => 'rat ngon'
            ],
            [
                'categories'=>'2',
                'name' => 'san pham13',
                'image' => 'https://images.foody.vn/res/g25/240463/prof/s576x330/foody-mobile-12-jpg-977-636163764339001083.jpg',
                'description' => 'rat ngon'
            ],
            [
                'categories'=>'3',
                'name' => 'san pham14',
                'image' => 'https://images.foody.vn/res/g25/240463/prof/s576x330/foody-mobile-12-jpg-977-636163764339001083.jpg',
                'description' => 'rat ngon'
            ],
            [
                'categories'=>'3',
                'name' => 'san pham15',
                'image' => 'https://images.foody.vn/res/g25/240463/prof/s576x330/foody-mobile-12-jpg-977-636163764339001083.jpg',
                'description' => 'rat ngon'
            ],
            [
                'categories'=>'5',
                'name' => 'san pham16',
                'image' => 'https://images.foody.vn/res/g25/240463/prof/s576x330/foody-mobile-12-jpg-977-636163764339001083.jpg',
                'description' => 'rat ngon'
            ],
            [
                'categories'=>'5',
                'name' => 'san pham17',
                'image' => 'https://images.foody.vn/res/g25/240463/prof/s576x330/foody-mobile-12-jpg-977-636163764339001083.jpg',
                'description' => 'rat ngon'
            ],
            [
                'categories'=>'5',
                'name' => 'san pham18',
                'image' => 'https://images.foody.vn/res/g25/240463/prof/s576x330/foody-mobile-12-jpg-977-636163764339001083.jpg',
                'description' => 'rat ngon'
            ],
            [
                'categories'=>'5',
                'name' => 'san pham19',
                'image' => 'https://images.foody.vn/res/g25/240463/prof/s576x330/foody-mobile-12-jpg-977-636163764339001083.jpg',
                'description' => 'rat ngon'
            ],
            [
                'categories'=>'5',
                'name' => 'san pham20',
                'image' => 'https://images.foody.vn/res/g25/240463/prof/s576x330/foody-mobile-12-jpg-977-636163764339001083.jpg',
                'description' => 'rat ngon'
            ],
        ]);

    }
}
