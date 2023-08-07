<?php

namespace Test\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Test\Http\Controllers\Controller;
use Test\Model\CreditPrice;
use Test\Model\StudentDegree;

class CreditPriceController extends Controller
{
    public function index()
    {
        $prices = CreditPrice::with('getDegree')->get();
        return view('admin.pages.payment_admin.credit_price.index' , [
            'data' => $prices
        ]);
    }

    public function edit($id)
    {
        $studentDegrees = StudentDegree::query()->get();
        $prices = CreditPrice::with('getDegree')->findOrFail($id);
        return view('admin.pages.payment_admin.credit_price.edit' , [
            'data' => $prices,
            'studentDegrees' => $studentDegrees
        ]);
    }
    public function create()
    {
        $studentDegrees = StudentDegree::query()->get();
        return view('admin.pages.payment_admin.credit_price.create', compact('studentDegrees'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
           'degree' => 'required',
           'price' => 'required',
        ]);
        $prices = CreditPrice::with('getDegree')->findOrFail($id);
        $prices->degree = $request->degree;
        $prices->price = $request->price;
        $prices->update();
        return redirect()->route("credit_prices.index")->with('success', "Kredit narxlari yangilandi");
    }

    public function store(Request $request)
    {
        $request->validate([
            'degree' => 'required',
            'price' => 'required|numeric',
        ]);
        CreditPrice::query()->create([
           'degree' => $request->degree,
           'price' => $request->price,
        ]);
        return redirect()->route("credit_prices.index")->with('success', "Kredit narxlari yaratildi");
    }
    public function destroy($id)
    {
        $prices = CreditPrice::with('getDegree')->findOrFail($id);
        $prices->delete();
        return redirect()->route("credit_prices.index")->with('success', "Kredit narxlari yangilandi");
    }
}
