@extends ('layouts.layout')

@section('content')

	<h1 class="h1">{{$article->title}}	</h1>
	<p class="published_at">Published: {{ date('F d, Y', strtotime($article->published_at)) }}</p>

	<p> {!! $article->body!!}</p>

@endsection