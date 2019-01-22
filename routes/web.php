<?php
use App\User;
use App\Http\Resources\User as UserResource;

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

Route::get('/', 'IndexController@index')->name('index');
Route::get('/login', 'AuthController@index')->name('pageauth');
Route::post('/login', 'AuthController@login')->name('login');
Route::post('/reg', 'AuthController@registration')->name('reg');
Route::get('/ololo',function()
{
    return UserResource::collection(User::all());
})->name('ololo');
