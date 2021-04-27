<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class Menu extends Component
{
    public $isShow = true, $isTheme = false;

    public $themeItems = array(
        array(
            'name' => 'Giao diện',
            'link' => '#',
            'sub-menu' => 'Theme',
            'svg' => 'M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4',
            'childs' => array(
                array(
                'name' => 'Menu',
                'link' => 'admin.theme.menu',
                'svg' => 'M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4'
                ) 
            )
        )
    );

    protected $listeners = ['toggleShow'];

    public function toggleShow() {
        $this->isShow = !$this->isShow;
    }

    public function toggleTheme() {
        $this->isTheme = !$this->isTheme;
    }
    
    public function render()
    {
        return view('livewire.admin.menu');
    }
}
