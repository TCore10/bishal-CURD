<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Document</title>
	<link rel="stylesheet" href="/css/bootstrap.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
	<div class="bg-info text-white p-5 mb-3" id="report">
		<a href="{{route('posts.index')}}" class="btn btn-secondary">Home</a>
		<a href="{{route('posts.create')}}" class="btn btn-secondary">Create</a>
		@auth
		<form action="{{route('logout')}}" class="d-inline-block float-right" method="post">
			@csrf
			<label>{{auth()->user()->name}}</label>
			<button class="btn btn-secondary">Logout</button>
		</form>
		@else
			<a href="{{route('login')}}" class="btn btn-secondary float-right">Login</a>
		@endauth
	</div>
	<div class="container">
		@yield('content')
	</div>
	<script type="text/javascript" src="/js/jquery1.js"></script>
	<div class="bg-dark text-white p-4 text-center">
		All rights reserved Bishal {{date('Y')}}
	</div>
</body>
</html>