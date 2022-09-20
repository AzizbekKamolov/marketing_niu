@extends('layouts.marketing2021')
@section('content')
    <section class="section my-4 my-sm-2 my-md-2 my-lg-4 my-xl-5">
        <div class="container-fluid vertical-center">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>
                        <span class="text-danger">
                                            @if(session()->has('error'))
                                <div class="alert alert-danger">
                                                            {{ session()->get('error') }}
                                                        </div>
                            @endif
                                        </span>
                    </p>
                </div>
                <div class="col-12 col-md-6 col-lg-4 col-xl-3 ">
                    <div class="card cardShadow  border mt-2 mt-sm-2 mt-xl-4">
                        <a class="text-decoration-none" href="{{ route('student.agreement.join_training.form') }}">
                            <div
                                    class="card-body align-items-center justify-content-center d-flex flex-column my-2 my-sm-0">
                                <div class="col">
                                    <img class="cardImg"
                                         src="{{asset('marketing2021/img/icons/Payment_agreement.png')}}" width="100px"
                                         alt="">
                                </div>
                                <div class="row">
                                    <h5 class="card-title fs-5 fw-bold colorFour text-center">
                                        Qo'shma ta'lim uchun to'lov shartnomasi</h5>
                                </div>
                            </div>
                        </a>

                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 col-xl-3 ">
                    <div class="card cardShadow  border mt-2 mt-sm-2 mt-xl-4">
                        <a class="text-decoration-none" href="{{ route('student.agreement.form_first_course') }}">
                            <div
                                    class="card-body align-items-center justify-content-center d-flex flex-column my-2 my-sm-0">
                                <div class="col">
                                    <img class="cardImg"
                                         src="{{asset('marketing2021/img/icons/Payment_agreement.png')}}" width="100px"
                                         alt="">
                                </div>
                                <div class="row">
                                    <h5 class="card-title fs-5 fw-bold colorFour text-center">1 - bosqich talabalari uchun to'lov shartnomasi</h5>
                                </div>
                            </div>
                        </a>

                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 col-xl-3 ">
                    <div class="card cardShadow  border mt-2 mt-sm-2 mt-xl-4">
                        <a class="text-decoration-none" href="{{ route('student.agreement.form') }}">
                            <div
                                    class="card-body align-items-center justify-content-center d-flex flex-column my-2 my-sm-0">
                                <div class="col">
                                    <img class="cardImg"
                                         src="{{asset('marketing2021/img/icons/Payment_agreement.png')}}" width="100px"
                                         alt="">
                                </div>
                                <div class="row">
                                    <h5 class="card-title fs-5 fw-bold colorFour text-center">Yuqori bosqich talabalar uchun to'lov shartnomasi</h5>
                                </div>
                            </div>
                        </a>

                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 col-xl-3 ">
                    <div class="card cardShadow  border mt-2 mt-sm-2 mt-xl-4">
                        <a class="text-decoration-none" href="{{ route('student.agreement.form_ttj') }}">
                            <div
                                    class="card-body align-items-center justify-content-center d-flex flex-column my-2 my-sm-0">
                                <div class="col">
                                    <img class="cardImg" class=""
                                         src="{{asset('marketing2021/img/icons/Payment_agreement.png')}}" width="100px"
                                         alt="">
                                </div>
                                <div class="row">
                                    <h5 class="card-title fs-5 fw-bold colorFour"> Talabalar turar joyi uchun shartnoma
                                        </h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>


                <div class="col-12 col-md-6 col-lg-4 col-xl-3 ">
                    <div class="card cardShadow  border mt-2 mt-sm-2 mt-xl-4">
                        <a class="text-decoration-none" href="{{ route('student.agreement.lyceum_form') }}">
                            <div
                                    class="card-body align-items-center justify-content-center d-flex flex-column my-2 my-sm-0">
                                <div class="col">
                                    <img class="cardImg" class=""
                                         src="{{asset('marketing2021/img/icons/Payment_agreement.png')}}" width="100px"
                                         alt="">
                                </div>
                                <div class="row">
                                    <h5 class="card-title fs-5 fw-bold colorFour text-center"> Akademik litseylar uchun to'lov shartnomasi
                                         </h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 col-xl-3 ">
                    <div class="card cardShadow  border mt-2 mt-sm-2 mt-xl-4">
                        <a class="text-decoration-none" href="{{ route('student.credits') }}">
                            <div
                                    class="card-body align-items-center justify-content-center d-flex flex-column my-2 my-sm-0">
                                <div class="col">
                                    <img class="cardImg"
                                         src="{{asset('marketing2021/img/icons/Payment_agreement.png')}}"
                                         width="100px" alt="">
                                </div>
                                <div class="row">
                                    <h5 class="card-title fs-5 fw-bold colorFour text-center">Akadem qarzdorlikni
                                        ko'rish va shartnoma olish</h5>

                                </div>
                            </div>
                        </a>

                    </div>
                </div>
{{--                <div class="col-12 col-md-6 col-lg-4 col-xl-3 ">--}}
{{--                    <div class="card cardShadow  border mt-2 mt-sm-2 mt-xl-4">--}}
{{--                        <a class="text-decoration-none" href="{{ route('payment_check') }}">--}}
{{--                            <div--}}
{{--                                    class="card-body align-items-center justify-content-center d-flex flex-column my-2 my-sm-0">--}}
{{--                                <div class="col">--}}
{{--                                    <img class="cardImg" src="{{asset('marketing2021/img/icons/payment_history.png')}}"--}}
{{--                                         width="100px" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="row">--}}
{{--                                    <h5 class="card-title fs-5 fw-bold colorFour">To`lovlar tarixi</h5>--}}

{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </a>--}}

{{--                    </div>--}}
{{--                </div>--}}


            </div>

        </div>
    </section>
@endsection
