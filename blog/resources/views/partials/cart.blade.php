@if(Session::has('cart'))
        <div class="shopping-cart">
            <!-- Item -->
            @foreach($products_cart as $product_cart)
                <div class="item">
                    <a href="{{action('ProductController@getSinglePage',['id'=>$product_cart['item']['id'], 'category'=>$product_cart['item']['category_id']])}}" class="item-thumb">
                        <img src={{ asset($product_cart['item']['imagePath'])}} alt="Item">
                    </a>
                    <div class="item-details">
                        <h3 class="item-title"><a href="shop-single.html">{{ $product_cart['item']['title'] }}</a></h3>
                        <h4>$<span class="item-price">{{$product_cart['price']}}</span></h4>
                        <div class="count-input">
                            <a class="incr-btn" data-action="decrease" href="">–</a>

                            <input class="quantity" type="text" value="{{ Session::has('cart') ? Session::get('cart')->items[$product_cart['item']['id']]['qty'] : '0' }}">
                            <input class="quantity_hidden" type="hidden" value="{{$product_cart['item']['id']}}">
                            <input class="price_hidden" type="hidden" value="{{$product_cart['item']['price']}}">
                            <a class="incr-btn" data-action="increase" href="#">+</a>
                        </div>
                    </div>
                    <a href="#" class="item-remove" data-toggle="tooltip" data-placement="top" title="Remove">
                        <i class="material-icons remove_shopping_cart"></i>
                    </a>
                </div><!-- .item -->
        @endforeach
        <!-- Subtotal -->
            <div class="cart-subtotal space-bottom">
                <div class="column">
                    <h3 class="toolbar-title">Subtotal:</h3>
                </div>
                <div class="column">
                    <h3>$<span class="amount">{{ $totalPrice }}</span></h3>
                </div>
            </div><!-- .subtotal -->
            <!-- Buttons -->
            <div class="text-right">
                <a href="#" class="btn btn-default btn-ghost close-dropdown">Continue Shopping</a>
                <a href="#checkout" class="btn btn-primary waves-effect waves-light toggle-section proceed">Proceed to Checkout</a>
            </div>
        </div><!-- .shopping-cart -->
@else
        <div class="row no-items">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <h2>No Items in Cart</h2>
            </div>
        </div>
@endif

