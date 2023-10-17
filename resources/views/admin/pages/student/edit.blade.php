@extends('layouts.admin')
@section('content')
    <div class="app-heading-container app-heading-bordered bottom">
        <ul class="breadcrumb">
            <li><a href="/backoffice">Dashboard</a></li>
            <li><a href="{{ route('student.index') }}">Studentlar</a></li>
            <li class="active">Yangi qo'shish</li>
        </ul>
    </div>
    <!-- END PAGE HEADING -->

    <!-- START CONTENT TABS -->
    <div class="app-content-tabs">
        <ul>
            <li><a href="#tab-1" class="active"><span class="icon-user"></span> Shaxsiy ma'lumotlar</a></li>
            <li><a href="#tab-2"><span class="icon-map-marker"></span> Pasport va manzil</a></li>
            <li><a href="#tab-3"><span class="icon-car"></span> Ta'lim haqida</a></li>
            <li><a href="#tab-4"><span class="icon-plus-circle"></span> Qo'shimcha ma'lumotlar</a></li>
        </ul>
        <button type="button" class="btn btn-success pull-right" style="min-width: 200px;" onclick="$('#student-form').submit();">Saqlash</button>

    </div>
    <!-- END CONTENT TABS -->
    <form action="{{ route('student.update',['id'=>$data->id]) }}" method="post" class="has-validation-callback" enctype="multipart/form-data" name="student-form" id="student-form">
    {{ csrf_field() }}
    {{ method_field('put') }}
    <!-- START CONTAINER -->
        <div class="container app-content-tab active" id="tab-1">

            <!-- BLOCK -->
            <div class="block">
                <!-- START HEADING -->
                <div class="app-heading app-heading-small">
                    <div class="icon">
                        <span class="icon-cube"></span>
                    </div>
                    <div class="title">
                        <h2>Studentning shahsiy ma'lumotlari</h2>
                    </div>
                </div>
                <!-- END START HEADING -->

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Ismi
                                @if($errors->has('first_name'))
                                    <span class="text-danger"> | {{ $errors->first('first_name') }}</span>
                                @endif
                            </label>
                            <input class="form-control"  placeholder="Ism" value="<?php if(old('first_name')=="") echo $data->first_name; else echo old('first_name')?>" id="first_name" name="first_name">
                        </div>

                        <div class="form-group">
                            <label>Jinsi {{old('gender')}}
                                @if($errors->has('gender'))
                                    <span class="text-danger"> | {{ $errors->first('gender') }}</span>
                                @endif
                            </label>
                            <br>
                            <div class="app-radio danger inline">
                                <label><input type="radio" name="gender" id="gender" value="1" checked=""> Ayol<span></span></label>
                            </div>
                            <div class="app-radio success inline">
                                <label><input type="radio" name="gender" id="gender" value="0" @if(old('gender')==0) checked @endif> Erkak<span></span></label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Fuqaroligi
                                @if($errors->has('citizenship'))
                                    <span class="text-danger"> | {{ $errors->first('citizenship') }}</span>
                                @endif
                            </label>
                            <select class="bs-select dynamic"  id="citizenship" data-live-search="true" data-dependent="citizenship" name="citizenship">
                                @foreach($countries as $country)
                                    <option value="{{$country->id}}" @if($country->country_code=="UZ") selected @endif @if(old('citizenship')==$country->id) selected @endif>{{$country->country_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Familyasi
                                @if($errors->has('last_name'))
                                    <span class="text-danger"> | {{ $errors->first('last_name') }}</span>
                                @endif
                            </label>
                            <input class="form-control"  placeholder="FIO" value="<?php if(old('last_name')=="") echo $data->last_name; else echo old('last_name')?>" id="last_name" name="last_name">
                        </div>

                        <div class="form-group">
                            <label>Tavallud kuni
                                @if($errors->has('birth_date'))
                                    <span class="text-danger"> | {{ $errors->first('birth_date') }}</span>
                                @endif
                            </label>
                            <div class="input-group bs-datepicker">
                                <input type="text" class="form-control"  name="birth_date" id="birth_date" value="<?php if(old('last_name')=="") echo $data->birth_date; else echo old('birth_date')?>">
                                <span class="input-group-addon">
                                                  <span class="icon-calendar-full"></span>
                                            </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Millati
                                @if($errors->has('nationality'))
                                    <span class="text-danger"> | {{ $errors->first('nationality') }}</span>
                                @endif
                            </label>
                            <select class="bs-select dynamic"  id="nationality" data-live-search="true" data-dependent="nationality" name="nationality">
                                @foreach($countries as $country)
                                    <option value="{{$country->id}}" @if($country->country_code=="UZ") selected @endif @if(old('nationality')==$country->id) selected @endif>{{$country->country_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Otasining Ismi
                                @if($errors->has('middle_name'))
                                    <span class="text-danger"> | {{ $errors->first('middle_name') }}</span>
                                @endif
                            </label>
                            <input class="form-control"  placeholder="FIO" value="<?php if(old('middle_name')=="") echo $data->middle_name; else echo old('middle_name')?>" id="middle_name" name="middle_name">
                        </div>

                        <div class="form-group">
                            <label>Qaysi mamlakatda yashaydi
                                @if($errors->has('living_country'))
                                    <span class="text-danger"> | {{ $errors->first('living_country') }}</span>
                                @endif
                            </label>
                            <select class="bs-select dynamic"  id="living_country" data-live-search="true" data-dependent="living_country" name="living_country">
                                @foreach($countries as $country)
                                    <option value="{{$country->id}}" @if($country->country_code=="UZ") selected @endif @if(old('living_country')==$country->id) selected @endif>{{$country->country_name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Tug'ilgan mamlakati
                                @if($errors->has('birth_address'))
                                    <span class="text-danger"> | {{ $errors->first('birth_address') }}</span>
                                @endif
                            </label>
                            <select class="bs-select dynamic"  id="birth_address" data-live-search="true" data-dependent="birth_address" name="birth_address">
                                @foreach($countries as $country)
                                    <option value="{{$country->id}}" @if($country->country_code=="UZ") selected @endif @if(old('birth_address')==$country->id) selected @endif>{{$country->country_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

            </div>
            <!-- END BLOCK -->

        </div>
        <!-- END CONTAINER -->

        <!-- START CONTAINER -->
        <div class="container app-content-tab" id="tab-2">

            <!-- BLOCK -->
            <div class="block">
                <!-- START HEADING -->
                <div class="app-heading app-heading-small">
                    <div class="title">
                        <h2>Passport va Manzil</h2>
                    </div>
                </div>
                <!-- END START HEADING -->

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Passport seriyasi
                                @if($errors->has('passport_serial'))
                                    <span class="text-danger"> | {{ $errors->first('passport_serial') }}</span>
                                @endif
                            </label>
                            <input class="form-control"  placeholder="AA" value="<?php if(old('passport_serial')=="") echo $data->passport_serial; else echo old('passport_serial')?>" id="passport_serial" name="passport_serial">
                        </div>
                        <div class="form-group">
                            <label>Pasport berilgan sana
                                @if($errors->has('passport_issued_date'))
                                    <span class="text-danger"> | {{ $errors->first('passport_issued_date') }}</span>
                                @endif
                            </label>
                            <div class="input-group bs-datepicker">
                                <input type="text" class="form-control"  name="passport_issued_date" id="passport_issued_date" value="<?php if(old('passport_issued_date')=="") echo $data->passport_issued_date; else echo old('passport_issued_date')?>">
                                <span class="input-group-addon">
                                                  <span class="icon-calendar-full"></span>
                                            </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Kim tomonidan berilgan
                                @if($errors->has('passport_issued_by'))
                                    <span class="text-danger"> | {{ $errors->first('passport_issued_by') }}</span>
                                @endif
                            </label>
                            <input class="form-control"  placeholder="... IIV" value="<?php if(old('passport_issued_by')=="") echo $data->passport_issued_by; else echo old('passport_issued_by')?>" id="passport_issued_by" name="passport_issued_by">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Pasport seriya raqami
                                @if($errors->has('passport_number'))
                                    <span class="text-danger"> | {{ $errors->first('passport_number') }}</span>
                                @endif
                            </label>
                            <input class="form-control"  placeholder="1234567" value="<?php if(old('passport_number')=="") echo $data->passport_number; else echo old('passport_number')?>" id="passport_number" name="passport_number">
                        </div>
                        <div class="form-group">
                            <label>Pasportning amal qilish sanasi
                                @if($errors->has('passport_expiration_date'))
                                    <span class="text-danger"> | {{ $errors->first('passport_expiration_date') }}</span>
                                @endif
                            </label>
                            <div class="input-group bs-datepicker">
                                <input type="text" class="form-control"  name="passport_expiration_date" id="passport_expiration_date" value="<?php if(old('passport_expiration_date')=="") echo $data->passport_expiration_date; else echo old('passport_expiration_date')?>">
                                <span class="input-group-addon">
                                                  <span class="icon-calendar-full"></span>
                                            </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Yashash manzili
                                @if($errors->has('home_address'))
                                    <span class="text-danger"> | {{ $errors->first('home_address') }}</span>
                                @endif
                            </label>
                            <input class="form-control"  placeholder="Manzil" value="<?php if(old('home_address')=="") echo $data->home_address; else echo old('home_address')?>" id="home_address" name="home_address">
                        </div>
                    </div>
                </div>

            </div>
            <!-- END BLOCK -->

        </div>
        <!-- END CONTAINER -->

        <!-- START CONTAINER -->
        <div class="container app-content-tab" id="tab-3">

            <!-- BLOCK -->
            <div class="block">
                <!-- START HEADING -->
                <div class="app-heading app-heading-small">
                    <div class="icon">
                        <span class="icon-cloud-rain"></span>
                    </div>
                    <div class="title">
                        <h2>Ta'lim haqidagi ma'lumotlar</h2>
                    </div>
                </div>
                <!-- END START HEADING -->

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Ta'limning boshlanish sanasi
                                @if($errors->has('edu_starting_date'))
                                    <span class="text-danger"> | {{ $errors->first('edu_starting_date') }}</span>
                                @endif
                            </label>
                            <div class="input-group bs-datepicker">
                                <input type="text" class="form-control"  name="edu_starting_date" id="edu_starting_date" value="<?php if(old('edu_starting_date')=="") echo $data->edu_starting_date; else echo old('edu_starting_date')?>">
                                <span class="input-group-addon">
                                          <span class="icon-calendar-full"></span>
                                    </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Qabul hujjati raqami
                                @if($errors->has('application_number'))
                                    <span class="text-danger"> | {{ $errors->first('application_number') }}</span>
                                @endif
                            </label>
                            <input class="form-control"  placeholder="Qabul raqami" value="<?php if(old('application_number')=="") echo $data->application_number; else echo old('application_number')?>" id="application_number" name="application_number">
                        </div>
                        <div class="form-group">
                            <label>Ta'lim yo'nalishi
                                @if($errors->has('edu_type'))
                                    <span class="text-danger"> | {{ $errors->first('edu_type') }}</span>
                                @endif
                            </label>
                            <select class="bs-select dynamic"  id="edu_type" data-live-search="true" data-dependent="edu_type" name="edu_type">
                                <option value="B" @if(old('edu_type')=='B') selected @endif>B toifali</option>
                                <option value="BC" @if(old('edu_type')=='B') selected @endif>BC toifali</option>
                                <option value="C" @if(old('edu_type')=='B') selected @endif>C toifali</option>
                                <option value="D" @if(old('edu_type')=='B') selected @endif>D toifali</option>
                                <option value="E" @if(old('edu_type')=='B') selected @endif>E toifali</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Ta'limning yakunlanish sanasi
                                @if($errors->has('edu_ending_date'))
                                    <span class="text-danger"> | {{ $errors->first('edu_ending_date') }}</span>
                                @endif
                            </label>
                            <div class="input-group bs-datepicker">
                                <input type="text" class="form-control"  name="edu_ending_date" id="edu_ending_date" value="<?php if(old('edu_ending_date')=="") echo $data->edu_ending_date; else echo old('edu_ending_date')?>">
                                <span class="input-group-addon">
                                                  <span class="icon-calendar-full"></span>
                                            </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Talaba unikal raqami
                                @if($errors->has('student_id'))
                                    <span class="text-danger"> | {{ $errors->first('student_id') }}</span>
                                @endif
                            </label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="student_id" id="student_id"   placeholder="Generatsiya qiling" value="<?php if(old('student_id')=="") echo $data->student_number; else echo old('student_id')?>">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-default"  title="Generatsiya qilish" onclick="studenID_generator()"><i class="icon-cog"></i></button>
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <br>
                            <label class="switch switch-md">
                                <input type="checkbox" name="status" checked id="status">
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="image" class="control-label">
                                Studentning rasmi
                                @if($errors->has('image'))
                                    <span class="text-danger"> | {{ $errors->first('image') }}</span>
                                @endif
                            </label>
                            <input type="file" name="image" id="image" class="dropify" data-default-file="{{asset($data->image) }}" step="any">
                        </div>
                    </div>
                </div>
            </div>
            <!-- END BLOCK -->

        </div>
        <!-- END PAGE HEADING -->


        <!-- START CONTAINER -->
        <div class="container app-content-tab" id="tab-4">

            <!-- BLOCK -->
            <div class="block">
                <!-- START HEADING -->
                <div class="app-heading app-heading-small">
                    <div class="icon">
                        <span class="icon-cloud-rain"></span>
                    </div>
                    <div class="title">
                        <h2>Qo'shimcha ma'lumotlar</h2>
                    </div>
                </div>
                <!-- END START HEADING -->

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Telefon raqam
                                @if($errors->has('phone1'))
                                    <span class="text-danger"> | {{ $errors->first('phone1') }}</span>
                                @endif
                            </label>
                            <div class="input-group">
                                        <span class="input-group-addon">
                                              <span class="icon-phone-handset"></span>
                                        </span>
                                <input type="text" class="form-control"  name="phone1" id="phone1" value="<?php if(old('phone1')=="") echo $data->phone1; else echo old('phone1')?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Harbiy guvohnoma (ixtiyoriy)
                                @if($errors->has('military_doc_number'))
                                    <span class="text-danger"> | {{ $errors->first('military_doc_number') }}</span>
                                @endif
                            </label>
                            <div class="input-group">
                                <input type="text" class="form-control"  name="military_doc_number" id="military_doc_number" value="<?php if(old('military_doc_number')=="") echo $data->military_doc_number; else echo old('military_doc_number')?>" placeholder="Harbiy hujjat raqami">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Student Statusi
                                @if($errors->has('status'))
                                    <span class="text-danger"> | {{ $errors->first('status') }}</span>
                                @endif
                            </label>
                            <div class="input-group">
                                <select class="form-control" name="status" id="status">
                                    <option value="1" @if($data->status==1) selected @endif>Aktiv</option>
                                    <option value="0" @if($data->status==0) selected @endif>Passiv</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Qo'shimcha telefon raqam
                                @if($errors->has('phone2'))
                                    <span class="text-danger"> | {{ $errors->first('phone2') }}</span>
                                @endif
                            </label>
                            <div class="input-group">
                                        <span class="input-group-addon">
                                              <span class="icon-phone"></span>
                                        </span>
                                <input type="text" class="form-control"  name="phone2" id="phone2" value="<?php if(old('phone2')=="") echo $data->phone2; else echo old('phone2')?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Login
                                @if($errors->has('login'))
                                    <span class="text-danger"> | {{ $errors->first('login') }}</span>
                                @endif
                            </label>
                            <div class="input-group">
                                        <span class="input-group-addon">
                                              <span class="icon-user"></span>
                                        </span>
                                <input type="text" class="form-control"  name="login" id="login" value="<?php if(old('login')=="") echo $data->user->username; else echo old('login')?>">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Qo'shimcha telefon raqam
                                @if($errors->has('phone3'))
                                    <span class="text-danger"> | {{ $errors->first('phone3') }}</span>
                                @endif
                            </label>
                            <div class="input-group">
                                        <span class="input-group-addon">
                                              <span class="icon-phone"></span>
                                        </span>
                                <input type="text" class="form-control"  name="phone3" id="phone3"value="<?php if(old('phone3')=="") echo $data->phone3; else echo old('phone3')?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Parol generatsiya qiling
                                @if($errors->has('password'))
                                    <span class="text-danger"> | {{ $errors->first('password') }}</span>
                                @endif
                            </label>
                            <div class="input-group">
                                <input type="password" class="form-control"  name="newpassword" id="newpassword" value="{{ $password }}">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-default" id="passwordshower2" data-url = "regionadmin" data-idec="{{$data->user->id}}"  title="Parolni ko'rish"><i class="fa fa-eye"></i></button>
                                    <button type="button" class="btn btn-default"  title="Generatsiya qilish" onclick="new_password_generator(10)"><i class="icon-cog"></i></button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END BLOCK -->

        </div>
        <!-- END PAGE HEADING -->
    </form>
@endsection