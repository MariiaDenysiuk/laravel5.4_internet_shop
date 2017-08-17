<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'imagePath'=>'images/th04.jpg',
            'title'=>'title1',
            'description'=>"dss",
            'price'=>10
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath'=>'images/th05.jpg',
            'title'=>'title2',
            'description'=>"dss",
            'price'=>10
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath'=>'images/th06.jpg',
            'title'=>'title3',
            'description'=>"dss",
            'price'=>10
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath'=>'images/th04.jpg',
            'title'=>'title4',
            'description'=>"dss",
            'price'=>10
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath'=>'images/th05.jpg',
            'title'=>'title5',
            'description'=>"dss",
            'price'=>10
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath'=>'images/th06.jpg',
            'title'=>'title6',
            'description'=>"dss",
            'price'=>10
        ]);
        $product->save();
    }
}
