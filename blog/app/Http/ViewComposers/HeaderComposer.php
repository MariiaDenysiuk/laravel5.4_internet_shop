<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Cart;
use Illuminate\Http\Request;

class HeaderComposer
{
    /**
     * The user repository implementation.
     *
     * @var UserRepository
     */
    public $cart;
    public $request;

    /**
     * Create a new profile composer.
     *
     * @param  UserRepository  $users
     * @return void
     */
    public function __construct(Request $request)
    {
        // Dependencies automatically resolved by service container...
        $oldCart = $request->session()->get('cart');
        $this->cart = new Cart($oldCart);
        $this->request = $request;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        if(!$this->request->session()->has('cart')) {
            $view->with( 'products_cart',  null);
        }
        $view->with( 'products_cart', $this->cart->items)
            ->with('totalPrice', $this->cart->totalPrice);
    }
}