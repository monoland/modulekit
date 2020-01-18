<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'Apps\WebController@index')->name('guest.home');
