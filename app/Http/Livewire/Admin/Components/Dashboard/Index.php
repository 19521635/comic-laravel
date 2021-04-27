<?php

namespace App\Http\Livewire\Admin\Components\Dashboard;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.admin.components.dashboard.index')->layout('layouts.admin');
    }
}
