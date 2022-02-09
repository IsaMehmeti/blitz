@extends('layouts.auth.app')
@section('page_name',  __('Sign In'))

@section('content')
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group mb-3">
            <label>{{ __('E-Mail Address') }}</label>
            <div class="input-group">
                <input name="email" type="email" class="form-control form-control-lg" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />

                <span class="input-group-append">
                    <span class="input-group-text">
                        <i class="fas fa-user"></i>
                    </span>
                </span>
                </div>
            </div>
            @error('email')
            <div class="alert alert-danger" role="alert">
                <strong>{{ $message }}</strong>
            </div>
            @enderror

        <div class="form-group mb-3">
            <div class="clearfix">
                <label class="float-left">Password</label>
            </div>
            <div class="input-group">
                <input class="form-control form-control-lg"  id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" />

                <span class="input-group-append">
										<span class="input-group-text">
											<i class="fas fa-lock"></i>
										</span>
									</span>
            </div>
        </div>
        @error('password')
        <div class="alert alert-danger text-center" role="alert">
            <strong>{{ $message }}</strong>
        </div>
        @enderror

        <div class="row">
            <div class="col-sm-8">
                <div class="checkbox-custom checkbox-default">
                </div>
            </div>
            <div class="col-sm-4 text-right">
                <button type="submit" class="btn btn-primary mt-2"> {{__('Sign In')}} </button>
            </div>
        </div>

{{--        <span class="mt-3 mb-3 line-thru text-center text-uppercase">--}}
{{--								<span>or</span>--}}
{{--							</span>--}}

{{--        <p class="text-center">Don't have an account yet? <a href="/register">Register!</a></p>--}}
    </form>
@endsection
