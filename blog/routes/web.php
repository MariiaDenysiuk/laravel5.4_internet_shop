<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [
    'uses' => 'ProductController@getIndex',
    'as'=> 'product.index'
]);

Route::get('shop/single-page/single-page/{id}/{category}',
    'ProductController@getSinglePage');


Route::get('/add-to-cart/{id}/{quantity}', [
    'uses' => 'ProductController@getAddToCart',
    'as' => 'product.addToCart'
]);

Route::get('/add/{id}', [
    'uses' => 'ProductController@getAddByOne',
    'as' => 'product.addByOne'
]);

Route::get('/reduce/{id}', [
    'uses' => 'ProductController@getReduceByOne',
    'as'=>'product.reduceByOne'
]);

Route::get('/remove/{id}', [
    'uses'=> 'ProductController@getRemoveItem',
    'as'=> 'product.remove'
]);

Route::get('/shopping-cart/', [
    'uses' => 'ProductController@getCart',
    'as' => 'product.shoppingCart'
]);

Route::get('/checkout/', [
    'uses' => 'ProductController@getCheckout',
    'as' => 'checkout',
    'middleware' => 'auth'
]);

Route::post('/checkout', [
    'uses' => 'ProductController@postCheckout',
    'as' => 'checkout',
    'middleware' => 'auth'
]);



Route::get('/get-product-category/{category}', [
    'uses' => 'ProductCategoryController@getProductCategory',
    'as'=> 'product.category'
]);

Route::get('/get-product-category-atr/{category}/{atr?}', [
    'uses' => 'ProductCategoryController@getProductCategoryAtr',
    'as'=> 'product.category.atr'
]);

Route::get('/get-product-price/{category}/{atr}/{price1}/{price2}', [
    'uses' => 'ProductCategoryController@getProductPrice',
    'as'=> 'product.category.price'
]);


//Blog
Route::get('/blog', [
    'uses' => 'FrontController@getBlog',
    'as'=> 'blog.blog'
]);
Route::get('/blog/{id}', [
    'uses' => 'FrontController@getBlogSingle',
    'as'=> 'blog.single'
]);

Route::get('/gallery', [
    'uses' => 'FrontController@getGallery',
    'as'=> 'gallery.gallery'
]);

Route::get('/about', [
    'uses' => 'FrontController@getAbout',
    'as'=> 'about.about'
]);

Route::get('/contacts', [
    'uses' => 'FrontController@getContacts',
    'as'=> 'contacts.contacts'
]);

Route::get('/faq', [
    'uses' => 'FrontController@getFaq',
    'as'=> 'faq.faq'
]);


Route::group(['prefix'=>'user'], function(){

    Route::group(['middleware'=>'guest'], function(){
        Route::get('/signup', [
            'uses' => 'UserController@getSignup',
            'as'=> 'partials.signup'
        ]);

        Route::get('/signin', [
            'uses' => 'UserController@getSignin',
            'as'=> 'partials.signin'
        ]);

        Route::post('/signup', [
            'uses' => 'UserController@postSignup',
            'as'=> 'partials.signup'
        ]);

        Route::post('/signin', [
            'uses' => 'UserController@postSignin',
            'as'=> 'partials.signin'
        ]);

    });

    Route::group(['middleware'=>'auth'], function(){

        Route::get('/profile', [
            'uses' => 'UserController@getProfile',
            'as'=> 'user.profile'
        ]);

        Route::get('/logout', [
            'uses' => 'UserController@getLogout',
            'as'=> 'user.logout'
        ]);

    });
});


