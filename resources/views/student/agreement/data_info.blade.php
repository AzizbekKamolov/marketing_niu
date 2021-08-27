@extends('layouts.marketing_enno')
@section('content')
    <style type="text/css">
        fieldset.scheduler-border {
            width: inherit; /* Or auto */
            padding: 0 10px; /* To give a bit of padding on the left and right */
            border-bottom: none;
        }
    </style>

    <div class="col-md-12">
        <div class="col-md-8  ml-auto mr-auto">
            <div class="row">
                <div class="col-md-4 form-group">
                    <p for="">F.I.O</p>
                    <input type="text" disabled class="form-control"
                           value="{{$data->last_name.' '.$data->first_name.' '.$data->middle_name}}">
                </div>
                <div class="col-md-4 form-group">
                    <p for="">Passport</p>
                    <input type="text" disabled class="form-control"
                           value="{{$data->passport_seria.' '.$data->passport_number}}">
                </div>
                <div class="col-md-4 form-group">
                    <p for="">Tug'ilgan kun</p>
                    <input type="text" disabled class="form-control"
                           value="{{$data->birthday}}">
                </div>

                <div class="col-md-4 form-group">
                    <p for="">Ta'lim turi</p>
                    <input type="text" disabled class="form-control"
                           value="{{$data->type ? $data->type->name :''}}">
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 text-center">
                    <h3>Shartnomalar</h3>
                </div>
                <fieldset class="scheduler-border border w-100 p-3">
                    <legend class="scheduler-border w-auto">To'lov kontrakti uchun</legend>
                    @foreach($data->type->agreement_side_types as $item)
                        <div class="col-md-12 form-group  w-100 text-center ">
                            <button class="btn btn-light p-3 w-100 border" data-toggle="modal"
                                    data-target="#agreement_modal{{$item->id}}">
                                {{$item->name}}
                            </button>
                            <div class="modal fade" id="agreement_modal{{$item->id}}" tabindex="-1" role="dialog"
                                 aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">{{$item->name}}</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{route('student.agreement.show_agreement')}}"
                                                  id="form{{$item->id}}" method="post">
                                                {{csrf_field()}}
                                                {{method_field('POST')}}
                                                <input type="text" hidden value="{{$data->id}}" name="student_id">
                                                <input type="text" hidden value="{{$item->id}}"
                                                       name="agreement_side_type_id">
                                                <div class="row">
                                                    <div class="col-md-12 text-left">
                                                        <div class="form-group">
                                                            <p for="">Tanlang</p>
                                                            <select name="agreement_type_id" class="form-control" id="">
                                                                @foreach($data->type->agreement_types as $item_types)
                                                                    <option value="{{$item_types->id}}">{{$item_types->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Bekor
                                                qilish
                                            </button>
                                            <button type="submit" form="form{{$item->id}}" class="btn btn-primary">
                                                Shartnomani ko`rish
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </fieldset>
                <fieldset class="scheduler-border border w-100 p-3">
                    <legend class="scheduler-border w-auto">Talabalar turar joyi uchun </legend>
                     <div class="col-md-12 form-group  w-100 text-center ">
                            <button class="btn btn-light p-3 w-100 border">
                              Talabalar turar joyi to'lovi uchun shartnoma olish
                            </button>
                </fieldset>
            </div>
        </div>
    </div>

    {{--        </div>--}}
    {{--    </div>--}}


@endsection

@section('js')


@endsection
