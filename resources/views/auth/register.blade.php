@extends('layouts.app')

@section('content')
    <!-- START APP CONTAINER -->
    <div class="app-container" style="background: url({{ asset('extra/bg.jpg') }}) center center no-repeat fixed;-webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;">

        <div class="app-login-box">
            <div class="app-login-box-title padding-top-30">
                <div class="title">Tizimga kirish</div>
                <div class="subtitle">Ro'yxatdan o'tish</div>
            </div>
            <div class="app-login-box-container margin-top-20">
                <form action="#" method="post">
{{--                    {{ csrf_field() }}--}}
                    <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                        <input type="text" class="form-control" name="name" placeholder="Izmingiz" value="{{ old('name') }}" required autofocus>
                        @if ($errors->has('username'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('username') ? ' has-error' : '' }}">
                        <input type="text" class="form-control" name="username" placeholder="Login" value="{{ old('username') }}" required autofocus>
                        @if ($errors->has('username'))
                            <span class="help-block">
                                <strong>{{ $errors->first('username') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                        <input type="password" class="form-control" name="password" placeholder="Parol">
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success btn-block">Tizimga kirish</button>
                    </div>
                </form>
            </div>
            <div class="app-login-box-footer">
                &copy; Navoiy Innovatsiyalar Universiteti <?php echo date('Y')?>.<br> Barcha huquqlar himoyalangan.
            </div>
        </div>

    </div>
    <!-- END APP CONTAINER -->
@endsection
