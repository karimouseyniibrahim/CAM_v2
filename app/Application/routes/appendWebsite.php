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