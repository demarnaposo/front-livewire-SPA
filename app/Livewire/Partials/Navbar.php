<?php

namespace App\Livewire\Partials;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Navbar extends Component
{
    public $menus = [];

    public function mount()
    {
        // Fetch menus and group by parent_id
        $this->menus = DB::table('menus')
            ->where('status', 1)
            ->orderBy('parent_id')
            ->orderBy('order')
            ->get()
            ->groupBy('parent_id');
    }

    public function render()
    {
        return view('livewire.partials.navbar');
    }
}
