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
                                          <h4 class="card-title">Talabalar ro'yhati</h4>
                                      </div>
                                      @if(!isset($type))
                                      <div>
                                          <a class="btn btn-success" href="{{ route('student_magistr_create') }}">+ Yangi talaba (magistr)</a>
                                      </div>
                                      @endif
                                </div>
                              
                              
                                <div class="table-responsive">
                                    <table  id="multi_col_order" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>F.I.O</th>
                                                <th>ID KOD</th>
                                                <th>Pasport</th>
                                                <th>Tug'ulgan</th>
                                                <th>Telefon</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $i = 0; @endphp
                                           @foreach($data as $item)
                                           <tr>
                                               <td>{{  ++$i }}</td>
                                               <td>
                                                   {{ $item->fio() }}

                                               </td>
                                               <td>
                                                 {{ $item->id_code }}
                                               </td>
                                               <td>
                                                   {{ $item->passport_seria }}{{ $item->passport_number }}
                                               </td>
                                               <td>
                                                   {{ date('m-d-Y', strtotime($item->birthday)) }}
                                               </td>
                                               <td>
                                                   {{ $item->phone }}
                                               </td>
                                              
                                               <td class="last-td">
                                                       <a href="{{ route('student.show' , ['id' => $item->id]) }}" class="btn btn-light"> <i class="fa fa-eye"></i> </a>
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