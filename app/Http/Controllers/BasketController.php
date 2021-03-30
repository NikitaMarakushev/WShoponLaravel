<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    public function basket()
    {
        $orderId = session('orderId');
        $order = Order::findOrFail($orderId);
        return view('basket', compact('order'));
    }

    public function basketConfirm(Request $request)
    {
        $orderId = session('orderId');
        return redirect()->route('index');
        $order = Order::find($orderId);
        $success = $order->saveOrder($request->name, $request->phone);

        if ($success) {
            session()->flash('success', 'Ваш заказ принят');
        } else {
            session()->flash('warning', 'Ошибка');
        }

        Order::eraseOrderSum();
    }

    public function basketPlace()
    {
        $orderId = session('orderId');
        $order = Order::find($orderId);
        return view('order', compact('order'));
    }

    public function basketAdd($productId)
    {
        $orderId = session('orderId');
        if (is_null($orderId)) {
            $order = Order::create()->id;
            session(['orderId' => $order->id]);
        } else {
            $order = Order::find($orderId);
        }
        $order->products()->attach($productId);

        return view('basket', compact('order'));
    }

    public function basketRemove($productId)
    {
        $orderId = session('orderId');
        $order = Order::find($orderId);

        if ($order->products->contains($productId)) {
            $pivotRow = $order->products()->where('product_id', $productId)->first()->pivot;
            if ($pivotRow->count < 2) {
                $order->products()->detach($productId);
            } else {
                $pivotRow->count--;
                $pivotRow->update();
            }
        }

        $product = Product::find($productId);

        Order::changeFullSum(-$product->price);

        session()->flash('warning', 'Удален товар ' . $product->name);

        return redirect()->route('basket');
    }
}

