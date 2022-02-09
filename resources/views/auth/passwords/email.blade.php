@extends('layouts.auth.verify')
@section('page_name',  __('Recover Password'))

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
						<div class="alert alert-info">
							<p class="m-0">Enter your e-mail below and we will send you reset instructions!</p>
						</div>

						<form method="POST" action="{{ route('password.email') }}">
                        @csrf
							<div class="form-group mb-0">
								<div class="input-group">
									<input name="email" type="email" placeholder="E-mail" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus/>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    <span class="input-group-append">
										<button class="btn btn-primary btn-lg" type="submit">Reset!</button>
									</span>
								</div>
							</div>

							<p class="text-center mt-3">Remembered? <a href="{{url('/login')}}">Sign In!</a></p>
						</form>
					</div>
				</div>
@endsection
