<?php

use App\Http\Controllers\FrontEnd\IndexPageController;
use Illuminate\Support\Facades\Route;


// FrontEnd
Route::controller(IndexPageController::class)->group(function () {
    Route::get('/', 'indexPage');
    Route::get('/contact', 'contactPage');
});
