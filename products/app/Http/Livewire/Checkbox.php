<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;


class Checkbox extends Component
{
    public $products;
    public $checkbox = [];
    public $delete_checkbox = false;
    

    public function mount() {
        $this->delete_checkbox = false;
        $this->products = Product::all();
    }

    public function updatedCheckbox($value) {
            $this->delete_checkbox = true;
            $this->delete_checkbox = "delete-checkbox";
        
         
    }

    public function delete()
    {
        
        $products = Product::whereKey($this->checkbox);
        $products->delete();
        $this->mount();
    }

    public function render()
    {
        return view('livewire.checkbox');
    }

    
}
