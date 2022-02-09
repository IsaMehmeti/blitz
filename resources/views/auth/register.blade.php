@extends('layouts.auth.app')
@section('page_name',  __('Register'))

@section('content')
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="form-group mb-3">
            <label>Name</label>
            <input id="name" type="text"  class="form-control form-control-lg @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus />
        </div>
        @error('name')
        <div class="alert alert-danger" role="alert">
            <strong>{{ $message }}</strong>
        </div>
        @enderror
        <div class="form-group mb-3">
            <label>E-mail Address</label>
            <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"  />
        </div>
        @error('email')
        <div class="alert alert-danger" role="alert">
            <strong>{{ $message }}</strong>
        </div>
        @enderror
        <div class="form-group mb-0">
            <div class="row">
                <div class="col-sm-6 mb-3">
                    <label>{{ __('Password') }}</label>
                    <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"  />
                </div>

                <div class="col-sm-6 mb-3">
                    <label>{{ __('Confirm Password') }}</label>
                    <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password" class="form-control form-control-lg" />
                </div>
            </div>
        </div>
        @error('password')
        <span class="alert alert-danger" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

        <div class="row">
            <div class="col-sm-8">

            </div>
            <div class="col-sm-4 text-right">
                <button type="submit" class="btn btn-primary mt-2">{{ __('Register')}}</button>
            </div>
        </div>

        <div class="mb-1 text-center">
        </div>

        <p class="text-center">Already have an account? <a href="/login">{{ __('Log in!')}}</a></p>

    </form>
@endsection

{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Register') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    <form method="POST" action="{{ route('register') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>--}}

{{--                            <div class="col-md-6">--}}



{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}



{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password" class="col-md-4 col-form-label text-md-right"></label>--}}

{{--                            <div class="col-md-6">--}}



{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right"></label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row mb-0">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Register') }}--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}



