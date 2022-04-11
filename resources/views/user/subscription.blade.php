@extends('layouts.app')

@section('content')
<div class="container pay-con">
    <section class="pdetail">
      <br>  <h2 style="text-align:center; color:white;"> <i class="bi bi-shield-lock-fill" style="color:Blue;"></i> Set up your payment </h2>
        <p style="text-align:center;  color:white;">Your membership starts as soon as you set up payment.</p>
<br>    </section>

    <div class="card text-center">
        <div class="card-header" style="background-color:rgba(0, 255, 13, 0.781);">
          <h3>Pay First to Enjoy Our Videos Streaming Service</h3>
        </div>
        <div class="card-body">
          <h6 class="card-title">Pack of 60 Days in Rs 500</h6>
          <a href="{{ route('payment') }}" class="btn btn-primary">Pay Now</a>
        </div>
      </div>
<br><br>
  
  </div>
@endsection