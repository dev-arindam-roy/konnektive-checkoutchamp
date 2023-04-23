<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;

Route::get('konnektive-crm-api-doc', function() {
    return view('konnective-crm::index');
});
