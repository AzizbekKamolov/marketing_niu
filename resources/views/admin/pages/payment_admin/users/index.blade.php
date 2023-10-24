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
                            @if(Auth::user()->role == 777)
                                <div>
                                    <a href="{{route('user.create')}}" class="btn btn-success"
                                       style="color: white; cursor: pointer"><i class="fa fa-plus"></i> Foydalanuvchi
                                        qo'shish
                                    </a>
                                </div>
                            @endif
                        </div>


                        <div class="table-responsive">
                            <table id="multi_col_order" class="table table-striped table-bordered no-wrap export">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Ismi</th>
                                    <th>Username</th>
                                    <th>Role</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @php $i = 0; @endphp
                                @foreach($users as $item)
                                    <tr>
                                        <td>{{  $loop->iteration }}</td>
                                        <td>
                                            <a href="{{route('payment_admin.student.show' , ['id' => $item->id])}}"
                                               class="" style="color: #000000">{{ $item->name }}</a>
                                        </td>
                                        <td>
                                            {{ $item->username }}
                                        </td>
                                        <td>
                                            {{ $item->getRole() }}

                                        </td>
                                        <td class="last-td">
                                            @if(auth()->user()->role == 777)
                                                <a href="{{route('user.edit' , ['id' => $item->id])}}"
                                                   class="btn btn-info"><i
                                                            class="fa fa-edit"></i></a>
                                            @endif

                                        </td>
                                        <td class="last-td">
                                            @if(auth()->user()->role == 777)
                                                <a href="{{route('users.delete' , [$item->id])}}"
                                                   class="btn btn-danger"
                                                   onclick="confirm('Haqiqatdaan ham o\'chirmoqchimisiz')"><i
                                                            class="fa fa-trash"></i></a>
                                            @endif

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

