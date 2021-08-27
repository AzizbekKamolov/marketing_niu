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
                            <div>
                                <h4 class="card-title">Talaba turiga mumkin bo'lgan shartnomalar</h4>
                            </div>
                            <div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center">
                                Stipendiya bo'yicha
                            </div>
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table id="multi_col_order"
                                           class="table table-striped table-bordered no-wrap export">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nomi</th>
                                            <th>Amallar</th>


                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php $i = 0; @endphp
                                        @foreach($data->agreement_types as $item)
                                            <tr>
                                                <td>{{  ++$i }}</td>
                                                <td>
                                                        {{ $item->name }}
                                                </td>

                                                <td>

                                                </td>

                                            </tr>
                                        @endforeach
                                        </tbody>


                                    </table>
                                </div>
                            </div>
                            <div class="col-md-12 text-center">
                                <hr>
                            </div>
                            <div class="col-md-12 text-center">
                                Tomonlar bo'yicha
                            </div>
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table id="multi_col_order"
                                           class="table table-striped table-bordered no-wrap export">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nomi</th>
                                            <th>Amallar</th>


                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php $i = 0; @endphp
                                        @foreach($data->agreement_side_types as $item)
                                            <tr>
                                                <td>{{  ++$i }}</td>
                                                <td>
                                                        {{ $item->name }}
                                                </td>

                                                <td>

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
    </div>

@endsection

