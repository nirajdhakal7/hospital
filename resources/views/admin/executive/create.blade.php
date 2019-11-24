@extends('adminlte::page')
@section('title','Add Executive Member')
@section('content')
	
	@include('components.executive-form', ['route'=>'executive'])
	
	

@endsection
