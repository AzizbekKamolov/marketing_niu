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
    <div class="main-container">

        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-12">
                <div class="row">


                    <div class="col-12 p-3 m-2">
                        <div class="card info-card sales-card bg-banner">
                            <div class="card-body">
                                <h5 class="card-title">Statistika </h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-cart"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h2>
                                            Kunlik to'lov - @if($data) {{ number_format($data->summ) }} @endif
                                            | Shu oy uchun to'lov - @if($dataMonth) {{ number_format($dataMonth->summ) }} @endif

                                        </h2>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>
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
                                <a href="{{ route('payment_admin.create.payment.history') }}" class="btn btn-success">
                                    <i class="fa fa-plus">To'lov qo'shish</i>
                                </a>
                            </div>
                        </div>


                        <div class="table-responsive">
                            <table class="table table-striped table-bordered no-wrap export">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>F.I.O</th>
                                    <th>Pasport</th>
                                    <th>To'lov Summasi</th>
                                    <th>To'lov sanasi</th>
                                    <th>Izoh</th>
                                    <th>To'lov kiritilgan sana</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($payments as $payment)
                                    <tr>
                                        <td>{{  ($payments->currentPage() - 1) * $payments->perpage() + $loop->iteration }}</td>
                                        <td>
                                            @if($payment->student)
                                                {{ $payment->student->fio() }}
                                            @endif
                                        </td>
                                        <td>
                                            @if($payment->student)
                                                {{ $payment->student->passport_seria.$payment->student->passport_number }}
                                            @endif
                                        </td>
                                        <td>{{ $payment->amount }}</td>
                                        <td>{{ $payment->payment_date }}</td>
                                        <td>{{ $payment->description }}</td>
                                        <td>{{ $payment->created_at }}</td>
{{--                                        <td class="last-td">--}}
{{--                                            <a href="{{route('payment_admin.student.check.edit' , ['id' => $payment->id])}}"--}}
{{--                                               class="btn btn-light" style="color: #0053ff"><i--}}
{{--                                                        class="fa fa-edit"></i></a>--}}
{{--                                        </td>--}}
                                        <td class="last-td">
                                            <a href="{{route('payment_admin.delete.payment.history' , [$payment->id])}}"
                                               class="btn btn-danger"
                                               onclick="confirm('Haqiqatdaan ham o\'chirmoqchimisiz')"><i
                                                        class="fa fa-trash"></i></a>

                                        </td>
                                    </tr>
                                @endforeach
                                @include('admin.pages.payment_admin.payments.create_payment')

                                </tbody>

                            </table>
                            {{ $payments->links() }}
                        </div>
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
