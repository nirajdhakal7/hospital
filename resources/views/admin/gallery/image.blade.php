@extends('adminlte::page')
@section('title','Add Image')
@section('content')



    <div class="container">
        <h1> {{ $gallery->album }}</h1>

        <image-upload  v-bind:gallery=`{!! json_encode( $gallery->id) !!}`></image-upload>
        <div class="row">
            @if($gallery->images->count()>0)
                @foreach($gallery->images as $image)
{{--                    {{ $image->url }}--}}
                    <div class="col-2 mb-4">
                        <img src="{{ asset('storage/'.$image->url) }}" alt="{{ $image->url }}" class="w-100"></img>
                    </div>
                    <form action="{{ route('image.destroy', [$gallery, $image]) }}"method="post">
                        @method('DELETE')
                        @csrf
                        <button class="small btn btn-outline-danger mt-2">Delete</button>
                    </form>
               @endforeach
                @else
            <p>No image found</p>
                @endif
        </div>
    </div>

@endsection
