<?php

namespace App\Http\Controllers;

use App\Http\Request\ProductsFilterRequest;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(ProductsFilterRequest $request)
    {
        return view('index');
    }

    public function categories()
    {}

    public function category()
    {}

    public function sku()
    {}

    public function subscribe()
    {}

    public function changeLocale()
    {}

    public function changeCurrency()
    {}
}
