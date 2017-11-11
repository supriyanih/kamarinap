<?php
Route::get('/rawat','Supriyanih\Kamarinap\Controllers\RoomController@index')->name('rawat');

Route::group(['middleware' => ['web']], function () {
    Route::resource('rooms', 'Supriyanih\Kamarinap\Controllers\RoomController');
});