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

Route::get('/', 'FrontendController@displayItems');

Auth::routes();

Route::post('userLogin', 'UserController@userLogin')->name('userLogin');
Route::post('registerUser', 'UserController@userRegistration');
Route::get('logout', 'UserController@userLogout');

Route::get('items/{id}/details', 'FrontendController@showItemDetails');

Route::get('search', 'SearchController@search')->name('search_items');

// User dashboard routes
Route::get('home', 'HomeController@index')->name('home');
Route::get('items', 'ItemsController@showPostedItems')->name('posteditems');
Route::get('items/new', 'ItemsController@newItem')->name('newitem');
Route::post('items/new', 'ItemsController@postNewItem')->name('postnewitem');
Route::get('items/{id}/edit', 'ItemsController@editItem')->name('edititem');
Route::post('items/{id}/edit', 'ItemsController@postEditItem')->name('post_edit_item');
Route::get('items/{id}/delete', 'ItemsController@deleteItem')->name('delete_item');
Route::get('profile', 'HomeController@showProfile')->name('profile');
Route::get('profile/edit', 'HomeController@editProfile')->name('edit_profile');
Route::post('profile/{id}/edit', 'HomeController@processEditProfile')->name('process_edit_profile');
