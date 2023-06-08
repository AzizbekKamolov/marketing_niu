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
                    <div class="row g-2 mt-5 text-center">
                        <form action="{{route('student.agreement.join_training.show_agreement')}}" method="post">
                            {{csrf_field()}}
                            {{method_field('POST')}}
                            <input type="text" hidden readonly value="{{$data->id}}" name="student_id">
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                                <button class="btn btn-primary" type="submit">Shartnomani ko'rish</button>
                            </div>
                        </form>
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