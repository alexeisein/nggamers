@extends('layout')
	@section('title')
		Gamers - Naija
	@stop

	@section('mycontent')

		<div class="col-md-6 col-md-offset-1">
			<div class="row">
				<h3>{{ ucwords($article->title) }}</h3><hr>

				<p>{!! ucwords($article->body) !!}</p>

				<hr>

				<p>Posted In: <b>{{ ucwords($article->category->category_name) }}</b></p>
			</div>
			
		</div>

		<div class="well col-md-3 col-md-offset-1">
			<div class="row">
				<div>
					<a class="btn btn-default col-md-12" href="{{ url($article->slug)}}">{{ url($article->slug) }}
					</a>
				</div>

				<div>
					<a class="btn btn-warning col-md-3 glyphicon glyphicon-edit" role="button"  href="{{ url('/articles/'.$article->id.'/edit') }}">
					</a>
				</div>
				
				<div>
					<a class="btn btn-info col-md-3 glyphicon glyphicon-step-backward" role="button"  href="{{ url('articles') }}"> 
					</a>
				</div>

				<div>
					<a class="btn btn-success col-md-3 glyphicon glyphicon-home" role="button"  href="{{ url('/') }}"> 
					</a>
				</div>

				<div>
					{!! Form::open(['method' => 'DELETE', 'route' => ['articles.destroy', $article->id]]) !!}

						{{ Form::button('<i class="glyphicon glyphicon-trash"> </i>', ['class' => 'btn btn-danger col-md-3', 'type' => 'submit'])}}

					{!! Form::close() !!}
				</div>
			</div>
		</div>

	@endsection
