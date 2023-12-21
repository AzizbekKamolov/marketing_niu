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
                                <h4 class="card-title">Talabalar ro'yhati</h4>
                            </div>
                            @if(Auth::user()->role == 11)
                                <div>
                                    @include('admin.pages.payment_admin.student.importStudentsModal')
                                    <a href="{{route('payment_admin.student.create')}}" class="btn btn-success"
                                       style="color: white; cursor: pointer"><i class="fa fa-plus"></i> Talaba qo'shish
                                    </a>
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target="#importStudentsModal">
                                        Talabalarni import qilish
                                    </button>
                                    <a href="{{ route('student.import.example') }}" class="btn btn-primary">Students import example</a>
{{--                                    <button type="button" class="btn btn-primary" data-toggle="modal"--}}
{{--                                            data-target="#importPaymentModal">--}}
{{--                                        To'lovlarni import qilish--}}
{{--                                    </button>--}}
                                </div>
                            @endif
                            @include('admin.pages.payment_admin.student.importModal')
                        </div>


                        <div class="table-responsive">
                            <table class="table table-striped table-bordered no-wrap export">
{{--                            <table id="multi_col_order" class="table table-striped table-bordered no-wrap export">--}}
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>F.I.O</th>
                                    <th>ID KOD</th>
                                    <th>Pasport</th>
                                    <th>Tug'ilgan</th>
                                    <th>Telefon</th>
                                    <th>Turi</th>
                                    @if(Auth::user()->role == 11)
                                        <th></th>
                                        {{--                                                <th></th>--}}
                                        <th></th>
                                    @endif
                                    <th></th>
                                    <th></th>
                                </tr>
                                <tr>
                                    <form action="{{ route('payment_admin.student.index') }}" method="get" >
                                        <th></th>
                                        <th><input type="text" name="fio" class="form-control" value="{{request()->get('fio')}}"></th>
                                        <th><input type="text" name="id_code" class="form-control" value="{{request()->get('id_code')}}"></th>
                                        <th><input type="text" name="passport" class="form-control" value="{{request()->get('passport')}}"></th>
                                        <th><input type="date" name="birthday" class="form-control" value="{{request()->get('birthday')}}"></th>
                                        <th><input type="text" name="phone" class="form-control" value="{{request()->get('phone')}}"></th>
                                        <th><input type="text" name="type_name" class="form-control" value="{{request()->get('type_name')}}"></th>
                                        <input type="text" name="search" value="{{request()->get('search')}}" style="border-radius: 2px; height: calc(1.5em + 0.75rem + 2px);padding: .375rem .75rem; border: 1px solid #e9ecef">
                                       <th> <button type="submit" class="btn btn-outline-success"><i class="fa fa-filter"></i>
                                           </button>
                                           </th>
                                        <th><a href="{{ route('payment_admin.student.index') }}" type="submit"
                                               class="btn btn-outline-info"><i class="fa fa-home"></i></a></th>
                                        <th></th>
                                    </form>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $item)
                                    <tr>
                                        <td>{{  ($data->currentpage()-1) * $data->perpage() + $loop->index + 1 }}</td>
                                        <td>
                                            <a href="{{route('payment_admin.student.show' , ['id' => $item->id])}}"
                                               class="" style="color: #000000">{{ $item->fio() }}</a>
                                        </td>
                                        <td>
                                            {{ $item->id_code }}
                                        </td>
                                        <td>
                                            {{ $item->passport_seria }}{{ $item->passport_number }}
                                        </td>
                                        <td>
                                            {{ date('m-d-Y', strtotime($item->birthday)) }}
                                        </td>
                                        <td>
                                            {{ $item->phone }}
                                        </td>
                                        <td>
                                            {{ $item->type?$item->type->name:'' }}
                                        </td>
                                        @if(Auth::user()->role == 11)
                                            <td class="last-td">
                                                <a href="{{route('payment_admin.student.payments' , ['id' => $item->id])}}"
                                                   class="btn  btn-light" style="color: #148f00"><i
                                                            class="fas fa-money-bill-alt"></i></a>
                                                {{--                                                   <a href="" class="btn  btn-light" style="color: #ff8100"><i class="fas fa-money-bill-alt"></i></a>--}}
                                            </td>
                                            {{--                                               <td class="last-td">--}}
                                            {{--                                                   <a href="#" class="btn  btn-light" style="color: #148f00"><i class="fa fa-paypal" aria-hidden="true"></i></a>--}}
                                            {{--                                                   <a href="" class="btn  btn-light" style="color: #ff8100"><i class="fas fa-money-bill-alt"></i></a>--}}
                                            {{--                                               </td>--}}
                                            <td class="last-td">
                                                <a href="{{route('payment_admin.student.check.edit' , ['id' => $item->id])}}"
                                                   class="btn btn-light" style="color: #0053ff"><i
                                                            class="fa fa-edit"></i></a>
                                            </td>
                                        @endif
                                        <td class="last-td">
                                            <a href="{{route('payment_admin.student.show' , ['id' => $item->id])}}"
                                               class="btn btn-light" style="color: #000000"><i
                                                        class="fa fa-eye"></i></a>

                                        </td>
                                        <td class="last-td">
                                            <a href="{{route('payment_admin.student.delete' , ['id' => $item->id])}}"
                                               class="btn btn-danger" onclick="confirm('Haqiqatdaan ham o\'chirmoqchimisiz')"><i
                                                        class="fa fa-trash"></i></a>

                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>


                            </table>
                            {{ $data->appends($_GET)->links() }}
                        </div>
                    </div>

                </div>
            </div>


        </div>
    </div>

@endsection

