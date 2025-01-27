<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('body_index.index');
});

Route::get('/about', function () {
    return view('about_index.index');
});

Route::get('/rent-venue', function () {
    return view('rent_venue_index.index');
});

Route::get('/shows-events', function () {
    return view('shows_events_index.index');
});

Route::get('/tickets', function () {
    return view('tickets_index.index');
});
