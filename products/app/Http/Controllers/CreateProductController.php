<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateProductController extends Controller
{
    public function CreateProduct() {
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
    }
}
