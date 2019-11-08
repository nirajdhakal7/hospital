@extends('layouts.web')
@section('title',"Dashboard || {{$slider->title}}")

@section('content')
    <div class="row">
        <h1>{{$slider->title}}</h1>
        <div class="col-12"><img src="{{asset('storage/'.$slider->image)}}" alt="No image" class="img-thumbnail"></div>




    </div>




@endsection
