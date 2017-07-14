@extends('layout')
	@section('title')
		Gamers - Naija
	@stop

	@section('mycontent')

		<h2>All Naija gamers</h2>
			
		@foreach($gamers as $gamer)
				
			<div class="list-group col-sm-3">
				<a class="list-group-item list-group-item-success" href="{{ url('gamers/'.$gamer->id) }}">{{ ucwords($gamer->name) }}</a><br>
				
			</div>

		@endforeach
		
		

	@endsection
