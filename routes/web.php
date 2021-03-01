<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
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

Route::get('/profile', function () {
    return view('profile');
});
Route::get('/user-test', function () {
    return view('user');
});

Route::get('post/create', function(){
    DB::table('post')->insert([
       'tittle' => 'Danat Bekkaiyr',
       'body' => 'I am Danat Bekkaiyr , second course of Suleiman Demirel University , major is IT. Has ended Aksay BIL in 2019. I have a lot of hobbies like doing sports , music , reading books , watching movies and etc.'
    ]);
});
Route::get('post', function(){
    $post=Post::find(1);
    return $post->body;
 });