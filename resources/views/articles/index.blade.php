@extends ('layouts.layout')

@section('content')

@foreach($articles as $article)

	@include ('partials.excerpt')

	@if (Auth::user())

	<a href="{{route('articles.edit',$article->id)}}" class='btn btn-primary'>Edit Article</a>

	{!! Form::open([
		'method' => 'delete',
		'route' => ['articles.destroy',$article->id]

	])!!}

	{!! Form::submit('Delete Movie',['class' => 'btn btn-danger'])!!}
	@endif

	{!!Form::close()!!}
	
@endforeach
{!! $articles->render()!!}
@endsection