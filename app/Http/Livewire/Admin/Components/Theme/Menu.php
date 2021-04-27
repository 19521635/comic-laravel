<?php

namespace App\Http\Livewire\Admin\Components\Theme;

use Livewire\Component;
use App\Models\Menu as MenuModel;

class Menu extends Component
{
    public $title, $url, $style_id, $parent_id;

    public $menus;

    public function mount() {
        if ($this->parent_id == 0) {
            $this->parent_id = 0;
        } else {
            $this->parent_id = $this->parent_id;
        }

    }

    public function render()
    {
        $this->menus = MenuModel::where('parent_id', 0)->get();

        return view('livewire.admin.components.theme.menu')->layout('layouts.admin');
    }

    public function create() {
        $this->validate([
            'title' => 'required|max:20',
            'url' => 'required|unique:menus,url|max:100',
            'style_id' => 'between:1,2',
            'parent_id' => 'required|numeric'
        ]);

        $newItem = MenuModel::updateOrCreate(['url' => $this->url],[
            'title' => $this->title,
            'style_id' => $this->style_id,
            'parent_id' => $this->parent_id 
        ]);
        
        if ($newItem->wasRecentlyCreated) {
            session()->flash('message', 'Thêm thành công.');
        }
        if (!$newItem->wasRecentlyCreated && $newItem->wasChanged()) {
            session()->flash('message', 'Thay đổi thành công.');
        }
        if (!$newItem->wasRecentlyCreated && !$newItem->wasChanged()) {
            session()->flash('message', 'Thêm thất bại.');
        }
    }
}
