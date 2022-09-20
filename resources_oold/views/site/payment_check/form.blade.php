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
                    <p>
                        <span class="error">
                            @if(session()->has('error'))
                                    {{ session()->get('error') }}
                            @endif
                        </span>
                    </p>
                    <h2 class="form-title"> Talabalar uchun to'lovlar tarixini ko`rish </h2><br>
                   @if(session('info_error'))
                    <p class="error">
                        {{ session('info_error') }}
                    </p>
                   @endif
                    <form action="{{route('payment_check_result')}}" method="post" name="super-form" class="register-form" id="register-form">
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

                        <div class="form-group form-button">
                            <input type="submit" name="signup" id="signup" class="form-submit" value="Tekshirish"/>
                        </div>
                    </form>
                </div>
                <div class="signup-image">
                    <figure><img src="{{asset('assetsform/images/signin-image.jpg')}}" alt="sing up image"></figure>
                </div>

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
