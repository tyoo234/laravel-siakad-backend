<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages/blank-page', ['type_menu' => '']);
});
