<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;


class Checkbox extends Component
{
    public $products;
    public $checkbox = [];

    public function mount() {
        
        $this->products = Product::all();
    }

    public function render()
    {
        return view('livewire.checkbox');
    }
}
