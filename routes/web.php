<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view('.home_Page');
});

Route::get('/Profile', function() {
    return view('.Item');
});
// Route::get('/', function() {
//     return view('.Picture');
// });
