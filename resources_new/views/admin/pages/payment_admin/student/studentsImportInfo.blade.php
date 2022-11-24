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
                            <form action="{{route('import.students.save')}}" method="post">
                        <div class="row">
                                {{csrf_field()}}
                                <div class="col-md-12">
                                    <p><b>Import qilinuvchi malumotlar soni:</b> {{count($data)}}</p>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Izoh</label>
                                        <input type="text" class="form-control" name="comment" required>
                                        <input name="array"  type="hidden" class="form-control" value="{{$data}}" >
                                    </div>
                                    <div class="form-group">
                                        <label for="status_new">Shartnoma turi</label>
                                        <select name="status_new" id="status_new" class="form-control">
                                            @foreach($types as $type)
                                                <option value="{{$type->id}}">
                                                    {{$type->name}}</option>

                                            @endforeach
                                        </select>
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
                                    <th>id_code</th>
                                    <th>last_name</th>
                                    <th>first_name</th>
                                    <th>middle_name</th>
                                    <th>passport_seria</th>
                                    <th>passport_number</th>
                                    <th>passport_jshir</th>
                                    <th>birthday</th>
                                    <th>course</th>
                                    <th>phone</th>
                                </tr>
                                @foreach($data as $item)
                                    <tr>
                                        <td>{{$item['id_code']}}</td>
                                        <td> {{$item['last_name']}}</td>
                                        <td> {{$item['first_name']}}</td>
                                        <td> {{$item['middle_name']}}</td>
                                        <td> {{$item['passport_seria']}}</td>
                                        <td> {{$item['passport_number']}}</td>
                                        <td> {{$item['passport_jshir']}}</td>
                                        <td> {{$item['birthday']}}</td>
                                        <td> {{$item['course']}}</td>
                                        <td> {{$item['phone']}}</td>
                                    </tr>
                                @endforeach
                                @foreach($dataErrors as $item)
                                    <tr>
                                        <td class="bg-danger  text-black-50">{{$item['id_code']}}</td>
                                        <td class="bg-danger  text-black-50"> {{$item['last_name']}}</td>
                                        <td class="bg-danger  text-black-50"> {{$item['first_name']}}</td>
                                        <td class="bg-danger  text-black-50"> {{$item['middle_name']}}</td>
                                        <td class="bg-danger  text-black-50"> {{$item['passport_seria']}}</td>
                                        <td class="bg-danger  text-black-50"> {{$item['passport_number']}}</td>
                                        <td class="bg-danger  text-black-50"> {{$item['passport_jshir']}}</td>
                                        <td class="bg-danger  text-black-50"> {{$item['birthday']}}</td>
                                        <td class="bg-danger  text-black-50"> {{$item['course']}}</td>
                                        <td class="bg-danger  text-black-50"> {{$item['phone']}}</td>
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

