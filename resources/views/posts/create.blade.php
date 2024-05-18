@extends('layouts.app')

@section('content')
	<h1>this is the create page for posts</h1>

	<form action="{{ route('posts.store') }}" method="post">
		@csrf
		Title:
		<input type="text" name="title">
		@error('title')
			{{ $message }}
		@enderror
		<br>
		Content:
		<input type="text" name="content">
		@error('content')
			{{ $message }}
		@enderror
		<br>
		<br>
		<button type="submit">submit</button>
	</form>
@endsection
