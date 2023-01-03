<?php

use Illuminate\Support\Facades\Auth;
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


Route::get('/','App\Http\Controllers\HomeController@home')->name('home');

Route::get('/Category/{id}','App\Http\Controllers\HomeController@Categories')->name('category');

Route::get('/Category/{categoryId}/Post/{id}','App\Http\Controllers\HomeController@ShowPost')->name('ShowPost');

Route::get('/AdminPanel','App\Http\Controllers\AdminController@MainPanel')->name('AdminPanel');
Route::get('/WhoAreWe','App\Http\Controllers\HomeController@WhoAreWe')->name('WhoAreWe');
Route::get('/SearchResult','App\Http\Controllers\HomeController@SearchEngine')->name('SearchEngine');

Route::get('/ContactUs','App\Http\Controllers\HomeController@ContactUs')->name('ContactUs');
Route::get('/aboutUs','App\Http\Controllers\AdminController@AboutUs')->name('aboutUs');
Route::get('/segel','App\Http\Controllers\AdminController@Segel')->name('segel');
Route::post('/segelUpdate','App\Http\Controllers\AdminController@SegelUpdate')->name('segelUpdate');
Route::post('/CreateAboutUs','App\Http\Controllers\AdminController@CreateAboutUs')->name('CreateAboutUs');

Route::get('/Videos','App\Http\Controllers\HomeController@Videos')->name('Videos');
Route::get('/ShowVideo/{id}','App\Http\Controllers\HomeController@ShowVideo')->name('ShowVideo');

Route::get('/imagesLibrary','App\Http\Controllers\HomeController@Images')->name('images');
Route::get('/imagesDownloads/{id}', 'App\Http\Controllers\HomeController@ImagesDownloads')->name('imageDownload');



Route::get('/imageSortByViews/{sortByViews}','App\Http\Controllers\HomeController@SortByViews')->name('SortByViews');
Route::get('/imageSortByDownloads/{sortByDownloads}','App\Http\Controllers\HomeController@SortByDownloads')->name('SortByDownloads');
Route::post('/SendContactUs','App\Http\Controllers\HomeController@SendContactUs')->name('SendContactUs');
Route::get('/DeleteContactUs/{id}','App\Http\Controllers\AdminController@ContactUsDelete')->name('ContactUsDelete');
Route::get('/AdminPanel/ContactUs','App\Http\Controllers\AdminController@ContactUs')->name('AdminContactUs');
Route::get('/AdminPanel/AdminPosts','App\Http\Controllers\AdminController@AdminPosts')->name('AdminPosts');
Route::get('/AdminPanel/ShowCategory/{id}' , 'App\Http\Controllers\AdminController@ShowCategory')->name('ShowCategory');
Route::get('/AdminPanel/DeletePost/{id}' , 'App\Http\Controllers\AdminController@DeletePost')->name('DeletePost');
Route::put('/AdminPanel/UpdateCategory/{id}' , 'App\Http\Controllers\AdminController@UpdateCategory')->name('UpdateCategory');
Route::put('/AdminPanel/UpdatePost/{id}' , 'App\Http\Controllers\AdminController@UpdatePosts')->name('UpdatePost');
Route::get('/AdminPanel/DeleteCategory/{id}' , 'App\Http\Controllers\AdminController@DeleteCategory')->name('DeleteCategory');
Route::post('/AdminPanel/CreatePost' , 'App\Http\Controllers\AdminController@CreatePost')->name('CreatePost');

Route::get('/AdminPanel/ShowCreatePost' , 'App\Http\Controllers\AdminController@ShowCreatePost')->name('ShowCreatePost');
Route::get('/AdminPanel/ShowCreatePostCategory/{id}' , 'App\Http\Controllers\AdminController@ShowCreatePostCategory')->name('ShowCreatePostCategory');

Route::get('/AdminPanel/ShowUpdatePosts/{id}' , 'App\Http\Controllers\AdminController@ShowUpdatePosts')->name('ShowUpdatePosts');
Route::get('/AdminPanel/ShowCreateCategory' , 'App\Http\Controllers\AdminController@ShowCreateCategory')->name('ShowCreateCategory');
Route::get('/AdminPanel/ShowAllCategories' , 'App\Http\Controllers\AdminController@ShowAllCategories')->name('ShowAllCategories');
Route::get('/AdminPanel/ShowUpdateCategory/{id}' , 'App\Http\Controllers\AdminController@ShowUpdateCategory')->name('ShowUpdateCategory');
Route::post('/AdminPanel/CreateCategory' , 'App\Http\Controllers\AdminController@CreateCategory')->name('CreateCategory');
Route::get('/AdminPanel/ShowAllCategories/isAllowed/{id}' , 'App\Http\Controllers\AdminController@Allowed')->name('Allowed');
Route::get('/AdminPanel/ShowAllCategories/isNotAllowed/{id}' , 'App\Http\Controllers\AdminController@NotAllowed')->name('NotAllowed');
Route::get('/AdminPanel/ShowAllPosts' , 'App\Http\Controllers\AdminController@ShowAllPosts')->name('ShowAllPosts');

Auth::routes();


