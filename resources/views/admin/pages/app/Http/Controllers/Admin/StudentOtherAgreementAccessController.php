<?php

namespace Test\Http\Controllers\Admin;

use Test\Model\StudentPayment;
use Test\Model\StudentOtherAgreementAccess;
use Illuminate\Http\Request;
use Test\Http\Controllers\Controller;


class StudentOtherAgreementAccessController extends Controller
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
        $student = StudentPayment::find($request->student_id);
        $new_array = [];
        if ($request->access) {
            foreach ($request->access as $key => $value) {
                $new_array[] = $key;
            }
        }
        $old_array = StudentOtherAgreementAccess::where('student_id', $student->id)->pluck('other_agreement_type_id')->toArray();
        $addeds = array_diff($new_array , $old_array);
        $delets = array_diff($old_array , $new_array);
        foreach ($delets as $item) {
            $access = StudentOtherAgreementAccess::where('student_id' , $student->id)->where('other_agreement_type_id' , $item)->delete();
        }
        foreach ($addeds as $added) {
            $new = new StudentOtherAgreementAccess();
            $new->student_id = $student->id;
            $new->other_agreement_type_id = $added;
            $new->save();
        }
        return redirect()->back()->with('success' , 'Ma`lumot saqlandi');
        return $addeds;
        return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param \Test\StudentOtherAgreementAccess $studentOtherAgreementAccess
     * @return \Illuminate\Http\Response
     */
    public function show(StudentOtherAgreementAccess $studentOtherAgreementAccess)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \Test\StudentOtherAgreementAccess $studentOtherAgreementAccess
     * @return \Illuminate\Http\Response
     */
    public function edit(StudentOtherAgreementAccess $studentOtherAgreementAccess)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Test\StudentOtherAgreementAccess $studentOtherAgreementAccess
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StudentOtherAgreementAccess $studentOtherAgreementAccess)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \Test\StudentOtherAgreementAccess $studentOtherAgreementAccess
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudentOtherAgreementAccess $studentOtherAgreementAccess)
    {
        //
    }
}
