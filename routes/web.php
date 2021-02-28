<?php
use Illuminate\Support\Facades\Route;
Route::get('/','CrudController@index')->name('index');
Route::post('/','CrudController@insert')->name('insert');
Route::get('delete/{criteria?}','CrudController@delete')->name('delete');
Route::get('edit/{criteria?}','CrudController@edit')->name('edit');
Route::any('edit-action/{criteria?}','CrudController@editAction')->name('edit-action');

