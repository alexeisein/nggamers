@extends('layout')
	@section('title')
		Gamers - Naija
	@stop

	@section('mycontent')

		
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<div class="panel panel-default" style="padding:0 10px;">
						<div class="panel-heading"><h2 class=" col-sm-offset-4">Create a gamer</h2></div>
						<div class="panel-body">
							@include('errors.formerrors')
							
							{!! Form::open(['url' => 'gamers', 'class' => 'form-horizontal', 'role' => 'form']) !!}

								@include('partials.form', ['submitButton' => 'Add Gamer'])

							{!! Form::close() !!}

				       </div>
				  </div>
		      </div>
		   </div>
			
	@endsection		
