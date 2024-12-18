<?php

namespace App\Livewire\Partials;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Navbar extends Component
{




    public function render()
{
    // Ambil semua menu yang aktif
    $menus = DB::table('menus')
        ->where('status', '1')
        ->get();


    $induk = $menus->where('induk', 0)->sortBy('urutan');
    $child = $menus->where('induk', '!=', 0)->sortBy('urutan');

    // Proses menu anak untuk dimasukkan ke dalam induk
    $menuTree = [];
    foreach ($induk as $i) {
        $menuTree[$i->id] = [
            'judul' => $i->judul,
            'link' => $i->link,
            'menus' => $child->where('induk', $i->id),
        ];
    }

    // dd($menuTree);


    return view('livewire.partials.navbar', [
        'induk' => $menuTree,
    ]);
}


}
