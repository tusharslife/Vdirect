@extends('layouts.app')

@section('content')

<div class="container-md">
    <h1 class="text-center">
    <img src="{{asset('img/success.gif')}}" type="vidio/mp4" class="svi" autoplay loop  style="height: 120px; width:120px;"/>
    </h1>
    <h2 class="text-center" style="color: white"> Payment Successful.</h2>
        <h3 class="text-center" style="color: white"> Enjoy Your Entertainment.</h3>
<hr>
    <form action="btn-v">
       <h6 class="text-center"> <a  href="{{ route('home') }}" class="btn btn-primary">
            Back to home
        </a>
    </h6>
    </form>
</div>

@endsection