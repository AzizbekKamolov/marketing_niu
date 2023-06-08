@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="app-heading-container app-heading-bordered bottom">
            <ul class="breadcrumb">
                <li><a href="/backoffice">Dashboard</a></li>
                <li><a href="{{ route('student.index') }}">Studentlar</a></li>
                <li class="active">Studentni ko'rish</li>
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
                        <a href="{{route('student.edit',['id'=>$data->id])}}" class="btn btn-default btn-icon-fixed"><span class="icon-pencil"></span> O'zgartirish</a>
                    </div>
                    <div class="col-md-4">
                        <a href="{{route('student.index')}}" class="btn btn-default btn-icon-fixed "><span class="icon-list"></span> Ro'yxat</a>
                    </div>
                    <div class="col-md-4">
                        <form action="{{ route('student.destroy', ['id' => $data->id]) }}" method="post">
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
                            <a href="/backoffice/savepdf/{{$data->id}}" class="btn btn-default pull-right margin-right-15"><i class="fa fa-file-pdf-o text-danger">&nbsp;</i>PDF export</a>
                            <div class="dropdown pull-right margin-right-10">
                                <button type="button" class="btn btn-default btn-icon pull-right" data-toggle="dropdown"><span class="fa fa-ellipsis-v " style="font-size: 17px;"></span></button>
                                <ul class="dropdown-menu dropdown-left">
                                    <li><a href="#" data-toggle="modal" data-target="#modal-username"><span class="icon-user"></span> Loginni o'zgartirish</a></li>
                                    <li><a href="#" data-toggle="modal" data-target="#modal-password"><span class="icon-lock"></span> Parolni o'zgartirish</a></li>
                                    <li><a href="#" style="margin-left:7px;" data-toggle="modal" data-target="#modal-show"><span class="fa fa-info"></span> Ma'lumot</a></li>
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
                        @if($errors->has('password'))
                            <p>
                                <div class="alert alert-danger alert-icon-block alert-dismissible" role="alert">
                                    <div class="alert-icon">
                                        <span class="icon-checkmark-circle"></span>
                                    </div>
                                    {{ $errors->first('password') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="fa fa-times"></span></button>
                                </div>
                            </p>
                        @endif
                        @if($errors->has('new_login'))
                            <p>
                                <div class="alert alert-danger alert-icon-block alert-dismissible" role="alert">
                                    <div class="alert-icon">
                                        <span class="icon-checkmark-circle"></span>
                                    </div>
                                    {{ $errors->first('new_login') }}
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
                                        </div>
                                        <div class="col-md-6">
                                            <div class="margin-top-10">
                                                <span>Tug'ilgan sanasi:</span><strong> &nbsp;&nbsp;&nbsp;{{ $data->birth_date }}</strong>
                                            </div>
                                            <div class="margin-top-10">
                                                <span>Millati:</span>&nbsp;&nbsp;&nbsp;<strong> {{ $data->getNationality() }}</strong>
                                            </div>
                                            <div class="margin-top-10">
                                                <span>Fuqaroligi:</span>&nbsp;&nbsp;&nbsp;<strong> {{ $data->getCitizenship() }}</strong>
                                            </div>
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
                                                <span>Passport berilgan sana:</span><strong> &nbsp;&nbsp;&nbsp;{{ $data->passport_issued_date }}</strong>
                                            </div>
                                            <div class="margin-top-10">
                                                <span>Passport amal qilish muddati:</span>&nbsp;&nbsp;&nbsp;<strong> {{ $data->passport_expiration_date }}</strong>
                                            </div>
                                            <div class="margin-top-10">
                                                <span>Doimiy manzil:</span>&nbsp;&nbsp;&nbsp;<strong> {{ $data->home_address }}</strong>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row margin-top-20 padding-10">
                                        <h4 class="text-uppercase text-bold text-rg heading-line-below">Ta'lim haqida ma'lumotlar</h4>
                                        <div class="col-md-6">
                                            <div class="margin-top-10">
                                                <span>Ta'lim turi:</span><strong> &nbsp;&nbsp;&nbsp;{{ $data->edu_type }}</strong>
                                            </div>
                                            <div class="margin-top-10">
                                                <span>Boshlanish sanasi:</span>&nbsp;&nbsp;&nbsp;<strong> {{ $data->edu_starting_date }}</strong>
                                            </div>
                                            <div class="margin-top-10">
                                                <span>Yakunlanish sanasi:</span>&nbsp;&nbsp;&nbsp;<strong> {{ $data->edu_ending_date }}</strong>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="margin-top-10">
                                                <span>Qabul hujjat raqami:</span><strong> &nbsp;&nbsp;&nbsp;{{ $data->application_number }}</strong>
                                            </div>
                                            <div class="margin-top-10">
                                                <span>Student ID:</span>&nbsp;&nbsp;&nbsp;<strong> {{ $data->student_number }}</strong>
                                            </div>
                                            <div class="margin-top-10">
                                                <span>Hoziri holati:</span>&nbsp;&nbsp;&nbsp;<strong> {{ $data->getStatus() }}</strong>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row margin-top-20 padding-10">
                                        <h4 class="text-uppercase text-bold text-rg heading-line-below">Qo'shimcha ma'lumotlar</h4>
                                        <div class="col-md-6">
                                            <div class="margin-top-10">
                                                <span>Telefon:</span><strong> &nbsp;&nbsp;&nbsp;{{ $data->phone1 }}</strong>
                                            </div>
                                            @if(!empty($data->phone2))
                                            <div class="margin-top-10">
                                                <span>Qo'shimcha telefon:</span>&nbsp;&nbsp;&nbsp;<strong> {{ $data->edu_starting_date }}</strong>
                                            </div>
                                            @endif
                                            @if(!empty($data->phone3))
                                            <div class="margin-top-10">
                                                <span>Yakunlanish sanasi:</span>&nbsp;&nbsp;&nbsp;<strong> {{ $data->phone3 }}</strong>
                                            </div>
                                            @endif
                                        </div>
                                        <div class="col-md-6">
                                            @if(!empty($data->military_doc_number))
                                            <div class="margin-top-10">
                                                <span>Qabul hujjat raqami:</span><strong> &nbsp;&nbsp;&nbsp;{{ $data->application_number }}</strong>
                                            </div>
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
                                                    <h5>Foydalanuvching parolini o'zgartirish</h5>
                                                </div>
                                            </div>

                                            <form action="/backoffice/changepassword/{{ $data->id }}" method="post" id="password_update">
                                                {{csrf_field()}}
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="col-lg-12">
                                                                <label>Yangi parolni kiriting
                                                                    @if($errors->has('password'))
                                                                        <span class="text-danger"> | {{ $errors->first('password') }}</span>
                                                                    @endif
                                                                </label>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <input type="text" class="form-control" value="{{ old('password') }}" id="password" name="password" placeholder="Yangi parol" required>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <button type="button" class="btn btn-default form-control" onclick="password_generator(10)"><span class="icon-cog   "></span>Generatiya qilish</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12">
                                                            <button type="submit" class="btn btn-default pull-right" style="width: 50%">O'zgartirish</button>
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

                                            <form action="/backoffice/changelogin/{{ $data->id }}" method="post" id="password_update">
                                                {{ csrf_field() }}
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label>Yangi Loginni kiriting
                                                                @if($errors->has('new_login'))
                                                                    <span class="text-danger"> | {{ $errors->first('new_login') }}</span>
                                                                @endif
                                                            </label>
                                                            <input type="text" class="form-control" id="new_login" name="new_login" placeholder="Yangi login" value="<?php if(old('new_login')=="") echo $data->user->username; else echo old('new_login')?>" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12">
                                                            <button type="submit" class="btn btn-default pull-right" style="width: 50%">O'zgartirish</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END MODAL PASSWORD -->

                            <div class="modal fade" id="modal-show" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="icon-cross"></span></button>

                                    <div class="modal-content">
                                        <div class="modal-body">

                                            <div class="app-heading app-heading-small app-heading-condensed margin-bottom-10">
                                                <div class="title">
                                                    <h5 style="text-align: center;">Foydalanuvchining maxfiy ma'lumotlari</h5>
                                                </div>
                                            </div>

                                            <form id="password_update">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <span>Login: &nbsp;</span><strong>{{ $data->user->username }}</strong>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <span>Parol: &nbsp;</span><strong>{{ $data->fetch2($data->user_id) }}</strong>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <span>Yaratuvchi: &nbsp;</span><strong>{{ $data->getCreator() }}</strong>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <span>Yaratilgan vaqt: &nbsp;</span><strong>{{ $data->created_at }}</strong>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <span>So'ngi o'zgartiruvchi: &nbsp;</span><strong>{{ $data->getUpdater() }}</strong>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <span>Songi o'zgartirilgan vaqt: &nbsp;</span><strong>{{ $data->updated_at }}</strong>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>

                                        </div>
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