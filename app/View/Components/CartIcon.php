<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use \Binafy\LaravelCart\Models\Cart;

class CartIcon extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $total = 0;
        if (auth()->guard('customer')->check()) {
            $cart = Cart::query()
                ->with(
                    [
                        'items',
                        'items.itemable'
                    ]
                )
                ->where('user_id', auth()->guard('customer')->user()->id)
                ->first();
            if ($cart) {
                $total = count($cart->items);
            }
        }

        return view('components.cart-icon', [
            'total' => $total
        ]);
    }
}
