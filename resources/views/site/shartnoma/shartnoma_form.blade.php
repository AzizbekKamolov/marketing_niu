@extends('layouts.marketing_enno')
@section('content')
<style type="text/css">
     *{
      box-sizing: content-box !important;
    }
    .error{
        color: red;
    }
    input {
        width: 80% !important;
    }
</style>
    <div class="containerform">
        <div class="row">
            <div class="signup-content" style="margin: auto;">
                <div class="signup-form">
                    <h2 class="form-title"> Talabalar uchun to'lov shartnomasini olish </h2><br>
                   @if(session('info_error'))
                    <p class="error">
                        {{ session('info_error') }}
                    </p>
                   @endif
                    <form action="{{ route('shartnoma.info') }}" method="post" name="super-form" class="register-form" id="register-form">
                        {{ @csrf_field() }}

                        <div class="form-group" style="display: flex; flex-wrap: wrap;">

                             <span class="error" style="">
                                    @if ($errors->has('id_code'))
                                        {{ $errors->first('id_code') }}
                                    @endif
                            </span>
                                <label for="id_code">
                                    <i class="zmdi zmdi-assignment-check"></i>
                                </label>
                                <input type="text" class="number-inputmask id-code-inputmask" name="id_code" id="id_code" autocomplete="off" value="{{ old('id_code') }}" placeholder=" Talaba ID raqami"/>

                        </div>
                        <div class="form-group">
                            <span class="error" style="">
                                @if ($errors->has('passport_seria'))
                                        {{ $errors->first('passport_seria') }}
                                    @endif
                            </span>
                            <label for="passport_seria">
                                <i class="zmdi zmdi-account-box-mail"></i></label>
                            <input type="text" name="passport_seria" id="passport_seria" value="{{ old('passport_seria') }}" placeholder="Pasport seriyasi"/>
                        </div>
                        <div class="form-group">
                             <span class="error" style="">
                                @if ($errors->has('passport_number'))
                                        {{ $errors->first('passport_number') }}
                                    @endif
                            </span>
                            <label for="passport_number"><i class="zmdi zmdi-confirmation-number"></i></label>
                            <input type="text" name="passport_number" id="passport_number" value="{{ old('passport_number') }}" placeholder="Pasport raqami"/>
                        </div>

                        <div class="form-group">
                             <span class="error" style="">
                                @if ($errors->has('birthday'))
                                        {{ $errors->first('birthday') }}
                                    @endif
                            </span>
                            <label for="birthday"><i class="zmdi zmdi-calendar"></i></label>
                            <input type="text" onfocus="(this.type='date')" name="birthday" value="{{ old('birthday') }}" id="birthday" placeholder="Tug'ilgan sanasi"/>

{{--                            <input type="text" onfocus="(this.type='date')" name="birthday" id="birthday" value="{{ old('birthday') }}" placeholder="Tug'ulgan kun"/>--}}
                        </div>
                        <div class="form-group">
                             <span class="error" style="">
                                @if ($errors->has('step'))
                                        {{ $errors->first('step') }}
                                    @endif
                            </span>
                            {{-- <input type="date" onfocus="(this.type='date')" name="birthday" id="birthday" value="1992-04-13" placeholder="Tug'ulgan kun"/> --}}
                            <select name="step" class="form-control" style="width: 80% !important;">
                                <option value="">Shartnoma turini tanlash</option>
                                <option value="1">Stipendiyali shartnoma </option>
                                <option value="2">Stipendiyasiz shartnoma</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
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


                {{-- <form action="?" method="POST">
                      <div class="g-recaptcha" data-sitekey="6LdmzM0ZAAAAABv571wY14lkUwck7znKrfNuXZy8"></div>
                      <br/>
                      <input type="submit" value="Submit">
                    </form> --}}
            </div>

        </div>
    </div>


@endsection

@section('js')

<script type="text/javascript">
    $('.form-submit').click(function(){

            alert("khg");
    });

</script>
@endsection
