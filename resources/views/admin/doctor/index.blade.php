@extends('adminlte::page')
@section('title','Doctors')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Doctors</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
                @can('create', App\Doctor::class)
                <a href="{{ route('doctor.create')}}" class="btn btn-sm btn-outline-secondary">
                        Add Doctor
                </a>
                @endcan
                <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
            </div>
        </div>
    </div>

    @isset($doctors)
        @if ( count($doctors)>  0)
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                @foreach($doctors as $card)
                    @include('components.card',['route'=>'doctor'])
                @endforeach
            </div>
            <div class="container">
                {{ $doctors->links() }}
            </div>
        @else
            <p>No Doctors found</p>
        @endif
    @endisset
@endsection

