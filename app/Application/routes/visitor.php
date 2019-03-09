<?php

Route::get('/', 'HomeController@welcome');

Route::get('contact' , 'ContactController@index');
Route::post('contact' , 'ContactController@storeContact');
Route::get('deleteFile/{model}/{id}', 'HomeController@deleteImage');

Route::get('formation' , 'FormationController@index');
Route::get('formation/{id}/view' , 'FormationController@getById');

Route::get('inscription' , 'InscriptionController@index');
Route::post('inscription' , 'InscriptionController@store');

#### section control
Route::get('section' , 'SectionController@index');
Route::get('section/item/{id?}' , 'SectionController@show');
Route::get('section/{id}/view' , 'SectionController@getById');
Route::get('section/locaux/{id?}' , 'SectionController@locaux');

#### local control
Route::get('local/item/{id?}' , 'LocalController@show');
Route::get('local/{id}/view' , 'LocalController@getById');


#### news control
Route::get('news' , 'NewsController@index');
Route::get('news/{id}/view' , 'NewsController@getById');

#### request control
Route::post('request/item' , 'RequestController@store');

Auth::routes();

Route::get('page' , 'PageController@index');
Route::get('page/{id}/view' , 'PageController@getById');



