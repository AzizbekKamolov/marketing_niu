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

    </style>

    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-body">
                        <div style="display: flex; justify-content: space-between; padding-bottom: 15px;">
                            <div>
                                <h4 class="card-title">Talaba</h4>
                            </div>
                            <div>

                                {{--                                            <button class="btn btn-success form_submit"><i class="fa fa-save"></i> Saqlash</button>--}}
                                <button type="button" class="btn btn-light send-id-button"><i class="fas fa-envelope"
                                                                                              aria-hidden="true"></i> Id
                                    kodni jo'natish
                                </button>

                                <button type="button" class="btn btn-light back_button_js"><i
                                        class="fa fa-arrow-circle-left" aria-hidden="true"></i> Ortga
                                </button>

                            </div>


                        </div>
                        <form action="{{route('payment_admin.send_id_code')}}" method="post" id="send-id-form">
                            {{csrf_field()}}
                            {{method_field('POST')}}
                            <input type="text" value="{{$data->id}}" hidden name="student_id">
                        </form>
                        <div class="table-responsive" style="overflow-x: unset">
                            <div class="row">
                                <div class="col-md-3 form-group">
                                    <label for="">
                                        ID KOD
                                        <span class="error">
                                                @if ($errors->has('id_code')) | {{ $errors->first('id_code') }} @endif
                                            </span>
                                    </label>
                                    <input readonly type="text" class="form-control" name="id_code"
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
                                    <input readonly type="text" class="form-control" name="first_name"
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
                                    <input readonly type="text" class="form-control" name="last_name"
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
                                    <input readonly type="text" class="form-control" name="middle_name"
                                           value="@if(old('middle_name')){{old('middle_name')}}@else{{$data->middle_name}}@endif">
                                </div>
                                <div class="col-md-3 form-group">
                                    <label for="">
                                        Tug'ilgan sana
                                        <span class="error">
                                                @if ($errors->has('birthday')) | {{ $errors->first('birthday') }} @endif
                                            </span>
                                    </label>
                                    <input readonly type="date" class="form-control" name="birthday"
                                           value="@if(old('birthday')){{old('birthday')}}@else{{$data->birthday}}@endif">
                                </div>
                                <div class="col-md-3 form-group">
                                    <label for="">
                                        Telefon
                                        <span class="error">
                                                @if ($errors->has('phone')) | {{ $errors->first('phone') }} @endif
                                            </span>
                                    </label>
                                    <input readonly type="text" class="form-control" name="phone"
                                           value="@if(old('phone')){{old('phone')}}@else{{$data->phone}}@endif">
                                </div>
                                <div class="col-md-3 form-group">
                                    <label for="">
                                        Viloyat
                                        <span class="error">
                                                @if ($errors->has('region_id'))
                                                | {{ $errors->first('region_id') }} @endif
                                            </span>
                                    </label>
                                    <select disabled name="region" id="" class="form-control">
                                        @foreach($regions as $region)
                                            <option @if(old('region')) @if(old('region')==$region->id) selected
                                                    @endif @else @if($data->region == $region->id) selected
                                                    @endif @endif value="{{$region->id}}">{{$region->name_uz}}</option>
                                            {{--                                                    <option @if($data->region_id == $region->id) selected @endif value="{{$region->id}}">{{$region->name_uz}}</option>--}}
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-3 form-group">
                                    <label for="">
                                        Tuman/Shahar
                                        <span class="error">
                                                @if ($errors->has('area_id')) | {{ $errors->first('area_id') }} @endif
                                            </span>
                                    </label>
                                    <select disabled name="area" id="" class="form-control">
                                        @if(old('region'))
                                            @php
                                                $ar = 'Test\Model\Area'::where('region_id' , old('region'))->get();
                                            @endphp
                                            @foreach($ar as $item)
                                                <option @if(old('area')) @if(old('area')==$item->id) selected
                                                        @endif @else @if($data->area == $item->id) selected
                                                        @endif @endif value="{{$item->id}}">{{$item->name}}</option>
                                            @endforeach
                                        @else
                                            @php
                                                $ar = 'Test\Model\Area'::where('region_id' , $data->region)->get();
                                            @endphp
                                            @foreach($ar as $item)
                                                <option @if($data->area == $item->id) selected
                                                        @endif  value="{{$item->id}}">{{$item->name}}</option>
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
                                    <input readonly type="text" class="form-control" name="address"
                                           value="@if(old('address')){{old('address')}}@else{{$data->address}}@endif">
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
                                            <input readonly type="text" class="form-control" style="width: 30%"
                                                   name="passport_seria"
                                                   value="@if(old('passport_seria')){{old('passport_seria')}}@else{{$data->passport_seria}}@endif">
                                            <input readonly type="text" class="form-control" style="width: 70%"
                                                   name="passport_number"
                                                   value="@if(old('passport_number')){{old('passport_number')}}@else{{$data->passport_number}}@endif">
                                        </div>
                                    </label>
                                </div>
                                <div class="col-md-3 form-group">
                                    <label for="">
                                        Passport berilgan sana
                                        <span class="error">
                                                @if ($errors->has('passport_given_date'))
                                                | {{ $errors->first('passport_given_date') }} @endif
                                            </span>
                                    </label>
                                    <input readonly type="date" class="form-control" name="passport_given_date"
                                           value="@if(old('passport_given_date')){{old('passport_given_date')}}@else{{$data->passport_given_date}}@endif">
                                </div>
                                <div class="col-md-3 form-group">
                                    <label for="">
                                        Passport amal qilish muddati
                                        <span class="error">
                                                @if ($errors->has('passport_issued_date'))
                                                | {{ $errors->first('passport_issued_date') }} @endif
                                            </span>
                                    </label>
                                    <input readonly type="date" class="form-control" name="passport_issued_date"
                                           value="@if(old('passport_issued_date')){{old('passport_issued_date')}}@else{{$data->passport_issued_date}}@endif">
                                </div>
                                <div class="col-md-3 form-group">
                                    <label for="">
                                        Kim tomonidan berilgan
                                        <span class="error">
                                                @if ($errors->has('passport_given_by'))
                                                | {{ $errors->first('passport_given_by') }} @endif
                                            </span>
                                    </label>
                                    <input readonly type="text" class="form-control" name="passport_given_by"
                                           value="@if(old('passport_given_by')){{old('passport_given_by')}}@else{{$data->passport_given_by}}@endif">
                                </div>
                                <div class="col-md-3 form-group">
                                    <label for="">
                                        Jinsi
                                        <span class="error">
                                                @if ($errors->has('gender')) | {{ $errors->first('gender') }} @endif
                                            </span>
                                    </label>
                                    <select disabled name="gender" id="" class="form-control">
                                        <option @if(old('gender')) @if(old('gender') == 1) selected
                                                @endif @else @if($data->gender == 1) selected @endif @endif value="1">
                                            Erkak
                                        </option>
                                        <option @if(old('gender')) @if(old('gender') == 0) selected
                                                @endif @else @if($data->gender == 0) selected @endif @endif value="0">
                                            Ayol
                                        </option>
                                    </select>
                                </div>
                                <div class="col-md-3 form-group">
                                    <label for="">
                                        Ta'lim turi
                                        <span class="error">

                                            </span>
                                    </label>
                                    <select disabled name="type_degree" id="" class="form-control">
                                        <option @if($data->get_type()->degree == 1) selected @endif value="1">Bakalavr
                                        </option>
                                        <option @if($data->get_type()->degree == 2) selected @endif value="2">Magistr
                                        </option>
                                    </select>
                                </div>
                                <div class="col-md-3 form-group">
                                    <label for="">
                                        Ta'lim turi
                                        <span class="error">
                                                @if ($errors->has('status_new'))
                                                | {{ $errors->first('status_new') }} @endif
                                            </span>
                                    </label>
                                    <select disabled name="status_new" id="" class="form-control">
                                        @php
                                            $types = 'Test\Model\Type'::all();
                                        @endphp
                                        @foreach($types as $type)
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
                                           value="{{$data->course}}" disabled>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="card">

                    <div class="card-body">
                        <div style="display: flex; justify-content: space-between; padding-bottom: 15px;">
                            <div>
                                <h4 class="card-title">Chegirmalar</h4>
                            </div>
                        </div>

                        <div class="" style="overflow-x: unset">
                            <div class="row">
                                <div class="col-md-12" style="display: flex; justify-content: space-between">
                                    <p>Kontrakt to'lovi uchun chegirmalar</p>
                                    <button class="btn btn-outline-success" data-toggle="modal"
                                            data-target="#add-agreement-discount-modal"><i class="fa fa-plus"></i>
                                        Qo'shish
                                    </button>
                                    <div class="modal fade" id="add-agreement-discount-modal" tabindex="-1"
                                         role="dialog"
                                         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Kontrakt to'lovi
                                                        uchun chegirma</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form id="agreement-discount-store-1"
                                                          action="{{route('payment_admin.discount.store')}}"
                                                          method="post">
                                                        {{csrf_field()}}
                                                        <div class="form-group">
                                                            <p>
                                                                Chegirma foizi (%):
                                                            </p>
                                                            <input type="number" class="form-control" name="percent">
                                                            <input type="number" hidden class="form-control" name="type"
                                                                   value="1">
                                                            <input type="text" hidden name="student_id"
                                                                   value="{{$data->id}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <p>
                                                                Izoh
                                                            </p>
                                                            <textarea name="description" id="" cols="30" rows="10"
                                                                      class="form-control"></textarea>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Bekor qilish
                                                    </button>
                                                    <button type="submit" form="agreement-discount-store-1"
                                                            class="btn btn-primary">Saqlash
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <table class="table table-striped table-bordered no-wrap">
                                    <thead>
                                    <tr>
                                        <th>Izoh</th>
                                        <th>Chegirma</th>
                                        <th>Amallar</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data->agreement_discounts as $item)
                                        <tr>
                                            <td>
                                                {{$item->description}}
                                            </td>
                                            <td>
                                                {{$item->percent}}
                                            </td>
                                            <td>
                                                <button class="btn btn-light text-danger delete-button"
                                                        id="discount-delete-{{$item->id}}"><i class="fa fa-trash"></i>
                                                </button>
                                                <form id="form-discount-delete-{{$item->id}}"
                                                      action="{{route('payment_admin.discount.destroy')}}"
                                                      method="post">
                                                    {{csrf_field()}}
                                                    {{method_field('DELETE')}}
                                                    <input type="text" hidden value="{{$data->id}}" name="student_id">
                                                    <input type="text" hidden value="{{$item->id}}" name="discount_id">
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>


                                </table>

                            </div>
                            <div class="row">
                                <div class="col-md-12" style="display: flex; justify-content: space-between">
                                    <p>Boshqa to'lovlar uchun chegirmalar</p>
                                    <button class="btn btn-outline-success" data-toggle="modal"
                                            data-target="#add-other-agreement-discount-modal"><i class="fa fa-plus"></i>
                                        Qo'shish
                                    </button>
                                    <div class="modal fade" id="add-other-agreement-discount-modal" tabindex="-1"
                                         role="dialog"
                                         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Boshqa to'lovlar
                                                        uchun chegirma</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form id="agreement-discount-store-2"
                                                          action="{{route('payment_admin.discount.store')}}"
                                                          method="post">
                                                        {{csrf_field()}}
                                                        <div class="form-group">
                                                            <p>
                                                                Chegirma foizi (%):
                                                            </p>
                                                            <input type="number" class="form-control" name="percent">
                                                            <input type="number" hidden class="form-control" name="type"
                                                                   value="2">
                                                            <input type="text" hidden name="student_id"
                                                                   value="{{$data->id}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <p>
                                                                To'ov shartnoma turi
                                                            </p>
                                                            <select name="agreement_id" class="form-control" id="">
                                                                @foreach($other_agreement_types as $oth)
                                                                    <option value="{{$oth->id}}">{{$oth->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <p>
                                                                Izoh
                                                            </p>
                                                            <textarea name="description" id="" cols="30" rows="10"
                                                                      class="form-control"></textarea>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Bekor qilish
                                                    </button>
                                                    <button type="submit" form="agreement-discount-store-2"
                                                            class="btn btn-primary">Saqlash
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <table class="table table-striped table-bordered no-wrap">
                                    <thead>
                                    <tr>
                                        <th>Nomi</th>
                                        <th>Izoh</th>
                                        <th>Chegirma</th>
                                        <th>Amallar</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data->other_agreement_discounts as $item)
                                        <tr>
                                            <td>
                                                {{$item->agreement_type->name}}
                                            </td>
                                            <td>
                                                {{$item->description}}
                                            </td>
                                            <td>
                                                {{$item->percent}}
                                            </td>
                                            <td>
                                                <button class="btn btn-light text-danger delete-button"
                                                        id="discount-delete-{{$item->id}}"><i class="fa fa-trash"></i>
                                                </button>
                                                <form id="form-discount-delete-{{$item->id}}"
                                                      action="{{route('payment_admin.discount.destroy')}}"
                                                      method="post">
                                                    {{csrf_field()}}
                                                    {{method_field('DELETE')}}
                                                    <input type="text" hidden value="{{$data->id}}" name="student_id">
                                                    <input type="text" hidden value="{{$item->id}}" name="discount_id">
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
            </div>


        </div>
    </div>

@endsection

@section('js')
    <script>
        $('.send-id-button').click(function(){
            if(confirm('Jo`natilsinmi')){
                $('#send-id-form').submit();
            }
        });
    </script>
    <script>
        $('.delete-button').click(function () {
            var id = $(this).attr('id');
            if (confirm('O`chirasizmio')) {
                $('#form-' + id).submit();
            }
        })
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
        // $(document).ready(function(){
        //     var id = $('select[name="region"]').val();
        //     if(id != ''){
        //         region_change(id);
        //     }
        // });
    </script>
@endsection

