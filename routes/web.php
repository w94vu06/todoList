<?php

use App\Http\Controllers\TestController;
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

Route::any('/test', [TestController::class, 'test']);
Route::get('/master',[TestController::class,'master']);

//【Snail Part】
//主頁面
Route::get('/snail_index',[\App\Http\Controllers\SnailController::class,'index'])
    ->name('snail_index');

//新增
Route::get('/snail_create', [\App\Http\Controllers\SnailController::class, 'get_create_page'])
    ->name('get_create_page');
Route::post('/snail_create', [\App\Http\Controllers\SnailController::class, 'store_create_data'])
    ->name('store_create_data');

//修改
Route::get('/snail_update', [\App\Http\Controllers\SnailController::class, 'get_edit_page'])
    ->name('get_edit_page');
Route::post('/snail_update', [\App\Http\Controllers\SnailController::class, 'store_edit_data'])
    ->name('store_edit_data');

//刪除
Route::get('/delete/', [\App\Http\Controllers\SnailController::class, 'delete_data'])
    ->name('delete_data');
