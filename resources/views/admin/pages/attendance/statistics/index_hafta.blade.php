@extends('layouts.admin_jamshid')

@section('content')

<style type="text/css">
    .pagination li a{
        padding: 12px;
        border: 1px solid #E8EEF3;
        margin-left: 2px;
        margin-right: 2px;
    }
    .pagination li.active span{
        padding: 12px;
        border: 1px solid #E8EEF3 !important;
        background-color: #5f76e8;
        margin-left: 5px;
        margin-right: 5px;
        color: white;
    }
    .border-default{
        border: 1px solid #E8EEF3 ;

    }
    .last-td{
        width: 1px;
        padding-left: 3px !important;
        padding-right: 3px !important;
        text-align: center
    }
    .btn-default{
        border: 1px solid black;
        border-radius: 50%;
    }
    table{
        width: 100%;
    }
    table , td, th {
        border: 1px solid #595959;
        border-collapse: collapse;
    }
    td, th {
        padding: 9px;
        width: 30px;
        height: 25px;
    }
    th {
        background: #f0e6cc;
    }
    .even {
        background: #fbf8f0;
    }
    .odd {
        background: #fefcf9;
    }
    td{
        text-align: center;
    }
    td input{
        max-width: 70px;
    }
    .date{
        padding: 5px;
        background-color: green;
        color: white;
        font-weight: bold;
        border-radius: 3px;
    }
    .date2{
        margin-bottom: 15px;
        margin-top: -22px;

    }
    .border-table-date{
        border: 1px solid green;
        border-radius: 5px;
        padding: 10px;
        margin-bottom: 20px;
    }
    .table-responsive{
        max-height: 600px;
        overflow: hidden;
        overflow-y: scroll;
        overflow-x: scroll;
    }

</style>

            <div class="container-fluid">
          
                <div class="row">
                   
                   
                    <div class="col-12">
                        <div class="card">
                        
                            <div class="card-body">
                                <div style="display: flex; justify-content: space-between; padding-bottom: 15px;">
                                      <div class="">
                                          <h4 class="card-title">Oldingi kun davomatlari </h4>
                                      
                                      </div>

                                        <div style="display: flex;">
                                      <form action="{{ route('statistic_by_date') }}" method="post">
                                          {{ csrf_field() }}
                                     
                                          <div style="display: flex;">
                                              <input type="date" name="date_attendance" class="form-control" value="{{ $date }}">
                                              <button class="btn btn-success"><i class="fa fa-search" aria-hidden="true"></i></button>
                                          </div>
                                       </form>
                                      <div>
                                          <button class="btn btn-light button_excel" onclick="tabletoexcel('table_to_excel')">Excel export</button>
                                      </div>
                                     </div>
                                     
                                     
                                </div>
                              
                              <div class="border-table-date">
                                  <div class="col-md-12 date2">
                                      <span class="date">
                                          {{ $date }}-uchun davomat hisoboti
                                      </span>
                                  </div>
                                  <div id="birnarsa">
                                      
                                  </div>
                                <div class="table-responsive" id="grid">
                                   
                                    <table  id="table2excel"  class="table table-striped table-bordered no-wrap table_to_excel">
                                        <thead>
                                            <tr>
                                                <td data-field="tr" >#</td>
                                                <td data-field="nomi">Nomi</td>
                                                <td data-field="grsoni">Guruhlar soni</td>
                                                <td data-field="oqsoni">O'quvchilar soni</td>
                                                <td data-field="foyiz">Qatnashish ko'rsatkichi (%)</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                            $i = 0;
                                            @endphp
                                            @foreach($data as $item)
                                            <tr data-href="">
                                                <td>{{ ++$i }}</td>
                                                <td>
                                                    {{ $item->name }}
                                                </td>
                                                <td>
                                                    {{ count($item->groups) }}
                                                </td>
                                                <td>
                                                    {{ $item->studentCount() }}
                                                </td>
                                                <td>
                                                    @php
                                                    $att = 'Test\Model\Attendance'::where('faculty_id' , $item->id)->where('date' , $date)->get();
                                                    $tt = 0;
                                                    foreach ($att as $value) {

                                                        if ($value->lesson_count) {
                                                            $tt = $tt + ($value->have1 + $value->have2 + $value->have3 + $value->have4 + $value->have5)/($value->lesson_count*$value->group->students_count);
                                                        }
                                                    }
                                                    @endphp
                                                    @if(count($att))
                                                    {{ round($tt/count($att)*100 , 2) }} %
                                                    @endif
                                                </td>
                                               
                                            </tr>
                                            @endforeach                                    
                                        </tbody>

                                 
                                    </table>
                                </div>
                              </div>
                              
                            </div>
                      
                         
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                        
                            <div class="card-body">
                                <div style="display: flex; justify-content: space-between; padding-bottom: 15px;">
                                      <div class="">
                                          <h4 class="card-title">Solishtirma jadval </h4>
                                      
                                      </div>

                                        <div style="display: flex;">
                                      {{-- <form action="{{ route('statistic_by_date') }}" method="post">
                                          {{ csrf_field() }}
                                     
                                          <div style="display: flex;">
                                              <input type="date" name="date_attendance" class="form-control" value="{{ $date }}">
                                              <button class="btn btn-success"><i class="fa fa-search" aria-hidden="true"></i></button>
                                          </div>
                                       </form> --}}
                                      <div>
                                          <button class="btn btn-light button_excel" onclick="tabletoexcel('table_to_excel2')">Excel export</button>
                                      </div>
                                     </div>
                                     
                                     
                                </div>
                              
                              <div class="border-table-date">
                                  <div class="col-md-12 date2">
                                    @php
                                    if (date('w' , strtotime($date.'-1 day')) == 6) {
                                        $date_old = date('Y-m-d' , strtotime($date.'-3 day'));
                                    }
                                    else{
                                        $date_old = date('Y-m-d' , strtotime($date.'-1 day'));

                                    }
                                    $date_old = date('Y-m-d' , strtotime($date.'-1 day'));
                                    $date_old1 = date('Y-m-d' , strtotime($date.'-2 day'));
                                    $date_old2 = date('Y-m-d' , strtotime($date.'-3 day'));
                                    $date_old3 = date('Y-m-d' , strtotime($date.'-4 day'));
                                    $date_old4 = date('Y-m-d' , strtotime($date.'-5 day'));
                                    @endphp
                                      <span class="date">
                                        {{-- {{ date('w' , strtotime($date.'-1 day')) }} --}}
                                          {{-- {{ $date }} va {{ date('Y-m-d' , strtotime($date . '-1 day')) }}-uchun davomat hisoboti --}}
                                          {{ $date }} va {{ $date_old }}-uchun davomat hisoboti
                                      </span>
                                  </div>
                                  <div id="birnarsa">
                                      
                                  </div>
                                <div class="table-responsive" id="grid">
                                   
                                    <table  id="table2excel"  class="table table-striped table-bordered no-wrap table_to_excel2">
                                        <thead>
                                            <tr>
                                                <td data-field="tr" rowspan="2">#</td>
                                                <td data-field="nomi" rowspan="2">Nomi</td>
                                                <td data-field="grsoni" rowspan="2">Guruhlar soni</td>
                                                <td data-field="oqsoni" rowspan="2">O'quvchilar soni</td>
                                                <td data-field="foyiz" colspan="6">Qatnashish ko'rsatkichi (%)</td>
                                            </tr>
                                            <tr>
                                               
                                                <td data-field="foyiz"> {{ $date }}</td>
                                                <td data-field="foyiz">{{ $date_old }}</td>
                                                <td data-field="foyiz">{{ $date_old1 }}</td>
                                                <td data-field="foyiz">{{ $date_old2 }}</td>
                                                <td data-field="foyiz">{{ $date_old3 }}</td>
                                                <td data-field="foyiz">{{ $date_old4 }}</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                            $i = 0;
                                            @endphp
                                            @foreach($data as $item)
                                            <tr data-href="">
                                                <td>{{ ++$i }}</td>
                                                <td>
                                                    {{ $item->name }}
                                                </td>
                                                <td>
                                                    {{ count($item->groups) }}
                                                </td>
                                                <td>
                                                    {{ $item->studentCount() }}
                                                </td>
                                                <td>
                                                    @php
                                                    $att = 'Test\Model\Attendance'::where('faculty_id' , $item->id)->where('date' , $date)->get();
                                                    $tt = 0;
                                                    foreach ($att as $value) {

                                                        if ($value->lesson_count) {
                                                            $tt = $tt + ($value->have1 + $value->have2 + $value->have3 + $value->have4 + $value->have5)/($value->lesson_count*$value->group->students_count);
                                                        }
                                                    }
                                                    @endphp
                                                    @if(count($att))
                                                    {{ round($tt/count($att)*100 , 2) }} %
                                                    @endif
                                                </td>
                                                <td>
                                                    @php
                                                    $date2 = $date_old;
                                                    
                                                    $att2 = 'Test\Model\Attendance'::where('faculty_id' , $item->id)->where('date' , $date2)->get();
                                                    $tt2 = 0;
                                                    foreach ($att2 as $value) {

                                                        if ($value->lesson_count) {
                                                            $tt2 = $tt2 + ($value->have1 + $value->have2 + $value->have3 + $value->have4 + $value->have5)/($value->lesson_count*$value->group->students_count);
                                                        }
                                                    }
                                                    @endphp
                                                    @if(count($att2))
                                                    {{ round($tt2/count($att2)*100 , 2) }} %
                                                    @endif
                                                    @php
                                                    $diff = null;
                                                    if(count($att2) && count($att)){

                                                        $diff = $tt/count($att)*100 - $tt2/count($att2)*100;
                                                    }

                                                    @endphp
                                                </td>
                                                <td>
                                                    @php
                                                    $date2 = $date_old1;
                                                    
                                                    $att2 = 'Test\Model\Attendance'::where('faculty_id' , $item->id)->where('date' , $date2)->get();
                                                    $tt2 = 0;
                                                    foreach ($att2 as $value) {

                                                        if ($value->lesson_count) {
                                                            $tt2 = $tt2 + ($value->have1 + $value->have2 + $value->have3 + $value->have4 + $value->have5)/($value->lesson_count*$value->group->students_count);
                                                        }
                                                    }
                                                    @endphp
                                                    @if(count($att2))
                                                    {{ round($tt2/count($att2)*100 , 2) }} %
                                                    @endif
                                                    @php
                                                    $diff = null;
                                                    if(count($att2) && count($att)){

                                                        $diff = $tt/count($att)*100 - $tt2/count($att2)*100;
                                                    }

                                                    @endphp
                                                </td>
                                                <td>
                                                    @php
                                                    $date2 = $date_old2;
                                                    
                                                    $att2 = 'Test\Model\Attendance'::where('faculty_id' , $item->id)->where('date' , $date2)->get();
                                                    $tt2 = 0;
                                                    foreach ($att2 as $value) {

                                                        if ($value->lesson_count) {
                                                            $tt2 = $tt2 + ($value->have1 + $value->have2 + $value->have3 + $value->have4 + $value->have5)/($value->lesson_count*$value->group->students_count);
                                                        }
                                                    }
                                                    @endphp
                                                    @if(count($att2))
                                                    {{ round($tt2/count($att2)*100 , 2) }} %
                                                    @endif
                                                    @php
                                                    $diff = null;
                                                    if(count($att2) && count($att)){

                                                        $diff = $tt/count($att)*100 - $tt2/count($att2)*100;
                                                    }

                                                    @endphp
                                                </td>
                                                <td>
                                                    @php
                                                    $date2 = $date_old3;
                                                    
                                                    $att2 = 'Test\Model\Attendance'::where('faculty_id' , $item->id)->where('date' , $date2)->get();
                                                    $tt2 = 0;
                                                    foreach ($att2 as $value) {

                                                        if ($value->lesson_count) {
                                                            $tt2 = $tt2 + ($value->have1 + $value->have2 + $value->have3 + $value->have4 + $value->have5)/($value->lesson_count*$value->group->students_count);
                                                        }
                                                    }
                                                    @endphp
                                                    @if(count($att2))
                                                    {{ round($tt2/count($att2)*100 , 2) }} %
                                                    @endif
                                                    @php
                                                    $diff = null;
                                                    if(count($att2) && count($att)){

                                                        $diff = $tt/count($att)*100 - $tt2/count($att2)*100;
                                                    }

                                                    @endphp
                                                </td>
                                                <td>
                                                    @php
                                                    $date2 = $date_old4;
                                                    
                                                    $att2 = 'Test\Model\Attendance'::where('faculty_id' , $item->id)->where('date' , $date2)->get();
                                                    $tt2 = 0;
                                                    foreach ($att2 as $value) {

                                                        if ($value->lesson_count) {
                                                            $tt2 = $tt2 + ($value->have1 + $value->have2 + $value->have3 + $value->have4 + $value->have5)/($value->lesson_count*$value->group->students_count);
                                                        }
                                                    }
                                                    @endphp
                                                    @if(count($att2))
                                                    {{ round($tt2/count($att2)*100 , 2) }} %
                                                    @endif
                                                    @php
                                                    $diff = null;
                                                    if(count($att2) && count($att)){

                                                        $diff = $tt/count($att)*100 - $tt2/count($att2)*100;
                                                    }

                                                    @endphp
                                                </td>
                                                <style type="text/css">
                                                    .green{
                                                        background-color: #8CE17C;
                                                    }
                                                    .red{
                                                        background-color: #E17376;
                                                        color: white;
                                                    }
                                                </style>
                                               {{--  <td @if($diff > 0) class="green" @elseif($diff < 0) class="red" @else @endif>
                                                    @if($diff != null)
                                                    {{ round($diff , 2) }} %
                                                    @endif
                                                    @if($diff < 0) <i class="fa fa-arrow-down" aria-hidden="true"></i> @endif
                                                    @if($diff > 0) <i class="fa fa-arrow-up" aria-hidden="true"></i> @endif
                                                </td> --}}
                                               
                                            </tr>
                                            @endforeach                                    
                                        </tbody>

                                 
                                    </table>
                                </div>
                              </div>
                              
                            </div>
                      
                         
                        </div>
                    </div>
                   
                   
                </div>
            </div>

@endsection
@section('js')
<script type="text/javascript">


</script>
@endsection
