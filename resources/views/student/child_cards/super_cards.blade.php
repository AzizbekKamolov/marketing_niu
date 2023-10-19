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
                        <a class="text-decoration-none" href="{{ route('super.super') }}">
                            <div
                                    class="card-body align-items-center justify-content-center d-flex flex-column my-2 my-sm-0">
                                <div class="col">
                                    <img class="cardImg" src="{{asset('marketing2021/img/icons/contract.png')}}"
                                         width="85px" alt="">
                                </div>
                                <div class="row">
                                    <h5 class="card-title fs-5 fw-bold colorFour text-center">Magistratura va bakalavrga
                                        1-kurs uchun tabaqalashtirilgan to'lov shartnomaga ariza qoldirish </h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                 <div class="col-12 col-md-6 col-lg-4 col-xl-3 ">
                    <div class="card cardShadow  border mt-2 mt-sm-2 mt-xl-4">
                        <a class="text-decoration-none" href="{{ route('super.super_perevod') }}">
                            <div
                                    class="card-body align-items-center justify-content-center d-flex flex-column my-2 my-sm-0">
                                <div class="col">
                                    <img class="cardImg" src="{{asset('marketing2021/img/icons/contract.png')}}"
                                         width="85px" alt="">
                                </div>
                                <div class="row">
                                    <h5 class="card-title fs-5 fw-bold colorFour text-center">O'qishni ko'chiruvchilar uchun tabaqalashtirilgan to'lov shartnomaga ariza qoldirish</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 col-xl-3 ">
                    <div class="card cardShadow  border mt-2 mt-sm-2 mt-xl-4">
                        <a class="text-decoration-none" href="{{ route('lyceum.super.form') }}">
                            <div
                                    class="card-body align-items-center justify-content-center d-flex flex-column my-2 my-sm-0">
                                <div class="col">
                                    <img class="cardImg" src="{{asset('marketing2021/img/icons/contract.png')}}"
                                         width="85px" alt="">
                                </div>
                                <div class="row">
                                    <h5 class="card-title fs-5 fw-bold colorFour text-center"> Akademik litsey
                                        uchun tabaqalashtirilgan to'lov shartnomaga ariza qoldirish</h5>
                                </div>
                            </div>
                        </a>

                    </div>
                </div>


            </div>

        </div>
    </section>
@endsection
