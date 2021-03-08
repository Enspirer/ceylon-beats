<?php

namespace App\Http\Composers;

use Illuminate\View\View;
use Cart;

/**
 * Class GlobalComposer.
 */
class GlobalComposer
{
    /**
     * Bind data to the view.
     *
     * @param View $view
     */
    public function compose(View $view)
    {
        $itemsCart = Cart::getContent();



        $total = Cart::getTotal();
        $view->with('cartDetails',$itemsCart);
        $view->with('cart_total',$total);
        $view->with('logged_in_user', auth()->user());
    }
}
