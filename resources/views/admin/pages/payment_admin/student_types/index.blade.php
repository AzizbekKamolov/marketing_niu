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
                                          <h4 class="card-title">Talabalar turlari</h4>
                                      </div>
                                    <div>
                                    </div>

                                </div>


                                <div class="table-responsive">
                                    <table  id="multi_col_order"  class="table table-striped table-bordered no-wrap export">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nomi</th>
                                                <th>Darajasi</th>
                                                <th>Shartnoma turlari(stipendiya boyicha)</th>
                                                <th>Shartnoma turlari(tomonlar boyicha)</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $i = 0; @endphp
                                           @foreach($data as $item)
                                           <tr>
                                               <td>{{  ++$i }}</td>
                                               <td>
                                                   <a href="{{route('payment_admin.student_types_show' , ['id' => $item->id])}}">
                                                   {{ $item->name }}</a>
                                               </td>
                                               <td>
                                                   <span style="color: #60C3C3">
                                                   {{$item->degree === 1 ?'Bakalavr':''}}</span>
                                                   <span style="color: #C3BE26">
                                                       {{$item->degree === 2 ?'Magistr':''}}</span>
                                               </td>
                                                <td>
                                                   @foreach($item->agreement_types as $agreemen_type)
                                                       <span>{{$agreemen_type->name}} ({{number_format($agreemen_type->pivot->price)}})</span> <br>
                                                   @endforeach
                                               </td>
                                               <td>
                                                   @foreach($item->agreement_side_types as $agreemen_side)
                                                       <span>{{$agreemen_side->name}}</span> <br>
                                                   @endforeach
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

