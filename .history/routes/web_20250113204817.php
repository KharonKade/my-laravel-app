<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;  // <-- Add this line

Route::get('/', function () {
    return view('welcome');
});

Route::resource('notes', NoteController::class);  // <-- Add this line
