@extends('layouts.app')

@section('content')

<section class="pro">
<div class="container portfolio">
    <div class="row">
		<div class="col-md-12">
			<div class="heading">
			 <a> User Details </a>
			</div>
		</div>
	</div>
	<div class="bio-info">
		<div class="row">
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-12">
						<div class="bio-image">
                            @if(empty(Auth::user()->profile->avatar))
                                    <img src="{{ asset('avatar/logo.png') }}" alt="" class="img-thumbnail">
                                @else
                                    <img src="{{ asset('uploads/avatar') }}/{{ Auth::user()->profile->avatar }}" alt="" class="img-thumbnail">
                                @endif
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="bio-content">
                    <div class="card-body">
						<tbody class="t">
							<i class="bi bi-person-circle"></i>
							Name:
							<b>{{ Auth::user()->name }}</b>
						</tbody><br><br>
						<tbody class="t">
								 <i class="bi bi-gender-ambiguous"></i>
								  Gender:
								<b> {{ Auth::user()->profile->gender }} </b>
						</tbody><br><br>
						<tbody class="t">
								 <i class="bi bi-calendar"></i>
								  Date of Birth:
								<b> {{ Auth::user()->profile->dob }}</b>
						</tbody><br><br>
						<tbody class="t">
								 <i class="bi bi-envelope-fill"></i>
								  Email:
								<b> {{ Auth::user()->email }}</b>
						</tbody><br><br>
						<a class="btn btn-primary" href="{{ route('profile.edit') }}">{{ __('Edit Profile Photo') }}</a>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>
</section>
@endsection