@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">

		{{-- left column --}}	
		<div class="col-md-4">
		<!-- <div class="card">
				
			<div class="card-header">Your Profile</div>
			
				<div class="card-body">
				    <p>Email Address: {{ Auth::user()->email }}</p>
					<p>Phone Number: {{ Auth::user()->profile->primary_ }}</p>

					<a href="{{ route('profile') }}">{{ __('View Profile') }}</a>	
				</div>
			</div> -->
		@if(empty(Auth::user()->profile->avatar))
				<img src="{{ asset('avatar/logo.jpg') }}" alt="" class="w-100  mt-2 ">
			@else
				<img src="{{ asset('uploads/avatar') }}/{{ Auth::user()->profile->avatar }}" alt="" class="w-100  mt-2 ">
			@endif
			{{-- avatar form --}}
			<form action="{{ route('avatar') }}" method="post" enctype="multipart/form-data">
				@csrf
				<div class="card  mt-2 ">
					<div class="card-header">
						<div class="card-body">
							<input type="file" name="avatar" class="form-control">
							<button class="btn btn-primary mt-2 w-100" type="submit">Update Profile Photo</button>
							@if($errors->has('avatar'))
								<div class="alert alert-danger mt-2">
									{{ $errors->first('avatar') }}
								</div>
						@elseif(Session::has('avatar_message'))
								<div class="alert alert-success">
									{{ Session::get('avatar_message') }}
								</div>
							@endif
						</div>
					</div>
				</div>
			</form>
			
		</div>

		{{-- center column --}}	
		<div class="col-md-8">
		{{-- session message --}}
						@if(Session::has('profile_message'))
							<div class="alert alert-success w-100 text-center">
								{{ Session::get('profile_message') }}
							</div>
						@endif
			<div class="card">
			
				<div class="card-header">Profile</div>

				{{-- form --}}
				<form action="{{ route('profile.create') }}" method="post">@csrf
					<div class="card-body">
						{{-- address input --}}
						<div class="form-group">
							@if($errors->has('address'))
								<p class="text-danger">{{ $errors->first('address') }}</p>
							@else
								<label for="address">Name</label>
							@endif
							<input type="text" class="form-control" id="firstName" placeholder="{{ Auth::user()->name }}" disabled>
						</div>

				{{-- email input --}}
						<div class="form-group">
			
						@if($errors->has('email'))
							<p class="text-danger">{{ $errors->first('email') }}</p>
							@else
							<label for="email">E-mail</label>
							@endif
							<input type="text" class="form-control" id="firstName" placeholder="{{ Auth::user()->email }}" disabled>
						</div>
					</div>
				</form>

			</div>
		</div>

		{{-- right column --}}
		<div class="col-md-4">

			

			

		</div>

	</div>
</div>
@endsection
