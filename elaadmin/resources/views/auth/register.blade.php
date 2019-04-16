@extends('layouts.app')

@section('content')
<body class="bg-dark">

    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                        <img class="align-content" src="images/logo.png" alt="">
                    </a>
                </div>
                <div class="login-form">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group">
                            <label>First Name</label>
                            <input id="f_name" type="text" class="form-control{{ $errors->has('f_name') ? ' is-invalid' : '' }}" name="f_name" value="{{ old('f_name') }}" placeholder="Fisrt Name" autofocus>
                            @if ($errors->has('f_name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('f_name') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Last Name</label>
                            <input id="l_name" type="text" class="form-control{{ $errors->has('l_name') ? ' is-invalid' : '' }}" name="l_name" value="{{ old('l_name') }}" placeholder="Last Name" autofocus>
                            @if ($errors->has('l_name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('l_name') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Email address</label>
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email Address">
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password">
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Conform Password</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Conform Password">
                        </div>

                        <div class="form-group">
                            <label>Country</label>
                            <input id="country" type="text" class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }}" name="country" value="{{ old('country') }}" placeholder="Country" autofocus>
                            @if ($errors->has('country'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('country') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>State</label>
                            <input id="state" type="text" class="form-control{{ $errors->has('state') ? ' is-invalid' : '' }}" name="state" value="{{ old('state') }}" placeholder="State" autofocus>
                            @if ($errors->has('state'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('state') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Zipcode</label>
                            <input id="zipcode" type="text" class="form-control{{ $errors->has('zipcode') ? ' is-invalid' : '' }}" name="zipcode" value="{{ old('zipcode') }}" placeholder="Zipcode" autofocus>
                            @if ($errors->has('zipcode'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('zipcode') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>City</label>
                            <input id="city" type="text" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" value="{{ old('city') }}" placeholder="City" autofocus>
                            @if ($errors->has('city'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('city') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Phone No</label>
                            <input id="phone_no" type="text" class="form-control{{ $errors->has('phone_no') ? ' is-invalid' : '' }}" name="phone_no" value="{{ old('phone_no') }}" placeholder="Phone No" autofocus>
                            @if ($errors->has('phone_no'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('phone_no') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <textarea id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}" placeholder="Address" autofocus></textarea>
                            @if ($errors->has('address'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('address') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Agree the terms and policy
                            </label>
                        </div>

                        <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Register</button>
                        <div class="social-login-content">
                            <div class="social-button">
                                {{-- <button type="button" class="btn social facebook btn-flat btn-addon mb-3"><i class="ti-facebook"></i>Register with facebook</button> --}}
                                {{-- <button type="button" class="btn social twitter btn-flat btn-addon mt-2"><i class="ti-twitter"></i>Register with twitter</button> --}}
                            </div>
                        </div>
                        <div class="register-link m-t-15 text-center">
                            <p>Already have account ? <a href="{{ route('login') }}"> Sign in</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>


@endsection
