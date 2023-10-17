@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">

                    <form action="{{ route('languages.update', ['id' => $data->id]) }}" method="post">

                        {{ csrf_field() }}
                        {{ method_field('put') }}

                        <div class="col-md-4">
                            <label for="name">Nomlanishi</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{ $data->name }}" required>
                        </div>

                        <div class="col-md-4">
                            <label for="prefix">Prefiks</label>
                            <input type="text" name="prefix" id="prefix" class="form-control" value="{{ $data->prefix }}" required>
                        </div>
                        <div class="col-md-4">
                            <label for="status">Status</label>
                            <select name="status" class="form-control">
                                <option value="1" <?php if($data->status==1) echo 'selected'?>>Aktiv</option>
                                <option value="0" <?php if($data->status==0) echo 'selected'?>>Passiv</option>
                            </select>
                        </div>

                        <div class="col-md-4 margin-top-20">
                            <button class="btn btn-success btn-block">Saqlash</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection