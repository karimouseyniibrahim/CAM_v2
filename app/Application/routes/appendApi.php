<?php

#user
Route::post('users/login', 'UserApi@login');
Route::get('users/getById/{id}', 'UserApi@getById');
Route::get('users/delete/{id}', 'UserApi@delete');
Route::post('users/add', 'UserApi@add');
Route::post('users/update', 'UserApi@update');
Route::get('users', 'UserApi@index');
Route::get('users/getUserByToken', 'UserApi@getUserByToken');

#page
Route::get('page/getById/{id}', 'PageApi@getById');
Route::get('page/delete/{id}', 'PageApi@delete');
Route::post('page/add', 'PageApi@add');
Route::post('page/update/{id}', 'PageApi@update');
Route::get('page', 'PageApi@index'); 

#categorie
Route::get('categorie/getById/{id}', 'CategorieApi@getById');
Route::get('categorie/delete/{id}', 'CategorieApi@delete');
Route::post('categorie/add', 'CategorieApi@add');
Route::post('categorie/update/{id}', 'CategorieApi@update');
Route::get('categorie', 'CategorieApi@index');


#formation
Route::get('formation/getById/{id}', 'FormationApi@getById');
Route::get('formation/delete/{id}', 'FormationApi@delete');
Route::post('formation/add', 'FormationApi@add');
Route::post('formation/update/{id}', 'FormationApi@update');
Route::get('formation', 'FormationApi@index');

#inscription
Route::get('inscription/getById/{id}', 'InscriptionApi@getById');
Route::get('inscription/delete/{id}', 'InscriptionApi@delete');
Route::post('inscription/add', 'InscriptionApi@add');
Route::post('inscription/update/{id}', 'InscriptionApi@update');
Route::get('inscription', 'InscriptionApi@index');

#section
Route::get('section/getById/{id}', 'SectionApi@getById');
Route::get('section/delete/{id}', 'SectionApi@delete');
Route::post('section/add', 'SectionApi@add');
Route::post('section/update/{id}', 'SectionApi@update');
Route::get('section', 'SectionApi@index');

#local
Route::get('local/getById/{id}', 'LocalApi@getById');
Route::get('local/delete/{id}', 'LocalApi@delete');
Route::post('local/add', 'LocalApi@add');
Route::post('local/update/{id}', 'LocalApi@update');
Route::get('local', 'LocalApi@index');

#artisan
Route::get('artisan/getById/{id}', 'ArtisanApi@getById');
Route::get('artisan/delete/{id}', 'ArtisanApi@delete');
Route::post('artisan/add', 'ArtisanApi@add');
Route::post('artisan/update/{id}', 'ArtisanApi@update');
Route::get('artisan', 'ArtisanApi@index');

#request
Route::get('request/getById/{id}', 'RequestApi@getById');
Route::get('request/delete/{id}', 'RequestApi@delete');
Route::post('request/add', 'RequestApi@add');
Route::post('request/update/{id}', 'RequestApi@update');
Route::get('request', 'RequestApi@index');

#news
Route::get('news/getById/{id}', 'NewsApi@getById');
Route::get('news/delete/{id}', 'NewsApi@delete');
Route::post('news/add', 'NewsApi@add');
Route::post('news/update/{id}', 'NewsApi@update');
Route::get('news', 'NewsApi@index');

#galery
Route::get('galery/getById/{id}', 'GaleryApi@getById');
Route::get('galery/delete/{id}', 'GaleryApi@delete');
Route::post('galery/add', 'GaleryApi@add');
Route::post('galery/update/{id}', 'GaleryApi@update');
Route::get('galery', 'GaleryApi@index');