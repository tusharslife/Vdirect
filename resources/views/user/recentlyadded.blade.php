@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach($videos as $video)
        <div class="col-md-3 mb-2">
          <div class="bg-dark text-white">
          <img height="350" width="120" src="{{asset('uploads/thumbnail/')}}/{{ $video->thumbnail }}" class="card-img-top " alt="..." >
          <div class="card-body c-row">
            <p class="card-title fs-6">{{ $video->title }}</p>
            <small class="text-muted"> {{ $video->catagory}}</small>
          </div>
          <div class="card-footer c-row">
            <div class="row">
              <div class="col-md-8">
                <small class="p-1 text-muted border border-secondary"> {{ $video->type }}</small>
              </div>
              <div class="col-6 col-md-4 ">
               <a href="{{ route('job.show', [$video->id, $video->slug]) }}" class="btn btn-primary">Play</a>
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
