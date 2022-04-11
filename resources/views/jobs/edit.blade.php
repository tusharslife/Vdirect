@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            @if(Session::has('message'))
					<div class="alert alert-success text-center text-uppercase">
						{{ Session::get('message') }}
					</div>
				@endif
            <div class="card-header text-center bg-primary text-white text-uppercase">
                Update Video Entry
            </div>

            <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">
					@csrf
					{{-- status --}}
					<div class="col-md-5">
						<label for="status"><i class="bi bi-broadcast"></i>  Status</label>
                        <select name="status" class="form-control" required>					
							<option value="1"{{ $job->status=='1'?'selected':'' }}>Live</option>	
							<option value="0"{{ $job->status=='0'?'selected':'' }}>Draft</option>	
						</select>
					</div><br>

                    {{-- release date --}}
                    <div class="col-md-3">
						<label for="release_date"><i class="bi bi-calendar2"></i> Release Date</label>
						<input
                            required
							type="date"
							name="release_date"
							class="form-control"
							value="{{ $job->release_date }}">
					</div><br>

                    {{-- type --}}
					<div class="col-md-6">
						<label for="type"><i class="bi bi-check2-circle"></i> Type</label>
						<select name="type" class="form-control" required>
						    <option value="Movie"{{ $job->type=='Movie'?'selected':'' }}>Movie</option>	
							<option value="Cartoon"{{ $job->type=='Cartoon'?'selected':'' }}>Cartoon</option>	
						</select>
                    </div><br>

                    {{-- catagory --}}
					<div class="col-md-8">
						<label for="catagory"><i class="bi bi-card-list"></i> Catagory</label>
						<select name="catagory" class="form-control" required>
						    <option value="Action"{{ $job->catagory=='Action'?'selected':'' }}>Action</option>	
							<option value="Adventure"{{ $job->catagory=='Adventure'?'selected':'' }}>Adventure</option>	
						    <option value="Animation"{{ $job->catagory=='Animation'?'selected':'' }}>Animation</option>	
						    <option value="Comedy"{{ $job->catagory=='Comedy'?'selected':'' }}>Comedy</option>	
						    <option value="Crime"{{ $job->catagory=='Crime'?'selected':'' }}>Crime</option>	
						    <option value="Fantasy"{{ $job->catagory=='Fantasy'?'selected':'' }}>Fantasy</option>	
						    <option value="Horror"{{ $job->catagory=='Horror'?'selected':'' }}>Horror</option>	
						    <option value="Mystery"{{ $job->catagory=='Mystery'?'selected':'' }}>Mystery</option>	
						    <option value="Sci-Fi"{{ $job->catagory=='Sci-Fi'?'selected':'' }}>Sci-Fi</option>	
						    <option value="Romance"{{ $job->catagory=='Romance'?'selected':'' }}>Romance</option>	
						    <option value="Documentary"{{ $job->catagory=='Documentary'?'selected':'' }}>Documentary</option>	
						</select>
					</div><br>

                    {{-- title --}}
					<div class="col-md-8 ">
							<label for="title"><i class="bi bi-film"></i> Title</label>
						<input
                            required
						    maxlength="30"
							type="text"
							name="title"
							class="form-control"
							value="{{ $job->title }}">
					</div><br>

                    {{-- description --}}
					<div class="col-md-8">
						<label for="title"><i class="bi bi-stickies"></i> Description</label>
						<textarea maxlength="180" name="description" rows="3" cols="40" class="form-control" required>{{ $job->description }}</textarea>
					</div><br><br>

					{{-- thumbnail --}}
                    <div class="row">
					<div class="col-md-6">
						<label for="thumbnail"><i class="bi bi-images"></i> Thumbnail</label>
						<input
                            required
						    type="text"
							name="thumbnail"
							class="form-control"
							value="{{ $job->thumbnail }}">
					</div><br>

					{{-- video --}}
					<div class="col-md-6">
						@if($errors->has('video'))
							<div class="text-danger">
								<strong>{{ $errors->first('video') }}</strong>
						    </div>
						@else
						<label for="video"><i class="bi bi-image-fill"></i> Upload Video</label>
						@endif
						<input
                            required
						    type="text"
							name="video"
							class="form-control"
							value="{{ $job->video }}" >
					</div>
                </div><br><br>

					{{-- submit --}}
					<div class="form-group">
						<button type="submit" onclick="move()" class="btn btn-primary btn-lg w-100 u-btn" data-progress-text="Uploading..." data-complete-text="Complete!">
                            Update
                        </button>
					</div>
                        <div class="w3-light-grey">
                            <div id="myBar" class="w3-green" style="height:24px;width:0"></div>
                        </div>
            </div>
          </div>
    </div>

	<script>
    function move() {
      var elem = document.getElementById("myBar");
      var width = 1;
      var id = setInterval(frame, 10);
      function frame() {
        if (width >= 100) {
          clearInterval(id);
        } else {
          width++;
          elem.style.width = width + '%';
        }
      }
    }
</script>

@endsection

