@extends ('layouts.layout')

@section('content')


{!!Form::model($article,
	['route'=>['articles.update', $article->id],
	'method'=>'patch'])!!}


<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">

	{!!Form::label('title','Title')!!}
	{!!Form::text('title',null,['class'=>'form-control'])!!}
	{!! $errors->first('title','<span class="help-block">:message</span>')!!}
</div>

<div class="form-group {{ $errors->has('body') ? 'has-error' : '' }}">
	{!!Form::label('body','Body')!!}
	{!!Form::textarea('body',null,['class'=>'form-control'])!!}
	{!! $errors->first('body','<span class="help-block">:message</span>')!!}
</div>

<div class="form-group {{ $errors->has('excerpt') ? 'has-error' : '' }}">
	{!!Form::label('excerpt','Excerpt')!!}
	{!!Form::textarea('excerpt',null,['class'=>'form-control'])!!}
	{!! $errors->first('excerpt','<span class="help-block">:message</span>')!!}
</div>

<div class="form-group">
	{!!Form::submit('Update Article',['class' => 'btn btn-primary form-control'])!!}

</div>



{!!Form::close()!!}
	

@endsection