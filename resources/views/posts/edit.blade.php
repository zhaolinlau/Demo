@extends('layouts.app')

@section('content')
	<h1>this is the edit page for posts</h1>

	<form action="{{ route('posts.update', $post) }}" method="post">
		@csrf
		@method('put')
		Title:
		<input type="text" name="title" value="{{ $post->title }}">		
		@error('title')
			{{ $message }}
		@enderror
		<br>
		<br>
		Content:
		<input type="text" name="content" value="{{ $post->content }}">
		@error('content')
			{{ $message }}
		@enderror
		<br>
		<br>
		<button type="submit" class="btn btn-primary">Save</button>
		<a class="btn btn-danger" href="{{ route('posts.index') }}">Cancel</a>
	</form>
@endsection
