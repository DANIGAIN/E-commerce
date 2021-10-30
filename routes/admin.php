<?php


use Illuminate\Support\Facades\Route;


Route::group(['middleware' => 'auth.admin'], function() {
    //

Route::get('admin_log_out','adminController@adminLogOut')->name('admin.logout');

Route::get('/main','adminController@admin_index');

//-------------------------------------------------------------------------------------------//
//brand -->
Route::get('brand_index','BrandController@brandIndex')->name('brand.index');
Route::get('brand_create', 'BrandController@create')->name('brand.create');
Route::post('brand_store','BrandController@store')->name('brand.store');
Route::get('brand_edit/{id}','BrandController@edit')->name('brand.edit');
Route::post('brand_update','BrandController@update')->name('brand.update');
Route::get('brand_show/{id}','BrandController@show')->name('brand.show');

Route::get('brand_delete/{id}','BrandController@delete')->name('brand.delete');

//---------------------------------------------------------------------------------------------//
//Discount part -->
  Route::get('/discount_index','discountController@index')->name('discount.index');
  Route::get('/discount_create','discountController@create')->name('discount.create'); 
  Route::post('/discount_store','discountController@store')->name('discount.store'); 
  Route::get('discount_delete/{id}','discountController@delete')->name('discount.delete'); 
  Route::get('discount_edit/{id}','discountController@edit')->name('discount.edit'); 

  Route::post('discount_update','discountController@update')->name('discount.update');
  Route::get('discount_show/{id?}','discountController@show')->name('discount.show'); 
  //--------------------------------------------------------------------------------------------//

//Slider part --> 
  Route::get('/slider_index','sliderController@index')->name('slider.index');
  Route::get('slider_create','sliderController@create')->name('slider.create');
  Route::post('slider_store','sliderController@store')->name('slider.store');

  Route::get('slider_show/{id?}','sliderController@show')->name('slider.show');
  Route::get('slider_delete/{id}','sliderController@delete')->name('slider.delete');
  //----------------------------------------------------------------------------------------------//



  //cetegory --> 

  Route::get('catagory_index','categoryController@index')->name('categorie.index');
  Route::get('catagory_create','categoryController@create')->name('categorie.create');
  Route::post('catagory_store','categoryController@store')->name('categorie.store');
  Route::get('catagory_edit/{id}','categoryController@edit')->name('categorie.edit');
  Route::post('catagory_update','categoryController@update')->name('categorie.update');
  Route::get('catagory_delete/{id}','categoryController@delete')->name('categorie.delete');
  Route::get('catagory_show/{id}','categoryController@show')->name('categorie.show');
  //----------------------------------------------------------------------------------------------//



  //sub-catagory -->
  Route::get('sub_category_index','subCetagoryController@index')->name('subCetagory.index');
  Route::get('sub_category_create','subCetagoryController@create')->name('subCetagory.create');
  Route::post('sub_category_store','subCetagoryController@store')->name('subCetagory.store');
  Route::get('sub_catagory_delete/{id}','subCetagoryController@delete')->name('subCetagory.delete');
  //-----------------------------------------------------------------------------------------------//




//trendy --->
  Route::get('trendy_index','trendyFashinsController@index')->name('trendy.index');
  Route::get('trendy_create','trendyFashinsController@create')->name('trendy.create');
  Route::post('trendy_store','trendyFashinsController@store')->name('trendy.store');
  Route::get('trendy_delete/{id}','trendyFashinsController@delete')->name('trendy.delete');
  Route::get('trendy_show/{id?}','trendyFashinsController@show')->name('trendy.show');
  Route::get('trendy_edit/{id}','trendyFashinsController@edit')->name('trendy.edit');
  Route::post('trendy_update','trendyFashinsController@update')->name('trendy.update');
//-------------------------------------------------------------------------------------------------//


//product --> 

Route::get('product_index','productController@index')->name('product.index');
Route::get('product_create', 'productController@create')->name('product.create');
Route::post('product_store','productController@store')->name('product.store');
Route::get('product_edit/{id}','productController@edit')->name('product.edit');
Route::post('product_update','productController@update')->name('product.update');
Route::get('product_show/{id}','productController@show')->name('product.show');
Route::get('product_delete/{id}','productController@delete')->name('product.delete');
Route::POST('subcatagory','productController@subCetagory')->name('sub_catagory');




//**************************************************************************************************//
//banner --> 

Route::get('banner_index','bannerController@index')->name('banner.index');
Route::get('banner_create','bannerController@create')->name('banner.create');
Route::post('banner_store','bannerController@store')->name('banner.store');
Route::get('banner_delete/{id}','bannerController@delete')->name('banner.delete');



//**************************************************************************************************//
// admin blog -->

Route::get('blog_index','blogController@index')->name('blog.index'); 
Route::get('blog_create','blogController@create')->name('blog.create');
Route::post('blog_store','blogController@store')->name('blog.store');
Route::get('blog_delete/{id}','blogController@delete')->name('blog.delete');
Route::get('blog_edit/{id}','blogController@edit')->name('blog.edit');
Route::post('blog_update','blogController@update')->name('blog.update');
Route::get('blog_show/{id}','blogController@show')->name('blog.show');


});

?>