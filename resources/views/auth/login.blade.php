<html>
<head>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{asset('metronic/assets/demo/default/media/img/logo/favicon.png')}}" />

</head>
<body>

    <div class="login-wrap">


        <div class="login-html">
            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
            <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>

            <div class="login-form">
                <form method="post" action="{{ route('login') }}">
                    @csrf
                    <div class="sign-in-htm">
                        <div class="group">
                            <label for="user" class="label">{{ __('E-Mail Address') }}</label><br>
                            <input id="email" type="email" class="input" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        </div>
                        <div class="group">
                            <label for="pass" class="label">Password</label><br>
                            <input id="password" type="password" class="input" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            </div>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
<strong style="color: white">{{ $message }}</strong>
                                    </span>
                        @enderror
                        @error('password')
                        <span class="invalid-feedback" role="alert">
<strong style="color: white">{{ $message }}</strong>
                                    </span>
                        @enderror
                        <br> <br>
                        <div class="group">
                            <input type="submit" class="button" value="Sign In">
                        </div>
                        <div class="foot-lnk">

                            <a href="{{URL('/')}}">Back to Home?</a>

                        </div>
                        <div class="hr"></div>


                    </div>
                </form>

            </div>

        </div>
    </div>

</body>
</html>

<!--
<div class="login-wrap">


    <div class="login-html">
        <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
        <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>

        <div class="login-form">
            <form method="post" action="{{ route('login') }}">
@csrf
            <div class="sign-in-htm">
                <div class="group">
                    <label for="user" class="label">{{ __('E-Mail Address') }}</label><br>
                    <input id="email" type="email" class="input" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
    <span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
                                    </span>
                    @enderror
    </div>
    <div class="group">
        <label for="pass" class="label">Password</label><br>
        <input id="password" type="password" class="input" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
    <span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
                                    </span>
                    @enderror                </div>

                <div class="group">
                    <input type="submit" class="button" value="Sign In">
                </div>
                <div class="foot-lnk">

                    <a href="{{URL('/')}}">Back to Home?</a>

                </div>
                <div class="hr"></div>


            </div>
            </form>

        </div>

    </div>
</div>
-->
