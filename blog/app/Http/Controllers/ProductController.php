<?php

namespace App\Http\Controllers;
use App\Product;
use App\Cart;
use App\Order;
use Illuminate\Http\Request;
use Session;
use Auth;
use Illuminate\Support\Facades\DB;
use Stripe\Stripe;
use Stripe\Charge;

class ProductController extends Controller
{
    public function getIndex(Request $request)
    {
        $products = DB::table('products')
            ->join('categories', 'categories.id', '=', 'products.category_id')
            ->select('products.id', 'products.imagePath', 'products.title', 'products.price', 'products.category_id' )
            ->get();
        $countAll = DB::table('products')->count();
        $countFurniture = DB::table('products')
            ->join('categories', 'categories.id', '=', 'products.category_id')
            ->where('categories.name', '=', 'furniture')->count();
        $countAccessories = DB::table('products')
            ->join('categories', 'categories.id', '=', 'products.category_id')
            ->where('categories.name', '=', 'accessories')->count();
        $countLightning = DB::table('products')
            ->join('categories', 'categories.id', '=', 'products.category_id')
            ->where('categories.name', '=', 'lightning')->count();
        $countClocks = DB::table('products')
            ->join('categories', 'categories.id', '=', 'products.category_id')
            ->where('categories.name', '=', 'clocks')->count();
        if(!$request->session()->has('cart')) {
            return view('shop.index', ['products' => $products,
                'countAll'=>$countAll,
                'countFurniture'=>$countFurniture,
                'countAccessories'=>$countAccessories,
                'countLightning'=>$countLightning,
                'countClocks'=>$countClocks,
                'products_cart' => null]);
        }
        return view('shop.index', ['products' => $products,'countAll'=>$countAll,
            'countFurniture'=>$countFurniture,
            'countAccessories'=>$countAccessories,
            'countLightning'=>$countLightning,
            'countClocks'=>$countClocks,
          ]);
    }


    public function getSinglePage($id, $category)
    {
        $singlePage = Product::find($id);
        $products_cat = DB::table('products')
            ->join('categories', 'categories.id', '=', 'products.category_id')
            ->select('products.id', 'products.imagePath', 'products.title', 'products.price', 'products.category_id')
            ->where('products.id', '!=', $id)
            ->where('categories.id', '=', $category)
            ->get();
        return view('shop.single-page.single-page',['singlePage'=>$singlePage, 'products_cat'=> $products_cat]);
    }


    public function getAddToCart(Request $request, $id, $quantity)
    {
        $product = Product::find($id);
        $oldCart = $request->session()->has('cart')? $request->session()->get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id, $quantity);
        $request->session()->put('cart', $cart);
//        return redirect()->route('product.index');
        return view('partials.cart', ['products_cart'=> $cart->items,
             'totalPrice'=>$cart->totalPrice]);
    }

    public function getReduceByOne(Request $request, $id){
        $oldCart = $request->session()->has('cart')? $request->session()->get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->reduceByOne($id);
        if(count($cart->items) > 0) {
            $request->session()->put('cart', $cart);
        } else {
            $request->session()->forget('cart');
        }
        return  $cart;
    }

    public function getAddByOne(Request $request, $id){
        $oldCart = $request->session()->has('cart')? $request->session()->get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->addByOne($id);
        $request->session()->put('cart', $cart);
        return $cart;
    }

    public function getRemoveItem(Request $request, $id){
        $oldCart = $request->session()->has('cart')? $request->session()->get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);

        if(count($cart->items) > 0) {
            $request->session()->put('cart', $cart);
        } else {
            $request->session()->forget('cart');
        }
        $request->session()->put('cart', $cart);
        return $cart;
    }

    public function getCart(Request $request){
        if(!$request->session()->has('cart')) {
            return view('shop.index', ['products_cart' => null]);
        }
        $oldCart = $request->session()->get('cart');
        $cart = new Cart($oldCart);
         return view('shop.index', ['products_cart'=> $cart->items,
             'totalPrice'=>$cart->totalPrice]);
    }

    public function getCheckout(Request $request){
        if(!$request->session()->has('cart')) {
            return view('shop.shopping-cart', ['products' => null]);
        }
        $oldCart = $request->session()->get('cart');
        $cart = new Cart($oldCart);
        $total= $cart->totalPrice;
        return view('shop.checkout', ['total'=>$total]);
    }

    public function postCheckout(Request $request){
        if(!$request->session()->has('cart')) {
            return '';
        }
        $oldCart = $request->session()->get('cart');
        $cart = new Cart($oldCart);
       Stripe::setApiKey('sk_test_VfU6u3azK2DDSSl0sD8W1iPZ');
       try{
           $charge = Charge::create(array(
               "amount" => $cart->totalPrice *100,
               "currency" => "usd",
               "source" => $request->token,
               "description" => "Test Charge"
           ));
           $order = new Order();
           $order->cart = serialize($cart);
           $order->address = $request->address;
           $order->name = $request->name;
           $order->payment_id = $charge->id;

           Auth::user()->orders()->save($order);
       } catch(\Exception $e) {
           $request->session()->flash('flash_message', $e->getMessage());
           return $e->getMessage();
       }
        $request->session()->forget('cart');
        $request->session()->flash('flash_message', 'All ok bb;-)');
       return 'Successfully purchased';
    }
}
