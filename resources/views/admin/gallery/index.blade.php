@extends('adminlte::page')
@section('title','Slider')
@section('css')
@stop
@section('content')
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">Gallery</h1>
		<div class="btn-toolbar mb-2 mb-md-0">
			<div class="btn-group mr-2">
				<a href="{{ route('gallery.create')}}" class="btn btn-sm btn-outline-secondary">Add Album</a>
				<button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
			</div>
		</div>
	</div>
	@isset($galleries)
        <div>
            <table><thead>
                <th>Gallery Name</th>
                <th></th>
                <th></th>
                <th></th>
                </thead>
                <tbody>
                @foreach($galleries as $row )
                    <tr>
                        <td>{{$row->album}} </td>
                        <td><a href=" {{ route('gallery.show',$row) }}"><i class="fa fa-camera-retro" aria-hidden="true"></i></a></td>
                        <td><i class="fa fa-pen" aria-hidden="true"></i></td>
                        <td><i class="fa fa-pen" aria-hidden="true"></i></td>
                    </tr>

                @endforeach
                </tbody>
            </table>
        </div>
{{--		<div class="pb-2 mb-3 border-bottom">--}}
{{--			<div class="card-deck">--}}
{{--				@foreach($galleries as $card )--}}
{{--					@include('components.gallery-card',['route'=>'carousel'])--}}
{{--				@endforeach--}}
{{--			</div>--}}
{{--		</div>--}}
		<div class="container">
{{--			{{ $galleries->links() }}--}}
		</div>
	@endisset
@endsection

