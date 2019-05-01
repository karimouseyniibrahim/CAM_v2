<?php

Route::get('/', 'HomeController@welcome');

Route::get('contact' , 'ContactController@index');
Route::post('contact' , 'ContactController@storeContact');
Route::get('deleteFile/{model}/{id}', 'HomeController@deleteImage');

Route::get('formation' , 'FormationController@index');
#Route::get('formation/{id}/view' , 'FormationController@getById');
Route::get('formation/{slug}' , 'FormationController@getBySlug');

Route::get('inscription' , 'InscriptionController@index');
Route::post('inscription' , 'InscriptionController@store');

#### section control
Route::get('site' , 'SiteController@index');
Route::get('site/item/{id?}' , 'SiteController@show');
#Route::get('site/{id}/view' , 'SiteController@getById');
Route::get('site/{slug}' , 'SiteController@getBySlug');
Route::get('site/locaux/{id?}' , 'SiteController@locaux');

#### local control
Route::get('local/item/{id?}' , 'LocalController@show');
#Route::get('local/{id}/view' , 'LocalController@getById');
Route::get('local/{slug}' , 'LocalController@getBySlug');


#### news control
Route::get('news' , 'NewsController@index');
#Route::get('news/{id}/view' , 'NewsController@getById');
Route::get('news/{slug}' , 'NewsController@getBySlug');

#### request control
Route::post('request/item' , 'RequestController@store');

Auth::routes();

#Route::get('page' , 'PageController@index');
#Route::get('page/{id}/view' , 'PageController@getById');
Route::get('page/{slug}' , 'PageController@getBySlug');

#### medias control
Route::get('gallery' , 'MediasController@gallery');
Route::get('nomenclature' , 'MediasController@nomenclature');

