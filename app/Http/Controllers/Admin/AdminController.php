<?php

namespace Test\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Test\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Test\Model\BranchAdmin;
use Test\Model\Group;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	if (Auth::user()->role == 5) {
            return redirect(route('super.index'));
        }

        if (Auth::user()->role == 6) {
    		return redirect(route('student.index'));
    	}
        if (Auth::user()->role == 3) {
            return redirect(route('student.index'));
        }
        if (Auth::user()->role == 8) {
            return redirect(route('stat.index'));
        }
        if (Auth::user()->role == 9) {
            return redirect(route('attendance.index'));
        }
        if (Auth::user()->role == 11) {
            return redirect(route('payment_admin.student.index'));
        }
        if (Auth::user()->role == 12) {
            return redirect('/backoffice/ttj-admin/ttj-admin-students');
        }
        if (Auth::user()->role == 13) {
             return redirect(route('super.index'));
        }
           return view('admin.index');
    }
}
