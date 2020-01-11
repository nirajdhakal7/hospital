@extends('adminlte::page')
@section('title','Add Notice')
@section('content')
	@include('components.notice-form', ['route'=>'notice'])
@endsection
