@extends('layouts.admin_jamshid')

@section('content')

    <style type="text/css">
        .error {
            color: #ff414b;
        }

        .border-default {
            border: 1px solid #E8EEF3;

        }

        .last-td {
            width: 1px;
            padding-left: 3px !important;
            padding-right: 3px !important;
        }

        fieldset.scheduler-border {
            border: 1px groove #ddd !important;
            padding: 0 1.4em 1.4em 1.4em !important;
            margin: 0 0 1.5em 0 !important;
            -webkit-box-shadow: 0px 0px 0px 0px #000;
            box-shadow: 0px 0px 0px 0px #000;
        }

        legend.scheduler-border {
            font-size: 1.2em !important;
            font-weight: bold !important;
            text-align: left !important;
        }

    </style>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-body">
                        <div style="display: flex; justify-content: space-between; padding-bottom: 15px;">
                            <div>
                                <h4 class="card-title">Foydalanuvchi ma'lumotlarini yangilash</h4>
                            </div>
                            <div>
                                <button class="btn btn-success form_submit" type="submit" form="student_create"><i
                                            class="fa fa-save"></i> Saqlash
                                </button>
                                <button type="button" class="btn btn-light back_button_js"><i
                                            class="fa fa-arrow-circle-left" aria-hidden="true"></i> Ortga
                                </button>
                            </div>

                        </div>
                        <form id="student_create" action="{{route('user.update', [$user->id])}}" class="form1"
                              method="post">
                            <input name="_method" value="PUT" type="hidden">
                            {{csrf_field()}}
                            <div class="table-responsive" style="overflow-x: unset">
                                <fieldset class="scheduler-border ">
                                    <legend class="scheduler-border w-auto">Majburiy</legend>
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label for="">
                                                Ism
                                                <span class="error">
                                                @if ($errors->has('name'))
                                                        | {{ $errors->first('name') }}
                                                    @endif
                                            </span>
                                            </label>
                                            <input required type="text" class="form-control" name="name"
                                                   value="{{ $user->name }}">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="">
                                                Ism
                                                <span class="error">
                                                @if ($errors->has('role'))
                                                        | {{ $errors->first('role') }}
                                                    @endif
                                            </span>
                                            </label>
                                            <select name="role" class="form-control">
                                                @foreach($roles as $role)
                                                    <option value="{{ $role->id }}"
                                                    @if($role->id == $user->role) selected @endif
                                                    >{{ $role->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="">
                                                Username
                                                <span class="error">
                                                @if ($errors->has('username'))
                                                        | {{ $errors->first('username') }}
                                                    @endif
                                            </span>
                                            </label>
                                            <input required type="text" class="form-control" name="username"
                                                   value="{{ $user->username }}">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="">
                                                Parol
                                                <span class="error">
                                                @if ($errors->has('password'))
                                                        | {{ $errors->first('password') }}
                                                    @endif
                                            </span>
                                            </label>
                                            <input type="password" class="form-control" name="password"
                                                   value="@if(old('password')){{old('password')}}@endif">
                                        </div>

                                    </div>
                                </fieldset>
                            </div>
                        </form>

                    </div>

                </div>
            </div>


        </div>
    </div>

@endsection

@section('js')
    <script>
        // $('.form_submit').click(function(){
        //     var t = confirm('Saqlansinmi?');
        //     if (t){
        //         $('.form1').submit();
        //     }
        //     else{
        //
        //     }
        // });
        function region_change(id) {
            var url = '/backoffice/get-area-by-region/' + id;
            $.ajax({
                url: url,
                method: 'GET',
                success: function (result) {
                    console.log(result);
                    // var result2 = JSON.parse(result.toString());
                    var txt = '';
                    var old = '{{old('area')}}';

                    $.each(result, function (key, value) {
                        if (old == value['id']) {
                            var bb = 'selected';
                        } else {
                            var bb = '';

                        }
                        txt = txt + '<option ' + bb + ' value="' + value['id'] + '">' + value['name'] + '</option>';
                    });
                    $('select[name="area"]').html(txt);
                }

            });
        }

        $('select[name="region"]').change(function () {
            var id = $(this).val();
            region_change(id);
        });
        $(document).ready(function () {
            var id = $('select[name="region"]').val();
            if (id != '') {
                region_change(id);
            }
            var type_id = $('select[name="type_degree"]').val();
            if (type_id != '') {
                get_type_by_degree(type_id);
            }
        });
        $('select[name="type_degree"]').change(function () {
            var type_id = $(this).val();
            if (type_id != '') {
                get_type_by_degree(type_id);
            }
        });
    </script>
    <script>
        $('input[name="passport_seria"]').inputmask({
            'mask': 'AA',
        });
        $('input[name="passport_number"]').inputmask({
            'mask': '9999999',
        });
        $('input[name="phone"]').inputmask({
            'mask': '+\\9\\98\\999999999',
        });
        $('input[name="passport_jshir"]').inputmask({
            'regex': '[0-9]*',
        });
    </script>
    {{--    <script>--}}
    {{--        function get_type_by_degree(id) {--}}
    {{--            var url = '/backoffice/get-type-by-degree/' + id;--}}
    {{--            $.ajax({--}}
    {{--                url: url,--}}
    {{--                method: 'GET',--}}
    {{--                success: function (result3) {--}}
    {{--                    console.log(result3);--}}
    {{--                    var txt = '';--}}
    {{--                    var old = '{{old('status_new')}}';--}}
    {{--                    $.each(JSON.parse(result3), function (key, value) {--}}
    {{--                        if (old == value['id']) {--}}
    {{--                            var gg = 'selected';--}}
    {{--                        } else {--}}
    {{--                            var gg = '';--}}
    {{--                        }--}}
    {{--                        txt = txt + '<option ' + gg + ' value="' + value['id'] + '">' + value['name'] + '</option>';--}}
    {{--                    });--}}
    {{--                    $('select[name="status_new"]').html(txt);--}}
    {{--                }--}}
    {{--            });--}}
    {{--        }--}}

    {{--    </script>--}}
@endsection



