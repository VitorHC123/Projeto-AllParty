<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('body_index.index');
});

Route::get('/about', function () {
    return view('about.index');
});

Route::get('/rent-venue', function () {
    return view('rent_venue.index');
});

Route::get('/shows-events', function () {
    return view('shows_events.index');
});

Route::get('/tickets', function () {
    return view('tickets.index');
});

Route::get('/event-details', function () {
    return view('event_details.index');
});

Route::get('/ticket-details', function () {
    return view('ticket_details.index');
});

