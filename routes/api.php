<?php

use Illuminate\Support\Facades\Route;

Route::get('/index', function () {
    return response()->json(['message' => 'test']);
});
