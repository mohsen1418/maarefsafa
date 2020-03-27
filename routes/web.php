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
//index
Route::get('/', 'IndexController@index')->name('index');


//lesson
Route::get('/lesson/{id}', 'LessonController@show_lesson_item')->name('ShowLessonItem');

//user
Route::get('/profile/{id}', 'UserController@show_profile')->name('ShowProfile');


//auth
Auth::routes();

//faq
Route::get('/faq', 'FaqController@faq')->name('faq');

//category
Route::get('/category/show/all', 'CategoryController@show_category')->name('show_category');
Route::get('/category/show/{id}', 'CategoryController@show_category_item')->name('show_category_item');

//about
Route::get('/about-us', 'AboutController@about')->name('about_us');

