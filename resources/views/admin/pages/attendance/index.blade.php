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

</style>

            <div class="container-fluid">
          
                <div class="row">
                   
                    <div class="col-12">
                        <div class="card">
                        <form action="{{route('attendance.store')}}" method="post">
                            {{csrf_field()}}
                            <div class="card-body">
                                <div class="col-md-12 text-center">
                                    <p style=" font-size: 21px;">
                                        Diqqat! Davomatni saqlash imkoniyati har kuni <b><i class="far fa-clock"></i> 17:30</b> gacha mavjud bo'ladi
                                    </p>
                                    @if(!count($data))
                                    <p style=" font-size: 21px; color: red;">
                                        Iltimos oldin guruhlarni shakillantiring (Guruhlar->Yangi guruh)
                                    </p>
                                    @endif
                                </div>
                                <div style="display: flex; justify-content: space-between; padding-bottom: 15px;">
                                      <div>
                                          <h4 class="card-title">{{ date('d-m-Y') }} uchun davomat</h4>
                                      </div>
                                      @if($permission)
                                      <div>
                                        <button class="btn btn-success">Davomatni saqlash</button>
                                    </div>
                                      @endif
                                     
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
                                            @foreach ($data as $item)
                                                <tr>
                                                    <td>
                                                        {{$item->course}}
                                                    </td>
                                                    <td>
                                                        {{$item->name}}
                                                    </td>
                                                    <td>
                                                        {{$item->students_count}}
                                                    </td>
                                                    <td>
                                                        <input type="number" name="have[{{$item->id}}][have1]" value="{{$item->have1}}" >
                                                    </td>
                                                    <td>
                                                        @if($item->students_count>0)
                                                        {{round($item->have1/$item->students_count*100 , 2)}}%
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <input type="number" name="have[{{$item->id}}][have2]" value="{{$item->have2}}">
                                                    </td>
                                                    <td>
                                                        @if($item->students_count>0)
                                                        {{round($item->have2/$item->students_count*100 , 2)}}%
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <input type="number" name="have[{{$item->id}}][have3]" value="{{$item->have3}}">
                                                    </td>
                                                    <td>
                                                        @if($item->students_count>0)
                                                        {{round($item->have3/$item->students_count*100 , 2)}}%
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <input type="number" name="have[{{$item->id}}][have4]" value="{{$item->have4}}">
                                                    </td>
                                                    <td>
                                                        @if($item->students_count>0)
                                                        {{round($item->have4/$item->students_count*100 , 2)}}%
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <input type="number" name="have[{{$item->id}}][have5]" value="{{$item->have5}}">
                                                    </td>
                                                    <td>
                                                        @if($item->students_count>0)
                                                        {{round($item->have5/$item->students_count*100 , 2)}}%
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <input type="number" name="have[{{$item->id}}][have6]" value="{{$item->have6}}">
                                                    </td>
                                                    <td>
                                                        @if($item->students_count>0)
                                                        {{round($item->have6/$item->students_count*100 , 2)}}%
                                                        @endif
                                                    </td>
                                                    <td></td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </form>
                             
                         
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                       
                            <div class="card-body">
                                <div style="display: flex; justify-content: space-between; padding-bottom: 15px;">
                                      <div>
                                          <h4 class="card-title">Oldingi kun davomatlari </h4>
                                      </div>
                                      
                                     
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
                                            @foreach ($old_data as $item)
                                                <tr>
                                                    <td>
                                                        {{$item->course}}
                                                    </td>
                                                    <td>
                                                        {{$item->name}}
                                                    </td>
                                                    <td>
                                                        {{$item->students_count}}
                                                    </td>
                                                    <td>
                                                        {{$item->have1}}
                                                    </td>
                                                    <td>
                                                        @if($item->students_count)
                                                        {{round($item->have1/$item->students_count*100 , 2)}}%
                                                        @endif
                                                    </td>
                                                    <td>
                                                        {{$item->have2}}
                                                    </td>
                                                    <td>
                                                       @if($item->students_count)
                                                        {{round($item->have2/$item->students_count*100 , 2)}}%
                                                       @endif
                                                    </td>
                                                    <td>
                                                        {{$item->have3}}
                                                    </td>
                                                    <td>
                                                     @if($item->students_count)
                                                        {{round($item->have3/$item->students_count*100 , 2)}}%
                                                     @endif
                                                    </td>
                                                    <td>
                                                        {{$item->have4}}
                                                    </td>
                                                    <td>
                                                      @if($item->students_count)
                                                        {{round($item->have4/$item->students_count*100 , 2)}}%
                                                      @endif
                                                    </td>
                                                    <td>
                                                        {{$item->have5}}
                                                    </td>
                                                    <td>
                                                       @if($item->students_count)
                                                        {{round($item->have5/$item->students_count*100 , 2)}}%
                                                       @endif
                                                    </td>
                                                    <td>
                                                        {{$item->have6}}
                                                    </td>
                                                    <td>
                                                      @if($item->students_count)
                                                        {{round($item->have6/$item->students_count*100 , 2)}}%
                                                      @endif
                                                    </td>
                                                    <td></td>
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

@endsection
