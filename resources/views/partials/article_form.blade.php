<div class="form-group">
	{{ Form::label('title', 'Blog Title:', ['class' => 'control-label']) }}
	{{ Form::text('title', null, ['class' => 'form-control input-lg', 'placeholder' => 'Enter Blog Title', 'id' => 'title']) }}
</div>

<div class="form-group">
	{{ Form::label('body', 'Blog Content:', ['class' => 'control-label']) }}
	{{ Form::textarea('body', null, ['class' => 'form-control', 'row' => 5, 'col' => 10, 'id' => 'body', 'placeholder' => 'Write your blog here']) }}
</div>

<div class="form-group">
	{{ Form::label('slug', 'Slug:', ['class' => 'control-label']) }}
	{{ Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug', 'placeholder' => 'slug',])}}
</div>

<div class="form-group">
	{{ Form::select('category_id', $categories, null, ['class'=>'form-control']) }}
</div>

<div class="form-group col-sm-6">
	{{ Form::submit($submitBTN, ['class' => 'btn btn-primary btn-lg input-lg btn-block form-control']) }}
</div>

<script>
	function goBack() {
	    window.history.go(-1);
	}
</script>
<div class="form-group col-sm-6 pull-right">
	<a onclick="goBack()" class="btn btn-danger btn-lg input-lg form-control" role="button"  href=""> Back</a>
</div>