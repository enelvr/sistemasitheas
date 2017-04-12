<?php
Route::get('/', 'DashboardController@index');
Route::get('/home', 'DashboardController@index');
Route::get('/dashboard', 'DashboardController@index');

Auth::routes();
Route::group(['middleware' => 'auth'], function(){
Route::name('estudios_path')->get('/estudios', 'EstudiosController@index');
Route::name('create_estudio_path')->get('/estudios/create', 'EstudiosController@create');
Route::name('store_estudio_path')->post('/estudios', 'EstudiosController@store');
//Route::post('estudios/store', 'EstudiosController@store');
Route::name('estudio_path')->get('/estudios/{estudio}', 'EstudiosController@show');
Route::name('edit_estudio_path')->get('/estudios/{estudio}/edit', 'EstudiosController@edit');
Route::name('update_estudio_path')->put('/estudios/{estudio}','EstudiosController@update');
Route::name('delete_estudio_path')->delete('/estudios/{estudio}','EstudiosController@delete');

});
