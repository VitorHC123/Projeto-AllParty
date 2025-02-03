<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('allparty.body_index.index');
});

Route::get('/about', function () {
    return view('allparty.about.index');
});

Route::get('/rent-venue', function () {
    return view('allparty.rent_venue.index');
});

Route::get('/shows-events', function () {
    return view('allparty.shows_events.index');
});

Route::get('/tickets', function () {
    return view('allparty.tickets.index');
});

Route::get('/event-details', function () {
    return view('allparty.event_details.index');
});

Route::get('/ticket-details', function () {
    return view('allparty.ticket_details.index');
});

Route::get('/admin', function () {
    return view('admin.index.index');
});

