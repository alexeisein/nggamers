@extends('layout')

	@section('title', '| Create Article')

	{{ Html::script('https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=e9fix1c1togpupgglxxvjeo0nd67ents8f43hjae965s9lj5') }}
    {{ Html::script('js/tinymce.js') }}

	@section('content')
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<div class="panel panel-default" style="padding:0 10px;">
					<div class="panel-heading"><h2 class="col-sm-offset-4">Edit Your Article</h2></div>
						<div class="panel-body">

							@include('errors.formerrors')

							{!! Form::model($article, ['method' => 'PATCH', 'route' => ['articles.update', $article->id]]) !!}

								@include('partials.article_form',['submitBTN' => 'Update Article'])

							{!! Form::close() !!}
						</div>
					</div>
				</div>
			</div>

	@endsection