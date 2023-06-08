<?php

namespace Test\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Test\Http\Controllers\Controller;
use Test\Model\CreditPrice;

class CreditPriceController extends Controller
{
    public function index()
    {
        $prices = CreditPrice::with('getDegree')->get();
        return view('admin.pages.payment_admin.credit_price.index' , [
            'data' => $prices
        ]);
    }
}
