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

        .error {
            color: red;
        }

        .yashil {
            background-color: #6EE170;
            color: white;
        }

        .qizil {
            background-color: #E15C4F;
            color: white;
        }

    </style>
    <style type="text/css">
        table.tableizer-table {
            font-size: 12px;
            border: 1px solid #CCC;
            font-family: Arial, Helvetica, sans-serif;
        }

        .tableizer-table td {
            padding: 4px;
            margin: 3px;
            border: 1px solid #CCC;
        }

        .tableizer-table th {
            background-color: #104E8B;
            color: #FFF;
            font-weight: bold;
        }
    </style>

    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-body">
                        <div style="display: flex; justify-content: space-between; padding-bottom: 15px;">
                            <div>
                                <h4 class="card-title">Talaba ma`lumotlari </h4>
                            </div>
                            <div>
                                @if(Auth::user()->role == 14)
                                    <a href="{{ route('super.lyceum.index') }}" class="btn btn-info">Ro'yhat <i
                                            class="fa fa-list" aria-hidden="true"></i></a>

                                    @if($data->status == 1)
                                        <button href="" class="btn btn-success " data-toggle="modal"
                                                data-target="#exampleModal">Arizani tasdiqlash <i
                                                class="fa fa-check-square" aria-hidden="true"></i></button>
                                    @elseif($data->status == 2)
                                        <button href="" class="btn btn-danger " data-toggle="modal"
                                                data-target="#exampleModalback">Bekor qilish <i
                                                class="fa fa-check-square" aria-hidden="true"></i></button>

                                    @endif
                                @endif


                            </div>

                        </div>


                        <div class="row">

                            <div class="col-md-4 form-group">
                                <label>Ismi <span class="error">   @if ($errors->has('first_name'))
                                            | {{ $errors->first('first_name') }} @endif </span></label>
                                <input readonly="true" type="text" name="first_name" class="form-control"
                                       value="@if(old('first_name')){{ old('first_name') }}@else{{ $data->first_name }}@endif">
                            </div>
                            <div class="col-md-4 form-group">
                                <label>Familiyasi <span class="error">   @if ($errors->has('last_name'))
                                            | {{ $errors->first('last_name') }} @endif </span></label>
                                <input readonly="true" type="text" name="last_name" class="form-control"
                                       value="@if(old('last_name')){{ old('last_name') }}@else{{ $data->last_name }}@endif">
                            </div>
                            <div class="col-md-4 form-group">
                                <label>Otasining ismi <span class="error">  @if ($errors->has('middle_name'))
                                            | {{ $errors->first('middle_name') }} @endif </span></label>
                                <input readonly="true" type="text" name="middle_name" class="form-control"
                                       value="@if(old('middle_name')){{ old('middle_name') }}@else{{ $data->middle_name }}@endif">
                            </div>

                            <div class="col-md-4 form-group">
                                <label>Telefon <span class="error">  @if ($errors->has('phone'))
                                            | {{ $errors->first('phone') }} @endif </span></label>
                                <input readonly="true" type="text" name="phone" class="form-control"
                                       value="@if(old('phone')){{ old('phone') }}@else{{ $data->phone }}@endif">
                            </div>

                            <div class="col-md-4 form-group">
                                <label>ID-KOD (Marketing) <span class="error">   @if ($errors->has('id_code_marketing'))
                                            | {{ $errors->first('id_code_marketing') }} @endif </span></label>
                                <input readonly="true" type="text" name="id_code_marketing" class="form-control"
                                       value="@if(old('id_code_marketing')){{ old('id_code_marketing') }}@else{{ $data->id_code }}@endif">
                            </div>
                            <div class="col-md-4 form-group">
                                <label>Ota onasi (vasiy) F.I.O <span class="error">   @if ($errors->has('parent_name'))
                                            | {{ $errors->first('parent_name') }} @endif </span></label>
                                <input readonly="true" type="text" name="parent_name" class="form-control"
                                       value="@if(old('parent_name')){{ old('parent_name') }}@else{{ $data->parent_name }}@endif">
                            </div>
                            <div class="col-md-4 form-group">
                                <label>Ota onasi pasport seria va raqami <span class="error">   @if ($errors->has('parent_pass_seria'))
                                            | {{ $errors->first('parent_pass_seria') }} @endif </span></label>
                                <div class="d-flex">
                                    <input readonly="true" type="text" name="parent_pass_seria" class="form-control"
                                           value="@if(old('parent_pass_seria')){{ old('parent_pass_seria') }}@else{{ $data->parent_pass_seria }}@endif"
                                           style="width: 30%">
                                    <input readonly="true" type="text" name="parent_pass_number" class="form-control"
                                           value="@if(old('parent_pass_number')){{ old('parent_pass_number') }}@else{{ $data->parent_pass_number }}@endif"
                                           style="width: 70%">
                                </div>
                            </div>
                            <div class="col-md-4 form-group">
                                <label>O'quvchi tug'ilgan sanasi <span class="error">   @if ($errors->has('birthday'))
                                            | {{ $errors->first('birthday') }} @endif </span></label>
                                <input readonly="true" type="date" name="birthday" class="form-control"
                                       value="@if(old('birthday')){{ old('birthday') }}@else{{ $data->birthday }}@endif">
                            </div>
                            <div class="col-md-4 form-group">
                                <label>Manzil <span class="error">   @if ($errors->has('address'))
                                            | {{ $errors->first('address') }} @endif </span></label>
                                <input readonly="true" type="text" name="address" class="form-control"
                                       value="@if(old('address')){{ old('address') }}@else{{ $data->address }}@endif">
                            </div>
                            <div class="col-md-4 form-group">
                                <label>Shartnoma turi <span class="error">   @if ($errors->has('address'))
                                            | {{ $errors->first('address') }} @endif </span></label>
                                <input readonly="true" type="text" name="address" class="form-control"
                                       value="@if(old('address')){{ old('address') }}@else{{ $data->amount->name }}@endif">
                            </div>


                        </div>

                        <div class="row">
                            @if($data->status == 2 || $data->status == 3)
                                <div class="col-md-4 form-group border">
                                    <label><b>Shartnoma summasi</b> </label> <br>
                                    {{ $data->amount->name }}
                                </div>
                            @endif

                        </div>


                    </div>

                </div>
            </div>


        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <form action="{{ route('lyceum.accept') }}" class="tasdiqlash-modal" method="post">
            {{ csrf_field() }}
            <div class="modal-dialog  modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <p>
                                    <strong>{{ $data->fio() }}</strong> ni arizasini tasdiqlash uchun kontrakt miqdorini
                                    tanlang
                                </p>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" hidden="true" readonly="true" name="super_id"
                                           value="{{ $data->id }}">
                                    @php
                                        $types = 'Test\Model\LyceumAmount'::all();
                                    @endphp
                                    <select class="form-control" name="amount_id" required="required">
                                        <option value="">Tanlang</option>
                                        @foreach($types as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>

                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Yopish</button>
                        <button class="btn btn-success ariza-tasdiqlash" type="button">Tasdiqlash</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div class="modal fade" id="exampleModalback" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {{ $data->fio() }} ni arizasini bekor qilmoqchimisz?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Yopish</button>
                    <a href="{{ route('reject.super.lyceum' , ['id' => $data->id]) }}" type="button"
                       class="btn btn-danger">Ha</a>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script type="text/javascript">
        // $(document).ready(function(){
        //   if ($('.region_id').val() != "") {
        //     var id = $('.region_id').val();
        //     var url = '/backoffice/get-area-by-region/'+id;
        //     $.ajax({
        //       url: url,
        //       success: function(html){
        //         console.log(html);
        //         var txt = '';
        //         $.each(html , function(key , value){
        //           txt = txt+ '<option value="'+value['id']+'">'+value['name']+'</optioin>';
        //         });
        //         $('.area_id').html(txt);
        //       }
        //     });

        //   }
        // });
        $('.region_id').change(function () {
            if ($(this).val() != "") {
                var id = $(this).val();
                var url = '/backoffice/get-area-by-region/' + id;
                $.ajax({
                    url: url,
                    success: function (html) {
                        console.log(html);
                        var txt = '';
                        $.each(html, function (key, value) {
                            txt = txt + '<option value="' + value['id'] + '">' + value['name'] + '</optioin>';
                        });
                        $('.area_id').html(txt);
                    }
                });

            }
        });
    </script>
    <script type="text/javascript">
        $('.ariza-tasdiqlash').click(function () {
            if ($('select[name="amount_id"]').val() != "") {
                $('.tasdiqlash-modal').submit();
            }
        });
    </script>
@endsection
