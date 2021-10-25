@extends('layouts.admin_jamshid')

@section('content')

    <style type="text/css">
        .pagination li a {
            padding: 12px;
            border: 1px solid #E8EEF3;
            margin-left: 2px;
            margin-right: 2px;
        }

        .pagination li.active span {
            padding: 12px;
            border: 1px solid #E8EEF3 !important;
            background-color: #5f76e8;
            margin-left: 5px;
            margin-right: 5px;
            color: white;
        }

        .border-default {
            border: 1px solid #E8EEF3;

        }

        .last-td {
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
                            <div>
                                <a href="#" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" style="color: white; cursor: pointer"><i
                                            class="fa fa-plus"></i> Qo'shish </a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="multi_col_order" class="table table-striped table-bordered no-wrap export">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>F.I.O</th>
                                    <th>To'lashi kerak</th>
                                    <th>To'ladi</th>
                                    <th>sana</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php $i = 1; @endphp
                                @foreach($data as $item)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$item->fio}}</td>
                                        <td>{{$item->need}}</td>
                                        <td>{{$item->payment}}</td>
                                        <td>{{$item->date}}</td>
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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form action="{{route('command.import')}}" method="post" enctype="multipart/form-data" id="file_import">
              {{csrf_field()}}
              {{method_field('POST')}}
              <div class="form-group">
                  <label for="">Excel file</label>
                  <input type="file" name="file" class="form-control">
              </div>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" form="file_import" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
@endsection

