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
                                          <h4 class="card-title">Kredit narxlari</h4>
                                      </div>
                                    <div>
                                        <a href="{{route('credit_prices.create')}}" class="btn btn-success"
                                           style="color: white; cursor: pointer"><i class="fa fa-plus"></i> Kredit narxi qo'shish
                                        </a>
                                    </div>

                                </div>


                                <div class="table-responsive">
                                    <table  id="multi_col_order"  class="table table-striped table-bordered no-wrap export">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Talaba turi</th>
                                                <th>Bir kredit narxi</th>
                                                <th>Amallar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $i = 0; @endphp
                                           @foreach($data as $item)
                                           <tr>
                                               <td>{{  ++$i }}</td>
                                               <td>
                                                   {{$item->getDegree->name}}
                                               </td>
                                               <td>
                                                   {{$item->price}}
                                               </td>
                                               <td>
                                                   <a href="{{ route('credit_prices.edit', ['id' => $item->id]) }}" class="btn btn-cyan btn-icon">
                                                       <i class="icon-pencil"></i>
                                                   </a>
                                                   <form action="{{ route('credit_prices.destroy', ['id' => $item->id]) }}" method="post">
                                                       {{ csrf_field() }}
                                                       {{ method_field('delete') }}
                                                       <button class="btn btn-danger btn-icon deleteData"><i class="icon-trash"></i></button>
                                                   </form>
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

