<?php

use App\Livewire\Home;
use App\Livewire\Berita;
use App\Livewire\Galeri;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/{page?}', Home::class)
    ->name('single-page')
    ->where('page', 'visi-misi|tugas-fungsi|sejarah|lambang-kbr');

// Route::get('/', Home::class);
Route::get('/berita-kbr', Berita::class);
Route::get('/galeri-kbr', Galeri::class);


