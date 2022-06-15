@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <label for="email" class="text-md-right">{{ ucwords(__('email address')) }}</label>

                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <label for="password" class="text-md-right">{{ Str::ucfirst(__('password')) }}</label>
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
                                    {{Str::ucfirst( __('remember')) }}
                                </label>
                            </div>
                        </div>

                        <div class="form-group  mb-0">
                            <button type="submit" class="btn btn-primary">
                                {{ Str::ucfirst(__('login')) }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ ucwords(__('forgot password')) }}
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