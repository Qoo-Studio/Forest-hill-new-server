<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;

function isActiveRoute(array $routes = [], $output = 'active')
{
    foreach ($routes as $route) {
        if (Route::currentRouteName() == $route) {
            return $output;
        }
    }
}

function validateForm($requestAll,array $inputNames)
{
    return Validator::make($requestAll,$inputNames)->validate();
}






