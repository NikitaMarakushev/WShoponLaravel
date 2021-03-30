<?php

namespace App\Http\Middleware;

use App\Models\Order;
use Closure;

class BasketNotEmpty
{
    /**
     * @param $request
     * @param Closure $next
     * @return \Illuminate\Http\RedirectResponse|mixed
     */
    public function handle($request, Closure $next)
    {
        $orderId = session('orderId');

        if (!is_null($orderId) && Order::getFullSum() > 0) {
            return $next($request);
        }

        session()->flash('warning', 'Ваша корзина пуста');
        return redirect()->route('index');
    }
}
