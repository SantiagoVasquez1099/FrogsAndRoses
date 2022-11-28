<?php




Auth::routes(['register' => false]);

Route::get('/', 'AppController@index')->name('index');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');

    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');

    Route::resource('permissions', 'PermissionsController');

    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');

    Route::resource('roles', 'RolesController');

    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');

    Route::resource('users', 'UsersController');

    Route::delete('products/destroy', 'ProductsController@massDestroy')->name('products.massDestroy');

    Route::get('/products/load/row/images/{id}', 'ProductsController@loadRowImages')->name('products.loadRowImages');

    Route::post('/products/upload/images/{id}', 'ProductsController@uploadImage')->name('products.uploadImage');

    Route::delete('/products/delete/images/{id}', 'ProductsController@deleteImage')->name('products.deleteImage');

    Route::resource('products', 'ProductsController');

    Route::get('/gallery/load/row/images', 'HomeController@loadRowImages')->name('gallery.loadRowImages');

    Route::post('/gallery/upload/images', 'HomeController@uploadImage')->name('gallery.uploadImage');

    Route::delete('/gallery/delete/images/{id}', 'HomeController@deleteImage')->name('gallery.deleteImage');
});
