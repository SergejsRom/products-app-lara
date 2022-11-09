<?php

namespace App\Http\Livewire;

use App\Models\Attname;
use App\Models\Attvalue;
use App\Models\Product;
use Livewire\Component;

class ProductForm extends Component
{
    public $attnames;
    public $attvalues;

    public $attname;
    public $attvalue;


    public function mount()
    {
        $this->attnames = Attname::all();
        $this->attvalues = collect();
       
    }

    public function render()
    {
        return view('livewire.product-form');
    }

    // public function updatedAttname($value) 
    // {
    //     $this->attvalues = Attvalue::where('attnames_id', $value)->get();
    //     $this->attvalue = $this->attvalues->first()->id;
    // }
    public function updatedAttname($value)
    {
        
        $this->attvalues = Attvalue::where('attnames_id', $value)->get();
        $this->attvalue = $this->attvalues->first()->id;
        
    }
}
