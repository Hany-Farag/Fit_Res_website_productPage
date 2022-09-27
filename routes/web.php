<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postController;
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

// Route::get('/', function () {
//     return view('web_pages.index',compact('post'));
// });
Route::get('/', [postController::class,'home_page']);


// post functions routes 
Route::get('/all articles', [postController::class, 'show_all']);
Route::get('/show/{id}', [postController::class, 'showPost']);

// creation posts routes
Route::get('/createPost', [postController::class, 'creatPost']);
Route::post('/post/add', [postController::class, 'Store_New_Post']);

//update post
Route::get('/edit/post{id}', [postController::class, 'editPost']);
Route::put('/postUpdate/{id}', [postController::class, 'updatePost']);
//delete post
Route::delete('/delete/{id}', [postController::class, 'deletePost']);

/*
1-
Route::get('/all articles',[postController::class,'show_all'])->name('post.show_all');
this post.show_all will using in all pages as alis name and after this you can change the domin url any time here in routes 
without needed to change this route in all pages

2-if you need to make crud operation you can use resource controller
this make autommaticlly these functions
index/show /create/edit/store/update/delete

3-as you can resource controller you can make resource route which will include all routes above automaticly 
and each of them have his alis name 
*/
// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['prefix' => '/staffonly2022fit'], function () {

    Auth::routes();

});