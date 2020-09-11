
@extends('layouts.layouts2')

@section('content')


    <br><br>
	<div class="main-bg">

		<!-- content -->
		<div class="sub-main-w3">
			<div class="bg-content-w3pvt">
				<div class="top-content-style">
					<img src="" alt="" />
				</div>


				<form method="POST" action="{{ route('login.user') }}">
					@csrf
					<p class="legend">LOGIN </p>
					@isset($trouble)
						{{ $trouble }}
					@endisset
					<div class="input">
						<input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
						<span class="fa fa-envelope"></span>

						@error('email')
					 	 <span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						 </span>

					    @enderror
					</div>
					<div class="input">
						<input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
						<span class="fa fa-unlock"></span>

						@error('password')
						   <span class="invalid-feedback" role="alert">
							  <strong>{{ $message }}</strong>
						   </span>
					   @enderror

					
					</div>

					<div class="form-check">
						<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

						<label class="form-check-label" for="remember">
							{{ __('Remember Me') }}
						</label>
					</div>


                    
					<button type="submit" class="btn submit">
						<span class="fa fa-sign-in"></span>
					</button>
					               
				</form>
				@if (Route::has('password.request'))
				<a class="btn btn-link" href="{{ route('password.request') }}">
					{{ __('Forgot Your Password?') }}
				</a>
				@endif
			</div>
		</div>
		<!-- //content -->
		
	</div>

@endsection
