<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $is_logged = session('is_logged', false);
    return view('app', ['is_logged' => $is_logged]);
});

Route::get('/kontakti', function () {
    $is_logged = session('is_logged', false);
    return view('contacts', ['is_logged' => $is_logged]);
});

// Login Routes
Route::get('/login', function () {
    $is_logged = session('is_logged', false);
    return view('login', ['is_logged' => $is_logged]);
});
Route::post('/login', 'App\Http\Controllers\AuthController@login');

// Register Routes
Route::get('/register', function () {
    $is_logged = session('is_logged', false);
    return view('register', ['is_logged' => $is_logged]);
});

Route::post('/register', 'App\Http\Controllers\AuthController@register');

// Logout Route
Route::get('/logout', 'App\Http\Controllers\AuthController@logout');

// Admin Route
$checkAdmin = function ($route, $handler) {
    return function () use ($route, $handler) {
        if (!session('admin', false)) {
            return redirect('/')->with('message', 'Tikai administratoriem ir piekļuve šai lapai');
        }
        return $handler();
    };
};

    // Gaisa Kvalitate Routes
    Route::get('/allData/gaisakvalitate', $checkAdmin('/allData/gaisakvalitate', function() {
        return app()->call('App\Http\Controllers\GaisaController@showALLgaiss');
    }));
    Route::get('/allData/gaisakvalitate/{id}/delete', $checkAdmin('/allData/gaisakvalitate/{id}/delete', function($id) {
        return app()->call('App\Http\Controllers\GaisaController@delete', ['id' => $id]);
    }));
    Route::get('/allData/gaisakvalitate/{id}/view', $checkAdmin('/allData/gaisakvalitate/{id}/view', function($id) {
        return app()->call('App\Http\Controllers\GaisaController@view', ['id' => $id]);
    }));
    Route::get('/allData/gaisakvalitate/create', $checkAdmin('/allData/gaisakvalitate/create', function() {
        return app()->call('App\Http\Controllers\GaisaController@create');
    }));
    Route::post('/allData/gaisakvalitate', $checkAdmin('/allData/gaisakvalitate', function() {
        return app()->call('App\Http\Controllers\GaisaController@store');
    }));
    Route::get('/allData/gaisakvalitate/{id}/edit', $checkAdmin('/allData/gaisakvalitate/{id}/edit', function($id) {
        return app()->call('App\Http\Controllers\GaisaController@edit', ['id' => $id]);
    }));
    Route::post('/allData/gaisakvalitate/{id}', $checkAdmin('/allData/gaisakvalitate/{id}', function($id) {
        return app()->call('App\Http\Controllers\GaisaController@update', ['id' => $id]);
    }));

    // Udens Kvalitate Routes
    Route::get('/allData/udenskvalitate', $checkAdmin('/allData/udenskvalitate', function() {
        return app()->call('App\Http\Controllers\UdensController@showALLudens');
    }));
    Route::get('/allData/udenskvalitate/{id}/delete', $checkAdmin('/allData/udenskvalitate/{id}/delete', function($id) {
        return app()->call('App\Http\Controllers\UdensController@delete', ['id' => $id]);
    }));
    Route::get('/allData/udenskvalitate/{id}/view', $checkAdmin('/allData/udenskvalitate/{id}/view', function($id) {
        return app()->call('App\Http\Controllers\UdensController@view', ['id' => $id]);
    }));
    Route::get('/allData/udenskvalitate/create', $checkAdmin('/allData/udenskvalitate/create', function() {
        return app()->call('App\Http\Controllers\UdensController@create');
    }));
    Route::post('/allData/udenskvalitate', $checkAdmin('/allData/udenskvalitate', function() {
        return app()->call('App\Http\Controllers\UdensController@store');
    }));
    Route::get('/allData/udenskvalitate/{id}/edit', $checkAdmin('/allData/udenskvalitate/{id}/edit', function($id) {
        return app()->call('App\Http\Controllers\UdensController@edit', ['id' => $id]);
    }));
    Route::post('/allData/udenskvalitate/{id}', $checkAdmin('/allData/udenskvalitate/{id}', function($id) {
        return app()->call('App\Http\Controllers\UdensController@update', ['id' => $id]);
    }));

    // Specialisti Routes
    Route::get('/allData/specialisti', $checkAdmin('/allData/specialisti', function() {
        return app()->call('App\Http\Controllers\SpecialistiController@showALLspecialisti');
    }));
    Route::get('/allData/specialisti/{id}/delete', $checkAdmin('/allData/specialisti/{id}/delete', function($id) {
        return app()->call('App\Http\Controllers\SpecialistiController@delete', ['id' => $id]);
    }));
    Route::get('/allData/specialisti/{id}/view', $checkAdmin('/allData/specialisti/{id}/view', function($id) {
        return app()->call('App\Http\Controllers\SpecialistiController@view', ['id' => $id]);
    }));
    Route::get('/allData/specialisti/create', $checkAdmin('/allData/specialisti/create', function() {
        return view('specialisti_create');
    }));
    Route::post('/allData/specialisti', $checkAdmin('/allData/specialisti', function() {
        return app()->call('App\Http\Controllers\SpecialistiController@store');
    }));
    Route::get('/allData/specialisti/{id}/edit', $checkAdmin('/allData/specialisti/{id}/edit', function($id) {
        return app()->call('App\Http\Controllers\SpecialistiController@edit', ['id' => $id]);
    }));
    Route::post('/allData/specialisti/{id}', $checkAdmin('/allData/specialisti/{id}', function($id) {
        return app()->call('App\Http\Controllers\SpecialistiController@update', ['id' => $id]);
    }));

    // Vietas Routes
    Route::get('/allData/vietas', $checkAdmin('/allData/vietas', function() {
        return app()->call('App\Http\Controllers\VietasController@showALLvietas');
    }));
    Route::get('/allData/vietas/{id}/delete', $checkAdmin('/allData/vietas/{id}/delete', function($id) {
        return app()->call('App\Http\Controllers\VietasController@delete', ['id' => $id]);
    }));
    Route::get('/allData/vietas/{id}/view', $checkAdmin('/allData/vietas/{id}/view', function($id) {
        return app()->call('App\Http\Controllers\VietasController@view', ['id' => $id]);
    }));
    Route::get('/allData/vietas/create', $checkAdmin('/allData/vietas/create', function() {
        return view('vietas_create');
    }));
    Route::post('/allData/vietas', $checkAdmin('/allData/vietas', function() {
        return app()->call('App\Http\Controllers\VietasController@store');
    }));
    Route::get('/allData/vietas/{id}/edit', $checkAdmin('/allData/vietas/{id}/edit', function($id) {
        return app()->call('App\Http\Controllers\VietasController@edit', ['id' => $id]);
    }));
    Route::post('/allData/vietas/{id}', $checkAdmin('/allData/vietas/{id}', function($id) {
        return app()->call('App\Http\Controllers\VietasController@update', ['id' => $id]);
    }));

    // Vides Papildus Routes
    Route::get('/allData/videspapildu', $checkAdmin('/allData/videspapildu', function() {
        return app()->call('App\Http\Controllers\VidesPapilduController@showALLvidespapildu');
    }));
    Route::get('/allData/videspapildu/{id}/delete', $checkAdmin('/allData/videspapildu/{id}/delete', function($id) {
        return app()->call('App\Http\Controllers\VidesPapilduController@delete', ['id' => $id]);
    }));
    Route::get('/allData/videspapildu/{id}/view', $checkAdmin('/allData/videspapildu/{id}/view', function($id) {
        return app()->call('App\Http\Controllers\VidesPapilduController@view', ['id' => $id]);
    }));
    Route::get('/allData/videspapildu/create', $checkAdmin('/allData/videspapildu/create', function() {
        return app()->call('App\Http\Controllers\VidesPapilduController@create');
    }));
    Route::post('/allData/videspapildu', $checkAdmin('/allData/videspapildu', function() {
        return app()->call('App\Http\Controllers\VidesPapilduController@store');
    }));
    Route::get('/allData/videspapildu/{id}/edit', $checkAdmin('/allData/videspapildu/{id}/edit', function($id) {
        return app()->call('App\Http\Controllers\VidesPapilduController@edit', ['id' => $id]);
    }));
    Route::post('/allData/videspapildu/{id}', $checkAdmin('/allData/videspapildu/{id}', function($id) {
        return app()->call('App\Http\Controllers\VidesPapilduController@update', ['id' => $id]);
    }));