<?php

namespace App\Models\Admin\Menus;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
	protected $fillable=[
		'name',
		'link',
		'status',
		'meta_title',
		'meta_keyboards',
		'meta_description',
	];
}
