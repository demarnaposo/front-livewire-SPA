<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;



class Home extends Component
{

    use WithPagination;

    public $currentPage = '/'; // Default
    public $pageTitle = 'Kota Bogor'; // Dinamis

    protected $queryString = ['currentPage'];


    public function mount($page = '/')
    {
        $this->setPage($page);
    }

    public function setPage($page)
    {
        $this->currentPage = $page;

        // Update the page title dynamically
        $this->pageTitle = match ($page) {
            'visi-misi' => 'Visi Misi',
            'sejarah' => 'Sejarah Kota Bogor',
            'lambang-kbr' => 'Lambang Kota Bogor',
            default => 'Beranda',
        };
    }

    public function render()
    {

        Carbon::setLocale('id');

        $berita = DB::table('posts')
            ->select('judul', 'konten', 'file', 'tgl_publikasi', 'users.name', 'posts.id')
            ->join('users', 'users.id', '=', 'posts.user_id')
            ->where('status', '1')
            ->orderBy('tgl_publikasi', 'desc')
            ->paginate(3);

            // dd($berita);

        return view('livewire.home', [
            'berita' => $berita,
        ]);
    }
}
