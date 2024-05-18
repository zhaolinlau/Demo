@extends('layouts.app')

@section('content')
	<h1>this is the index page for posts</h1>
	<a class="btn btn-primary" href="{{ route('posts.create') }}">Add post</a>

	<br>

	<br>

	@foreach ($posts as $post)
		<div>
			<h3>
				{{ $post->title }}
			</h3>
			<br>
			<h4>
				{{ $post->content }}
			</h4>
		</div>
		<a class="btn btn-info" href="{{ route('posts.show', $post) }}">View</a>
		<form action="{{ route('posts.destroy', $post) }}" method="post">
			@csrf
			@method('delete')

			<button class="btn btn-danger" type="submit">delete</button>
		</form>
		<br>
		<br>
	@endforeach
@endsection
