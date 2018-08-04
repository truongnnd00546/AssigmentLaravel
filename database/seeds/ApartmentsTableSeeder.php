<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades;

class ApartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('apartments')->truncate();
        \Illuminate\Support\Facades\DB::table('apartments')->insert([
            [
                'name' => 'Chung cư 1',
                'address' => 'Hà Nội',
                'price' => '30000000',
                'general_Information' => 'Chung cư đẹp',
                'description' => 'Rất rộng rãi',
                'image' => 'http://cafef.vcmedia.vn/k:2015/1-0-can-ho-chung-cu-95m2-xala-ha-dong-1-1442286468928/ngam-nhung-thiet-ke-chung-cu-dep-lung-linh.jpg',

            ],
            [
                'name' => 'Chung cư 2',
                'address' => 'Hà Nội',
                'price' => '30000000',
                'general_Information' => 'Chung cư đẹp',
                'description' => 'Rất rộng rãi',
                'image' => 'http://cafef.vcmedia.vn/k:2015/1-0-can-ho-chung-cu-95m2-xala-ha-dong-1-1442286468928/ngam-nhung-thiet-ke-chung-cu-dep-lung-linh.jpg',

            ],
            [
                'name' => 'Chung cư 3',
                'address' => 'Hà Nội',
                'price' => '30000000',
                'general_Information' => 'Chung cư đẹp',
                'description' => 'Rất rộng rãi',
                'image' => 'http://cafef.vcmedia.vn/k:2015/1-0-can-ho-chung-cu-95m2-xala-ha-dong-1-1442286468928/ngam-nhung-thiet-ke-chung-cu-dep-lung-linh.jpg',

            ],
            [
                'name' => 'Chung cư 4',
                'address' => 'Hà Nội',
                'price' => 30000000,
                'general_Information' => 'Chung cư đẹp',
                'description' => 'Rất rộng rãi',
                'image' => 'http://cafef.vcmedia.vn/k:2015/1-0-can-ho-chung-cu-95m2-xala-ha-dong-1-1442286468928/ngam-nhung-thiet-ke-chung-cu-dep-lung-linh.jpg',

            ],
            [
                'name' => 'Chung cư 5',
                'address' => 'Hà Nội',
                'price' => 30000000,
                'general_Information' => 'Chung cư đẹp',
                'description' => 'Rất rộng rãi',
                'image' => 'http://cafef.vcmedia.vn/k:2015/1-0-can-ho-chung-cu-95m2-xala-ha-dong-1-1442286468928/ngam-nhung-thiet-ke-chung-cu-dep-lung-linh.jpg',

            ],
            [
                'name' => 'Chung cư 6',
                'address' => 'Hà Nội',
                'price' => 30000000,
                'general_Information' => 'Chung cư đẹp',
                'description' => 'Rất rộng rãi',
                'image' => 'http://cafef.vcmedia.vn/k:2015/1-0-can-ho-chung-cu-95m2-xala-ha-dong-1-1442286468928/ngam-nhung-thiet-ke-chung-cu-dep-lung-linh.jpg',

            ],
            [
                'name' => 'Chung cư 7',
                'address' => 'Hà Nội',
                'price' => 30000000,
                'general_Information' => 'Chung cư đẹp',
                'description' => 'Rất rộng rãi',
                'image' => 'http://cafef.vcmedia.vn/k:2015/1-0-can-ho-chung-cu-95m2-xala-ha-dong-1-1442286468928/ngam-nhung-thiet-ke-chung-cu-dep-lung-linh.jpg',

            ],
            [
                'name' => 'Chung cư 8',
                'address' => 'Hà Nội',
                'price' => 30000000,
                'general_Information' => 'Chung cư đẹp',
                'description' => 'Rất rộng rãi',
                'image' => 'http://cafef.vcmedia.vn/k:2015/1-0-can-ho-chung-cu-95m2-xala-ha-dong-1-1442286468928/ngam-nhung-thiet-ke-chung-cu-dep-lung-linh.jpg',

            ],
            [
                'name' => 'Chung cư 9',
                'address' => 'Hà Nội',
                'price' => 30000000,
                'general_Information' => 'Chung cư đẹp',
                'description' => 'Rất rộng rãi',
                'image' => 'http://cafef.vcmedia.vn/k:2015/1-0-can-ho-chung-cu-95m2-xala-ha-dong-1-1442286468928/ngam-nhung-thiet-ke-chung-cu-dep-lung-linh.jpg',

            ],
            [
                'name' => 'Chung cư 10',
                'address' => 'Hà Nội',
                'price' => 30000000,
                'general_Information' => 'Chung cư đẹp',
                'description' => 'Rất rộng rãi',
                'image' => 'http://cafef.vcmedia.vn/k:2015/1-0-can-ho-chung-cu-95m2-xala-ha-dong-1-1442286468928/ngam-nhung-thiet-ke-chung-cu-dep-lung-linh.jpg',

            ],
            [
                'name' => 'Chung cư 11',
                'address' => 'Hà Nội',
                'price' => 30000000,
                'general_Information' => 'Chung cư đẹp',
                'description' => 'Rất rộng rãi',
                'image' => 'http://cafef.vcmedia.vn/k:2015/1-0-can-ho-chung-cu-95m2-xala-ha-dong-1-1442286468928/ngam-nhung-thiet-ke-chung-cu-dep-lung-linh.jpg',

            ],
            [
                'name' => 'Chung cư 12',
                'address' => 'Hà Nội',
                'price' => 30000000,
                'general_Information' => 'Chung cư đẹp',
                'description' => 'Rất rộng rãi',
                'image' => 'http://cafef.vcmedia.vn/k:2015/1-0-can-ho-chung-cu-95m2-xala-ha-dong-1-1442286468928/ngam-nhung-thiet-ke-chung-cu-dep-lung-linh.jpg',

            ],
            [
                'name' => 'Chung cư 13',
                'address' => 'Hà Nội',
                'price' => 30000000,
                'general_Information' => 'Chung cư đẹp',
                'description' => 'Rất rộng rãi',
                'image' => 'http://cafef.vcmedia.vn/k:2015/1-0-can-ho-chung-cu-95m2-xala-ha-dong-1-1442286468928/ngam-nhung-thiet-ke-chung-cu-dep-lung-linh.jpg',

            ],
            [
                'name' => 'Chung cư 14',
                'address' => 'Hà Nội',
                'price' => 30000000,
                'general_Information' => 'Chung cư đẹp',
                'description' => 'Rất rộng rãi',
                'image' => 'http://cafef.vcmedia.vn/k:2015/1-0-can-ho-chung-cu-95m2-xala-ha-dong-1-1442286468928/ngam-nhung-thiet-ke-chung-cu-dep-lung-linh.jpg',

            ],
            [
                'name' => 'Chung cư 15',
                'address' => 'Hà Nội',
                'price' => 30000000,
                'general_Information' => 'Chung cư đẹp',
                'description' => 'Rất rộng rãi',
                'image' => 'http://cafef.vcmedia.vn/k:2015/1-0-can-ho-chung-cu-95m2-xala-ha-dong-1-1442286468928/ngam-nhung-thiet-ke-chung-cu-dep-lung-linh.jpg',

            ],
            [
                'name' => 'Chung cư 16',
                'address' => 'Hà Nội',
                'price' => 30000000,
                'general_Information' => 'Chung cư đẹp',
                'description' => 'Rất rộng rãi',
                'image' => 'http://cafef.vcmedia.vn/k:2015/1-0-can-ho-chung-cu-95m2-xala-ha-dong-1-1442286468928/ngam-nhung-thiet-ke-chung-cu-dep-lung-linh.jpg',

            ],
            [
                'name' => 'Chung cư 17',
                'address' => 'Hà Nội',
                'price' => 30000000,
                'general_Information' => 'Chung cư đẹp',
                'description' => 'Rất rộng rãi',
                'image' => 'http://cafef.vcmedia.vn/k:2015/1-0-can-ho-chung-cu-95m2-xala-ha-dong-1-1442286468928/ngam-nhung-thiet-ke-chung-cu-dep-lung-linh.jpg',

            ],
            [
                'name' => 'Chung cư 18',
                'address' => 'Hà Nội',
                'price' => 30000000,
                'general_Information' => 'Chung cư đẹp',
                'description' => 'Rất rộng rãi',
                'image' => 'http://cafef.vcmedia.vn/k:2015/1-0-can-ho-chung-cu-95m2-xala-ha-dong-1-1442286468928/ngam-nhung-thiet-ke-chung-cu-dep-lung-linh.jpg',

            ],
            [
                'name' => 'Chung cư 19',
                'address' => 'Hà Nội',
                'price' => 30000000,
                'general_Information' => 'Chung cư đẹp',
                'description' => 'Rất rộng rãi',
                'image' => 'http://cafef.vcmedia.vn/k:2015/1-0-can-ho-chung-cu-95m2-xala-ha-dong-1-1442286468928/ngam-nhung-thiet-ke-chung-cu-dep-lung-linh.jpg',

            ],
            [
                'name' => 'Chung cư 20',
                'address' => 'Hà Nội',
                'price' => 30000000,
                'general_Information' => 'Chung cư đẹp',
                'description' => 'Rất rộng rãi',
                'image' => 'http://cafef.vcmedia.vn/k:2015/1-0-can-ho-chung-cu-95m2-xala-ha-dong-1-1442286468928/ngam-nhung-thiet-ke-chung-cu-dep-lung-linh.jpg',

            ],
        ]);
    }
}
