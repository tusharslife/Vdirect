@extends('layouts.app')

@section('content')
<div class="container">
  {{ $videos->appends(Illuminate\Support\Facades\Input::except('page'))->links() }}
    <div class="row">
        @foreach($videos as $video)
        <div class="col-md-3 mb-2">
          <div class="bg-dark text-white">
          <a href="{{ route('job.show', [$video->id, $video->slug]) }}"><img height="300" width="100" src="{{asset('uploads/thumbnail/')}}/{{ $video->thumbnail }}" class="card-img-top " alt="..." ></a>
         
          <div  class="p-2">
            <h5>{{ $video->title }}</h5>
            
            <div class="row">
              <div class="col">
              <small class="p-1 text-muted border border-secondary float-left">{{ $video->catagory}}</small>
              </div>
              <div class="col">
                <a href="{{ route('job.show', [$video->id, $video->slug]) }}" class="btn btn-primary float-right"><i class="bi bi-play-circle-fill"></i>   Play</a>
              </div>
            </div>
          </div>
      
      
        </div>
        </div>
        @endforeach
      </div>
      <div class="mx-auto mt-4 float-right">
        {{ $videos->appends(Illuminate\Support\Facades\Input::except('page'))->links() }}
      </div>
  </div>
@endsection
