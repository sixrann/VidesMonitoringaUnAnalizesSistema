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


// Gaisa Kvalitate Routes
Route::get('/allData/gaisakvalitate','App\Http\Controllers\GaisaController@showALLgaiss');
Route::get('/allData/gaisakvalitate/{id}/delete','App\Http\Controllers\GaisaController@delete');
Route::get('/allData/gaisakvalitate/{id}/view','App\Http\Controllers\GaisaController@view');
Route::get('/allData/gaisakvalitate/create', 'App\Http\Controllers\GaisaController@create');
Route::post('/allData/gaisakvalitate', 'App\Http\Controllers\GaisaController@store');
Route::get('/allData/gaisakvalitate/{id}/edit','App\Http\Controllers\GaisaController@edit');
Route::post('/allData/gaisakvalitate/{id}','App\Http\Controllers\GaisaController@update');

// Udens Kvalitate Routes
Route::get('/allData/udenskvalitate','App\Http\Controllers\UdensController@showALLudens');
Route::get('/allData/udenskvalitate/{id}/delete','App\Http\Controllers\UdensController@delete');
Route::get('/allData/udenskvalitate/{id}/view','App\Http\Controllers\UdensController@view');
Route::get('/allData/udenskvalitate/create', 'App\Http\Controllers\UdensController@create');
Route::post('/allData/udenskvalitate', 'App\Http\Controllers\UdensController@store');
Route::get('/allData/udenskvalitate/{id}/edit','App\Http\Controllers\UdensController@edit');
Route::post('/allData/udenskvalitate/{id}','App\Http\Controllers\UdensController@update');

// Specialisti Routes
Route::get('/allData/specialisti','App\Http\Controllers\SpecialistiController@showALLspecialisti');
Route::get('/allData/specialisti/{id}/delete','App\Http\Controllers\SpecialistiController@delete');
Route::get('/allData/specialisti/{id}/view','App\Http\Controllers\SpecialistiController@view');
Route::get('/allData/specialisti/create', function () {
    return view('specialisti_create');
});
Route::post('/allData/specialisti', 'App\Http\Controllers\SpecialistiController@store');
Route::get('/allData/specialisti/{id}/edit','App\Http\Controllers\SpecialistiController@edit');
Route::post('/allData/specialisti/{id}','App\Http\Controllers\SpecialistiController@update');

// Vietas Routes
Route::get('/allData/vietas','App\Http\Controllers\VietasController@showALLvietas');
Route::get('/allData/vietas/{id}/delete','App\Http\Controllers\VietasController@delete');
Route::get('/allData/vietas/{id}/view','App\Http\Controllers\VietasController@view');
Route::get('/allData/vietas/create', function () {
    return view('vietas_create');
});
Route::post('/allData/vietas', 'App\Http\Controllers\VietasController@store');
Route::get('/allData/vietas/{id}/edit','App\Http\Controllers\VietasController@edit');
Route::post('/allData/vietas/{id}','App\Http\Controllers\VietasController@update');

// Vides Papildus Routes
Route::get('/allData/videspapildu','App\Http\Controllers\VidesPapilduController@showALLvidespapildu');
Route::get('/allData/videspapildu/{id}/delete','App\Http\Controllers\VidesPapilduController@delete');
Route::get('/allData/videspapildu/{id}/view','App\Http\Controllers\VidesPapilduController@view');
Route::get('/allData/videspapildu/create', 'App\Http\Controllers\VidesPapilduController@create');
Route::post('/allData/videspapildu', 'App\Http\Controllers\VidesPapilduController@store');
Route::get('/allData/videspapildu/{id}/edit','App\Http\Controllers\VidesPapilduController@edit');
Route::post('/allData/videspapildu/{id}','App\Http\Controllers\VidesPapilduController@update');