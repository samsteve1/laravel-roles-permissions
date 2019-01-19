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
use App\Models\Role;
use App\Models\Permission;
Route::get('/', function (\Illuminate\Http\Request $request) {
    $user = $request->user();
  dd($user->can('delete posts'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
