<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;
    protected $fillable=[
		'name',
		'description',
		'status',
		'condition',
		'colors',
		'image',
        'meta_title',
        'meta_keyboards',
        'meta_description',
        'price',


	];
}
