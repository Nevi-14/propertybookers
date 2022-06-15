@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ ucwords(__('verify email')) }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ ucwords(__('email link sent')) }}
                        </div>
                    @endif

                    {{ Str::ucfirst(__('before_check_email')) }}
                    {{ Str::ucfirst(__('no email')) }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{Str::ucfirst( __('request another')) }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
