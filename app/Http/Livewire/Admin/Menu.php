<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class Menu extends Component
{
    public $themeItems = array(
        array(
            'name' => 'Bảng điều khiển',
            'link' => 'admin.dashboard',
            'svg' => 'M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6',
            'childs' => array()
        ),
        array(
            'name' => 'Giao diện',
            'link' => 'admin.theme',
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

    public function isActive($value) {
        return request()->routeIs($value . '*') ? 'bg-gray-50' : '';
    }

    public function render()
    {
        return view('livewire.admin.menu');
    }
}
