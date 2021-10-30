<?php

use Illuminate\Support\Facades\Route;


//*********************************************************************************************************//
//cart --> 


Route::group(['middleware' => 'auth.user'], function() {

	   Route::get('add-cart/{id}','cartController@addcart')->name('addCart');
       Route::get('show-cart','cartController@index')->name('show.cart');
       Route::get('delete-cart-item/{id}','cartController@delete')->name('delete.cart');


       //peyment -->
       Route::get('stripe', 'StripeController@stripe');
       Route::post('payment', 'StripeController@payStripe');

   //**********************************************************************************************//
      //order --> 
       Route::get('payment_index','orderController@index')->name('payment.index');
       Route::post('shipping_store','orderController@shippingStore')->name('shipping.store');
       Route::post('payment_index_check','orderController@paymentCheck')->name('payment.index.check');
      
    
});





?>