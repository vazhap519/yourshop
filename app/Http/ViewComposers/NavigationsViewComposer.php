<?php

declare(strict_types=1);

namespace App\Http\ViewComposers;

use App\Models\Admin\Product;
use Illuminate\View\View;

class NavigationsViewComposer
{
    public function compose(View $view): void
    {
        $product= (new Product())->get();
        $view->with('product', $product);
    }
}
