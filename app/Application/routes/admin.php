<?php
Route::get('/', 'HomeController@index');
Route::get('icons', 'HomeController@icons');
Route::get('docs', 'HomeController@apiDocs');
Route::get('file-manager', 'HomeController@fileManager');
Route::get('theme/open-file', 'Themes\ThemeController@openFile');
Route::get('theme/{theme}', 'Themes\ThemeController@adminPanel');
Route::post('theme/save-file', 'Themes\ThemeController@save');

### commands
Route::get('commands', 'CommandsController@index');
Route::post('command/exe', 'CommandsController@exe');
Route::get('laravel/commands', 'CommandsController@command');
Route::post('command/otherExe', 'CommandsController@otherExe');
Route::post('laravel/haveCommand', 'CommandsController@haveCommand');
Route::get('exportImport', 'CommandsController@exportEmportModels');
Route::post('export', 'CommandsController@export');
Route::post('import', 'CommandsController@import');


### relations
Route::get('relation', 'RelationController@index');
Route::post('relation/exe', 'RelationController@exe');
Route::get('getCols/{model}', 'RelationController@getCols');
Route::post('relation/rollback', 'RelationController@rollback');

#### user control
Route::get('user', 'UserController@index');
Route::get('user/item/{id?}', 'UserController@show');
Route::post('user/item', 'UserController@store');
Route::post('user/item/{id}', 'UserController@update');
Route::post('user/profile/{id}', 'ProfileController@profile');
Route::get('user/profile/{id}', 'ProfileController@profile');
Route::get('user/{id}/delete', 'UserController@destroy');
Route::get('user/{id}/view', 'UserController@getById');
Route::get('user/pluck', 'UserController@pluck');

#### translation
Route::get('translation', 'TranslationController@index');
Route::get('translation/readFile/{file}', 'TranslationController@readFile');
Route::post('translation/save', 'TranslationController@save');
Route::get('translation/getAllContent/{file}', 'TranslationController@getAllContent');
Route::post('translation/both/save', 'TranslationController@bothSave');

#### permissions
Route::get('custom-permissions', 'Development\CustomPermissionsController@index');
Route::get('custom-permissions/readFile/{file}', 'Development\CustomPermissionsController@readFile');
Route::post('custom-permissions/save', 'Development\CustomPermissionsController@save');
Route::get('getControllerByType/{type}', 'Development\PermissionController@getControllerByType');
Route::get('getMethodByController/{controller}/{type}', 'Development\PermissionController@getMethodByController');

#### group control
Route::get('group', 'GroupController@index');
Route::get('group/item/{id?}', 'GroupController@show');
Route::post('group/item', 'GroupController@store');
Route::post('group/item/{id}', 'GroupController@update');
Route::get('group/{id}/delete', 'GroupController@destroy');
Route::get('group/{id}/view', 'GroupController@getById');
Route::get('group/pluck', 'GroupController@pluck');

#### role control
Route::get('role', 'RoleController@index');
Route::get('role/item/{id?}', 'RoleController@show');
Route::post('role/item', 'RoleController@store');
Route::post('role/item/{id}', 'RoleController@update');
Route::get('role/{id}/delete', 'RoleController@destroy');
Route::get('role/{id}/view', 'RoleController@getById');
Route::get('role/pluck', 'RoleController@pluck');
#### permission control
Route::get('permission', 'Development\PermissionController@index');
Route::get('permission/item/{id?}', 'Development\PermissionController@show');
Route::post('permission/item', 'Development\PermissionController@store');
Route::post('permission/item/{id}', 'Development\PermissionController@update');
Route::get('permission/{id}/delete', 'Development\PermissionController@destroy');
Route::get('permission/{id}/view', 'Development\PermissionController@getById');
Route::get('permission/pluck', 'PermissionController@pluck');
#### home control
Route::get('home/{pages?}/{limit?}', 'HomeController@index');
#### setting control
Route::get('setting', 'SettingController@index');
Route::get('setting/item/{id?}', 'SettingController@show');
Route::post('setting/item', 'SettingController@store');
Route::post('setting/item/{id}', 'SettingController@update');
Route::get('setting/{id}/delete', 'SettingController@destroy');
Route::get('setting/{id}/view', 'SettingController@getById');
Route::get('setting/pluck', 'SettingController@pluck');
#### menu control
Route::get('menu', 'MenuController@index'); 
Route::get('menu/item/{id?}', 'MenuController@show');
Route::post('menu/item', 'MenuController@store');
Route::post('menu/item/{id}', 'MenuController@update');
Route::get('menu/{id}/delete', 'MenuController@destroy');
Route::get('menu/{id}/view', 'MenuController@getById');
Route::post('update/menuItem', 'MenuController@menuItem');
Route::post('addNewItemToMenu', 'MenuController@addNewItemToMenu');
Route::get('deleteMenuItem/{id}', 'MenuController@deleteMenuItem');
Route::get('getItemInfo/{id}', 'MenuController@getItemInfo');
Route::post('updateOneMenuItem', 'MenuController@updateOneMenuItem');
Route::get('menu/pluck', 'MenuController@pluck');
#### log control
Route::get('log', 'LogController@index');
Route::get('log/item/{id?}', 'LogController@show');
Route::post('log/item', 'LogController@store');
Route::post('log/item/{id}', 'LogController@update');
Route::get('log/{id}/delete', 'LogController@destroy');
Route::get('log/{id}/view', 'LogController@getById');
Route::get('log/pluck', 'LogController@pluck');
#### contact control
Route::get('contact', 'ContactController@index');
Route::get('contact/item/{id?}', 'ContactController@show');
Route::post('contact/item', 'ContactController@store');
Route::post('contact/item/{id}', 'ContactController@update');
Route::get('contact/{id}/delete', 'ContactController@destroy');
Route::get('contact/{id}/view', 'ContactController@getById');
Route::post('contact/replay/{id}', 'ContactController@replayEmail');
Route::get('contact/pluck', 'ContactController@pluck');

#### page control
Route::get('page', 'PageController@index');
Route::get('page/item/{id?}', 'PageController@show');
Route::post('page/item', 'PageController@store');
Route::post('page/item/{id}', 'PageController@update');
Route::get('page/{id}/delete', 'PageController@destroy');
Route::get('page/{id}/view', 'PageController@getById');
Route::get('page/pluck', 'PageController@pluck');
Route::get('page/image/{id}' , 'PageController@filedestroy');
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
Route::get('categorie/pluck', 'CategorieController@pluck');

#### formation control
Route::get('formation' , 'FormationController@index');
Route::get('formation/item/{id?}' , 'FormationController@show');
Route::post('formation/item' , 'FormationController@store');
Route::post('formation/item/{id}' , 'FormationController@update');
Route::get('formation/{id}/delete' , 'FormationController@destroy');
Route::get('formation/{id}/view' , 'FormationController@getById');
Route::get('formation/pluck', 'FormationController@pluck');
#### inscription control
Route::get('inscription' , 'InscriptionController@index');
Route::get('inscription/item/{id?}' , 'InscriptionController@show');
Route::post('inscription/item' , 'InscriptionController@store');
Route::post('inscription/validation' , 'InscriptionController@validation');
Route::post('inscription/item/{id}' , 'InscriptionController@update');
Route::get('inscription/{id}/delete' , 'InscriptionController@destroy');
Route::get('inscription/{id}/view' , 'InscriptionController@getById');
Route::get('inscription/pluck', 'InscriptionController@pluck');
#### site control
Route::get('site' , 'SiteController@index');
Route::get('site/item/{id?}' , 'SiteController@show');
Route::post('site/item' , 'SiteController@store');
Route::post('site/item/{id}' , 'SiteController@update');
Route::get('site/{id}/delete' , 'SiteController@destroy');
Route::get('site/{id}/view' , 'SiteController@getById');
Route::get('site/pluck', 'SiteController@pluck');
Route::get('site/locaux{id}', 'SiteController@locaux');
#### local control
Route::get('local' , 'LocalController@index');
Route::get('local/item/{id?}' , 'LocalController@show');
Route::post('local/item' , 'LocalController@store');
Route::post('local/item/{id}' , 'LocalController@update');
Route::get('local/{id}/delete' , 'LocalController@destroy');
Route::get('local/{id}/view' , 'LocalController@getById');
Route::get('local/pluck', 'LocalController@pluck');
#### artisan control
Route::get('artisan' , 'ArtisanController@index');
Route::get('artisan/item/{id?}' , 'ArtisanController@show');
Route::post('artisan/item' , 'ArtisanController@store');
Route::post('artisan/item/{id}' , 'ArtisanController@update');
Route::get('artisan/{id}/delete' , 'ArtisanController@destroy');
Route::get('artisan/{id}/view' , 'ArtisanController@getById');
Route::get('artisan/pluck', 'ArtisanController@pluck');
#### request control
Route::get('request' , 'RequestController@index');
Route::get('request/item/{id?}' , 'RequestController@show');
Route::get('requestlocal/item/{id?}' , 'RequestController@show');
Route::post('request/item' , 'RequestController@store');
Route::post('request/validation' , 'RequestController@validation');
Route::post('request/item/{id}' , 'RequestController@update');
Route::get('request/{id}/delete' , 'RequestController@destroy');
Route::get('request/{id}/view' , 'RequestController@getById');
Route::get('request/pluck', 'RequestController@pluck');
#### news control
Route::get('news' , 'NewsController@index');
Route::get('news/item/{id?}' , 'NewsController@show');
Route::post('news/item' , 'NewsController@store');
Route::post('news/item/{id}' , 'NewsController@update');
Route::get('news/{id}/delete' , 'NewsController@destroy');
Route::get('news/{id}/view' , 'NewsController@getById');
Route::get('news/pluck', 'NewsController@pluck');

#### medias control
Route::get('medias' , 'MediasController@index');
Route::get('medias/item/{id?}' , 'MediasController@show');
Route::post('medias/item' , 'MediasController@store');
Route::post('medias/item/{id}' , 'MediasController@update');
Route::get('medias/{id}/delete' , 'MediasController@destroy');
Route::get('medias/{id}/view' , 'MediasController@getById');
Route::get('medias/pluck', 'MediasController@pluck');
Route::get('medias/file/{id}' , 'MediasController@filedestroy');
