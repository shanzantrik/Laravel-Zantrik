@extends('admin.layouts.main')
@section('title') Category @stop
@section('content')
	{{ $header_menu }}
	<div id="content">
		<h2>Categories</h2><hr />
		@if($categories->count())
			<table class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>Name</th>
						<th>Slug</th>
						<th>Parent</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					@foreach($categories as $category)
						<tr>
							<td>{{$category->name}}</td>
							<td>{{$category->slug}}</td>
							<td>{{Basehelper::getCategoryDetails($category->parent_id, 'name')}}</td>
							<td>
								{{HTML::linkRoute('category.edit', 'Edit', array($category->id), array('class'=>'btn btn-info', 'style'=>'float: left;'))}}
								{{ Form::open(array('method'=>'DELETE', 'route'=>array('category.delete', $category->id))) }}
									{{ Form::submit('Delete', array('class'=>'btn btn-danger', 'style'=>'float: left;')) }}
								{{Form::close()}}
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
			{{ $categories->links(); }}
		@else
			There are no Categories.
		@endif
	</div>
@stop
