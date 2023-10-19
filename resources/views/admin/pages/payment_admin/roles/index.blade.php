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
                                <h4 class="card-title">Rollar ro'yhati</h4>
                            </div>
                            @if(Auth::user()->role == 11)
                                <div>
                                    <a href="{{route('role.create')}}" class="btn btn-success"
                                       style="color: white; cursor: pointer"><i class="fa fa-plus"></i> Role qo'shish
                                    </a>
                                </div>
                            @endif
                        </div>


                        <div class="table-responsive">
                            <table id="multi_col_order" class="table table-striped table-bordered no-wrap export">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Id</th>
                                    <th>Nome</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($roles as $item)
                                    <tr>
                                        <td>{{  $loop->iteration }}</td>
                                        <td>
                                            {{ $item->id }}
                                        </td>
                                        <td>
                                            {{ $item->name }}
                                        </td>
                                        <td class="last-td">
                                            <a href="{{route('role.edit' , ['id' => $item->id])}}"
                                               class="btn btn-info"><i
                                                        class="fa fa-edit"></i></a>

                                        </td>
                                        <td class="last-td">
                                            <a href="{{route('roles.delete' , [$item->id])}}"
                                               class="btn btn-danger"
                                               onclick="confirm('Haqiqatdaan ham o\'chirmoqchimisiz')"><i
                                                        class="fa fa-trash"></i></a>

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

