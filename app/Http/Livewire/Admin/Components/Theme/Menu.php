<?php

namespace App\Http\Livewire\Admin\Components\Theme;

use Livewire\Component;

class Menu extends Component
{
    public function render()
    {
        return view('livewire.admin.components.theme.menu')->layout('layouts.admin');
    }
}
