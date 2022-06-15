@extends('layouts.main')



@section('content')











<div class="container">

    

<div class="row ">

        <div class="col-12">

            <div class="card shadow-lg mx-auto card-login">

                    <div class="card-header bg-transparent"><i class="fas fa-user-tie fa-3x mb-2  user-icon"></i>CLIENT LOGIN</div>

    

                    <div class="card-body">

                    <form method="POST" action="{{ url('client/login') }}">

                            @csrf

    

                            <div class="form-group">

                                <label for="email" class="text-md-right">Username</label>

    

                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

    

                                    @error('email')

                                        <span class="invalid-feedback" role="alert">

                                            <strong>{{ $message }}</strong>

                                        </span>

                                    @enderror

                            </div>

    

                            <label for="password" class="text-md-right">{{ __('auth.password') }}</label>

                            <div class="input-group ">

                                <input type="password" id="password" class=" form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                <span class="input-group-append">

                                    <i class=" btn btn-info text-light btn-sm pt-2 fas fa-eye" id="show_password"></i>

                                    <i class="btn btn-secondary btn-sm pt-2 fas fa-eye-slash  d-hide" id="hide_password"></i>

                                    </span>

                                @error('password')

                                    <span class="invalid-feedback" role="alert">

                                        <strong>{{ $message }}</strong>

                                    </span>

                                @enderror

                            </div>

                        

                            <div class="form-group">

                                <div class="form-check">

                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

    

                                    <label class="form-check-label" for="remember">

                                        {{ __('auth.remember') }}

                                    </label>

                                </div>

                            </div>

    

                            <div class="form-group  mb-0">

                                <button type="submit" class="btn btn-primary">

                                    {{ __('auth.login') }}

                                </button>

    

                                @if (Route::has('password.request'))

                                <a class="btn btn-link" href="{{ url('client/password/forgot') }}">

                                            {{ __('Forgot Your Password?') }}

                                        </a>

                                @endif

                            </div>

                        </form>

                    </div>

                </div>

        </div>

    </div>





    

    

</div>









@endsection



@push('scripts')







@endpush



