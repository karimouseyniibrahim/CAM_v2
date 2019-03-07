<?php

#### page control
Route::get('page/item/{id?}', 'PageController@show');
Route::post('page/item', 'PageController@store');
Route::post('page/item/{id}', 'PageController@update');
Route::get('page/{id}/delete', 'PageController@destroy');
#### page comment
Route::post('page/add/comment/{id}', 'PageCommentController@addComment');
Route::post('page/update/comment/{id}', 'PageCommentController@updateComment');
Route::get('page/delete/comment/{id}', 'PageCommentController@deleteComment');


#### categorie control
Route::get('categorie', 'CategorieController@index');
Route::get('categorie/item/{id?}', 'CategorieController@show');
Route::post('categorie/item', 'CategorieController@store');
Route::post('categorie/item/{id}', 'CategorieController@update');
Route::get('categorie/{id}/delete', 'CategorieController@destroy');
Route::get('categorie/{id}/view', 'CategorieController@getById');

#### formation control
// Route::get('formation' , 'FormationController@index');
// Route::get('formation/item/{id?}' , 'FormationController@show');
// Route::post('formation/item' , 'FormationController@store');
// Route::post('formation/item/{id}' , 'FormationController@update');
// Route::get('formation/{id}/delete' , 'FormationController@destroy');
// Route::get('formation/{id}/view' , 'FormationController@getById');

#### inscription control
// Route::get('inscription' , 'InscriptionController@index');
// Route::get('inscription/item/{id?}' , 'InscriptionController@show');
// Route::post('inscription/item' , 'InscriptionController@store');
// Route::post('inscription/item/{id}' , 'InscriptionController@update');
// Route::get('inscription/{id}/delete' , 'InscriptionController@destroy');
// Route::get('inscription/{id}/view' , 'InscriptionController@getById');

#### section control
Route::get('section' , 'SectionController@index');
Route::get('section/item/{id?}' , 'SectionController@show');
Route::post('section/item' , 'SectionController@store');
Route::post('section/item/{id}' , 'SectionController@update');
Route::get('section/{id}/delete' , 'SectionController@destroy');
Route::get('section/{id}/view' , 'SectionController@getById');

#### local control
Route::get('local' , 'LocalController@index');
Route::get('local/item/{id?}' , 'LocalController@show');
Route::post('local/item' , 'LocalController@store');
Route::post('local/item/{id}' , 'LocalController@update');
Route::get('local/{id}/delete' , 'LocalController@destroy');
Route::get('local/{id}/view' , 'LocalController@getById');

#### artisan control
Route::get('artisan' , 'ArtisanController@index');
Route::get('artisan/item/{id?}' , 'ArtisanController@show');
Route::post('artisan/item' , 'ArtisanController@store');
Route::post('artisan/item/{id}' , 'ArtisanController@update');
Route::get('artisan/{id}/delete' , 'ArtisanController@destroy');
Route::get('artisan/{id}/view' , 'ArtisanController@getById');

#### request control
Route::get('request' , 'RequestController@index');
Route::get('request/item/{id?}' , 'RequestController@show');
Route::post('request/item' , 'RequestController@store');
Route::post('request/item/{id}' , 'RequestController@update');
Route::get('request/{id}/delete' , 'RequestController@destroy');
Route::get('request/{id}/view' , 'RequestController@getById');