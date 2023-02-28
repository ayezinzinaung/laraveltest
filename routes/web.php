<?php

use App\Models\Post;
use Illuminate\Support\Facades\DB;
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
Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function (){
    return "Hello Laravel";
});

Route::get('/user', 'UserController@show');

Route::get('insert', function(){
    Post::create([
        'title' => 'This is a title',
        'description' => 'This is a Description',
    ]);
});

Route::get('/select', function(){
    // return DB::table('posts')->get();

    return DB::table('posts')->where('id' , 1)->first();
    // $post = Post::find(1);
    // echo $post->title;
    // echo $post->description;
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// CRUD
// index
Route::get('/crud', 'CRUDController@index');

// create
Route::get('/create', 'CRUDController@create');
Route::post('/store', 'CRUDController@store');

// delete
Route::get('/delete/{id}', 'CRUDController@delete');

// update
Route::get('/edit/{id}', 'CRUDController@edit');
Route::post('/update/{id}', 'CRUDController@update');





