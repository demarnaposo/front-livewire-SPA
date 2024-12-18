<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Galeri extends Component
{
    public function render()
    {


        $galeri = DB::table('galeris')
            ->select('galeris.id', 'albums.album', 'file', 'ket', 'users.name')
            ->join('albums', 'albums.id', '=', 'galeris.album_id')
            ->join('users', 'users.id', '=', 'galeris.user_id')
            ->where('status', '1')
            ->orderBy('galeris.created_at', 'desc')
            ->get();

        // dd($galeri);

        return view('livewire.galeri', [
            'galeri' => $galeri
        ]);
    }
}
