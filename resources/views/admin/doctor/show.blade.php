@extends('layouts.web')
@section('title')
Dashboard || {{$doctor->name}}
@endsection
@section('content')
<h1>{{$doctor->name}}<h1>
        <form method="POST" action="">
            @csrf
            <input name="id" value="{{$doctor->id}}" hidden />
            @method('delete')
        </form>

        @endsection