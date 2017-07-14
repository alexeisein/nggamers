@extends('layout')

	@section('title', config('app.name').' | Articles')

	{{Html::style('css/style.css')}}

	@section('mycontent')
			
				<div class="col-md-12">
					<h2 class="text-center btn-success" id="article_title">List of Articles</h2>
				{{-- @foreach($articles->chunk(3) as $chunk) 
					@foreach($chunk as $article)--}}
					@forelse ($articles as $article)
						<div class="list-group col-md-3" id="article_content">
							<a class="list-group-item list-group-item-success" href="{{ url('articles/'.$article->id) }}">{{ ucwords($article->title) }}
							</a>
							<p>
								{!! substr($article->body, 0, 300) !!}
								{!! strlen($article->body) > 300 ? '[...]' : '' !!}
							</p>

							<a href="{{ url('articles/'.$article->id) }}" class="btn btn-info">View more</a>
						</div>
					@empty
						<h2 class="text-center">No article published yet !</h2>
					@endforelse
				</div>
					<div class="center-text">
						{!! $articles->links(); !!}
					</div>
				

	@endsection