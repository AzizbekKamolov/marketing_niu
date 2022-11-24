@extends('layouts.admin')
@section('content')
    <div class="app-heading-container app-heading-bordered bottom">
        <ul class="breadcrumb">
            <li><a href="/backoffice">Dashboard</a></li>
            <li><a href="{{ route('student.index') }}">Studentlar</a></li>
        </ul>
        <a href="{{ url()->previous() }}" class="pull-right">Orqaga</a>
    </div>
    <div class="container">
        <div class="row" style="margin-right: 12px;margin-left: 12px;">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-md-12">
                        <div class="col-md-6">
                            <h3 style="float: left"> Barcha studentlar ro'yxati</h3>
                        </div>
                        <div class="col-lg-6">
                            <a href="{{route('student.create')}}" class="btn btn-success pull-right"><span class="fa fa-plus text-sm">&nbsp;</span>Yangi qo'shish</a>
                        </div>
                    </div>

                    @if(session('message'))
                        <div class="col-md-10">
                            <div class="alert alert-success alert-icon-block alert-dismissible" role="alert">
                                <div class="alert-icon">
                                    <span class="icon-checkmark-circle"></span>
                                </div>
                                {{ session('message') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="fa fa-times"></span></button>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
            <div class="block block-condensed">
                <br>
                <div class="block-content">

                    <table  class="table table-striped table-bordered datatable-extended">
                        <thead>
                        <tr>
                            <th>FIO</th>
                            <th>Pasport info</th>
                            <th>Student ID</th>
                            <th>Ta'lim turi</th>
                            <th>Telefon</th>
                            <th  width="5%"></th>
                            <th  width="5%"></th>
                            <th  width="5%"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $item)
                            <tr>
                                <td>{{$item->first_name." ".$item->last_name." ".$item->middle_name}}</td>
                                <td>{{$item->passport_serial.$item->passport_number}}</td>
                                <td>{{$item->student_number}}</td>
                                <td>{{$item->edu_type}}</td>
                                <td>{{$item->phone1}}</td>
                                <td>
                                    <a href="{{ route('student.show', ['id' => $item->id]) }}" class="btn btn-default btn-icon">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('student.edit', ['id' => $item->id]) }}" class="btn btn-default btn-icon">
                                        <i class="icon-pencil"></i>
                                    </a>
                                </td>
                                <td>
                                    <form action="{{ route('student.destroy', ['id' => $item->id]) }}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('delete') }}
                                        <button class="btn btn-default btn-icon deleteData"><i class="icon-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>

            </div>
        </div>
    </div>
@endsection