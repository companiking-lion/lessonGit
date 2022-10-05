<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/', function () {
    return view('welcome');
});

Route::any('/about', function (){
    return "Igor";
});
Route::get('/feedback',function (){
    return 'feedback';
});
Route::match(['get','post'],'/contacts',function (){
    return 'contacts';
});
Route::any('/feedback',function (){
    return 'feedback';
});
Route::get('/post/{post}',function ($id){
    return $id;
});
Route::get('/user/{id}',function ($id =1, Request $request){
    echo $request->path().'<br>';
    return 'user:'.$id;
})->whereNumber('id')->name('user');
//route('user',['id'=>15]);
Route::prefix('manager')->group(function(){
    Route::get('/',function () {
        return 'manager.index';
    });
    Route::get('/users', function (){
        return  'manager.users';
    });
});
Route::redirect('/myuser/{id}','/user/{id}');



