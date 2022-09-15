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
                                <h4 class="card-title">Import qilinuvchi ma`lumot</h4>
                            </div>

                        </div>
                            <form action="{{route('payment_admin.credits.import_save')}}" method="post">
                        <div class="row">
                                {{csrf_field()}}
                                <div class="col-md-6">
                                    <p><b>Import qilinuvchi malumotlar soni:</b> {{count($data)}}</p>
                                </div>
                                <div class="col-md-6">
                                    <p><b>Import qilinuvchi umumiy kredit:</b> {{$sum}}</p>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Izoh</label>
                                        <input type="text" class="form-control" name="description" required>
                                        <input name="array"  hidden class="form-control" value="{{$data}}" >
                                    </div>
                                    <div class="form-group">
                                        <label for="">To`lovning ohirgi muddati</label>
                                        <input type="date" class="form-control" name="payment_date" required>
                                        
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Saqlash</label>
                                        <button class="btn btn-outline-success w-100" type="submit"><i
                                                    class="fa fa-save"></i></button>
                                    </div>
                                </div>
                        </div>
                            </form>
                        <div class="table-responsive">
                            <table id="multi_col_order" class="table table-striped table-bordered no-wrap export">
                                <tbody>
                                <tr>
                                    <td>ID</td>
                                    <td>Kreditlar</td>
                                </tr>
                                @php $i = 0; @endphp
                                @foreach($data as $item)
                                    <tr>
                                        <td>{{$item['id']}}</td>
                                        <td> {{$item['credits']}}</td>
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

