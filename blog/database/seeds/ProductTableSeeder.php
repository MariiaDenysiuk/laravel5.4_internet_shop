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
            'imagePath'=>'images/shop/th01.jpg',
            'imagePath1'=>'images/shop/th01.jpg',
            'imagePath2'=>'images/shop/th01.jpg',
            'title'=>'Storage Box',
            'description'=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam hic totam, tempore quos dicta voluptate tempora ex voluptatum amet, veniam assumenda magnam eveniet eius reiciendis, ab necessitatibus quis iure libero. Alias commodi aspernatur quo illo dolor voluptatem animi ipsum laudantium similique blanditiis, molestias facilis vitae harum minima obcaecati corrupti quibusdam minus modi.",
            'price'=>38,
            'weight'=>'2.65 kg',
            'dimensions'=>'120 x 75 x 90 cm',
            'materials'=>'40% wood, 37% cotton, 23% plastic',
            'manufacturer'=>'Norway',
            'otherInfo'=>'Repellendus ea laudantium pariatur eum.',
            'category_id'=>1
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath'=>'images/shop/th02.jpg',
            'imagePath1'=>'images/shop/th02.jpg',
            'imagePath2'=>'images/shop/th02.jpg',
            'title'=>'Shoulder Bag',
            'description'=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam hic totam, tempore quos dicta voluptate tempora ex voluptatum amet, veniam assumenda magnam eveniet eius reiciendis, ab necessitatibus quis iure libero. Alias commodi aspernatur quo illo dolor voluptatem animi ipsum laudantium similique blanditiis, molestias facilis vitae harum minima obcaecati corrupti quibusdam minus modi.",
            'price'=>125,
            'weight'=>'2.65 kg',
            'dimensions'=>'120 x 75 x 90 cm',
            'materials'=>'40% wood, 37% cotton, 23% plastic',
            'manufacturer'=>'Norway',
            'otherInfo'=>'Repellendus ea laudantium pariatur eum.',
            'category_id'=>2

        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath'=>'images/shop/th03.jpg',
            'imagePath1'=>'images/shop/th03.jpg',
            'imagePath2'=>'images/shop/th03.jpg',
            'title'=>'Glass Vase',
            'description'=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam hic totam, tempore quos dicta voluptate tempora ex voluptatum amet, veniam assumenda magnam eveniet eius reiciendis, ab necessitatibus quis iure libero. Alias commodi aspernatur quo illo dolor voluptatem animi ipsum laudantium similique blanditiis, molestias facilis vitae harum minima obcaecati corrupti quibusdam minus modi.",
            'price'=>62.50,
            'weight'=>'2.65 kg',
            'dimensions'=>'120 x 75 x 90 cm',
            'materials'=>'40% wood, 37% cotton, 23% plastic',
            'manufacturer'=>'Norway',
            'otherInfo'=>'Repellendus ea laudantium pariatur eum.',
            'category_id'=>3
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath'=>'images/shop/th04.jpg',
            'imagePath1'=>'images/shop/th04.jpg',
            'imagePath2'=>'images/shop/th04.jpg',
            'title'=>'Alarm Clock',
            'description'=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam hic totam, tempore quos dicta voluptate tempora ex voluptatum amet, veniam assumenda magnam eveniet eius reiciendis, ab necessitatibus quis iure libero. Alias commodi aspernatur quo illo dolor voluptatem animi ipsum laudantium similique blanditiis, molestias facilis vitae harum minima obcaecati corrupti quibusdam minus modi.",
            'price'=>178,
            'weight'=>'2.65 kg',
            'dimensions'=>'120 x 75 x 90 cm',
            'materials'=>'40% wood, 37% cotton, 23% plastic',
            'manufacturer'=>'Norway',
            'otherInfo'=>'Repellendus ea laudantium pariatur eum.',
            'category_id'=>4
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath'=>'images/shop/th05.jpg',
            'imagePath1'=>'images/shop/th05.jpg',
            'imagePath2'=>'images/shop/th05.jpg',
            'title'=>'Wall Clock',
            'description'=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam hic totam, tempore quos dicta voluptate tempora ex voluptatum amet, veniam assumenda magnam eveniet eius reiciendis, ab necessitatibus quis iure libero. Alias commodi aspernatur quo illo dolor voluptatem animi ipsum laudantium similique blanditiis, molestias facilis vitae harum minima obcaecati corrupti quibusdam minus modi.",
            'price'=>69,
            'weight'=>'2.65 kg',
            'dimensions'=>'120 x 75 x 90 cm',
            'materials'=>'40% wood, 37% cotton, 23% plastic',
            'manufacturer'=>'Norway',
            'otherInfo'=>'Repellendus ea laudantium pariatur eum.',
            'category_id'=>1
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath'=>'images/shop/th06.jpg',
            'imagePath1'=>'images/shop/th06.jpg',
            'imagePath2'=>'images/shop/th06.jpg',
            'title'=>'LED Lighting',
            'description'=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam hic totam, tempore quos dicta voluptate tempora ex voluptatum amet, veniam assumenda magnam eveniet eius reiciendis, ab necessitatibus quis iure libero. Alias commodi aspernatur quo illo dolor voluptatem animi ipsum laudantium similique blanditiis, molestias facilis vitae harum minima obcaecati corrupti quibusdam minus modi.",
            'price'=>130,
            'weight'=>'2.65 kg',
            'dimensions'=>'120 x 75 x 90 cm',
            'materials'=>'40% wood, 37% cotton, 23% plastic',
            'manufacturer'=>'Norway',
            'otherInfo'=>'Repellendus ea laudantium pariatur eum.',
            'category_id'=>2
        ]);

        $product = new \App\Product([
            'imagePath'=>'images/shop/th07.jpg',
            'imagePath1'=>'images/shop/th07.jpg',
            'imagePath2'=>'images/shop/th07.jpg',
            'title'=>'Sunglasses',
            'description'=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam hic totam, tempore quos dicta voluptate tempora ex voluptatum amet, veniam assumenda magnam eveniet eius reiciendis, ab necessitatibus quis iure libero. Alias commodi aspernatur quo illo dolor voluptatem animi ipsum laudantium similique blanditiis, molestias facilis vitae harum minima obcaecati corrupti quibusdam minus modi.",
            'price'=>99,
            'weight'=>'2.65 kg',
            'dimensions'=>'120 x 75 x 90 cm',
            'materials'=>'40% wood, 37% cotton, 23% plastic',
            'manufacturer'=>'Norway',
            'otherInfo'=>'Repellendus ea laudantium pariatur eum.',
            'category_id'=>3
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath'=>'images/shop/th08.jpg',
            'imagePath1'=>'images/shop/th08.jpg',
            'imagePath2'=>'images/shop/th08.jpg',
            'title'=>'Hook Basket',
            'description'=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam hic totam, tempore quos dicta voluptate tempora ex voluptatum amet, veniam assumenda magnam eveniet eius reiciendis, ab necessitatibus quis iure libero. Alias commodi aspernatur quo illo dolor voluptatem animi ipsum laudantium similique blanditiis, molestias facilis vitae harum minima obcaecati corrupti quibusdam minus modi.",
            'price'=>112.35,
            'weight'=>'2.65 kg',
            'dimensions'=>'120 x 75 x 90 cm',
            'materials'=>'40% wood, 37% cotton, 23% plastic',
            'manufacturer'=>'Norway',
            'otherInfo'=>'Repellendus ea laudantium pariatur eum.',
            'category_id'=>4
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath'=>'images/shop/th09.jpg',
            'imagePath1'=>'images/shop/th09.jpg',
            'imagePath2'=>'images/shop/th09.jpg',
            'title'=>'Leather Case',
            'description'=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam hic totam, tempore quos dicta voluptate tempora ex voluptatum amet, veniam assumenda magnam eveniet eius reiciendis, ab necessitatibus quis iure libero. Alias commodi aspernatur quo illo dolor voluptatem animi ipsum laudantium similique blanditiis, molestias facilis vitae harum minima obcaecati corrupti quibusdam minus modi.",
            'price'=>118,
            'weight'=>'2.65 kg',
            'dimensions'=>'120 x 75 x 90 cm',
            'materials'=>'40% wood, 37% cotton, 23% plastic',
            'manufacturer'=>'Norway',
            'otherInfo'=>'Repellendus ea laudantium pariatur eum.',
            'category_id'=>1
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath'=>'images/shop/th10.jpg',
            'imagePath1'=>'images/shop/th10.jpg',
            'imagePath2'=>'images/shop/th10.jpg',
            'title'=>'Concrete Lamp',
            'description'=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam hic totam, tempore quos dicta voluptate tempora ex voluptatum amet, veniam assumenda magnam eveniet eius reiciendis, ab necessitatibus quis iure libero. Alias commodi aspernatur quo illo dolor voluptatem animi ipsum laudantium similique blanditiis, molestias facilis vitae harum minima obcaecati corrupti quibusdam minus modi.",
            'price'=>85.90,
            'weight'=>'2.65 kg',
            'dimensions'=>'120 x 75 x 90 cm',
            'materials'=>'40% wood, 37% cotton, 23% plastic',
            'manufacturer'=>'Norway',
            'otherInfo'=>'Repellendus ea laudantium pariatur eum.',
            'category_id'=>2
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath'=>'images/shop/product-gallery/preview01.jpg',
            'imagePath1'=>'images/shop/product-gallery/preview02.jpg',
            'imagePath2'=>'images/shop/product-gallery/preview03.jpg',
            'title'=>'Stylish Chair',
            'description'=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam hic totam, tempore quos dicta voluptate tempora ex voluptatum amet, veniam assumenda magnam eveniet eius reiciendis, ab necessitatibus quis iure libero. Alias commodi aspernatur quo illo dolor voluptatem animi ipsum laudantium similique blanditiis, molestias facilis vitae harum minima obcaecati corrupti quibusdam minus modi.",
            'price'=>417,
            'weight'=>'2.65 kg',
            'dimensions'=>'120 x 75 x 90 cm',
            'materials'=>'40% wood, 37% cotton, 23% plastic',
            'manufacturer'=>'Norway',
            'otherInfo'=>'Repellendus ea laudantium pariatur eum.',
            'category_id'=>3
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath'=>'images/shop/th12.jpg',
            'imagePath1'=>'images/shop/th12.jpg',
            'imagePath2'=>'images/shop/th12.jpg',
            'title'=>'Tissue Holder',
            'description'=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam hic totam, tempore quos dicta voluptate tempora ex voluptatum amet, veniam assumenda magnam eveniet eius reiciendis, ab necessitatibus quis iure libero. Alias commodi aspernatur quo illo dolor voluptatem animi ipsum laudantium similique blanditiis, molestias facilis vitae harum minima obcaecati corrupti quibusdam minus modi.",
            'price'=>76.40,
            'weight'=>'2.65 kg',
            'dimensions'=>'120 x 75 x 90 cm',
            'materials'=>'40% wood, 37% cotton, 23% plastic',
            'manufacturer'=>'Norway',
            'otherInfo'=>'Repellendus ea laudantium pariatur eum.',
            'category_id'=>4
        ]);

        $product = new \App\Product([
            'imagePath'=>'images/shop/th13.jpg',
            'imagePath1'=>'images/shop/th13.jpg',
            'imagePath2'=>'images/shop/th13.jpg',
            'title'=>'Storage Jar',
            'description'=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam hic totam, tempore quos dicta voluptate tempora ex voluptatum amet, veniam assumenda magnam eveniet eius reiciendis, ab necessitatibus quis iure libero. Alias commodi aspernatur quo illo dolor voluptatem animi ipsum laudantium similique blanditiis, molestias facilis vitae harum minima obcaecati corrupti quibusdam minus modi.",
            'price'=>19.80,
            'weight'=>'2.65 kg',
            'dimensions'=>'120 x 75 x 90 cm',
            'materials'=>'40% wood, 37% cotton, 23% plastic',
            'manufacturer'=>'Norway',
            'otherInfo'=>'Repellendus ea laudantium pariatur eum.',
            'category_id'=>1
        ]);

        $product = new \App\Product([
            'imagePath'=>'images/shop/th14.jpg',
            'imagePath1'=>'images/shop/th14.jpg',
            'imagePath2'=>'images/shop/th14.jpg',
            'title'=>'Ceramic Watch',
            'description'=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam hic totam, tempore quos dicta voluptate tempora ex voluptatum amet, veniam assumenda magnam eveniet eius reiciendis, ab necessitatibus quis iure libero. Alias commodi aspernatur quo illo dolor voluptatem animi ipsum laudantium similique blanditiis, molestias facilis vitae harum minima obcaecati corrupti quibusdam minus modi.",
            'price'=>299,
            'weight'=>'2.65 kg',
            'dimensions'=>'120 x 75 x 90 cm',
            'materials'=>'40% wood, 37% cotton, 23% plastic',
            'manufacturer'=>'Norway',
            'otherInfo'=>'Repellendus ea laudantium pariatur eum.',
            'category_id'=>2
        ]);

        $product = new \App\Product([
            'imagePath'=>'images/shop/th15.jpg',
            'imagePath1'=>'images/shop/th15.jpg',
            'imagePath2'=>'images/shop/th15.jpg',
            'title'=>'Pendant Lamp',
            'description'=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam hic totam, tempore quos dicta voluptate tempora ex voluptatum amet, veniam assumenda magnam eveniet eius reiciendis, ab necessitatibus quis iure libero. Alias commodi aspernatur quo illo dolor voluptatem animi ipsum laudantium similique blanditiis, molestias facilis vitae harum minima obcaecati corrupti quibusdam minus modi.",
            'price'=>27,
            'weight'=>'2.65 kg',
            'dimensions'=>'120 x 75 x 90 cm',
            'materials'=>'40% wood, 37% cotton, 23% plastic',
            'manufacturer'=>'Norway',
            'otherInfo'=>'Repellendus ea laudantium pariatur eum.',
            'category_id'=>3
        ]);

        $product->save();
    }
}
