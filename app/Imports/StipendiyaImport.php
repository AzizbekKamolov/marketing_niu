<?php

namespace Test\Imports;


use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Test\Model\Scholarship;
use Test\Model\Month;
use Test\Model\Year;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class StipendiyaImport implements ToCollection, WithHeadingRow
{
     public function collection(Collection $rows)
    {
        foreach ($rows as $row)
        {
            $year = Year::where('name' , $row['year'])->first();
            $month = Month::where('index' , $row['month_id'])->where('year_id' , $year->id)->first();
            Scholarship::create([
                'id_code' => $row['id_code'],
                'month_id' => $month->id,
            ]);
        }
    }
}
