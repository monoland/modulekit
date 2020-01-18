<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth:api', 'api'])->group(function () {
    Route::get('menu', 'Apps\WebController@menu');
    // Route::resource('sample', 'Apps\SampleController')->only(['index', 'store', 'show', 'update', 'destroy']);
});
