@extends('admin.layouts.main')
@section('title') Edit @stop
@section('content')
	<h2>Edit Category</h2><hr />
	{{ Form::model($category, array('method'=>'put', 'route'=>array('category.update', $category->id))) }}
		<ul style="width: 30%">
			<li>
				{{ Form::label('name', 'Name:') }}
				{{ Form::text('name', null, array('class' => 'form-control')) }}
			</li>
			<li>
				{{ Form::label('slug', 'Slug:') }}
				{{ Form::text('slug', null, array('class' => 'form-control')) }}
			</li>
			<li>
				{{ Form::label('parent_id', 'Parent:') }}
				{{ Form::text('parent_id', null, array('class' => 'form-control')) }}
			</li>
			<li>
				{{ Form::submit('Update', array('class'=>'btn')) }}
			</li>
		</ul>
	{{ Form::close() }}
@stop
