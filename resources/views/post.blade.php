@extends('layouts.app')

@section('content')
	<h1>This is post page!</h1>
	<h3>List Posts</h3>
	@if (count($posts))
		<ul>
			@foreach($posts as $post)
			<li>{{ $post }}</li>
			@endforeach	
		</ul>
	@endif
@stop

@section('scripts')
	<script src="/js/other.min.js"></script>
@stop