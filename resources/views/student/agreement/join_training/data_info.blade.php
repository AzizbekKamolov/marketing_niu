@extends('layouts.marketing2021')
@section('content')
    <section class="section my-4 my-sm-2 my-md-2 my-lg-2 my-xl-2">
        <div class="container">

            <div class="col-12 d-flex">

                <div class="container-fluid">
                    <fieldset disabled>
                        <div class="row g-2">

                            <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                                <label for="validationDefaultUsername" class="form-label text-muted">F.I.O</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-white border-0 iconSpan"
                                          id="inputGroupPrepend2"><b>FIO</b></span>
                                    <input type="text" class="form-control" id="studentID"
                                           aria-describedby="inputGroupPrepend2" required value="{{$data->fio()}}">
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                                <label for="validationDefaultUsername"
                                       class="form-label text-muted">Passport</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-white border-0 iconSpan" id="inputGroupPrepend2"><i
                                            class="fas fa-audio-description"></i></span>
                                    <input style="text-transform:uppercase" type="text" maxlength="2"
                                           class="form-control" id="passportSeria"
                                           aria-describedby="inputGroupPrepend2"
                                           required value="{{$data->passport_seria.' '.$data->passport_number}}">
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                                <label for="validationDefaultUsername" class="form-label text-muted">Tug'ulgan
                                    sanasi</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-white border-0 iconSpan" id="inputGroupPrepend2"><i
                                            class="far fa-user"></i></span>
                                    <input type="text" class="form-control" id="validationDefaultUsername"
                                           aria-describedby="inputGroupPrepend2" required
                                           value="{{$data->birthday}}">
                                </div>
                            </div>

                        </div>

                    </fieldset>
                    <div class="col-12 my-3">
                        <div>
                            <h1 class="fs-3 text-center">Shartnomalar</h1>
                        </div>

                        <fieldset class="scheduler-border myBorder rounded w-100 p-3 my-2">
                            <legend class="scheduler-border w-auto">To'lov kontrakti uchun</legend>
                            @foreach($agreement_side_types as $item)
                                <div class="col-12 my-3 myBorder">
                                    <button type="button"
                                            class="btn border  border-2 w-100 text-center py-sm-1 py-md-2 py-xl-3"
                                            data-bs-toggle="modal"
                                            data-bs-target="#agreement_modal{{$item->id}}">{{$item->name}}</button>
                                    <div class="modal fade" id="agreement_modal{{$item->id}}" tabindex="-1"
                                         role="dialog"
                                         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">{{$item->name}}</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close">
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{route('student.agreement.join_training.show_agreement')}}"
                                                          id="form{{$item->id}}" method="post">
                                                        {{csrf_field()}}
                                                        {{method_field('POST')}}
                                                        <input type="text" hidden value="{{$data->id}}"
                                                               name="student_id">
                                                        <input type="text" hidden value="{{$item->id}}"
                                                               name="agreement_side_type_id">
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Bekor
                                                        qilish
                                                    </button>
                                                    <button type="submit" form="form{{$item->id}}"
                                                            class="btn btn-primary">
                                                        Shartnomani ko`rish
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            @endforeach
                        </fieldset>

                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
    <script>
        // $('button[data-toggle="modal"]').click(function(){
        //     var target = $(this).attr('data-target');
        //     var modal = $(target);
        //     var myModal = new bootstrap.Modal(modal)
        //     modal.modal('show')
        // })
    </script>
@endsection
