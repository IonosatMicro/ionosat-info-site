<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

    $app->get('uk', [
        'as' => 'uk',
        function () {
            return view('indexua');
        }
    ]);
    $app->get('en', function () use ($app) {
        return view('indexen');
    });
    $app->get('/', function () use ($app) {
        return view('indexen');
    });
