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
                        <form action="{{route('credit_prices.update' , ['id' => $data->id])}}" class="form1"
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
                                                @if ($errors->has('degree')) | {{ $errors->first('degree') }} @endif
                                            </span>
                                            </label>
                                            <select name="degree" class="form-control">
                                                @foreach($studentDegrees as $studentDegree)
                                                    <option
                                                            @if($data->degree == $studentDegree->id)
                                                            selected
                                                            @endif
                                                            value="{{ $studentDegree->id }}">{{ $studentDegree->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive" style="overflow-x: unset">
                                    <div class="row">
                                        <div class="col-md-12 form-group">
                                            <label for="">
                                                Bir kredit miqdori
                                                <span class="error">
                                                @if ($errors->has('price')) | {{ $errors->first('price') }} @endif
                                            </span>
                                            </label>
                                            <input type="text" class="form-control" name="price"
                                                   value="@if(old('price')){{old('price')}}@else{{$data->price}}@endif">
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
