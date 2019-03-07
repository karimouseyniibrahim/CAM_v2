<?php

Route::get('/', 'HomeController@welcome');

Route::get('contact' , 'ContactController@index');
Route::post('contact' , 'ContactController@storeContact');
Route::get('deleteFile/{model}/{id}', 'HomeController@deleteImage');

Route::get('formation' , 'FormationController@index');
Route::get('formation/{id}/view' , 'FormationController@getById');

Route::get('inscription' , 'InscriptionController@index');
Route::post('inscription' , 'InscriptionController@store');

Route::get('section/locaux/{id?}' , 'SectionController@locaux');

Auth::routes();


Route::get('page' , 'PageController@index');
Route::get('page/{id}/view' , 'PageController@getById');



