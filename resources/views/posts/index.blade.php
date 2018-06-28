@extends('master')
@section('content')
	{{bishal_helper()}}
	<h1>All Posts</h1>
	@foreach($posts as $post)
		<div class="card mt-4">
			<div class="card-body">
				<h2>
					<a href="{{route('posts.show', $post->id)}}">{{$post->title}}</a>
					@if($post->users_id == Auth::User()->id)
							<a href="{{route('posts.edit',$post->id)}}" class="btn btn-info float-right">Edit</a>
							<form onsubmit="return confirm('Are you sure you want to delete this post?')" class="d-inline-block float-right" method="post" action="{{route('posts.destroy',$post->id)}}">
								@csrf
								@method('delete')	
								<button type="submit" class="btn btn-danger"><span class="fa fa-trash-o fa-lg float-right" aria-hidden="true"></span></button>
							</form>
					@endif		
				</h2>
			</div>
		</div>
	@endforeach
	<div class="mt-4" id="report">
		{{$posts->links()}}
	</div>
@endsection

