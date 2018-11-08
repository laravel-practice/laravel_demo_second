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

Route::get('/', function () {
    return view('index');
});
Route::get('add_contact', 'ContactController@AddContact');

Route::get('All_ContactMvc', 'ContactController@ContactMvc');

Route::get('all_contact', 'ContactController@AllContact')->name('all.contact');

Route::post('insert-contact', 'ContactController@InsertContact');
Route::post('insert-contact-alert', 'ContactController@InsertContactAlert');
Route::post('insert-contact-mvc', 'ContactController@InsertContactMVC');

Route::get('delete-contact/{id}', 'ContactController@DeleteContact');
Route::get('delete-contactMvc/{id}', 'ContactController@DeleteContactMvc');

Route::get('show-contact/{id}', 'ContactController@ShowContact');
Route::get('show-contactMvc/{id}', 'ContactController@ShowContactMvc');

Route::get('edit-contact/{id}', 'ContactController@EditContact');
Route::get('edit-contactMvc/{id}', 'ContactController@EditContactMvc');

Route::post('update-contact/{id}', 'ContactController@Updatecontact');
Route::post('update-contactMvc/{id}', 'ContactController@UpdatecontactMvc');



