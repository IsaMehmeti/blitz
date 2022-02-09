@extends('layouts.auth.verify')
@section('page_name',  __('messages.Reset'))

@section('content')
    <div class="panel card-sign">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
					<div class="card-title-sign mt-3 text-right">
						<h2 class="title text-uppercase font-weight-bold m-0"><i class="fas fa-user mr-1"></i> Recover Password</h2>
					</div>
					<div class="card-body">

						<form method="POST" action="{{ route('password.update') }}">
                        @csrf
                            <input type="hidden" name="token" value="{{ $token }}">
                            <div class="form-group mb-3">
                                <label>E-mail Address</label>
                                <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email"  />
                                @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                 @enderror
                            </div>
                           <div class="form-group mb-0">
                            <div class="row">
                                <div class="col-sm-6 mb-3">
                                    <label>{{ __('New Password') }}</label>
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
                                <button type="submit" class="btn btn-primary mt-2">Reset</button>
                            </div>
                        </div>
							<p class="text-center mt-3">Remembered? <a href="{{url('/login')}}">Sign In!</a></p>
						</form>
					</div>
				</div>
@endsection
