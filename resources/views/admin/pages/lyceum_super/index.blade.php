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
                                          <h4 class="card-title">Qo'shimcha to'lov (superkontrakt) </h4>
                                      </div>
                                    <div>
                                          <a href="{{route('students.lyceum.export_all')}}" class="btn btn-success"><i class="fa fa-file-o-xls"></i> Excel </a>
                                      </div>
                                </div>

                             {{--    <div class="row " style="display: flex; justify-content: space-around;">
                                    <div class="col-4 form-group" style="display: flex">
                                        <input type="text" class="form-control search-input" placeholder="Search" @if(isset($search_result_text)) value="{{ $search_result_text }}" @endif name="search_key">
                                         @if(isset($search_result_text))
                                            <button class=" border-default btn btn-danger search-clear"> <i class="fa fa-times" aria-hidden="true"></i> </button>
                                        @endif
                                        <button class=" border-default btn btn-default search-button">search</button>

                                    </div>
                                </div> --}}

                                <div class="table-responsive">
                                    <table id="multi_col_order" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>F.I.O</th>

                                                {{-- <th>Pasport</th> --}}
                                                {{-- <th>Telefon</th> --}}
                                                <th>Ball</th>
                                                <th>Til</th>

                                                <th>Holati</th>
                                                <th></th>
{{--                                                <th></th>--}}
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
                                                   {{ $item->ball }}
                                               </td>

                                               <td>
                                                  @if($item->lang())
                                                   {{ $item->lang()->name }}
                                                   @endif
                                               </td>
                                               <td>
                                                   {{ $item->getStatus() }} @if($item->status=="2") <i class="fa fa-check"></i> @endif
                                               </td>

                                               <td class="last-td">
                                                       <a href="{{ route('super.lyceum.show' , ['id' => $item->id]) }}" class="btn btn-light"> <i class="fa fa-eye"></i> </a>
                                               </td>
{{--                                               <td class="last-td">--}}
{{--                                                       <a href="{{ route('super.lyceum.edit' , ['id' => $item->id]) }}" class="btn btn-info"> <i class="fa fa-edit"></i> </a>--}}
{{--                                               </td>--}}


                                           </tr>
                                           @endforeach
                                        </tbody>


                                    </table>
                                </div>
                            </div>
                            {{--  <div class="col-12" style="display: flex; justify-content: flex-end;">
                                  {{ $data->links() }}
                            </div> --}}
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
