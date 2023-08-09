<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TemporarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Example::insert([
        //     'id' => 1,
        //     'name' => 'Super Admin',
        //     'description' => 'Super Admin has all access to do.',
        //     'created_at' => '2023-08-06 15:50:06',
        //     'updated_at' => '2023-08-06 15:50:06',
        // ]);


        Category::insert([
            [
                'id' => 1,
                'name' => 'Grocery',
                'description' => 'Day to day life needed grocery items.',
                'image' => 'https://media-cldnry.s-nbcnews.com/image/upload/t_fit-760w,f_auto,q_auto:best/rockcms/2021-12/211213-wee-groceries-se-405p-a36212.jpg',
                'approved_by' => 1,
                'created_at' => '2023-08-06 15:45:54',
                'updated_at' => '2023-08-06 15:45:54',
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
            ],
            [
                'id' => 2,
                'name' => 'Fashion & Clothing',
                'description' => 'Find the latest fashion trends and stylish clothing items.',
                'image' => 'https://www.sbs-zipper.com/blog/wp-content/uploads/2019/10/orange-line-shop-store-red-color-633917-pxhere.com_-678x381.jpg',
                'approved_by' => 1,
                'created_at' => '2023-08-06 15:45:54',
                'updated_at' => '2023-08-06 15:45:54',
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
            ],
        ]);


        Subcategory::insert([
            [
                'id' => 1,
                'name' => 'Vegetables',
                'description' => 'Vegetables Subcategory Under Grocery Category',
                'image' => 'https://media.istockphoto.com/id/1280856062/photo/variety-of-fresh-organic-vegetables-and-fruits-in-the-garden.jpg?s=612x612&w=0&k=20&c=KoF5Ue-g3wO3vXPgLw9e2Qzf498Yow7WGXMSCNz7O60=',
                'category_id' => 1,
                'approved_by' => 1,
                'created_at' => '2023-08-06 16:17:56',
                'updated_at' => '2023-08-06 16:17:56',
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
            ],
            [
                'id' => 2,
                'name' => 'Men\'s Collection',
                'description' => 'Men\'s Collection Subcategory Under Fashion & Clothing Category',
                'image' => 'https://media.istockphoto.com/id/1293366109/photo/this-one-match-perfect-with-me.jpg?s=612x612&w=0&k=20&c=wJ6yYbRrDfdmoViuQkX39s2z_0lCiNQYgEtLU--0EbY=',
                'category_id' => 2,
                'approved_by' => 1,
                'created_at' => '2023-08-06 16:17:56',
                'updated_at' => '2023-08-06 16:17:56',
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
            ],
            [
                'id' => 3,
                'name' => 'Women\'s Outfit',
                'description' => 'Women\'s Outfit Subcategory Under Fashion & Clothing Category',
                'image' => 'https://www.greenqueen.com.hk/wp-content/uploads/2021/07/Rental-Fashion-Causes-More-Emissions-Than-Throwing-Clothes-Away.jpg',
                'category_id' => 2,
                'approved_by' => 1,
                'created_at' => '2023-08-06 16:21:17',
                'updated_at' => '2023-08-06 16:21:17',
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
            ],
            [
                'id' => 4,
                'name' => 'Snacks',
                'description' => 'Snacks Subcategory Under Grocery Category',
                'image' => 'https://st4.depositphotos.com/14670260/25438/i/450/depositphotos_254385562-stock-photo-salty-snacks-pretzels-chips-crackers.jpg',
                'category_id' => 1,
                'approved_by' => 1,
                'created_at' => '2023-08-06 16:21:17',
                'updated_at' => '2023-08-06 16:21:17',
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
            ],
        ]);

        Brand::insert([
            [
                'id' => 1,
                'name' => 'Gucci',
                'description' => 'Gucci is a fashion brand for women\'s outfit.',
                'image' => 'https://www.waterfront.co.za/wp-content/uploads/2018/05/gucci.jpg',
                'address' => 'Somewhere in the world',
                'stock_in' => 0,
                'stock_out' => 0,
                'stock_available' => 0,
                'sold_stock' => 0,
                'damage_stock' => 0,
                'other_stock_out' => 0,
                'total_rate' => 0,
                'total_rated_person' => 0,
                'approved_by' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => 1,
            ],
            [
                'id' => 2,
                'name' => 'Lays',
                'description' => 'Lays is a chips brand for snacks item.',
                'image' => 'https://logos-world.net/wp-content/uploads/2020/12/Lays-Logo-2019-present.jpg',
                'address' => 'Somewhere in Banglades',
                'stock_in' => 0,
                'stock_out' => 0,
                'stock_available' => 0,
                'sold_stock' => 0,
                'damage_stock' => 0,
                'other_stock_out' => 0,
                'total_rate' => 0,
                'total_rated_person' => 0,
                'approved_by' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => 1,
            ],
            [
                'id' => 3,
                'name' => 'Rayban',
                'description' => 'Rayban is a sunglass brand for Men\'s Item.',
                'image' => 'https://1000logos.net/wp-content/uploads/2020/07/Ray-Ban-Logo.png',
                'address' => 'Somewhere in Banglades',
                'stock_in' => 0,
                'stock_out' => 0,
                'stock_available' => 0,
                'sold_stock' => 0,
                'damage_stock' => 0,
                'other_stock_out' => 0,
                'total_rate' => 0,
                'total_rated_person' => 0,
                'approved_by' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => 1,
            ]

        ]);
    }
}
