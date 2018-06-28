@extends('master')
@section('content')
<h2 class="my-3">Add Post</h2>
@if($errors->all())
	<div class="alert alert-danger">
		@foreach($errors->all() as $error)
			<li>{{$error}}</li>
		@endforeach
	</div>
@endif
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<form action="{{route('posts.store')}}" method="post">
	@csrf
	<div id="image">
		<input type="file" accept="image/*" onchange="loadFile(event)">
		<img id="output"/>
	</div>
	<div class="form-group">
		<label for="title">Title</label>
		<input type="text" name="title" id="title" class="form-control">
	</div>
	<div class="form-group">
		<label for="content">Content</label>
		<textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea>
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-outline-info">Add Post</button>
	</div>
</form>
{{--jQuery for file uploading--}}
<script>
  var loadFile = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('output');
      output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  };
</script>
@stop