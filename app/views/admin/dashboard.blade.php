@extends('admin.layouts.main')

@section('sidebar')
    @parent
    <p>This is appended to the appended sidebar.</p>
@stop


@section('content')

	<h1>Dashboard</h1>

	<p>this is dashboard.</p>

@stop
