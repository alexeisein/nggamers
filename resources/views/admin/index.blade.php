@extends('layout')

	@section('title', config('app.name') .' | '.Auth::user()->username ."' Dashboard")

	@section('mycontent')

		<div class="container">
		    <div class="row">
		        <div class="col-md-10 col-md-offset-1">
		            <div class="panel panel-default">
		                <div class="panel-heading">
		                	<div class="pull-left">Admin Dashboard</div>
		                	<div class="pull-right">Welcome to your Dashboard, {{ ucwords(Auth::user()->username) }}
		                	</div>
		                	<div class="clearfix"></div>
		                </div>

		                <div class="panel-body">
		                    <p>What would you like to do today?</p>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>

	@endsection



