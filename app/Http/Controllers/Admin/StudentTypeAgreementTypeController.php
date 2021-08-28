<?php

namespace Test\Http\Controllers\Admin;

use Illuminate\Support\Facades\Validator;
use Test\Model\AgreementType;
use Test\Model\StudentTypeAgreementType;
use Illuminate\Http\Request;
use Test\Http\Controllers\Controller;
use Test\Model\Type;


class StudentTypeAgreementTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        return $request;
        $type = Type::find($request->type_id);
        $agreement_type = AgreementType::find($request->agreement_type_id);
        $validator = Validator::make($request->all(), [
            'type_id' => ['required'],
            'agreement_type_id' => ['required'],
            'price_part1' => ['required'],
            'price_part2' => ['required'],
            'price_part1_word' => ['required'],
            'price_part2_word' => ['required'],
        ]);
        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput()->with('agreement_type_error' , 1);
        }
        if ($type && $agreement_type) {
            $new = new StudentTypeAgreementType();
            $new->type_id = $type->id;
            $new->agreement_type_id = $agreement_type->id;
            $new->price_part1 = $request->price_part1;
            $new->price_part2 = $request->price_part2;
            $new->price_part1_word = $request->price_part1_word;
            $new->price_part2_word = $request->price_part2_word;
            $new->save();
            return redirect()->back()->with('success' , 'Malumot saqlandi');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \Test\Model\StudentTypeAgreementType $studentTypeAgreementType
     * @return \Illuminate\Http\Response
     */
    public function show(StudentTypeAgreementType $studentTypeAgreementType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \Test\Model\StudentTypeAgreementType $studentTypeAgreementType
     * @return \Illuminate\Http\Response
     */
    public function edit(StudentTypeAgreementType $studentTypeAgreementType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Test\Model\StudentTypeAgreementType $studentTypeAgreementType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StudentTypeAgreementType $studentTypeAgreementType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \Test\Model\StudentTypeAgreementType $studentTypeAgreementType
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $type = StudentTypeAgreementType::where('type_id', $request->type_id)->where('agreement_type_id', $request->element_id)->first();
        $type->delete();
        return redirect()->back()->with('success', 'Malumot o`chirildi');
//        return $type;
    }
}
