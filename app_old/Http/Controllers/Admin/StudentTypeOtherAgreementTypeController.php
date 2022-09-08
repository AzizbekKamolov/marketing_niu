<?php

namespace Test\Http\Controllers\Admin;

use Illuminate\Support\Facades\Validator;
use Test\Model\OtherAgreementType;
use Test\Model\StudentTypeOtherAgreementType;
use Illuminate\Http\Request;
use Test\Http\Controllers\Controller;
use Test\Model\Type;

class StudentTypeOtherAgreementTypeController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $type = Type::find($request->type_id);
        $agreement_type = OtherAgreementType::find($request->other_agreement_type_id);
        $validator = Validator::make($request->all(), [
            'type_id' => ['required'],
            'other_agreement_type_id' => ['required'],
        ]);
        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput()->with('other_agreement_type_error' , 1);
        }
        if ($type && $agreement_type) {
            $new = new StudentTypeOtherAgreementType();
            $new->type_id = $type->id;
            $new->other_agreement_type_id = $agreement_type->id;
            $new->save();
            return redirect()->back()->with('success' , 'Malumot saqlandi');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \Test\Model\StudentTypeOtherAgreementType  $studentTypeOtherAgreementType
     * @return \Illuminate\Http\Response
     */
    public function show(StudentTypeOtherAgreementType $studentTypeOtherAgreementType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Test\Model\StudentTypeOtherAgreementType  $studentTypeOtherAgreementType
     * @return \Illuminate\Http\Response
     */
    public function edit(StudentTypeOtherAgreementType $studentTypeOtherAgreementType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Test\Model\StudentTypeOtherAgreementType  $studentTypeOtherAgreementType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StudentTypeOtherAgreementType $studentTypeOtherAgreementType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Test\Model\StudentTypeOtherAgreementType  $studentTypeOtherAgreementType
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $type = StudentTypeOtherAgreementType::where('type_id', $request->type_id)->where('other_agreement_type_id', $request->element_id)->first();
        $type->delete();
        return redirect()->back()->with('success', 'Malumot o`chirildi');
    }
}
