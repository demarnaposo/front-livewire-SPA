<?php

namespace App\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;


class Home extends Component
{

    public $currentPage = 'home'; // Default page
    public $pageTitle = 'Home Page'; // Dynamic page title

    // Mount method to initialize the currentPage based on route parameter
    public function mount($page = 'home')
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
            default => 'Home Page',
        };
    }

    public function render()
    {

        // $menu = DB::table('menu')->get();




        return view('livewire.home');
    }
}
