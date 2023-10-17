<?php

namespace Test\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Test\Http\Controllers\Controller;
use Test\Model\CreditPrice;
use Test\Model\Type;

class TypeController extends Controller
{
    public function edit($id)
    {
        $type = Type::query()->findOrFail($id);
        $creditPrices = CreditPrice::query()->get();
        return view('admin.pages.payment_admin.student_types.edit', compact('type', 'creditPrices'));
    }


    public function update(Request $request, $id)
    {
        $type = Type::query()->findOrFail($id);
        $request->validate([
           'name' => 'required',
           'comment' => 'required',
           'degree' => 'required',
           'part1' => 'required',
           'part2' => 'required',
        ]);
        $type->name = $request->name;
        $type->comment = $request->comment;
        $type->degree = $request->degree;
        $type->contract_type = $request->contract_type;
        $type->part1 = $request->part1;
        $type->part2 = $request->part2;
        $type->update();
        return redirect()->route('payment_admin.student_types')->with('success', "Ma'lumotlar muvaffaqiyatli yangilandi");
    }
    public function destroy($id)
    {
        $type = Type::query()->findOrFail($id);
        $type->delete();
        return redirect()->route('payment_admin.student_types')->with('success', "Ma'lumotlar muvaffaqiyatli o'chirildi");

    }
}
