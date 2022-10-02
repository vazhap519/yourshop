<?php

declare(strict_types=1);

namespace App\Http\ViewComposers;

use App\Models\Admin\products;
use Illuminate\View\View;

class NavigationsViewComposer
{
    public function compose(View $view): void
    {
        $products= (new products())->get();
        $view->with('products', $products);
    }
}
