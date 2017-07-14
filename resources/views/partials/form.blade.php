<div class="form-group">
	{{ Form::label('name', 'Name:', ['class' => 'control-label']) }}
	{{ Form::text('name', null, ['class' => 'form-control input-lg', 'placeholder' => 'Enter gamer name', 'id' => 'name']) }}
</div>

<div class="form-group">
	{{ Form::label('nickname', 'NickName:', ['class' => 'control-label']) }}
	{{ Form::text('nickname', null, ['class' => 'form-control input-lg', 'placeholder' => 'Enter gamer nickname', 'id' => 'nickname']) }}
</div>

<div class="form-group">
	{{ Form::label('email', 'Email:', ['class' => 'control-label']) }}
	{{ Form::text('email', null, ['class' => 'form-control input-lg', 'placeholder' => 'Enter gamer email', 'id' => 'email']) }}
</div>

<div class="form-group">
	{{ Form::submit($submitButton, ['class' => 'btn btn-lg input-lg btn-primary form-control']) }}
</div>
<div class="form-group">
	<a class="btn btn-lg input-lg btn-danger form-control" role="button"  href="{{ route('gamers.index')}}"> Cancel</a>
</div>
