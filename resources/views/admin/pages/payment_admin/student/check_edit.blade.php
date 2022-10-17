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
                                <h4 class="card-title">Talabalar ro'yhati</h4>
                            </div>
                            <div>

                                <button class="btn btn-success form_submit"><i class="fa fa-save"></i> Saqlash</button>
                                <button type="button" class="btn btn-light back_button_js"><i
                                            class="fa fa-arrow-circle-left" aria-hidden="true"></i> Ortga
                                </button>

                            </div>

                        </div>
                        <form action="{{route('payment_admin.student.update' , ['id' => $data->id])}}" class="form1"
                              method="post">
                            {{csrf_field()}}
                            {{method_field('put')}}
                            <div class="table-responsive" style="overflow-x: unset">
                                <fieldset class="scheduler-border ">
                                    <legend class="scheduler-border w-auto">Majburiy</legend>
                                    <div class="row">
                                        <div class="col-md-3 form-group">
                                            <label for="">
                                                ID KOD
                                                <span class="error">
                                                @if ($errors->has('id_code')) | {{ $errors->first('id_code') }} @endif
                                            </span>
                                            </label>
                                            <input type="text" class="form-control" name="id_code"
                                                   value="@if(old('id_code')){{old('id_code')}}@else{{$data->id_code}}@endif">
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label for="">
                                                Ism
                                                <span class="error">
                                                @if ($errors->has('first_name'))
                                                        | {{ $errors->first('first_name') }} @endif
                                            </span>
                                            </label>
                                            <input type="text" class="form-control" name="first_name"
                                                   value="@if(old('first_name')){{old('first_name')}}@else{{$data->first_name}}@endif">
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label for="">
                                                Familiya
                                                <span class="error">
                                                @if ($errors->has('last_name'))
                                                        | {{ $errors->first('last_name') }} @endif
                                            </span>
                                            </label>
                                            <input type="text" class="form-control" name="last_name"
                                                   value="@if(old('last_name')){{old('last_name')}}@else{{$data->last_name}}@endif">
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label for="">
                                                Otasining ismi
                                                <span class="error">
                                                @if ($errors->has('middle_name'))
                                                        | {{ $errors->first('middle_name') }} @endif
                                            </span>
                                            </label>
                                            <input type="text" class="form-control" name="middle_name"
                                                   value="@if(old('middle_name')){{old('middle_name')}}@else{{$data->middle_name}}@endif">
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label for="">
                                                Tug'ilgan sana
                                                <span class="error">
                                                @if ($errors->has('birthday')) | {{ $errors->first('birthday') }} @endif
                                            </span>
                                            </label>
                                            <input type="date" class="form-control" name="birthday"
                                                   value="@if(old('birthday')){{old('birthday')}}@else{{$data->birthday}}@endif">
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label for="">
                                                Telefon
                                                <span class="error">
                                                @if ($errors->has('phone')) | {{ $errors->first('phone') }} @endif
                                            </span>
                                            </label>
                                            <input type="text" class="form-control" name="phone" id="phone"
                                                   value="@if(old('phone')){{old('phone')}}@else{{$data->phone}}@endif">
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <label for="">
                                                Passport seria va raqam
                                                <span class="error">
                                                @if ($errors->has('passport_seria'))
                                                        | {{ $errors->first('passport_seria') }} @endif
                                                    @if ($errors->has('passport_number'))
                                                        | {{ $errors->first('passport_number') }} @endif
                                            </span>
                                                <div style="display: flex; margin-top: 7px;">
                                                    <input type="text" class="form-control" style="width: 30%"
                                                           name="passport_seria"
                                                           value="@if(old('passport_seria')){{old('passport_seria')}}@else{{$data->passport_seria}}@endif">
                                                    <input type="text" class="form-control" style="width: 70%"
                                                           name="passport_number"
                                                           value="@if(old('passport_number')){{old('passport_number')}}@else{{$data->passport_number}}@endif">
                                                </div>
                                            </label>
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label for="">
                                                JSHSHIR
                                                <span class="error">
                                                @if ($errors->has('passport_jshir')) | {{ $errors->first('passport_jshir') }} @endif
                                            </span>
                                            </label>
                                            <input required type="text" class="form-control" name="passport_jshir"
                                                   value="{{  $data->passport_jshir ?? '' }}">
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label for="">
                                                Jinsi
                                                <span class="error">
                                                @if ($errors->has('gender')) | {{ $errors->first('gender') }} @endif
                                            </span>
                                            </label>
                                            <select name="gender" id="" class="form-control">
                                                <option @if(old('gender')) @if(old('gender') == 1) selected
                                                        @endif @else @if($data->gender == 1) selected
                                                        @endif @endif value="1">Erkak
                                                </option>
                                                <option @if(old('gender')) @if(old('gender') == 0) selected
                                                        @endif @else @if($data->gender == 0) selected
                                                        @endif @endif value="0">Ayol
                                                </option>
                                            </select>
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label for="">
                                                Shartnoma turi
                                                <span class="error">
                                                @if ($errors->has('status_new'))
                                                        | {{ $errors->first('status_new') }} @endif
                                            </span>
                                            </label>
                                            <select name="status_new" id="status_new" class="form-control">
{{--                                                @php--}}
{{--                                                    $rr = $data->get_type()->degree;--}}
{{--                                                    $types = 'Test\Model\Type'::where('degree' , $rr)->get();--}}
{{--                                                @endphp--}}
                                                @foreach($agreement_types as $type)
                                                    <option @if(old('status_new')) @if(old('status_new') ==$type->id) selected
                                                            @endif @else @if($data->status_new == $type->id) selected
                                                            @endif @endif value="{{$type->id}}">
                                                        {{$type->name}}</option>

                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label for="">
                                                Kurs
                                                <span class="error">
                                                @if ($errors->has('course')) | {{ $errors->first('course') }} @endif
                                            </span>
                                            </label>
                                            <input type="number" class="form-control" name="course"
                                                   value="{{$data->course}}">
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="scheduler-border">
                                    <legend class="scheduler-border w-auto">Ixtiyoriy</legend>
                                    <div class="row">

                                        <div class="col-md-3 form-group">
                                            <label for="">
                                                Viloyat
                                                <span class="error">
                                                @if ($errors->has('region_id'))
                                                        | {{ $errors->first('region_id') }} @endif
                                            </span>
                                            </label>
                                            <select name="region" id="" class="form-control">
                                                <option value="">Tanlang</option>
                                                @foreach($regions as $region)
                                                    <option @if($data->region ==$region->id) selected
                                                            @endif  value="{{$region->id}}">{{$region->name_uz}}</option>
                                                    {{--                                                    <option @if($data->region_id == $region->id) selected @endif value="{{$region->id}}">{{$region->name_uz}}</option>--}}
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label for="">
                                                Tuman/Shahar
                                                <span class="error">
                                                @if ($errors->has('area')) | {{ $errors->first('area') }} @endif
                                            </span>
                                            </label>
                                            <select name="area" id="" class="form-control">
                                                <option value="">Tanlang</option>
                                                @if(old('region'))
                                                    @php
                                                        $ar = 'Test\Model\Area'::where('region_id' , old('region'))->get();
                                                    @endphp
                                                    @foreach($ar as $item)
{{--                                                        <option @if($data->area == $item->id) selected--}}
{{--                                                                @endif value="{{$item->id}}">{{$item->name}}</option>--}}
                                                    <option @if(old('area')) @if(old('area') == $item->id) selected
                                                            @endif @else @if($data->area == $item->id) selected
                                                            @endif @endif value="{{$item->id}}">
                                                        {{$item->name}}</option>
                                                    @endforeach



                                                @endif

                                            </select>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="">
                                                Manzil
                                                <span class="error">
                                                @if ($errors->has('address')) | {{ $errors->first('address') }} @endif
                                            </span>
                                            </label>
                                            <input type="text" class="form-control" name="address"
                                                   value="{{ $data->address}}">
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <label for="">
                                                Passport berilgan sana
                                                <span class="error">
                                                @if ($errors->has('passport_given_date'))
                                                        | {{ $errors->first('passport_given_date') }} @endif
                                            </span>
                                            </label>
                                            <input type="date" class="form-control" name="passport_given_date"
                                                   value="{{ $data->passport_given_date }}">
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label for="">
                                                Passport amal qilish muddati
                                                <span class="error">
                                                @if ($errors->has('passport_issued_date'))
                                                        | {{ $errors->first('passport_issued_date') }} @endif
                                            </span>
                                            </label>
                                            <input type="date" class="form-control" name="passport_issued_date"
                                                   value="{{ $data->passport_issued_date }}">
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label for="">
                                                Kim tomonidan berilgan
                                                <span class="error">
                                                @if ($errors->has('passport_given_by'))
                                                        | {{ $errors->first('passport_given_by') }} @endif
                                            </span>
                                            </label>
                                            <input type="text" class="form-control" name="passport_given_by"
                                                   value="{{ $data->passport_given_by }}">
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
        $('input[name="passport_jshir"]').inputmask({
            'regex': '[0-9]*',
        });
        $('input[name="phone"]').inputmask({
            'mask': '+\\9\\98999999999',
        });
    </script>
    <script>
        {{--function get_statuses(id) {--}}

        {{--    var url = '/backoffice/get-type-by-degree/' + id;--}}
        {{--    if (id != "") {--}}
        {{--        $.ajax({--}}
        {{--            url: url,--}}
        {{--            method: 'GET',--}}
        {{--            success: function (result) {--}}
        {{--                result2 = JSON.parse(result);--}}
        {{--                var txt = '';--}}
        {{--                var old = '{{$data->status_new}}';--}}
        {{--                var pp = '';--}}
        {{--                $.each(result2, function (key, value) {--}}
        {{--                    if (old == value['id']) {--}}
        {{--                        pp = 'selected';--}}
        {{--                    }--}}
        {{--                    txt = txt + '<option ' + pp + ' value="' + value['id'] + '">' + value['name'] + '</option>';--}}
        {{--                });--}}
        {{--                $('#status_new').html(txt);--}}
        {{--            }--}}
        {{--        });--}}
        {{--    }--}}

        {{--}--}}

        $('#type_degree').change(function () {
            get_statuses($(this).val());
        });
        // $(document).ready(function(){
        //     get_statuses($('#type_degree').val());
        // });
    </script>
    <script>
        $('.form_submit').click(function () {
            var t = confirm('Saqlansinmi?');
            if (t) {
                $('.form1').submit();
            } else {

            }
        });

        function region_change(id) {
            var url = '/backoffice/get-area-by-region/' + id;
            $.ajax({
                url: url,
                method: 'GET',
                success: function (result) {
                    console.log(result);
                    // var result2 = JSON.parse(result.toString());
                    var txt = '<option value=""></option>';
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
        });
    </script>
@endsection

