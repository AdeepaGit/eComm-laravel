<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
          
        [  
        "name"=>"Apple iPhone 12", 
        "price"=> "599",
        "category"=> "iPhone",
        "description"=> "The iPhone 12 features a 6.1-inch (15 cm) display with Super Retina XDR OLED technology at a resolution of 2532 x 1170 pixels and a pixel density of about 460 ppi.",
        "gallery"=> "https://www.tradeinn.com/f/13809/138092048/apple-iphone-12-64gb-6.1.jpg"
        ],
        [  
            "name"=>"Galaxy S22 Ultra", 
            "price"=> "499",
            "category"=> "android",
            "description"=> "The phone sports a 6.8-inch AMOLED display with 120Hz refresh rate and support for HDR 10+. It has a peak brightness of 1750 nits",
            "gallery"=> "https://cdn.dxomark.com/wp-content/uploads/medias/post-112063/Samsung-Galaxy-S22-Ultra-Snapdragon_-featured-image-packshot-review-Recovered.jpg"
        ],  
        [  
        "name"=>"Galaxy A32 5G", 
        "price"=> "225",
        "category"=> "android",
        "description"=> "Samsung Galaxy A32 5G ; Display, Type ; Size, 6.5 inches, 102.0 cm2 (81.6% screen-to-body ratio) ; Resolution, 720 x 1600 pixels, 20:9 ratio (270 ppi density).",
        "gallery"=> "https://m.media-amazon.com/images/I/617QG2hQi9S.jpg"
        ] 
        ]);
    }
}
