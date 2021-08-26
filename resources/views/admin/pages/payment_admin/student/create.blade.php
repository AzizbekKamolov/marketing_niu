@extends('layouts.admin_jamshid')

@section('content')

<style type="text/css">
    .error{
        color: #ff414b;
    }
    .border-default{
        border: 1px solid #E8EEF3 ;

    }
    .last-td{
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
                                            <button class="btn btn-success form_submit" type="submit" form="student_create"><i class="fa fa-save"></i> Saqlash</button>
                                            <button type="button" class="btn btn-light back_button_js"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Ortga</button>
                                    </div>

                                </div>
                                <form id="student_create" action="{{route('payment_admin.student.store')}}" class="form1" method="post">
                                    {{csrf_field()}}
                                <div class="table-responsive" style="overflow-x: unset">
                                    <div class="row">
                                        <div class="col-md-3 form-group">
                                            <label for="">
                                                ID KOD
                                                <span class="error">
                                                @if ($errors->has('id_code')) | {{ $errors->first('id_code') }} @endif
                                            </span>
                                            </label>
                                            <input required type="text" class="form-control" name="id_code" value="@if(old('id_code')){{old('id_code')}}@endif">
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label for="">
                                                Ism
                                                <span class="error">
                                                @if ($errors->has('first_name')) | {{ $errors->first('first_name') }} @endif
                                            </span>
                                            </label>
                                            <input required type="text" class="form-control" name="first_name" value="@if(old('first_name')){{old('first_name')}}@endif">
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label for="">
                                                Familiya
                                                <span class="error">
                                                @if ($errors->has('last_name')) | {{ $errors->first('last_name') }} @endif
                                            </span>
                                            </label>
                                            <input required type="text" class="form-control" name="last_name" value="@if(old('last_name')){{old('last_name')}}@endif">
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label for="">
                                                Otasining ismi
                                                <span class="error">
                                                @if ($errors->has('middle_name')) | {{ $errors->first('middle_name') }} @endif
                                            </span>
                                            </label>
                                            <input required type="text" class="form-control" name="middle_name" value="@if(old('middle_name')){{old('middle_name')}}@endif">
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label for="">
                                                Tug'ilgan sana
                                                <span class="error">
                                                @if ($errors->has('birthday')) | {{ $errors->first('birthday') }} @endif
                                            </span>
                                            </label>
                                            <input required type="date" class="form-control" name="birthday" value="@if(old('birthday')){{old('birthday')}}@endif">
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label for="">
                                                Telefon
                                                <span class="error">
                                                @if ($errors->has('phone')) | {{ $errors->first('phone') }} @endif
                                            </span>
                                            </label>
                                            <input required type="text" class="form-control" name="phone" value="@if(old('phone')){{old('phone')}}@endif">
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label for="">
                                                Viloyat
                                                <span class="error">
                                                @if ($errors->has('region_id')) | {{ $errors->first('region_id') }} @endif
                                            </span>
                                            </label>
                                            <select name="region" id="" class="form-control">
                                                @foreach($regions as $region)
                                                    <option @if(old('region')==$region->id) selected @endif  value="{{$region->id}}">{{$region->name_uz}}</option>
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
                                                @if(old('region'))
                                                    @php
                                                    $ar = 'Test\Model\Area'::where('region_id' , old('region'))->get();
                                                    @endphp
                                                    @foreach($ar as $item)
                                                        <option  @if(old('area')==$item->id) selected @endif value="{{$item->id}}">{{$item->name}}</option>
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
                                            <input required type="text" class="form-control" name="address" value="@if(old('address')){{old('address')}}@endif">
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label for="">
                                                Passport seria va raqam
                                                <span class="error">
                                                @if ($errors->has('passport_seria')) | {{ $errors->first('passport_seria') }} @endif
                                                @if ($errors->has('passport_number')) | {{ $errors->first('passport_number') }} @endif
                                                @if ($errors->has('passport_seria_number')) | {{ $errors->first('passport_seria_number') }} @endif
                                            </span>
                                                <div style="display: flex; margin-top: 7px;" >
                                                    <input required type="text" class="form-control" style="width: 30%" name="passport_seria" value="@if(old('passport_seria')){{old('passport_seria')}}@endif">
                                                    <input required type="text" class="form-control" style="width: 70%" name="passport_number" value="@if(old('passport_number')){{old('passport_number')}}@endif">
                                                </div>
                                            </label>
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label for="">
                                                Passport berilgan sana
                                                <span class="error">
                                                @if ($errors->has('passport_given_date')) | {{ $errors->first('passport_given_date') }} @endif
                                            </span>
                                            </label>
                                            <input required type="date" class="form-control" name="passport_given_date" value="@if(old('passport_given_date')){{old('passport_given_date')}}@endif">
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label for="">
                                                Passport amal qilish muddati
                                                <span class="error">
                                                @if ($errors->has('passport_issued_date')) | {{ $errors->first('passport_issued_date') }} @endif
                                            </span>
                                            </label>
                                            <input required type="date" class="form-control" name="passport_issued_date" value="@if(old('passport_issued_date')){{old('passport_issued_date')}}@endif">
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label for="">
                                                Kim tomonidan berilgan
                                                <span class="error">
                                                @if ($errors->has('passport_given_by')) | {{ $errors->first('passport_given_by') }} @endif
                                            </span>
                                            </label>
                                            <input required type="text" class="form-control" name="passport_given_by" value="@if(old('passport_given_by')){{old('passport_given_by')}}@endif">
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label for="">
                                                Jinsi
                                                <span class="error">
                                                @if ($errors->has('gender')) | {{ $errors->first('gender') }} @endif
                                            </span>
                                            </label>
                                            <select name="gender" id="" class="form-control">
                                                <option   @if(old('gender') == 1) selected @endif  value="1">Erkak</option>
                                                <option @if( old('gender') == 0) selected @endif  value="0">Ayol</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label for="">
                                                Ta'lim turi
                                                <span class="error">

                                            </span>
                                            </label>
                                            <select name="type_degree" id="" class="form-control">
                                                <option @if(old('type_degree') == 1) selected @endif value="1">Bakalavr</option>
                                                <option @if(old('type_degree') == 2) selected @endif value="2">Magistr</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label for="">
                                                Shartnoma turi
                                                <span class="error">
                                                @if ($errors->has('status_new')) | {{ $errors->first('status_new') }} @endif
                                            </span>
                                            </label>
                                            <select name="status_new" id="" class="form-control">
                                                @php
                                                $types = 'Test\Model\Type'::all();
                                                @endphp
                                                @foreach($types as $type)
                                                    <option @if(old('status_new') ==$type->id) selected @endif  value="{{$type->id}}">
                                                        {{$type->name}}</option>

                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
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
        function region_change(id){
            var url = '/backoffice/get-area-by-region/'+id;
            $.ajax({
                url: url,
                method: 'GET',
                success:function(result){
                    console.log(result);
                    // var result2 = JSON.parse(result.toString());
                    var txt = '';
                    var old = '{{old('area')}}';

                    $.each(result , function(key , value){
                        if(old == value['id']){
                            var bb = 'selected';
                        }
                        else{
                            var bb = '';

                        }
                        txt = txt + '<option '+bb+' value="'+value['id']+'">'+value['name']+'</option>';
                    });
                    $('select[name="area"]').html(txt);
                }

            });
        }
        $('select[name="region"]').change(function(){
            var id = $(this).val();
            region_change(id);
        });
        $(document).ready(function(){
            var id = $('select[name="region"]').val();
            if(id != ''){
                region_change(id);
            }
            var type_id = $('select[name="type_degree"]').val();
            if(type_id != ''){
                get_type_by_degree(type_id);
            }
        });
        $('select[name="type_degree"]').change(function(){
            var type_id = $(this).val();
            if(type_id != ''){
                get_type_by_degree(type_id);
            }
        });
    </script>
    <script>
        $('input[name="passport_seria"]').inputmask({
            'mask':'AA',
        });
        $('input[name="passport_number"]').inputmask({
            'mask':'9999999',
        });
        $('input[name="phone"]').inputmask({
            'mask':'+\\9\\98\\999999999',
        });
        $('input[name="id_code"]').inputmask({
            'regex':'[0-9]*',
        });
    </script>
    <script>
        function get_type_by_degree(id){
            var url = '/backoffice/get-type-by-degree/'+id;
            $.ajax({
                url: url,
                method: 'GET',
                success:function(result3){
                    console.log(result3);
                    var txt = '';
                    var old = '{{old('status_new')}}';
                    $.each(JSON.parse(result3) , function(key , value){
                        if(old == value['id']){
                            var gg = 'selected';
                        }
                        else{
                            var gg = '';
                        }
                        txt = txt + '<option '+gg+' value="'+value['id']+'">'+value['name']+'</option>';
                    });
                    $('select[name="status_new"]').html(txt);
                }
            });
        }

    </script>
@endsection



