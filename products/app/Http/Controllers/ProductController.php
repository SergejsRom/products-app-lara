<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Validator;
use App\Http\Livewire\ProductForm;
use App\Models\Attname;
use App\Models\Attvalue;
use Illuminate\Support\Arr;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all()->sortBy('name');
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
      //  dd($request->values);
        $values_input = ($request->values);
        $values_att_name = ($request->att_value_name);
        // $values_input = implode(",", $values_input);
        // $values_att_name = implode(",", $values_att_name);
    // dd($values_att_name);
      //  $values_together = [$values_input, $values_att_name];
      //  $values_together = json_encode($values_together);
   // $values_input = json_encode($values_input);
  //  $values_att_name = json_encode($values_att_name);
       // dd($values_input);
      
        //$values_all = json_encode($request->values);
        //$values_all = implode(",", $values_all);
        

        // $request->merge(['vlaues' => $values_array]);
    //dd($values_all);
        Product::create([
            'values' => $values_input,
            'SKU' => $request->input('SKU'),
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'attributes' => $request->input('attributes'),
            'att_value_name' => $values_att_name,
            
        ]);        
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
