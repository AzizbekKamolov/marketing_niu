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
    }

</style>

            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
                        <div class="card">

                            <div class="card-body">
                                <div style="display: flex; justify-content: space-between; padding-bottom: 15px;">
                                      <div>
                                          <h4 class="card-title">Olingan stipendiyalar </h4>
                                      </div>
                                    <div>
                                        <button type="button" class="btn btn-light back_button_js"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Ortga</button>
{{--                                        <a href="{{route('payment_admin.student.create')}}" class="btn btn-success" style="color: white; cursor: pointer"><i class="fa fa-plus"></i> Talaba qo'shish </a>--}}
                                    </div>

                                </div>


                                <div class="table-responsive">
                                    <table  id="multi_col_order"  class="table table-striped table-bordered no-wrap export">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Oylar</th>
                                                <th>Yil</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $i = 0; @endphp
                                           @foreach($data as $item)
                                           <tr>
                                               <td class="last-td">{{  ++$i }}</td>
                                               <td>
                                                       {{ $item->month->name }}
                                               </td>
                                                <td>
                                                       {{ $item->month->year->name }}
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
            </div>

@endsection

