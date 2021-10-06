@extends('layouts.marketing_enno')
<style>
   .text-danger{
       padding: 0px 27px;
    }

   .box input::-webkit-input-placeholder {
       color: #dc3545!important;
   }

   .box input::placeholder {
       color: #dc3545!important;
       opacity: 1; /* Firefox */
   }

   .box input:-ms-input-placeholder { /* Internet Explorer 10-11 */
       color: #dc3545!important;
   }

   .box input::-moz-placeholder { /* FireFox */
       color: #dc3545!important;
   }

   .box input::-ms-input-placeholder { /* Microsoft Edge */
       color: #dc3545!important;
   }

   abbr[title], acronym[title] {
       border-bottom: none;
   }
</style>


@section('js')
    {!! NoCaptcha::renderJs() !!}

@endsection
@section('content')
<style type="text/css">
  @media screen and (max-width: 770px) {
      .containerform{
        padding-top: 300px !important;
      }
    }
</style>


    <div class="containerform unselectable" >

        @if (\Session::has('danger'))
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>{!! \Session::get('danger') !!}</strong>
            </div>
        @endif

        <div class="row">

            <div class="signup-content" style="margin: auto;">


                <div class="signup-form">
                    <h2 class="form-title">Tabaqalashtirilgan to'lov kontraktga ariza qoldirish</h2>
                    <form action="{{ route('store') }}" method="post" name="super-form" class="register-form" id="register-form">
                         {{ csrf_field() }}
                        <div class="form-group @if($errors->has('passport_seria')) {{ 'box' }} @endif">
                            <abbr title="Pasport seriya">
                                <label for="passport_seria">
                                    <i class="zmdi zmdi-account-box-mail    "></i></label>
                                <input type="text" name="passport_seria" value="{{ old('passport_seria') }}" id="passport_seria" placeholder="@if($errors->has('passport_seriasi')){{ $errors->first('passport_seriasi') }}@else{{'Pasport seriyasi'}}@endif"/>
                            </abbr>
                        </div>
                        <div class="form-group @if($errors->has('passport_number')) {{ 'box' }} @endif">
                            <abbr title="Pasport raqami">
                                <label for="passport_number"><i class="zmdi zmdi-confirmation-number"></i></label>
                                <input type="text" name="passport_number" value="{{ old('passport_number') }}" id="passport_number" placeholder="@if($errors->has('passport_number')){{ $errors->first('passport_number') }}@else{{'Pasport raqami'}}@endif"/>
                            </abbr>
                        </div>

                        <div class="form-group @if($errors->has('passport_number')) {{ 'box' }} @endif ">
                            <abbr title="Pasport jshir">

                                <label for="passport_jshshir"><i class="zmdi zmdi-calendar"></i></label>
                               <div style="display: flex">
                                  <input type="text" class="jshir-inputmask"  name="passport_jshshir" value="{{ old('passport_jshshir') }}" id="passport_jshshir" placeholder="@if($errors->has('passport_jshshir')){{ $errors->first('passport_jshshir') }}@else{{'JSH SHIR'}}@endif"/>
                                <span data-toggle="modal" data-target="#exampleModal" style="padding: 10px; cursor: pointer; border-radius: 32px;" class="open_jshir_img"> <i class="fa fa-question" aria-hidden="true"></i></span>
                               </div>


                            </abbr>
                        </div>


                        <div class="form-group @if($errors->has('check')) {{ 'box' }} @endif">
                            @if($errors->has('check'))
                                <span class="text-danger"> {{ $errors->first('check') }}</span>
                            @endif

                            <input type="checkbox" name="check" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>
                                Shaxsiy ma'lumotlarimdan foydalanishlariga roziman.
                            </label>
                        </div>
                        <div class="form-group">
                            @if ($errors->has('g-recaptcha-response'))
                                <span class="text-danger">
                                    {{ $errors->first('g-recaptcha-response') }}
                                </span>
                            @endif

                           {!! NoCaptcha::display() !!}
{{--                                {!! NoCaptcha::display(['data-theme' => 'dark']) !!}--}}

                        </div>
                        <div class="form-group form-button">
                            <input type="submit" name="signup" id="signup" class="form-submit" value="Jo'natish"/>
                        </div>
                    </form>
                </div>
                <div class="signup-image">
                    <figure><img src="{{asset('assetsform/images/signin-image.jpg')}}" alt="sing up image"></figure>
{{--                    <a href="#" class="signup-image-link">I am already member</a>--}}
                </div>
            </div>

        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Pasport jshir</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img src="{{ asset('pechat/Pport_UZ.jpg') }}">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
        </div>
      </div>
    </div>
  </div>
@endsection

@section('js_after')
<script type="text/javascript">
  $('.open_jshir_img').click(function(){

  });
</script>
@endsection

