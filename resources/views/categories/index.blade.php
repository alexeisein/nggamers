@extends('layout')
	@section('title')
		Article Categories.
	@stop

	@section('mycontent')
		<div class="row col-md-12">
			<div class="col-md-5 col-md-offset-1">
				<h4 class="text-center"><b>CATEGORIES</b></h4><hr>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>No.#</th>
							<th>Categories</th>
						</tr>
					</thead>

					<tbody>
						@foreach ($category as $categories)
							<tr>
								<td>{{ $categories->id }}</td>
								<td><h5>{{ $categories->category_name }}</h5></td>
							</tr>
						@endforeach
					</tbody>
				</table>

			</div>

			<div class="col-md-4 col-md-offset-1">
				<div class="well">
					<h4 class="text-center ">Create more categories</h4><hr>

					@include('errors.formerrors')

					{{ Form::open(['route' => 'categories.store', 'class' => 'form-vertical']) }}

					<div class="form-group">
						{{ Form::text('category_name', null, ['class' => 'form-control input-lg', 'placeholder' => 'Category Name:', 'id' => 'category_name']) }}
					</div>

					<div class="form-group">
						{{ Form::submit('Add Category', ['class' => 'btn btn-primary btn-block btn-lg'] )}}
					</div>

					{{ Form::close() }}
				</div>
				
			</div>

		</div>

		<div class="col-md-12 text-center">
			{!! $category->links(); !!}
		</div>
		
	@endsection