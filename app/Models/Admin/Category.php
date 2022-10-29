<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    use HasFactory;
    protected $table='categoryes';
    protected $fillable=[
        'name',
        'slug',
        'description',
        'image',
        'meta_title',
        'meta_keyboards',
        'meta_description',
        'status',
    ];
}
