<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'MainController@index')->name('index');

Route::get('/categories', 'MainController@categories')->name('categories');
Route::get('/{category}', 'MainController@category')->name('category');
Route::get('/{category}{product?}', 'MainController@product')->name('product');


Route::group(['prefix' => 'basket'], function () {
    Route::post('add/{id}', 'BasketController@basketAdd')->name('basket-add');

    Route::group([
       'middleware' => 'basket_not_empty',
    ],
        function () {
            Route::get('/', 'BasketController@basket')->name('basket');
            Route::get('/place', 'BasketController@basketPlace')->name('basket-place');
            Route::post('/place', 'BasketController@basketConfirm')->name('basket-confirm');
            Route::post('/remove/{id}', 'BasketController@basketRemove')->name('basket-remove');
        });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
