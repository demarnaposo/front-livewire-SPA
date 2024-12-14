<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;
use App\Livewire\Home;

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/{page?}', Home::class)
    ->name('single-page')
    ->where('page', 'visi-misi|tugas-fungsi'); // Restrict to valid pages

