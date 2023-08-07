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
                                <h4 class="card-title">Talabalar Turlari</h4>
                            </div>

                        </div>
                        <form action="{{route('payment_admin.types_update' , ['id' => $type->id])}}" class="form1"
                              method="post">
                            {{csrf_field()}}
                            {{method_field('put')}}
                            <fieldset class="scheduler-border ">
                                <legend class="scheduler-border w-auto">Majburiy</legend>
                                <div class="table-responsive" style="overflow-x: unset">

                                    <div class="row">
                                        <div class="col-md-12 form-group">
                                            <label for="">
                                                Yo'nalish nomi
                                                <span class="error">
                                                @if ($errors->has('name')) | {{ $errors->first('name') }} @endif
                                            </span>
                                            </label>
                                            <input type="text" class="form-control" name="name"
                                                   value="@if(old('id_code')){{old('id_code')}}@else{{$type->name}}@endif">
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive" style="overflow-x: unset">
                                    <div class="row">
                                        <div class="col-md-12 form-group">
                                            <label for="">
                                                Izoh (ta'lim yo'nalish qisqartmasi)
                                                <span class="error">
                                                @if ($errors->has('comment')) | {{ $errors->first('comment') }} @endif
                                            </span>
                                            </label>
                                            <input type="text" class="form-control" name="comment"
                                                   value="@if(old('comment')){{old('comment')}}@else{{$type->comment}}@endif">
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive" style="overflow-x: unset">
                                    <div class="row">
                                        <div class="col-md-12 form-group">
                                            <label for="">
                                                Bir kredit narxi
                                                <span class="error">
                                                @if ($errors->has('degree')) | {{ $errors->first('degree') }} @endif
                                            </span>
                                            </label>
                                            <select name="degree" class="form-control">
                                                @foreach($creditPrices as $creditPrice)
                                                    <option
                                                            @if($type->degree == $creditPrice->id)
                                                                    selected
                                                            @endif
                                                            value="{{ $creditPrice->id }}">{{ $creditPrice->price ." (" . $creditPrice->getDegree->name . ")" }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive" style="overflow-x: unset">
                                    <div class="row">
                                        <div class="col-md-12 form-group">
                                            <label for="">
                                                To'lov muddati (birinchi yarim yillik uchun)
                                                <span class="error">
                                                @if ($errors->has('part1')) | {{ $errors->first('part1') }} @endif
                                            </span>
                                            </label>
                                            <input type="text" class="form-control" name="part1"
                                                   value="@if(old('part1')){{old('part1')}}@else{{$type->part1}}@endif">
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive" style="overflow-x: unset">
                                    <div class="row">
                                        <div class="col-md-12 form-group">
                                            <label for="">
                                                To'lov muddati (ikkinchi yarim yillik uchun)
                                                <span class="error">
                                                @if ($errors->has('part2')) | {{ $errors->first('part2') }} @endif
                                            </span>
                                            </label>
                                            <input type="text" class="form-control" name="part2"
                                                   value="@if(old('part2')){{old('part2')}}@else{{$type->part2}}@endif">
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive" style="overflow-x: unset">
                                    <div class="row">
                                        <div class="col-md-12 form-group">
                                            <label for="">
                                                Talaba turi(S-sirtqi, K-oddiy bakalavr)
                                                <span class="error">
                                                @if ($errors->has('contract_type')) | {{ $errors->first('contract_type') }} @endif
                                            </span>
                                            </label>
                                            <input type="text" class="form-control" name="price"
                                                   value="@if(old('contract_type')){{old('contract_type')}}@else{{$type->contract_type}}@endif">
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-success">Saqlash</button>
                            </fieldset>
                        </form>

                    </div>

                </div>
            </div>


        </div>
    </div>

@endsection
