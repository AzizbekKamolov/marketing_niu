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
                                          <h4 class="card-title"> Tasdqilangan superkontraktlar ro'yhati</h4>
                                      </div>
                                      <div>
                                      	<button href="" class="btn btn-success id-kod-form-submit">ID KODNI SAQLASH <i class="fa fa-id-card" aria-hidden="true"></i></button>
                                      </div>
                                     
                                </div>

                                
                              
                                <div class="table-responsive">
                                    <table  class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>F.I.O</th>
                                                <th>Pasport</th>
                                                <th>Telefon</th>
                                                <th>Ball</th>
                                                <th>Barobar</th>
                                                <th></th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <form action="{{ route('store_id_code') }}" class="id-kod-form" method="post">
                                            {{ csrf_field() }}
                                              @php $i = 0; @endphp
                                             @foreach($data as $item)
                                             <tr @if($item->status == 3) style="background-color: #9AE19A" @endif>
                                                 <td>{{  ++$i }}</td>
                                                 <td>
                                                     {{ $item->fio() }}

                                                 </td>
                                                
                                                 <td>
                                                     {{ $item->passport_serial }}{{ $item->passport_number }}
                                                 </td>
                                                 <td>
                                                     {{ $item->phone }}
                                                 </td>
                                                 <td>
                                                     {{ $item->ball }}
                                                 </td>
                                                 <td>
                                                     {{ $item->getAmount()->name }}
                                                 </td>

                                                 <td class="last-td">
                                                  <input type="text" name="input[{{ $item->id }}]">
                                                 </td>
                                                 {{-- <td class="last-td">
                                                         <a href="{{ route('super.edit' , ['id' => $item->id]) }}" class="btn btn-info"> <i class="fa fa-edit"></i> </a>
                                                 </td>
                                                 <td class="last-td">
                                                         <button class="btn btn-danger"> <i class="fa fa-trash"></i> </button>
                                                 </td> --}}
                                             </tr>
                                             @endforeach
                                           </form>
                                        </tbody>

                                 
                                    </table>
                                </div>
                            </div>
                             <div class="col-12" style="display: flex; justify-content: flex-end;">
                                  {{ $data->links() }}
                            </div>
                        </div>
                    </div>
                   
                   
                </div>
            </div>

@endsection
@section('js')
<script type="text/javascript">
 $('.id-kod-form-submit').click(function(){
  $('.id-kod-form').submit();
 });
</script>
@endsection