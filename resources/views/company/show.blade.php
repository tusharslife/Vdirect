@extends('layouts.app')

@section('content')
<section class="pro">
<div class="container portfolio">
    <div class="row">
		<div class="col-md-12">
			<div class="heading">
			 <a> Company Details </a>
			</div>
		</div>
	</div>
	<div class="bio-info">
		<div class="row">
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-12">
						<div class="co-image">
                            @if(!empty($company->logo))
                                <img src="{{ asset('uploads/logo') }}/{{ $company->logo }}" alt="" class="w-100 img-thumbnail">
                            @else
                                <img src="{{ asset('avatar/logo.png') }}" alt="" class="w-100 img-thumbnail">
                            @endif
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="bio-content">
                    <div class="card-body">
						<tbody class="t">
							<i class="bi bi-building"></i>
							Company Name:
							<b>{{ $company->cname }}</b><br>
						</tbody><br>
						<tbody class="t">
								 <i class="bi bi-bullseye"></i>
                                 Company Slogan:
								<b> {{ $company->slogan }}</b>
						</tbody><br><br>
						<tbody class="t">
								 <i class="bi bi-phone-fill"></i>
                                 Company Phone Number:
								<b> {{ $company->phone }}</b>
						</tbody><br><br>
						<tbody class="t">
								 <i class="bi bi-envelope-fill"></i>
								  Company Email:
								<b> {{ Auth::user()->email }}</b>
						</tbody><br><br>
						<tbody class="t">
								 <i class="bi bi-at"></i>
                                 Company Website:
								<b> {{  $company->website }}</b><br>
						</tbody><br>
						<tbody class="t">
							<i class="bi bi-file-earmark-person-fill"></i>
							About Company:
						   <b> {{ $company->description }}</b><br>
				   		</tbody><br>
						<tbody class="t">
								 <i class="bi bi-house-door-fill"></i>
								  Company Address:
								<b> {{ $company->address }}</b>
						</tbody><br><br>

						<a href="{{ route('company.edit') }}">
                            @if(Auth::user()->user_type =='employer')
                            <button class="btn btn-primary">Edit Company Profile</button></td>
                           @endif


                              </a>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>
</section>
@endsection