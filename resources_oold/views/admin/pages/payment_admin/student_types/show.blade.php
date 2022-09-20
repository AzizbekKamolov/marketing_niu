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

    <div class="container-fluid" style="min-height: auto; padding: 0px">
        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-body">
                        <div style="display: flex; justify-content: space-between; padding-bottom: 15px;">
                            <div>
                                <h4 class="card-title">Talaba turiga mumkin bo'lgan shartnomalar (Stipendiya
                                    bo'yicha)</h4>
                            </div>
                            <div>
                                <button class="btn btn-outline-success" data-toggle="modal"
                                        data-target="#agreement_type_modal"><i class="fa fa-plus-circle"></i> Qo'shish
                                </button>
                                <div class="modal fade" id="agreement_type_modal" tabindex="-1" role="dialog"
                                     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Shartnomaga ruhsat
                                                    berish</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form id="agreement_type_store"
                                                      action="{{route('payment_admin.student_type.agreement_type.store')}}"
                                                      method="post">
                                                    {{csrf_field()}}
                                                    {{method_field('POST')}}
                                                    <input type="text" hidden value="{{$data->id}}" name="type_id">
                                                    <div class="text-danger col-md-12">
                                                        @if(Session::has('agreement_type_error'))
                                                            @if ($errors->any())
                                                                <ul>
                                                                    @foreach ($errors->all() as $error)
                                                                        <li>{{ $error }}</li>
                                                                    @endforeach
                                                                </ul>
                                                            @endif
                                                        @endif

                                                    </div>
                                                    <div class="col-md-12 form-group">
                                                        <p>
                                                            Shartnoma:
                                                        </p>
                                                        <select name="agreement_type_id" class="form-control" id="">
                                                            @foreach($other_types as $item1)
                                                                <option value="{{$item1->id}}">{{$item1->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-md-12 form-group">
                                                        <p>
                                                            Narx
                                                        </p>
                                                        <input type="number" class="form-control" name="price">
                                                    </div>
{{--                                                    <div class="col-md-12 form-group">--}}
{{--                                                        <p>--}}
{{--                                                            Narx (1 - yarim yillik) so'zlar bilan:--}}
{{--                                                        </p>--}}
{{--                                                        <input type="text" class="form-control" name="price_part1_word">--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col-md-12 form-group">--}}
{{--                                                        <p>--}}
{{--                                                            Narx (2 - yarim yillik):--}}
{{--                                                        </p>--}}
{{--                                                        <input type="number" class="form-control" name="price_part2">--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col-md-12 form-group">--}}
{{--                                                        <p>--}}
{{--                                                            Narx (2 - yarim yillik) so'z bilan:--}}
{{--                                                        </p>--}}
{{--                                                        <input type="text" class="form-control"--}}
{{--                                                               name="price_part2_word">--}}
{{--                                                    </div>--}}
                                                </form>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                    Close
                                                </button>
                                                <button type="submit" form="agreement_type_store"
                                                        class="btn btn-primary">Save changes
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">

                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table id="multi_col_order"
                                           class="table table-striped table-bordered no-wrap export">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nomi</th>
                                            <th>Narx</th>
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
                                                    {{ $item->pivot->price_part1 }} / {{ $item->pivot->price_part2 }}
                                                </td>

                                                <td style="width: 1px">
                                                    <div class="d-flex">
                                                        <button type="button"
                                                                class="btn btn-light text-danger delete-button"
                                                                id="delete-type{{$item->id}}"><i
                                                                    class="fa fa-trash"></i></button>
                                                        <form id="form-delete-type{{$item->id}}"
                                                              action="{{route('payment_admin.student_type.agreement_type.destroy')}}"
                                                              method="post">
                                                            {{method_field('DELETE')}}
                                                            {{csrf_field()}}
                                                            <input type="text" name="element_id" hidden
                                                                   value="{{$item->id}}">
                                                            <input type="text" name="type_id" hidden
                                                                   value="{{$data->id}}">
                                                        </form>
                                                    </div>
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
    <div class="container-fluid" style="min-height: auto; padding: 0px">
        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-body">
                        <div style="display: flex; justify-content: space-between; padding-bottom: 15px;">
                            <div>
                                <h4 class="card-title">Talaba turiga mumkin bo'lgan shartnomalar (Tomonlar
                                    bo'yicha)</h4>
                            </div>
                            <div>
                                <button class="btn btn-outline-success" data-toggle="modal"
                                        data-target="#agreement_side_type_modal"><i class="fa fa-plus-circle"></i>
                                    Qo'shish
                                </button>
                                <div class="modal fade" id="agreement_side_type_modal" tabindex="-1" role="dialog"
                                     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Shartnomaga ruhsat
                                                    berish</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form id="agreement_side_type_store"
                                                      action="{{route('payment_admin.student_type.agreement_side_type.store')}}"
                                                      method="post">
                                                    {{csrf_field()}}
                                                    {{method_field('POST')}}
                                                    <input type="text" hidden value="{{$data->id}}" name="type_id">
                                                    <div class="text-danger col-md-12">
                                                         @if(Session::has('agreement_side_type_error'))
                                                            @if ($errors->any())
                                                                <ul>
                                                                    @foreach ($errors->all() as $error)
                                                                        <li>{{ $error }}</li>
                                                                    @endforeach
                                                                </ul>
                                                            @endif
                                                        @endif
                                                    </div>
                                                    <div class="col-md-12 form-group">
                                                        <p>
                                                            Shartnoma:
                                                        </p>
                                                        <select name="agreement_side_type_id" class="form-control" id="">
                                                            @foreach($other_side_types as $item1)
                                                                <option value="{{$item1->id}}">{{$item1->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                </form>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                    Close
                                                </button>
                                                <button type="submit" form="agreement_side_type_store"
                                                        class="btn btn-primary">Save changes
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
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

                                                <td style="width: 1px">
                                                    <div class="d-flex">
                                                        <button type="button"
                                                                class="btn btn-light text-danger delete-button"
                                                                id="delete-side-type{{$item->id}}"><i
                                                                    class="fa fa-trash"></i></button>
                                                        <form id="form-delete-side-type{{$item->id}}"
                                                              action="{{route('payment_admin.student_type.agreement_side_type.destroy')}}"
                                                              method="post">
                                                            {{method_field('DELETE')}}
                                                            {{csrf_field()}}
                                                            <input type="text" name="element_id" hidden
                                                                   value="{{$item->id}}">
                                                            <input type="text" name="type_id" hidden
                                                                   value="{{$data->id}}">
                                                        </form>
                                                    </div>
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
    <div class="container-fluid" style="min-height: auto; padding: 0px">
        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-body">
                        <div style="display: flex; justify-content: space-between; padding-bottom: 15px;">
                            <div>
                                <h4 class="card-title">Boshqa shartnomalar</h4>
                            </div>
                            <div>
                                <button class="btn btn-outline-success" data-toggle="modal"
                                        data-target="#other_agreement_modal"><i class="fa fa-plus-circle"></i>
                                    Qo'shish
                                </button>
                                <div class="modal fade" id="other_agreement_modal" tabindex="-1" role="dialog"
                                     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Shartnomaga ruhsat
                                                    berish</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form id="other_agreement_type_store"
                                                      action="{{route('payment_admin.student_type.other_agreement_type.store')}}"
                                                      method="post">
                                                    {{csrf_field()}}
                                                    {{method_field('POST')}}
                                                    <input type="text" hidden value="{{$data->id}}" name="type_id">
                                                    <div class="text-danger col-md-12">
                                                         @if(Session::has('other_agreement_type_error'))
                                                            @if ($errors->any())
                                                                <ul>
                                                                    @foreach ($errors->all() as $error)
                                                                        <li>{{ $error }}</li>
                                                                    @endforeach
                                                                </ul>
                                                            @endif
                                                        @endif
                                                    </div>
                                                    <div class="col-md-12 form-group">
                                                        <p>
                                                            Shartnoma:
                                                        </p>
                                                        <select name="other_agreement_type_id" class="form-control" id="">
                                                            @foreach($other_agreements as $item3)
                                                                <option value="{{$item3->id}}">{{$item3->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                </form>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                    Close
                                                </button>
                                                <button type="submit" form="other_agreement_type_store"
                                                        class="btn btn-primary">Save changes
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
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
                                        @foreach($data->other_agreement_types as $item)
                                            <tr>
                                                <td>{{  ++$i }}</td>
                                                <td>
                                                    {{ $item->name }}
                                                </td>

                                                <td style="width: 1px">
                                                    <div class="d-flex">
                                                        <button type="button"
                                                                class="btn btn-light text-danger delete-button"
                                                                id="delete-other-type{{$item->id}}"><i
                                                                    class="fa fa-trash"></i></button>
                                                        <form id="form-delete-other-type{{$item->id}}"
                                                              action="{{route('payment_admin.student_type.other_agreement_type.destroy')}}"
                                                              method="post">
                                                            {{method_field('DELETE')}}
                                                            {{csrf_field()}}
                                                            <input type="text" name="element_id" hidden
                                                                   value="{{$item->id}}">
                                                            <input type="text" name="type_id" hidden
                                                                   value="{{$data->id}}">
                                                        </form>
                                                    </div>
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
@section('js')
    <script>
        $('.delete-button').click(function () {
            var id = $(this).attr('id');
            if (confirm('O`chirasizmi')) {
                $('#form-' + id).submit();
            }
        })
    </script>
    @if(Session::has('agreement_type_error'))
        <script>
            $('button[data-target="#agreement_type_modal"]').click();
        </script>
    @endif
    @if(Session::has('agreement_side_type_error'))
        <script>
            $('button[data-target="#agreement_side_type_modal"]').click();
        </script>
    @endif
    @if(Session::has('other_agreement_type_error'))
        <script>
            $('button[data-target="#other_agreement_modal"]').click();
        </script>
    @endif
@endsection

