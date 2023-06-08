@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">

                <div class="panel panel-default">
                    <div class="panel-heading">Mavjud tillar</div>
                    <div class="panel-body">
                        <div class="col-md-2">
                            <button data-toggle="modal" data-target="#modal-default" class="btn btn-default"><i class="icon-plus-circle">&nbsp;</i>Yangi qo'shish</button>
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

                <div class="block">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th style="width: 2%">#</th>
                            <th>Nomlanishi</th>
                            <th>Prefiks</th>
                            <th>Status</th>
                            <th colspan="2" style="width: 8%"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @php $count = $data->perPage() * ($data->currentpage() - 1) @endphp
                        @foreach($data as $item)
                            <tr>
                                <td>{{ ++$count }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->prefix }}</td>
                                <td>{{ $item->getStatus() }}</td>
                                <td>
                                    <a href="{{ route('languages.edit', ['id' => $item->id]) }}" class="btn btn-sm btn-default btn-icon">
                                        <span class="icon-pencil"></span>
                                    </a>
                                </td>
                                <td>
                                    <form action="{{ route('languages.destroy', ['id' => $item->id]) }}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('delete') }}
                                        <button class="btn btn-default btn-icon deleteData"><i class="icon-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    {!! $data->links() !!}

                </div>

            </div>


        </div>
    </div>

    <div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default-header">
        <div class="modal-dialog" role="document">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="icon-cross"></span></button>

            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="modal-default-header">Yangi til qo'shish</h4>
                </div>
                <form action="{{ route('languages.store') }}" method="post">

                    {{ csrf_field() }}

                    <div class="modal-body">

                        <label for="name_ru" class="control-label">Nomlanishi</label>
                        <input type="text" name="name" class="form-control">

                        <label for="name_uz" class="margin-top-20 control-label">Prefiks</label>
                        <input type="text" name="prefix" class="form-control">

                        <label for="status" class="margin-top-20 control-label">Status</label>
                        <select name="status" class="form-control">
                            <option value="1">Aktiv</option>
                            <option value="0">Passiv</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-link" data-dismiss="modal">Bekor qilish</button>
                        <button type="submit" class="btn btn-default">Qo'shish</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection