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
                                          <h4 class="card-title">Oylar ro'yhati</h4>
                                      </div>
                                    <div>
                                        <a  class="" href="{{asset('pechat/scholarships.xlsx')}}" style="color: green; cursor: pointer"><i class="fa fa-download"></i> Import uchun excel shablon </a>
                                        <a data-toggle="modal" data-target="#import_modal" class="btn btn-success" style="color: white; cursor: pointer"><i class="fa fa-plus"></i> Import </a>
                                        <button type="button" class="btn btn-light back_button_js"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Ortga</button>
                                    </div>

                                </div>


                                <div class="table-responsive">
                                    <table  id="multi_col_order"  class="table table-striped table-bordered no-wrap export">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nomi</th>
                                                <th>Stipendiya berilganlar soni</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $i = 0; @endphp
                                            @foreach($years as $year)
                                                <tr>
                                                    <td colspan="4" style="text-align: center; font-weight: bold; border: 1px solid black">
                                                        {{$year->name}}
                                                    </td>
                                                </tr>
                                                @foreach($year->months as $item)
                                                   <tr>
                                                       <td class="last-td">{{  ++$i }}</td>
                                                       <td>
                                                           <a href="">
                                                               {{ $item->name }}
                                                           </a>
                                                       </td>
                                                       <td>
                                                           {{count($item->scholarships)}}
                                                       </td>
                                                       <td class="last-td">
                                                           <a href="{{route('scholarship.index' , ['month_id' => $item->id])}}" class="btn btn-light"><i class="fa fa-list"></i></a>
                                                       </td>

                                                   </tr>
                                           @endforeach
                                            @endforeach

                                        </tbody>


                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>


                </div>
            </div>

    <div class="modal fade" id="import_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <form action="{{route('scholarship.import')}}" method="post" enctype="multipart/form-data">
           {{csrf_field()}}
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Import qilish</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="form-group">
                    <input type="file" class="form-control" name="excel_file">
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </form>
    </div>

@endsection

