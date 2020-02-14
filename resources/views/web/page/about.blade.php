@extends('layouts.web')
@section('title','About Us')
@section('content')
    <div class="container">
        <h2 class="text-center mt-4">What we do?</h2><!-- Grid row -->
        <div class="row">
            @foreach ($about as $row)
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <p class="text-center">
                        {!!  $row->description !!}
                    </p>
                </div>
            @endforeach
        </div>
    </div>
@endsection
