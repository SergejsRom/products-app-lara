<?php

namespace App\Http\Livewire;

use App\Models\Attname;
use App\Models\Attvalue;
use App\Models\Product;
use Livewire\Component;

class ProductForm extends Component
{

    public $SKU;
    public $name;
    public $price;

    public $attnames;
    public $attvalues;

    public $attname;
    public $attvalue = [];
    public $att_value_name;

    public $selected = [];
    
    protected $rules = ['SKU' => 'min:3|unique:products'];


     public function mount()
     {
         $this->attnames = Attname::all();
         $this->attvalues = collect();
       
     }

    public function render()
    {
        return view('livewire.product-form');
    }

     public function updatedAttname($value) 
     {
         $this->validate();
         $this->attvalues = Attvalue::where('attnames_id', $value)->get();
         $this->attvalue = $this->attvalues->first()->id;
         
        //dd($this->attvalue);
     }
     public function updatedSKU($value) 
     {
        $this->validateOnly('SKU');
     }
     
}
