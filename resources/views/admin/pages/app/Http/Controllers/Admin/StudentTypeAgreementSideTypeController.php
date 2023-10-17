<?php

namespace Test\Http\Controllers\Admin;

use Illuminate\Support\Facades\Validator;
use Test\Model\AgreementSideType;
use Test\Model\AgreementType;
use Test\Model\StudentTypeAgreementSideType;
use Illuminate\Http\Request;
use Test\Http\Controllers\Controller;
use Test\Model\Type;


class StudentTypeAgreementSideTypeController extends Controller
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
//        return $request;
        $type = Type::find($request->type_id);
        $agreement_type = AgreementSideType::find($request->agreement_side_type_id);
        $validator = Validator::make($request->all(), [
            'type_id' => ['required'],
            'agreement_side_type_id' => ['required'],
        ]);
        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput()->with('agreement_side_type_error' , 1);
        }
        if ($type && $agreement_type){
            $new = new StudentTypeAgreementSideType();
            $new->type_id = $type->id;
            $new->agreement_side_type_id = $agreement_type->id;
            $new->save();
            return redirect()->back()->with('success' , 'Malumot saqlandi');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \Test\Model\StudentTypeAgreementSideType  $studentTypeAgreementSideType
     * @return \Illuminate\Http\Response
     */
    public function show(StudentTypeAgreementSideType $studentTypeAgreementSideType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Test\Model\StudentTypeAgreementSideType  $studentTypeAgreementSideType
     * @return \Illuminate\Http\Response
     */
    public function edit(StudentTypeAgreementSideType $studentTypeAgreementSideType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Test\Model\StudentTypeAgreementSideType  $studentTypeAgreementSideType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StudentTypeAgreementSideType $studentTypeAgreementSideType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Test\Model\StudentTypeAgreementSideType  $studentTypeAgreementSideType
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
//        return $request;
        $type = StudentTypeAgreementSideType::where('type_id',$request->type_id)->where('agreement_side_type_id' , $request->element_id)->first();
        $type->delete();
        return redirect()->back()->with('success' , 'Malumot o`chirildi');
//        return $type;
    }
}
