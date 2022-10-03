@extends('layouts.site')
@section('content')
    <style>
        input{
            border:1px solid blue;
        }
    </style>
    <div class="app-heading-container app-heading-bordered bottom">
        <ul class="breadcrumb">
            <li><a href="/" style="text-transform: uppercase">@lang('main.home')</a></li>
            <li class="active" style="text-transform: uppercase">@lang('main.overseas_start')</li>
            <li class="active" style="text-transform: uppercase">@lang('main.filling')</li>
        </ul>
        <a href="{{ url()->previous() }}" class="pull-right">@lang('main.back')</a>
    </div>
    <!-- END PAGE HEADING -->

    <!-- START CONTENT TABS -->
    <div class="app-content-tabs">
        <ul>
            <li><a href="#tab-1" class="active"><span class="icon-user"></span>@lang('main.applicant_details')</a></li>
            <li><a href="#tab-2"><span class="fa fa-graduation-cap"></span>@lang('main.qualifications')</a></li>
            <li><a href="#tab-3">@lang('main.other_info')</a></li>
        </ul>
    </div>
    <!-- END CONTENT TABS -->
    <form action="{{ route('storeoverseas') }}" method="post" class="has-validation-callback" enctype="multipart/form-data" name="overseas-form" id="overseas-form">
    {{ csrf_field() }}
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
                        <h2>@lang('main.personal_info2')</h2>
                    </div>
                </div>
                <!-- END START HEADING -->

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>@lang('main.first_name')<span class="text-danger">*</span>:
                                @if($errors->has('first_name'))
                                    <span class="text-danger"> | {{ $errors->first('first_name') }}</span>
                                @endif
                            </label>
                            <input class="form-control"  placeholder="" value="{{ old('first_name') }}" id="first_name" name="first_name"  style="border:1px solid lightblue;">
                        </div>
                        <div class="form-group">
                            <label>@lang('main.middle_name'):
                                @if($errors->has('middle_name'))
                                    <span class="text-danger"> | {{ $errors->first('middle_name') }}</span>
                                @endif
                            </label>
                            <input class="form-control"  placeholder="" value="{{ old('middle_name') }}" id="middle_name" name="middle_name" style="border:1px solid lightblue;">
                        </div>
                        <div class="form-group">
                            <label>@lang('main.birth_place')<span class="text-danger">*</span>:
                                @if($errors->has('birth_place'))
                                    <span class="text-danger"> | {{ $errors->first('birth_place') }}</span>
                                @endif
                            </label>
                            <select class="bs-select dynamic"  id="birth_place" data-live-search="true" name="birth_place">
                                <option style="display: none" value="" selected>@lang('main.select')</option>
                                @foreach($countries as $country)
                                    <option value="{{$country->CountryID}}" @if(old('birth_place') == $country->CountryID) selected @endif>{{$country->name}} {{ old('birth_address') }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>@lang('main.living_address')<span class="text-danger">*</span>:
                                @if($errors->has('living_address'))
                                    <span class="text-danger"> | {{ $errors->first('living_address') }}</span>
                                @endif
                            </label>
                            <input class="form-control"  placeholder="Address" value="{{ old('living_address') }}" id="living_address" name="living_address" style="border:1px solid lightblue;">
                        </div>
                        <div class="form-group">
                            <div class="col-md-4" style="margin: 0">
                                <label>@lang('main.passport_serial')<span class="text-danger">*</span>:
                                    @if($errors->has('passport_serial'))
                                        <span class="text-danger"> | {{ $errors->first('passport_serial') }}</span>
                                    @endif
                                </label>
                                <input class="form-control"  placeholder="" value="{{ old('passport_serial') }}" id="passport_serial" name="passport_serial" style="border:1px solid lightblue;">
                            </div>
                            <div class="col-md-8">
                                <label>@lang('main.passport_number')<span class="text-danger">*</span>:
                                    @if($errors->has('passport_number'))
                                        <br>
                                        <br>
                                        <span class="text-danger"> | {{ $errors->first('passport_number') }}</span>
                                    @endif
                                </label>
                                <input class="form-control"  placeholder="" value="{{ old('passport_number') }}" id="passport_number" name="passport_number" style="border:1px solid lightblue;">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6">
                                <label for="image" class="control-label">
                                    @lang('main.image')<span class="text-danger">*</span>:
                                    @if($errors->has('image'))
                                        <span class="text-danger"> | {{ $errors->first('image') }}</span>
                                    @endif
                                </label>
                                <input type="file" name="image" id="image" class="dropify" >
                            </div>
                            <div class="col-md-6">
                                <label for="image" class="control-label">
                                    @lang('main.passport_copy')<span class="text-danger">*</span>:
                                    @if($errors->has('passport_copy'))
                                        <span class="text-danger"> | {{ $errors->first('passport_copy') }}</span>
                                    @endif
                                </label>
                                <div class="col-md-12">
                                    <input type="file" name="passport_copy" class="file btn-default" title="<span class='fa fa-file'>&nbsp;</span> @lang('main.upload_passport')">
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="form-group">
                            <label>@lang('main.last_name')<span class="text-danger">*</span>:
                                @if($errors->has('last_name'))
                                    <span class="text-danger"> | {{ $errors->first('last_name') }}</span>
                                @endif
                            </label>
                            <input class="form-control"  placeholder="" value="{{ old('last_name') }}" id="last_name" name="last_name" style="border:1px solid lightblue;">
                        </div>

                        <div class="form-group">
                            <label>@lang('main.birth_date')<span class="text-danger">*</span>:
                                @if($errors->has('birth_date'))
                                    <span class="text-danger"> | {{ $errors->first('birth_date') }}</span>
                                @endif
                            </label>
                            <div class="input-group bs-datepicker">
                                <input type="text" class="form-control"  name="birth_date" id="birth_date" value="{{ old('birth_date') }}" style="border:1px solid lightblue;">
                                <span class="input-group-addon" style="border:1px solid lightblue;border-left: none">
                                      <span class="icon-calendar-full"></span>
                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label> @lang('main.citizenship')<span class="text-danger">*</span>:
                                @if($errors->has('citizenship'))
                                    <span class="text-danger"> | {{ $errors->first('citizenship') }}</span>
                                @endif
                            </label>
                            <select class="bs-select dynamic"  id="citizenship" data-live-search="true" name="citizenship" style="border:1px solid red;">
                                <option style="display: none" value="" selected>@lang('main.select')</option>
                                @foreach($countries as $country)
                                    @if($country->Code1 != 'UZ')
                                    <option value="{{$country->CountryID}}" @if(old('citizenship')==$country->CountryID)) selected @endif>{{$country->name}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>@lang('main.gender') {{old('gender')}}
                                @if($errors->has('gender'))
                                    <span class="text-danger"> | {{ $errors->first('gender') }}</span>
                                @endif
                            </label>
                            <br>
                            <div class="app-radio danger inline">
                                <label><input type="radio" name="gender" id="gender" value="1" checked=""> @lang('main.female')<span></span></label>
                            </div>
                            <div class="app-radio success inline">
                                <label><input type="radio" name="gender" id="gender" value="0" @if(old('gender')==0) checked @endif> @lang('main.male')<span></span></label>
                            </div>
                        </div>
                        <div class="form-group"><div class="col-md-6">
                                <label>@lang('main.passport_given_date')<span class="text-danger">*</span>:
                                    <br>
                                    @if($errors->has('passport_expiration_date'))
                                        <span class="text-danger"> | {{ $errors->first('passport_expiration_date') }}</span>
                                    @endif
                                </label>
                                <div class="input-group bs-datepicker">
                                    <input type="text" class="form-control"  name="passport_expiration_date" id="passport_expiration_date" value="{{ old('passport_expiration_date') }}" style="border:1px solid lightblue;">
                                    <span class="input-group-addon" style="border:1px solid lightblue;border-left: none">
                                          <span class="icon-calendar-full"></span>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label>@lang('main.passport_issued_by')<span class="text-danger">*</span>:
                                    <br>
                                    @if($errors->has('passport_issued_by'))
                                        <span class="text-danger"> | {{ $errors->first('passport_issued_by') }}</span>
                                    @endif
                                </label>
                                <div class="input-group">
                                    <input type="text" class="form-control"  name="passport_issued_by" id="passport_issued_by" value="{{ old('passport_issued_by') }}" style="border:1px solid lightblue;">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>@lang('main.email')<span class="text-danger">*</span>:
                                @if($errors->has('email'))
                                    <span class="text-danger"> | {{ $errors->first('email') }}</span>
                                @endif
                            </label>
                            <div class="input-group">
                                <span class="input-group-addon" style="border:1px solid lightblue;border-right: none">
                                      <span class="fa fa-envelope"></span>
                                </span>
                                <input type="email" class="form-control" placeholder="" name="email" id="email" value="{{ old('email') }}" style="border:1px solid lightblue;">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>@lang('main.phone1')<span class="text-danger">*</span>:
                                @if($errors->has('phone1'))
                                    <span class="text-danger"> | {{ $errors->first('phone1') }}</span>
                                @endif
                            </label>
                            <div class="input-group">
                                <span class="input-group-addon" style="border:1px solid lightblue;border-right: none">
                                      <span class="fa fa-phone"></span>
                                </span>
                                <input type="text" class="form-control"  name="phone1" id="phone1" value="{{ old('phone1') }}" style="border:1px solid lightblue;">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>@lang('main.phone2'):
                                @if($errors->has('phone2'))
                                    <span class="text-danger"> | {{ $errors->first('phone2') }}</span>
                                @endif
                            </label>
                            <div class="input-group">
                                <span class="input-group-addon" style="border:1px solid lightblue;border-right: none">
                                      <span class="icon-phone"></span>
                                </span>
                                <input type="text" class="form-control"  name="phone2" id="phone2" value="{{ old('phone2') }}" style="border:1px solid lightblue;">
                            </div>
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
                        <h2><h2>@lang('main.qualifications')</h2></h2>
                    </div>
                </div>
                <!-- END START HEADING -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>@lang('main.background_education')<span class="text-danger">*</span>:
                                @if($errors->has('background_study'))
                                    <span class="text-danger"> | {{ $errors->first('background_study') }}</span>
                                @endif
                            </label>
                            <input class="form-control"  placeholder="" value="{{ old('background_study') }}" id="background_study" name="background_study">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="col-md-6" style="padding: 0;">
                                <label style="margin-top:5px;">@lang('main.back_cert_type')<span class="text-danger">*</span>:
                                    @if($errors->has('background_certificate'))
                                        <span class="text-danger"> | {{ $errors->first('background_certificate') }}</span>
                                    @endif
                                </label>
                                <select class="bs-select" name="background_certificate">
                                    <option value="" style="display: none;" selected>@lang('main.select')</option>
                                    @foreach($levels as $level)
                                        <option value="{{ $level->id }}" @if(old('background_certificate')==$level->id) selected @endif>{{ $level->name }}</option>
                                    @endforeach()
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label style="margin-top: 5px">@lang('main.graduation_year')<span class="text-danger">*</span>:
                                    @if($errors->has('backgraund_grad_year'))
                                        <span class="text-danger"> | {{ $errors->first('backgraund_grad_year') }}</span>
                                    @endif
                                </label>
                                <input class="form-control"  placeholder="@lang('main.YYYY')" value="{{ old('backgraund_grad_year') }}" id="backgraund_grad_year" name="backgraund_grad_year">
                            </div>
                        </div>
                        <div class="form-group" style="margin-top:5px;">
                            <label for="image" class="control-label">
                                &nbsp;&nbsp;&nbsp;&nbsp;@lang('main.back_cert_copy')<span class="text-danger">*</span>:
                                @if($errors->has('back_cert_copy'))
                                    <span class="text-danger"> | {{ $errors->first('back_cert_copy') }}</span>
                                @endif
                            </label>
                            <div class="col-md-12">
                                <input type="file" name="back_cert_copy"  class="file btn-default form-control" title="<span class='fa fa-file'>&nbsp;</span> @lang('main.back_cert_copy')">
                            </div>
                        </div>
                        <div class="form-group" style="margin-top: -25px;padding-left: 13px;padding-right:14px;">
                            <label style="margin-top:5px;">@lang('main.higher_education'):
                                @if($errors->has('higher_education'))
                                    <span class="text-danger"> | {{ $errors->first('higher_education') }}</span>
                                @endif
                            </label>
                            <select class="bs-select" name="higher_education">
                                <option value="" style="display: none" selected>@lang('main.select')</option>
                                @foreach($higher as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="col-md-6" style="padding: 0;">
                                <label style="margin-top: 5px">@lang('main.document_series')<span class="text-danger">*</span>:
                                    @if($errors->has('back_cert_series'))
                                        <span class="text-danger"> | {{ $errors->first('back_cert_series') }}</span>
                                    @endif
                                </label>
                                <input class="form-control"  placeholder="" value="{{ old('back_cert_series') }}" id="back_cert_series" name="back_cert_series">
                            </div>
                            <div class="col-md-6">
                                <label style="margin-top: 5px">@lang('main.document_number')<span class="text-danger">*</span>:
                                    @if($errors->has('back_cert_numbers'))
                                        <span class="text-danger"> | {{ $errors->first('back_cert_numbers') }}</span>
                                    @endif
                                </label>
                                <input class="form-control"  placeholder="" value="{{ old('back_cert_numbers') }}" id="back_cert_numbers" name="back_cert_numbers">
                            </div>
                        </div>
                        <div class="form-group">
                            <label style="margin-top:5px;">@lang('main.foreign_lang')<span class="text-danger">*</span>:
                                @if($errors->has('foreign_lang'))
                                    <span class="text-danger"> | {{ $errors->first('foreign_lang') }}</span>
                                @endif
                            </label>
                            <select class="bs-select" name="foreign_lang">
                                <option value="" style="display: none;" selected>@lang('main.select')</option>
                                @foreach($langs as $lang)
                                    <option @if(old('foreign_lang') == $lang->id) selected @endif value="{{ $lang->id }}">{{ $lang->name }}</option>
                                @endforeach()
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="h_educ_diplom_copy" class="control-label">
                                &nbsp;&nbsp;&nbsp;&nbsp;@lang('main.higher_diploma_copy'):
                                @if($errors->has('h_educ_diplom_copy'))
                                    <span class="text-danger"> | {{ $errors->first('h_educ_diplom_copy') }}</span>
                                @endif
                            </label>
                            <div class="col-md-12">
                                <input type="file" name="h_educ_diplom_copy" class="file btn-default form-control" title="<span class='fa fa-file'>&nbsp;</span> @lang('main.upload_higher_diploma')">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>@lang('main.higher_education_name'):
                                @if($errors->has('h_educ_univer_name'))
                                    <span class="text-danger"> | {{ $errors->first('h_educ_univer_name') }}</span>
                                @endif
                            </label>
                            <input class="form-control"  placeholder="" value="{{ old('h_educ_univer_name') }}" id="h_educ_univer_name" name="h_educ_univer_name">
                        </div>
                    </div>
                    <div class="col-md-12 margin-top-20">
                        <div class="form-group">
                            <label>@lang('main.more_info'):
                                @if($errors->has('more_info'))
                                    <span class="text-danger"> | {{ $errors->first('more_info') }}</span>
                                @endif
                            </label>
                            <input class="form-control"  placeholder="" value="{{ old('more_info') }}" id="more_info" name="more_info">
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
                        <h2>@lang('main.other_info')</h2>
                    </div>
                </div>
                <!-- END START HEADING -->

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label style="margin-top:5px;">@lang('main.course_type')<span class="text-danger">*</span>:
                                @if($errors->has('speciality'))
                                    <span class="text-danger"> | {{ $errors->first('speciality') }}</span>
                                @endif
                            </label>
                            <select class="bs-select" name="speciality">
                                <option value="" style="display: none;" selected>@lang('main.select')</option>
                                @foreach($specs as $spec)
                                    <option value="{{ $spec->id }}" @if(old('speciality')==$spec->id) selected @endif>{{ $spec->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label style="margin-top:5px;">@lang('main.study_lang')<span class="text-danger">*</span>:
                                    @if($errors->has('study_language'))
                                        <span class="text-danger"> | {{ $errors->first('study_language') }}</span>
                                    @endif
                                </label>
                                <select class="bs-select" name="study_language">
                                    <option value="" style="display: none;" selected>@lang('main.select')</option>
                                    @foreach($study_languages as $lan)
                                        <option value="{{ $lan->id }}" @if(old('study_language')==$lan->id) selected @endif>{{$lan->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label style="margin-top:5px;">@lang('main.edu_type'):
                                    @if($errors->has('education_degree'))
                                        <span class="text-danger"> | {{ $errors->first('education_degree') }}</span>
                                    @endif
                                </label>
                                <select class="bs-select" name="education_degree">
                                    @if(App::isLocale('en'))
                                         <option value="bachelor" selected>Bachelor</option>
                                    @endif
                                    @if(App::isLocale('ru'))
                                         <option value="bachelor" selected>Бакалавриат</option>
                                    @endif
                                    @if(App::isLocale('uz'))
                                         <option value="bachelor" selected>Bakalavr</option>
                                    @endif
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <br>
                        <strong style="color:red;">@lang('main.note')!</strong>
                        <p style="color: black;font-weight: bolder">@lang('main.note_message')</p>
                    </div>
                    <div class="col-md-12">
                        <br>
                        <div style="height:1px;border:1px solid black"></div>
                        <br>
                        <button type="submit" class="btn btn-success form-control">@lang('main.submit')</button>
                    </div>
                </div>
            </div>
            <!-- END BLOCK -->

        </div>
        <!-- END PAGE HEADING -->
    </form>
@endsection