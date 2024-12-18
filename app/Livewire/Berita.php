<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Berita extends Component
{
    public function render()
    {


        $berita = DB::table('posts')
            ->select('posts.id', 'judul', 'file', 'konten', 'tgl_publikasi', 'users.name')
            ->join('users', 'users.id', '=', 'posts.user_id')
            ->where('status', '1')
            ->orderBy('posts.tgl_publikasi', 'desc')
            ->paginate(6);

        // dd($berita);

        return view('livewire.berita', [
            'berita' => $berita
        ]);
    }
}
