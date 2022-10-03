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
                                          <h4 class="card-title">Guruhlar ro'yhati</h4>
                                      </div>
                                      
                                      <div>
                                          <a class="btn btn-success" href="{{route('group.create')}}" >+ Yangi guruh</a>
                                          
                                      </div>
                                     
                                </div>
                               
                              
                                <div class="table-responsive">
                                    <table   id="multi_col_order"  class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nomi</th>
                                                <th>Kurs</th>
                                                <th>O'quvchilar soni</th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $i = 0; @endphp
                                           @foreach($data as $item)
                                           <tr>
                                               <td class="last-td">{{  ++$i }}</td>
                                               <td>
                                                {{$item->name}}
                                               </td>
                                               <td>
                                                {{$item->course}}
                                               </td>
                                               <td>
                                                {{$item->students_count}}
                                               </td>
                                               <td class="last-td">
                                                <button type="button" class="btn btn-light">
                                                  <i class="fa fa-eye"></i>
                                                </button>
                                               </td>
                                               <td class="last-td">
                                                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit_group{{$item->id}}">
                                                    <i class="fa fa-edit"></i>
                                                  </button>
                                                  @include('admin.pages.group.edit')
                                               </td>
                                               <td class="last-td">
                                                <button type="button" class="btn btn-default">
                                                  <i class="fa fa-eye"></i>
                                                </button>
                                               </td>
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
@section('js')

@endsection