<?php

namespace Test\Exports;

use Test\Model\SuperLyceum;
//use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

class LyceumExportAll implements FromView
{
    public function view(): View
    {
        $supers = SuperLyceum::all();
        return view('admin.pages.lyceum_super.export.all' , [
            'data' => $supers
        ]);
    }
}
