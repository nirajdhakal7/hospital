@extends('adminlte::page')
@section('title','Dashboard')
@section('content')
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">Dashboard</h1>
		<div class="btn-toolbar mb-2 mb-md-0">
			<div class="btn-group mr-2 shadow">
				<button  class="btn btn-sm btn-outline-secondary ">Refresh</button>
				<button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
			</div>
		</div>
	</div>
	<p>You can customize UI from Admin Panel</p>
@stop