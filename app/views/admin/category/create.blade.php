@extends('admin.layouts.main')
@section('title') Create Category @stop
@section('content')
	{{ $header_menu }}
	<h2>Create Category</h2><hr />


	<?php
		$categ = array();
		foreach ($categories as $item) {
		    if($item['parent'] == 0) {
		    	array_push($categ, $item);
		    	foreach ($categories as $val) {
		    		if($val['parent'] == $item['id']) {
		    			array_push($categ, $val);
		    		}
		    	}
		    }
		}
	?>

	{{ Form::open(array('route'=>'category.store')) }}
		<div class="form-group">
		    {{ Form::label('name', 'Name:') }}
			{{ Form::text('name', '', array('class'=>'form-control')) }}
		</div>
		<div class="form-group">
			{{ Form::label('parent', 'Parent:') }}
			<select name="parent_id" class="form-control">
				@foreach ($categ as $cat)
					<option value="{{$cat['id']}}">{{$cat['parent']}} {{$cat['name']}}</option>
				@endforeach
			</select>
		</div>
		<div class="form-group">
			{{ Form::submit('Submit', array('class'=>'btn btn-success')) }}
		</div>
	{{ Form::close() }}
@stop
