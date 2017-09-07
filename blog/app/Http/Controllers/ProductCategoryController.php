<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Support\Facades\DB;

class ProductCategoryController extends Controller
{
    public function getProductCategory($category)
    {
        if($category == 'all'){
            $products_cat = Product::all();
        } else {
            $products_cat = DB::table('products')
                ->join('categories', 'categories.id', '=', 'products.category_id')
                ->select('products.id', 'products.imagePath', 'products.title', 'products.price', 'products.category_id')
                ->where('categories.name', '=', $category)
                ->get();
        }
        return view('shop.product-list', ['products' => $products_cat]);
    }

    public function getProductCategoryAtr($category, $atr)
    {
        if($category == 'all'){
            $products_cat = DB::table('products')
            ->join('categories', 'categories.id', '=', 'products.category_id')
                ->join('product_options', 'products.id', '=', 'product_options.product_id')
                ->join('options', 'product_options.options_id', '=', 'options.options_id')
                ->join('options_group', 'options.options_group_id', '=', 'options_group.options_group_id')
                ->select('products.id', 'products.imagePath', 'products.title', 'products.price',  'products.category_id')
                ->where('options.options_name', '=', $atr)
                ->get();
        } else {
            $products_cat = DB::table('products')
                ->join('categories', 'categories.id', '=', 'products.category_id')
                ->join('product_options', 'products.id', '=', 'product_options.product_id')
                ->join('options', 'product_options.options_id', '=', 'options.options_id')
                ->join('options_group', 'options.options_group_id', '=', 'options_group.options_group_id')
                ->select('products.id', 'products.imagePath', 'products.title', 'products.price',  'products.category_id')
                ->where('categories.name', '=', $category)
                ->where('options.options_name', '=', $atr)
                ->get();
        }

        return view('shop.product-list', ['products' => $products_cat]);
    }


    public function getProductPrice($category, $atr, $price1, $price2)
    {
        if($category == "all" && $atr == "all"){
            $products_cat = DB::table('products')
                ->select('products.id', 'products.imagePath', 'products.title', 'products.price',  'products.category_id')
                ->whereBetween('price', [$price1, $price2])
                ->get();
        }

        if($category !=="all" && $atr !=="all") {
            $products_cat = DB::table('products')
                ->join('categories', 'categories.id', '=', 'products.category_id')
                ->join('product_options', 'products.id', '=', 'product_options.product_id')
                ->join('options', 'product_options.options_id', '=', 'options.options_id')
                ->select('products.id', 'products.imagePath', 'products.title', 'products.price',  'products.category_id')
                ->where('categories.name', '=', $category)
                ->where('options.options_name', '=', $atr)
                ->whereBetween('products.price', [$price1, $price2])
                ->get();
        }

        if($category !=="all" && $atr =="all") {
            $products_cat = DB::table('products')
                ->join('categories', 'categories.id', '=', 'products.category_id')
                ->select('products.id', 'products.imagePath', 'products.title', 'products.price', 'products.category_id')
                ->where('categories.name', '=', $category)
                ->whereBetween('products.price', [$price1, $price2])
                ->get();
        }

        if($category =="all" && $atr !=="all") {
            $products_cat = DB::table('products')
                ->join('categories', 'categories.id', '=', 'products.category_id')
                ->join('product_options', 'products.id', '=', 'product_options.product_id')
                ->join('options', 'product_options.options_id', '=', 'options.options_id')
                ->select('products.id', 'products.imagePath', 'products.title', 'products.price', 'products.category_id')
                ->where('options.options_name', '=', $atr)
                ->whereBetween('products.price', [$price1, $price2])
                ->get();
        }

        return view('shop.product-list', ['products' => $products_cat]);
    }
}
