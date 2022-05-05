<?php

namespace Test\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Test\Http\Controllers\Controller;
use Test\Imports\CreditImport;
use Test\Model\Credit;
use Test\Model\StudentPayment;

class CreditController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Credit::pluck('id_code');
        $students = StudentPayment::whereIn('id_code' , $data)->with('credits')->get();
//        return $students[0]->credits->sum('credits');
        return view('admin.pages.payment_admin.credits.credits_index' , [
            'data' => $students
        ]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function import(Request $request)
    {
        $request->validate([
            'file' => ['required' , 'file']
        ]);
        $file = $request->file('file');
        $response = \Excel::toCollection(new CreditImport , $file);
        if (count($response) >= 1){
        $sum = $response[0]->sum('credits');
            return view('admin.pages.payment_admin.credits.importInfo')->with([
                'data' => $response[0],
                'sum' => $sum
            ]);
        }
        return $response[0];
    }

    public function import_save(Request $request)
    {
         $request->validate([
            'description' => ['required' , 'string'],
            'array' => ['required']
        ]);
        $description = $request->description;
        $array = json_decode($request->array);
        foreach ($array as $item) {
            $new_payment = new Credit();
            $new_payment->credits = $item->credits;
            $new_payment->id_code = $item->id;
            $new_payment->description = $description;
            $new_payment->save();
        }
        return redirect(route('payment_admin.credits.index'))->with('success' , 'Import qilindi');
    }
}
