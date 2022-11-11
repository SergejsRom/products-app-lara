<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['SKU', 'name', 'price', 'attributes', 'att_value_name', 'values'];
    protected $attributes = [
        'values' => "{}",
        'att_value_name' => "{}",
    ];
    
    use HasFactory;
}
