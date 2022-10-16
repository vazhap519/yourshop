<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table='product';
    protected $fillable=[
        'name',
        'description',
        'status',
        'condition',
        'quantity',
        'colors',
        'image',
        'meta_title',
        'meta_keyboards',
        'meta_description',
        'price',
        'sale_price',
	];
}
