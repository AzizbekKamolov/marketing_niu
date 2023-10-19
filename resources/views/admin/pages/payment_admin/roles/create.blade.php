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
                                <h4 class="card-title">Role qo'shish</h4>
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
                        <form id="student_create" action="{{route('role.store')}}" class="form1"
                              method="post">
                            {{csrf_field()}}
                            <div class="table-responsive" style="overflow-x: unset">
                                <fieldset class="scheduler-border ">
                                    <legend class="scheduler-border w-auto">Majburiy</legend>
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label for="">
                                                Role ID
                                                <span class="error">
                                                @if ($errors->has('id'))
                                                        | {{ $errors->first('id') }} @endif
                                            </span>
                                            </label>
                                            <input required type="text" class="form-control" name="id"
                                                   value="@if(old('id')){{old('id')}}@endif">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="">
                                                Role nomi
                                                <span class="error">
                                                @if ($errors->has('name'))
                                                        | {{ $errors->first('name') }} @endif
                                            </span>
                                            </label>
                                            <input required type="text" class="form-control" name="name"
                                                   value="@if(old('name')){{old('name')}}@endif">
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
@endsection



