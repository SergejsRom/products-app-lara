<?php

namespace App\Http\Livewire;

use App\Models\Attname;
use App\Models\Attvalue;
use App\Models\Product;
use Livewire\Component;
use Validator;

class ProductForm extends Component
{

    public $SKU;
    public $name;
    public $price;

    public $attnames;
    public $attvalues;

    public $attname;
    public $attvalue = "attvalue.*.att_value";
    public $att_value_name;
    public $att_description;
   

    public $selected = [];
    
    protected $rules = [
        'SKU' => 'required|min:3|unique:products',
        'name' => 'required|min:3',
        'price' => 'required|numeric',
        'attvalue' => 'required|array|min:1',
        'attvalue.*.att_value' => 'required|numeric',
];

    protected $validationAttributes = [
        'SKU' => 'SKU',
        'attvalue.*.att_value' => 'value',
    ];


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
      //  dd($value);
        
        if ($this->attname !== "") {
            $this->attvalues = Attvalue::where('attnames_id', $value)->get();
            $this->attvalue = $this->attvalues->first()->id;
            return $this->attvalue;
        }
        
        $this->mount();
     }

     public function updatedSKU($value) 
     {
        $this->validateOnly('SKU');   
     }

     public function updatedName($value) 
     {
        $this->validateOnly('name');   
     }

     public function updatedPrice($value) 
     {
        $this->validateOnly('price');   
     }

      public function updatedAttvalue($value) 
      {
         $this->validate();   
      }

    //  public function updatedValues($value) 
    //  {
    //     $this->validateOnly('values');   
    //  }
     
}
