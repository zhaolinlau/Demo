@extends('layouts.app')

@section('content')
	<h1>this is the show page for posts</h1>

	<form>
		Title:
		<h3>
			{{ $post->title }}
		</h3>
		<br>
		Content:
		<h3>
			{{ $post->content }}
		</h3>
		<br>
		<br>
		<a class="btn btn-link" href="{{route('posts.edit', $post)}}">Edit</a>
		<a class="btn btn-danger" href="{{route('posts.index')}}">Cancel</a>
	</form>
@endsection
