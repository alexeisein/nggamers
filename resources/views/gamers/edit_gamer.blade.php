@extends('layout')
	@section('title')
		Gamers - Naija
	@stop

	@section('mycontent')

		<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<div class="panel panel-default" style="padding:0 10px;">
						<div class="panel-heading"><h2 class=" col-sm-offset-4">Edit Gamer</h2></div>
						<div class="panel-body">
							@include('errors.formerrors')
							
							{!! Form::model($gamers, ['method' => 'PATCH', 'url' => 'gamers/'.$gamers->id]) !!} {{--'Action' => 'PagesController@update', $gamers->id--}}

								@include('partials.form', ['submitButton' => 'Update Fields'])

							{!! Form::close() !!}

				       </div>
				  </div>
		      </div>
		   </div>		

	@endsection
