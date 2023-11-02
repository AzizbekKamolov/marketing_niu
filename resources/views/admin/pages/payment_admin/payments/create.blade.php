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
                            <form action="{{route('payment_admin.store.payment.history')}}" method="post">
                                {{csrf_field()}}


                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label for="">
                                                Passport seria va raqam
                                                <span class="error" style="color: red">
                                                    @if(session()->has('student_error')) {{ session()->get('student_error') }} @endif
                                                @if ($errors->has('passport_seria'))
                                                        | {{ $errors->first('passport_seria') }} @endif
                                                    @if ($errors->has('passport_number'))
                                                        | {{ $errors->first('passport_number') }} @endif
                                                    @if ($errors->has('passport_seria_number'))
                                                        | {{ $errors->first('passport_seria_number') }} @endif
                                            </span>
                                                <div style="display: flex; margin-top: 7px;">
                                                    <input required type="text" class="form-control" style="width: 30%"
                                                           name="passport_seria"
                                                           value="@if(old('passport_seria')){{old('passport_seria')}}@endif">
                                                    <input required type="text" class="form-control" style="width: 70%"
                                                           name="passport_number"
                                                           value="@if(old('passport_number')){{old('passport_number')}}@endif">
                                                </div>
                                            </label>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="">To'lov summasi
                                            <span class="error" style="color: red">@if ($errors->has('amount'))
                                                    | {{ $errors->first('amount') }} @endif</span>
                                            </label>
                                            <input type="text" class="form-control payment_amount" name="amount" value="{{ old('amount') }}">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="">To'lov sanasi<span class="error" style="color: red">@if ($errors->has('payment_date'))
                                                        | {{ $errors->first('payment_date') }} @endif</span></label>
                                            <input type="date" class="form-control" name="payment_date" value="{{ old('payment_date') }}">
                                        </div>
                                        <div class="col-md-12 form-group">
                                            <label for="">Izoh<span style="color: red">@if ($errors->has('description'))
                                                        | {{ $errors->first('description') }} @endif</span></label>
                                            <textarea name="description" id="" cols="30" rows="4" class="form-control" >{{ old('description') }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-success"> <i class="fa fa-save"></i> Saqlash</button>
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
        $('input[name="passport_seria"]').inputmask({
            'mask': 'AA',
        });
        $('input[name="passport_number"]').inputmask({
            'mask': '9999999',
        });
    </script>
@endsection

