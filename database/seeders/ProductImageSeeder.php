<?php

namespace Database\Seeders;

use App\Models\ProductImage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $productImages = [
            [
                'product_id' => 14,
                'image_path' => asset('/product_images/furniture.jpg')
            ],
            [
                'product_id' => 9,
                'image_path' => asset('/product_images/furniture1.jpg')
            ],
            [
                'product_id' => 8,
                'image_path' => asset('/product_images/furniture2.jpg')
            ],
            [
                'product_id' => 11,
                'image_path' => asset('/product_images/shirt1.avif')
            ],
            [
                'product_id' => 3,
                'image_path' => asset('/product_images/tshirt.avif')
            ],
            [
                'product_id' => 4,
                'image_path' => asset('/product_images/wtshirt.avif')
            ],
            [
                'product_id' => 6,
                'image_path' => asset('/product_images/wtshirt1.avif')
            ],
            [
                'product_id' => 7,
                'image_path' => asset('/product_images/wtshirt2.avif')
            ],
            [
                'product_id' => 17,
                'image_path' => asset('/product_images/wjeans.webp')
            ],
            [
                'product_id' => 18,
                'image_path' => asset('/product_images/wjeans.webp')
            ],
            [
                'product_id' => 20,
                'image_path' => asset('/product_images/wjeans.webp')
            ],
            [
                'product_id' => 2,
                'image_path' => asset('/product_images/game.webp')
            ],
            [
                'product_id' => 16,
                'image_path' => asset('/product_images/gaming.webp')
            ],
            [
                'product_id' => 15,
                'image_path' => asset('/product_images/gamingremote.webp')
            ],
            [
                'product_id' => 1,
                'image_path' => asset('/product_images/pexels-alexandra-maria-336372.jpg')
            ],
            [
                'product_id' => 10,
                'image_path' => asset('/product_images/pexels-mnz-1598505.jpg')
            ],
            [
                'product_id' => 12,
                'image_path' => asset('/product_images/pexels-web-donut-19090.jpg')
            ],
            [
                'product_id' => 13,
                'image_path' => asset('/product_images/pexels-mnz-1598505.jpg')
            ],
            [
                'product_id' => 5,
                'image_path' => asset('/product_images/pexels-melvin-buezo-2529148.jpg')
            ],
            [
                'product_id' => 19,
                'image_path' => asset('/product_images/pexels-mnz-1598505.jpg')
            ],
        ];

        foreach ($productImages as $productImage) {
            ProductImage::create($productImage);
        }
    }
}
