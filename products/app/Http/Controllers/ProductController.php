<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all()->sortBy('SKU');
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mb = ['MB'];
        $furniture = ['width', 'height', 'lenght'];
        $books = ['weight'];
       $att = ['DVD', 'Furniture', 'Books'];
       // foreach ($att as $attr) {
        if ($att == 'DVD') {
            return $mb;
        }
        elseif ($att == 'Furniture') {
            return $furniture;
        }
        elseif ($att == 'Books') {
            return $books;
        }
       // return $att;
    //    }
       
        return view('products.create', compact('att'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // define('attributes', [
        //     'DVD',
        //     'Furniture',
        //     'Books'
        //   ]); 
        // $attributes = match ($att) {
        //     "DVD" => ["MB"],
        //     "Furniture" => ["W", "H", "L"],
        //     "Books" => ["Weight"],
        //     default => [],
        // };
        

        Product::create([
            'SKU' => $request->input('SKU'),
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'attributes' => $request->input('attribute'),
            'MB' => $request->input('MB'),
            'Weight' => $request->input('Weight'),
            'Width' => $request->input('Width'),
            'Height' => $request->input('Height'),
            'Lenght' => $request->input('Lenght'),
            
        ]);
        $attributes = ['DVD', 'Furniture', 'Books'];
        $att_values = [
            'MB' => false,
            'Weight' => false,
            'Width' => false,
            'Height' => false,
            'Lenght' => false,
        ];
    
        foreach ($attributes as $attribute) {
            match($attribute) {
                'Furniture' => [
                    $att_values['Width'] = true,
                    $att_values['Height'] = true,
                    $att_values['Lenght'] = true,
                ],
                'DVD' => $att_values['MB'] = true,
                'Books' => $att_values['Weight'] = true,
            };
        }
    
        var_export($att_values);
       
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
