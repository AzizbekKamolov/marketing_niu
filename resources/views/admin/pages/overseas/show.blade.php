@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="app-heading-container app-heading-bordered bottom">
        <ul class="breadcrumb">
            <li><a href="/backoffice">Dashboard</a></li>
            <li><a href="{{ route('overseas.index') }}">Xorijiy fuqarolar</a></li>
            <li class="active">Abituriyentni ko'rish</li>
        </ul>
    </div>

    <!-- SEARCH FORM -->
    <div class="block padding-top-20">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group">
                        <a class="btn btn-default btn-icon">
                            <i class="fa fa-search"></i>
                        </a>&nbsp;&nbsp;&nbsp;<span style="font-size: 18px;">{{$data->first_name." ".$data->last_name." ".$data->middle_name}}</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 text-right">
                <div class="col-md-4">
                    <a href="{{route('overseas.edit',['id'=>$data->id])}}" class="btn btn-default btn-icon-fixed"><span class="icon-pencil"></span> O'zgartirish</a>
                </div>
                <div class="col-md-4">
                    <a href="{{route('overseas.index')}}" class="btn btn-default btn-icon-fixed "><span class="icon-list"></span> Ro'yxat</a>
                </div>
                <div class="col-md-4">
                    <form action="{{ route('overseas.destroy', ['id' => $data->id]) }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('delete') }}
                        <button class="btn btn-danger btn-icon-fixed deleteData"><span class="icon-trash"></span> O'chirish</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- END SEARCH FORM -->


    <div class="block block-arrow-top padding-top-20">
        <div class="row">
            <div class="col-md-12">
                <p class="listing listing-separated margin-bottom-0">
                <div class="listing-item margin-bottom-10">
                    <a href="#" class="text-lg">Ko'rish</a>
                    <div class="dropdown pull-right margin-right-10">
                        <button type="button" class="btn btn-default btn-icon pull-right" data-toggle="dropdown"><span class="fa fa-ellipsis-v " style="font-size: 17px;"></span></button>
                        <ul class="dropdown-menu dropdown-left">
                            <li>
                                <a target="_blank" href="{{ asset($data->application_name) }}"><i class="fa fa-file-pdf-o text-danger">&nbsp;</i>Arizani ko'rish</a>
                            </li>
                            <li><a href="#" data-toggle="modal" data-target="#modal-password"><span class="fa fa-th"></span> STUDENT ID berish</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#modal-show"><span class="fa fa-envelope"></span> Xabar yozish</a></li>
                        </ul>
                    </div>
                </div>
                @if(session('message'))
                <p>
                <div class="alert alert-success alert-icon-block alert-dismissible" role="alert">
                    <div class="alert-icon">
                        <span class="icon-checkmark-circle"></span>
                    </div>
                    {{ session('message') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="fa fa-times"></span></button>
                </div>
                </p>
                @endif
                <div class="col-lg-6 col-md-6 col-xs-4 cols-m-3">
                    <img style="width:100%;height:auto">
                </div>
                <div class="col-md-12 margin-top-10">

                    <div class="panel panel-default" id="HTMLtoPDF">
                        <div class="col-lg-3 padding-10">
                            <img src="{{ asset($data->image) }}" style="max-width: 100%;height: auto" class="margin-10">
                        </div>
                        <div class="col-lg-9">
                            <div class="row padding-10">
                                <h4 class="text-uppercase text-bold text-rg heading-line-below">Shaxsiy ma'lumotlari</h4>
                                <div class="col-md-6">
                                    <div class="margin-top-10">
                                        <span>Ismi:</span><strong> &nbsp;&nbsp;&nbsp;{{ $data->first_name }}</strong>
                                    </div>
                                    <div class="margin-top-10">
                                        <span>Familyasi:</span>&nbsp;&nbsp;&nbsp;<strong> {{ $data->last_name }}</strong>
                                    </div>
                                    <div class="margin-top-10">
                                        <span>Otasining ismi:</span>&nbsp;&nbsp;&nbsp;<strong> {{ $data->middle_name }}</strong>
                                    </div>
                                    <div class="margin-top-10">
                                        <span>Jinsi:</span>&nbsp;&nbsp;&nbsp;<strong> {{ $data->getGender() }}</strong>
                                    </div>
                                    <div class="margin-top-10">
                                        <span>Tug'ilgan joyi:</span>&nbsp;&nbsp;&nbsp;<strong> {{ $data->getBirthPlace() }}</strong>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="margin-top-10">
                                        <span>Tug'ilgan sanasi:</span><strong> &nbsp;&nbsp;&nbsp;{{ $data->birth_date }}</strong>
                                    </div>
                                    <div class="margin-top-10">
                                        <span>Fuqaroligi:</span>&nbsp;&nbsp;&nbsp;<strong> {{ $data->getCitizenship() }}</strong>
                                    </div>
                                    <div class="margin-top-10">
                                        <span>Pochta:</span>&nbsp;&nbsp;&nbsp;<strong style="color: dodgerblue;"> {{ $data->email }}</strong>
                                    </div>
                                    <div class="margin-top-10">
                                        <span>Telefon:</span>&nbsp;&nbsp;&nbsp;
                                        <strong> {{ $data->phone1 }}</strong>
                                        @if(!empty($data->phone2)) <strong> / {{ $data->phone2 }}</strong>@endif
                                    </div>
                                    @if(!empty($data->student_id))
                                    <div class="margin-top-10">
                                        <span>Noyob raqam:</span>&nbsp;&nbsp;&nbsp;<strong style="color:dodgerblue"> {{ $data->student_id }}</strong>
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <div class="row margin-top-20 padding-10">
                                <h4 class="text-uppercase text-bold text-rg heading-line-below">Passport va manzil ma'lumotlari</h4>
                                <div class="col-md-6">
                                    <div class="margin-top-10">
                                        <span>Passport seriyasi:</span><strong> &nbsp;&nbsp;&nbsp;{{ $data->passport_serial }}</strong>
                                    </div>
                                    <div class="margin-top-10">
                                        <span>Passport raqami:</span>&nbsp;&nbsp;&nbsp;<strong> {{ $data->passport_number }}</strong>
                                    </div>
                                    <div class="margin-top-10">
                                        <span>Kim tomonidan berilgan:</span>&nbsp;&nbsp;&nbsp;<strong> {{ $data->passport_issued_by }}</strong>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="margin-top-10">
                                        <span>Passport berilgan sana:</span><strong> &nbsp;&nbsp;&nbsp;{{ $data->passport_expiration_date }}</strong>
                                    </div>
                                    <div class="margin-top-10">
                                        <span>Doimiy manzil:</span>&nbsp;&nbsp;&nbsp;<strong> {{ $data->living_address }}</strong>
                                    </div>
                                    <div class="margin-top-10">
                                        <span>Passport (PDF):</span>&nbsp;&nbsp;&nbsp;<strong style="color: blue"><a target="_blank" href="{{ asset($data->passport_copy) }}"><i class="fa fa-file-pdf-o text-danger">&nbsp;</i>FILE</a></strong>
                                    </div>
                                </div>
                            </div>
                            <div class="row margin-top-20 padding-10">
                                <h4 class="text-uppercase text-bold text-rg heading-line-below">Fakultet va Til</h4>
                                <div class="col-md-6">
                                    <div class="margin-top-10">
                                        <span>Ta'lim turi:</span><strong> &nbsp;&nbsp;&nbsp;{{ $data->getSpeciality() }}</strong>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="margin-top-10">
                                        <span>Ta'lim tili:</span><strong> &nbsp;&nbsp;&nbsp;{{ $data->getStudyLang() }}</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="row margin-top-20 padding-10">
                                <h4 class="text-uppercase text-bold text-rg heading-line-below">Ta'lim haqida ma'lumotlar</h4>
                                <div class="col-md-6">
                                    <div class="margin-top-10">
                                        <span>Universitet:</span><strong> &nbsp;&nbsp;&nbsp;{{ $data->background_study }}</strong>
                                    </div>
                                    <div class="margin-top-10">
                                        <span>Tugatgan yili:</span>&nbsp;&nbsp;&nbsp;<strong> {{ $data->backgraund_grad_year }}</strong>
                                    </div>
                                    <div class="margin-top-10">
                                        <span>Diplom seriya:</span>&nbsp;&nbsp;&nbsp;<strong> {{ $data->back_cert_series }}</strong>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="margin-top-10">
                                        <span>Chet tilini bilish:</span><strong> &nbsp;&nbsp;&nbsp;{{ $data->getForeignLang() }}</strong>
                                    </div>
                                    <div class="margin-top-10">
                                        <span> Diplomi (pdf):</span><strong> &nbsp;&nbsp;&nbsp;
                                            <a target="_blank" style="color:dodgerblue" href="{{ asset($data->back_cert_copy) }}"><i class="fa fa-file-pdf-o">&nbsp;</i>FILE</a>
                                        </strong>
                                    </div>
                                    <div class="margin-top-10">
                                        <span>Diplom nomer:</span>&nbsp;&nbsp;&nbsp;<strong> {{ $data->back_cert_numbers }}</strong>
                                    </div>
                                </div>
                                <div class="col-md-12 margin-top-15">
                                    Abituriyent haqida qo'shimcha:<br>
                                    <div class="col-md-12 padding-20">
                                        <blockquote><i>{{ $data->more_info }}</i></blockquote>
                                    </div>
                                </div>

                                <div class="col-md-12 margin-top-15">
                                    Qo'shimcha stipendiyalar sovrindorimi:<br>
                                    @if($data->is_scholarship_has )
                                    <div class="col-md-12 padding-20">
                                        <p style="text-align: center;margin: 3px;padding: 0;font-weight: bold">{{ $data->scholarship_title }}</p>
                                        <hr style="border:1px solid black;padding: 0;margin: 0">
                                    </div>
                                    @endif
                                    @if($data->is_scholarship_has == 0)
                                    <p style="margin-left: 100px;font-weight: bold">Yo'q</p>
                                    @endif
                                </div>
                            </div>
                            <br>
                        </div>
                    </div>

                    <div class="modal fade" id="modal-password" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="icon-cross"></span></button>

                            <div class="modal-content">
                                <div class="modal-body">

                                    <div class="app-heading app-heading-small app-heading-condensed margin-bottom-30">
                                        <div class="title">
                                            <h5>Abituriyentni hujjatlarini qabul qilinganini tasdiqlash</h5>
                                        </div>
                                    </div>

                                    <form action="{{ route('overseasconfirm') }}" method="post" id="password_update">
                                        {{csrf_field()}}
                                        <input type="hidden" value="{{ $data->id }}" name="application_id">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-lg-12">
                                                        <label>Unikal ID yarating
                                                            @if($errors->has('student_id'))
                                                            <span class="text-danger"> | {{ $errors->first('password') }}</span>
                                                            @endif
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <input type="text" class="form-control" value="{{ old('password') }}" id="student_id" name="student_id" placeholder="Unikal ID" required>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <button type="button" class="btn btn-default form-control" onclick="studenID_generator()"><span class="icon-cog   "></span>Generatiya qilish</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12">
                                                    <button type="submit" class="btn btn-default pull-right" style="width: 50%">Saqlash</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END MODAL PASSWORD -->

                    <div class="modal fade" id="modal-username" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="icon-cross"></span></button>

                            <div class="modal-content">
                                <div class="modal-body">

                                    <div class="app-heading app-heading-small app-heading-condensed margin-bottom-30">
                                        <div class="title">
                                            <h5>Foydalanuvchining loginini o'zgartirish</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END MODAL PASSWORD -->

                    <div class="modal fade" id="modal-show" tabindex="-1" role="dialog">
                        <div class="modal-dialog modal-lg" role="document">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="icon-cross"></span></button>

                            <div class="modal-content padding-20">

                                    <div class="app-heading app-heading-large app-heading-condensed margin-bottom-10">
                                        <div class="title">
                                            <h5 style="text-align: center;">Abituriyentga xabar yozish</h5>
                                        </div>
                                    </div>
                                    <form action="{{route('overmailto')}}" method="POST" id="message-form">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="applicant_id" value="{{ $data->id }}">
                                        <textarea name="content" id="content" style="display: none"></textarea>
                                        <div class="block">
                                            <div class="form-group message">
                                                <div class="editor-summernote">

                                                </div>
                                            </div>
                                        </div>
                                        <button type="button" id="mailtouser" class="btn btn-success pull-right">Submit</button>
                                    </form>
                            </div>
                        </div>
                    </div>
                    <!-- END MODAL PASSWORD -->
                </div>
            </div>
        </div>
    </div>
</div>

</div>
@endsection
