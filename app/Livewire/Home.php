<?php

namespace App\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;


class Home extends Component
{

    public $currentPage = '/'; // Default page
    public $pageTitle = 'Home'; // Dynamic page title

    // Mount method to initialize the currentPage based on route parameter
    public function mount($page = '/')
    {
        $this->setPage($page);
    }

    // Set the current page and update the title
    public function setPage($page)
    {
        $this->currentPage = $page;

        // Update the page title dynamically
        $this->pageTitle = match ($page) {
            'visi-misi' => 'Visi Misi',
            'contact' => 'Contact Us',
            default => 'Beranda',
        };
    }

    public function render()
    {


        return view('livewire.home');
    }
}
