<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::group(['middleware' => 'auth'] , function(){
Route::get('orderList','App\Http\Controllers\Admin\ListOrderController')->name('order_list');
Route::get('update_status/{id}','App\Http\Controllers\Admin\ListOrderController@update_status')->name('update_status');
});

Route::group(['middleware' => 'save_last_action_at'] ,function(){

Route::resource('/', 'App\Http\Controllers\FrontOrderController');

});

