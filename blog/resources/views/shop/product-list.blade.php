<section class="container padding-bottom-3x container-products">
    <div class="row">
        <!-- Item -->
        @foreach($products as $prod)
            <div class="col-md-4 col-sm-6">
                <div class="shop-item">
                    <div class="shop-thumbnail">
                        <span class="shop-label text-danger">Sale</span>
                        <input type="hidden" class="quantity numb" type="text" value="1">
                        <input type="hidden" class='absolute-path' value="{{asset('/')}}">
                        <a href="{{action('ProductController@getSinglePage',['id'=>$prod->id, 'category'=>$prod->category_id])}}" class="item-link"></a>
                        <img src="{{$prod->imagePath}}" alt="Shop item">
                        <div class="shop-item-tools">
                            <a href="#" class="add-to-whishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                <i class="material-icons favorite_border"></i>
                            </a>
                            <input type="hidden" class="item-id" value="{{$prod->id}}">
                                <a href="#add" class="add-to-cart">
                                    <em>Add to Cart</em>
                                    <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                                        <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"/>
                                    </svg>
                                </a>
                        </div>
                    </div>
                    <div class="shop-item-details">
                        <h3 class="shop-item-title"><a href="shop-single.html">{{$prod->title}}</a></h3>
                        <span class="shop-item-price">
                            <span class="old-price">$49.00</span>
                             ${{$prod->price}}
                            </span>
                    </div>
                </div><!-- .shop-item -->
            </div><!-- .col-md-4.col-sm-6 -->
        @endforeach
    </div><!-- .row -->

    <!-- Load More Btn -->
    <a href="#" class="load-more-btn space-top">Load More <sup>25</sup></a>
</section><!-- .container -->