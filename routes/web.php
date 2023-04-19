<?php

use Illuminate\Support\Facades\Route;


Route::get("/student", function () {
    $arr = ['fathy', 'walid', 'fathy','mohamed','elghazaly'];

    return view("home", compact('arr'));
});
