@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
    
      <div class="col-md-10">
        <div class="card">
          <div class="card-header">Home - Uploaded Videos</div>

          <div class="card-body">
            <table class="table">
            <thead class="bg-light text-black">
          <th>Thumbnail</th>
          <th>Title</th>
          <th class="d-none d-lg-block">Type</th>
          <th>Status</th>
          <th class="d-none d-lg-block">Uploaded</th>
          <th>Details</th>
          <th>Edit</th>
          <th  class="d-none d-lg-block">Play</th>           
      </thead>
              <tbody>
                {{-- videos loop --}}
                @foreach($videos as $video)
                  <tr>
                    @if(!empty(Auth::user()->company->logo))
                      <td>
                        <img 
                          src="{{asset('uploads/thumbnail/')}}/{{ $video->thumbnail }}" 
                          width="80" height="120">
                      </td>
                    @else
                      <td>
                        <img src="{{asset('uploads/thumbnail/')}}/{{ $video->thumbnail }}" alt="" width="80" height="120">
                      </td>
                    @endif
                    <td>
                      <span class="text-primary"></span> 
                      {{ $video->title }}  
                    </td>
                    <td class="d-none d-lg-block">
                    {{ $video->type }}
                    </td>
                    @if($video->status =='1')
                      <td>Live</td>
                    @else
                      <td>Draft</td>
                    @endif
                    <td class="d-none d-lg-block">
                     {{ $video->created_at->diffForHumans() }}
                    </td>
                    </td>
 <!-- Modal -->
 <td><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#hi{{ $video->id }}hi"><i class="bi bi-eye-fill"></i>  Details</button>
<div id="hi{{ $video->id }}hi" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
      <h4 class="modal-title">{{ $video->title }}</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
      <p>Release date: {{ \Carbon\Carbon::parse($video->last_date)->format('d-M-Y')}}</p> 
      <p><h5>Type</h5>
      {{ $video->type }}</p>
          <hr>    
          <p>
            <h5>Description</h5>
            {{ $video->description }}</p>
            <hr>
            <hr>
            <p>Posted on: {{ $video->created_at->diffForHumans() }}</p>
            <a 
                        href="{{ route('job.show', [$video->id, $video->slug]) }}">
                        <button class="btn btn-primary btn-sm"><i class="bi bi-play-circle"></i>  Play</button>
                      </a>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="bi bi-x"></i>  Close</button>
      </div>
    </div>

  </div>
</div></td>
<td>
                      <a href="{{ route('job.edit', [$video->id]) }}">
                        <button class="btn btn-danger btn-sm"><i class="bi bi-pencil"></i>  Edit</button>
                      </a>
                    </td>
                    <td  class="d-none d-lg-block">
                      {{-- link to each individual video --}}
                      <a 
                        href="{{ route('job.show', [$video->id, $video->slug]) }}">
                        <button class="btn btn-primary btn-sm"><i class="bi bi-play-circle"></i>  Play</button>
                      </a>
                    </td>
                    
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <div class="mx-auto mt-4 float-right">
        {{ $videos->appends(Illuminate\Support\Facades\Input::except('page'))->links() }}
      </div>
        </div>
      </div>
    </div>
  </div>
@endsection