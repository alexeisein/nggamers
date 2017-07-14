@extends('layout')

	@section('title', config('app.name'). ' | ' .'Dashboard')

	{{ Html::style('css/style.css') }}

	@section('mycontent')

		<div class="container">
		    <div class="row">
		        <div class="col-md-10 col-md-offset-1">
		            <div class="panel panel-default">
		                <div class="panel-heading">
		                	<div class="pull-left"><p>{{ $user->username }}'s Dashboard</p>
		                	</div>
		                	<div class="clearfix"></div>
		                </div>

		                <div class="panel-body">
		                	<div class="panel-body">
		                    	<p>What would you like to do today?</p>
		                	</div>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>

	@endsection



