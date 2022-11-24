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
                                        @if($type == 1)
                                      	<a href="{{ route('give_id_by_type' , ['type' => $amount_type]) }}" class="btn btn-info">ID KOD BERISH <i class="fa fa-id-card" aria-hidden="true"></i></a>
                                        @elseif($type == 2)
                                        <a href="{{ route('super_give_id_code_magister' , ['type' => $amount_type]) }}" class="btn btn-info">ID KOD BERISH <i class="fa fa-id-card" aria-hidden="true"></i></a>
                                        @endif
                                      </div>
                                     
                                </div>

                              {{--   <div class="row " style="display: flex; justify-content: space-around;">
                                    <div class="col-4 form-group" style="display: flex">
                                        <input type="text" class="form-control search-input" placeholder="Search" @if(isset($search_result_text)) value="{{ $search_result_text }}" @endif name="search_key">
                                         @if(isset($search_result_text))
                                            <button class=" border-default btn btn-danger search-clear"> <i class="fa fa-times" aria-hidden="true"></i> </button>
                                        @endif
                                        <button class=" border-default btn btn-default search-button">search</button>

                                    </div>
                                </div> --}}
                              
                                <div class="table-responsive">
                                    <table @if(isset($amount_type)) id="multi_col_order" @endif   class="table table-striped table-bordered no-wrap">
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
                                                       <a href="{{ route('super.show' , ['id' => $item->id]) }}" class="btn btn-light"> <i class="fa fa-eye"></i> </a>
                                               </td>
                                               {{-- <td class="last-td">
                                                       <a href="{{ route('super.edit' , ['id' => $item->id]) }}" class="btn btn-info"> <i class="fa fa-edit"></i> </a>
                                               </td>
                                               <td class="last-td">
                                                       <button class="btn btn-danger"> <i class="fa fa-trash"></i> </button>
                                               </td> --}}
                                           </tr>
                                           @endforeach
                                        </tbody>

                                 
                                    </table>
                                </div>
                            </div>
                            @if(isset($type))
                           {{--  @if($type == 2)
                             <div class="col-12" style="display: flex; justify-content: flex-end;">
                                  {{ $data->links() }}
                            </div>
                            @endif --}}
                            @endif
                        </div>
                    </div>
                   
                   
                </div>
            </div>

@endsection
@section('js')
<script type="text/javascript">
  $('.search-button').click(function(){
    var txt = $('.search-input').val();
    if (txt != "") {
        var url = '/backoffice/search-student/'+txt;
        // alert(url);
        window.location.href = url;
    }
    else{
         var url = '/backoffice/student/';
        // alert(url);
        window.location.href = url;
    }
  });
  $('.search-clear').click(function(){
     var url = '/backoffice/student/';
        // alert(url);
        window.location.href = url;
  });
</script>
@endsection