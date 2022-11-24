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
                        <form action="{{route('attendance.store')}}" method="post">
                            {{csrf_field()}}
                            <div class="card-body">
                                <div style="display: flex; justify-content: space-between; padding-bottom: 15px;">
                                      <div class="col-md-6">
                                          <h4 class="card-title">Oldingi kun davomatlari </h4>
                                      </div>
                                      {{-- <div style=" display: flex; justify-content: flex-start;" class="col-md-6">
                                          <div style="margin-right: 10px;">
                                              <b>Oraliqni tanlang</b>
                                          </div>
                                          <div  style="margin-right: 10px;">
                                              <input type="date" name="" class="form-control" value="{{$start_date}}">
                                          </div>
                                           <div  style="margin-right: 10px;">
                                              <input type="date" name="" class="form-control" value="{{$end_date}}">
                                          </div>
                                          <div style="margin-right: 10px;">
                                              <button class="btn btn-success">OK</button>
                                          </div>
                                      </div> --}}
                                     
                                </div>
                               @foreach($data as $key=>$item)
                              <div class="border-table-date">
                                  <div class="col-md-12 date2">
	                                  <span class="date">
	                                      {{ $key }}
	                                  </span>
	                              </div>
                                <div class="table-responsive">
                                   
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td rowspan="2">Kurs</td>
                                                <td rowspan="2">Guruh</td>
                                                <td rowspan="2">Jami</td>
                                                <td colspan="2">1-dars</td>
                                                <td colspan="2">2-dars</td>
                                                <td colspan="2">3-dars</td>
                                                <td colspan="2">4-dars</td>
                                                <td colspan="2">5-dars</td>
                                                <td colspan="2">6-dars</td>
                                                <td ></td>
                                            </tr>
                                            <tr>
                                                
                                                <td>qatnashdi</td>
                                                <td>foiz</td>
                                                <td>qatnashdi</td>
                                                <td>foiz</td>
                                                <td>qatnashdi</td>
                                                <td>foiz</td>
                                                <td>qatnashdi</td>
                                                <td>foiz</td>
                                                <td>qatnashdi</td>
                                                <td>foiz</td>
                                                <td>qatnashdi</td>
                                                <td>foiz</td>
                                                <td>Jami foiz</td>
                                            </tr>
                                            @foreach ($item as $it)
                                                <tr>
                                                    <td>
                                                        {{$it->group->course}}
                                                    </td>
                                                    <td>
                                                        {{$it->group->name}}
                                                    </td>
                                                    <td>
                                                        {{$it->group->students_count}}
                                                    </td>
                                                    <td>
                                                        {{$it->have1}}
                                                    </td>
                                                    <td>
                                                        {{round($it->have1/$it->group->students_count*100 , 2)}}%
                                                    </td>
                                                    <td>
                                                        {{$it->have2}}
                                                    </td>
                                                    <td>
                                                        {{round($it->have2/$it->group->students_count*100 , 2)}}%
                                                    </td>
                                                    <td>
                                                        {{$it->have3}}
                                                    </td>
                                                    <td>
                                                        {{round($it->have3/$it->group->students_count*100 , 2)}}%
                                                    </td>
                                                    <td>
                                                        {{$it->have4}}
                                                    </td>
                                                    <td>
                                                        {{round($it->have4/$it->group->students_count*100 , 2)}}%
                                                    </td>
                                                    <td>
                                                        {{$it->have5}}
                                                    </td>
                                                    <td>
                                                        {{round($it->have5/$it->group->students_count*100 , 2)}}%
                                                    </td>
                                                    <td>
                                                        {{$it->have6}}
                                                    </td>
                                                    <td>
                                                        {{round($it->have6/$it->group->students_count*100 , 2)}}%
                                                    </td>
                                                    <td></td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                              </div>
                                @endforeach
                            </div>
                        </form>
                             
                         
                        </div>
                    </div>
                   
                   
                </div>
            </div>

@endsection
