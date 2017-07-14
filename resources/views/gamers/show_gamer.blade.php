@extends('layout')
	@section('title')
		Gamers - Naija
	@stop

	@section('mycontent')

		

		@if(Auth::check())
			<div class="well col-md-3">
				<a class="btn btn-success btn-lg input-lg col-md-12 glyphicon glyphicon-home" role="button"  href="{{ url('/') }}"> Home</a>

				<a style="margin-top: 20px;" class="btn btn-info btn-lg input-lg col-md-12 glyphicon glyphicon-backward" role="button"  href="{{ url('/gamers') }}"> Back</a>
			</div>
		@endif

		<div class="col-md-6">
			<h2>Gamer Profile</h2>
			<p>
				<b>Name: </b>{{ ucwords($gamer->name) }}<br>
				<b>Nickname: </b>{{ ucwords($gamer->nickname) }}<br>
				<b>Email: </b>{{ $gamer->email }}<br>
			</p>
		</div>

		@if(Auth::check())

			<div class="well col-md-3">

				<a style="margin-bottom: 20px;"  class="btn btn-warning btn-lg input-lg col-md-12 glyphicon glyphicon-edit" role="button"  href="{{ url('/gamers/'.$gamer->id.'/edit') }}"> Edit</a>
				
					{!! Form::open(['method' => 'DELETE', 'route' => ['gamers.destroy', $gamer->id]]) !!}
					{!! Form::button('<i class="glyphicon glyphicon-trash"> Delete</i>', ['class' => 'btn btn-danger btn-lg input-lg col-md-12', 'type' => 'submit']) !!}

					{!! Form::close() !!}
			</div>
		@endif

	@endsection
