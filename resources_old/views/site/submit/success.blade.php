@extends('layouts.site')
@section('content')
    <div class="container">

        <div class="invoice">
            <div class="invoice-container">
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-3">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="invoice-company">
                                    <h2><span class="text-success">@lang('main.congrats')!  </span> @lang('main.success')!</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="invoice-container invoice-container-highlight">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="invoice-address">
                                    <h5>@lang('main.dear')!</h5>
                                    @if(App::isLocale('ru'))
                                        <p>
                                            Направленное Вами заявление о приеме в бакалавриат Ташкентского государственного
                                            юридического университета принято на рассмотрение.
                                            В течение 72 часов по данному адресу электронной почты
                                            Вам будет направлено соответствующее оповещение о регистрации
                                            заявления посредством присвоения ему уникального номера или об отказе в приеме Вашего заявления.
                                        </p>
                                    @endif
                                    @if(App::isLocale('en'))
                                        <p>
                                            Your application for admission to the magistracy of Tashkent State Law University
                                            was accepted for consideration. <br>Within 72 hours at this e-mail address, you will receive
                                            an appropriate notification of registration of the application by giving it a unique number or refusing to accept your application.
                                        </p>
                                    @endif
                                    @if(App::isLocale('uz'))
                                        <p>
                                            Your application for admission to the magistracy of Tashkent State Law University
                                            was accepted for consideration. <br>Within 72 hours at this e-mail address, you will receive
                                            an appropriate notification of registration of the application by giving it a unique number or refusing to accept your application.
                                        </p>
                                    @endif
                                    <p>
                                        <a class="btn btn-default" href="/">@lang('main.home')</a>
                                    </p>
                                    <p>
                                        <a class="btn btn-default" href="<?=$file?>" target="_blank">Download PDF</a>
                                        <a class="btn btn-default" href="<?=$file1?>" target="_blank">Download PDF</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="invoice-container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="invoice-thanks">
                            <div class="row">
                                <div class="col-md-6">
                                </div>
                                <div class="col-md-6 text-right">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection
