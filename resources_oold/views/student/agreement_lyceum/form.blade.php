@extends('layouts.marketing2021')
@section('content')
    <section class="section my-4 my-sm-2 my-md-2 my-lg-4 my-xl-5">
        <div class="container border border-2 rounded">
            <form action="{{ route('student.agreement.lyceum_show_agreement') }}" method="post" name="super-form" class="register-form" id="register-form">
                        {{ @csrf_field() }}
                <div class="col-12 d-flex">
                    <div class="container-fluid">
                        <div class="row g-2">
                            <div class="col-md-8">
                                <div class="text-center">
                                    <h1 class="colorSix fw-bold fs-4">Akademik litsey uchun to'lov shartnomasini
                                        olish</h1>
                                    @if(session('info_error'))
                                        <p class="text-danger">
                                            {{ session('info_error') }}
                                        </p>
                                    @endif
                                </div>

                                <div class="col-12">
                                    <label for="validationDefaultUsername" class="form-label">O'quvchi ID raqami</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-white border-0 iconSpan"
                                              id="inputGroupPrepend2"><b>ID</b></span>
                                        <input type="text" class="form-control" id="studentID" name="id_code"
                                               aria-describedby="inputGroupPrepend2" required value="{{old('id_code')}}">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label for="validationDefaultUsername" class="form-label">Vasiy passport
                                        seriyasi</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-white border-0 iconSpan"
                                              id="inputGroupPrepend2"><i class="fas fa-audio-description"></i></span>
                                        <input style="text-transform:uppercase" type="text" maxlength="2" name="parent_pass_seria"
                                               class="form-control" id="passportSeria"
                                               aria-describedby="inputGroupPrepend2" required value="{{old('parent_pass_seria')}}">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label for="validationDefaultUsername" class="form-label">Vasiy passport
                                        raqami</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-white border-0 iconSpan"
                                              id="inputGroupPrepend2"><i class="fas fa-id-card"></i></span>
                                        <input type="text" class="form-control" id="pasportNumber" name="parent_pass_number"
                                               aria-describedby="inputGroupPrepend2" required  value="{{old('parent_pass_number')}}">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label for="validationDefaultUsername" class="form-label">O'quvchi tu'gulgan
                                        sanasi</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-white border-0 iconSpan"
                                              id="inputGroupPrepend2"><i class="far fa-user"></i></span>
                                        <input type="date" class="form-control" id="validationDefaultUsername" name="birthday"
                                               aria-describedby="inputGroupPrepend2" required  value="{{old('birthday')}}">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                               id="dataBirth" required>
                                        <label class="form-check-label" style="font-size: small;" for="invalidCheck2">
                                            Shaxsiy ma'lumotlarimdan foydalanishlariga roziman.
                                        </label>
                                    </div>
                                </div>

                                <div class="col-12 my-4">
                                    <button class="btn btn-primary text-center w-25" type="submit">Shartnomalarni ko'rish</button>
                                </div>
                            </div>

                            <div class="col-md-4 paymentBG">
                                <img src="{{asset('marketing2021/img/icons/undraw_Contract_re_ves9.svg')}}"
                                     class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/inputmask/4.0.9/jquery.inputmask.bundle.min.js"></script>

    <script>
        $("#passportSeria").inputmask({"mask": "AA"});
        $("#pasportNumber").inputmask({"mask": "9999999"});
    </script>
@endsection