<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Navigation extends Component
{
    public $keyword;
    public function render()
    {
        return view('livewire.navigation');
    }

    public function search()
    {
        $this->keyword = "";
    }
}
