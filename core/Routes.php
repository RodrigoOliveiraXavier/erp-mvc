<?php

use App\Services\Route as Route;

Route::get('/', function () {
    if (!isset($_SESSION['logged'])) {
        header('Location: ' . route('login.index'));
    }
});

Route::get(['set' => '/login', 'as' => 'login.index'], 'LoginController@index');
Route::get(['set' => '/login/loginto', 'as' => 'login.loginto'], 'LoginController@loginto');
Route::get(['set' => '/login/register', 'as' => 'login.register'], 'LoginController@register');