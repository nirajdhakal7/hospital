@extends('layouts.web')
@section('title','Our Services')
@section('content')
	<div class="container-fluid mt-5">
		<h4 class="display-4">All Notices</h4>
		<div class="row">
			<div class="col-sm-4 col-xl-3">
				<div class="list-group" id="list-tab" role="tablist">
					@foreach( $notices as $notice)
						<a class="list-group-item list-group-item-action {{$loop->first?'active':''}}"
						   id="list-{{$notice->id}}-list"
						   data-toggle="list"
						   href="#list-{{$notice->id}}"
						   role="tab"
						   aria-controls="{{$notice->id}}">
							{{ $notice->title }}
						</a>
					@endforeach
				</div>
			</div>
			<div class="col-sm-8 col-xl-9">
				<div class="tab-content" id="nav-tabContent">
					@foreach( $notices as $notice)
						<div class="tab-pane fade {{$loop->first?'show active':''}}" id="list-{{$notice->id}}"
						     role="tabpanel"
						     aria-labelledby="list-{{$notice->id}}-list">
							<div class="card">
								<div class="card-body">
									<h5 class="card-title">{{ $notice->title }}</h5>
									<p class="card-text text-justify">{{ $notice->description }}</p>
									@isset($notice->attachment)
										<strong class="float-left">
											<a href="{{ url( asset('storage/'.$notice->attachment))}}" target="_blank"
											   data-toggle="tooltip" data-placement="top"
											   title="{{ Str::after($notice->attachment, 'attachment/') }}">Download
												<span class="fa fa-download ml-2"></span>
											</a>
										</strong>
									@else
										<strong class="float-left">No Attachment Found
											<span class="fa fa-paperclip ml-1"></span>
										</strong>
									@endisset
									<strong class="float-right">
										<span class="fa fa-clock ml-2"></span>
										{{ date_format($notice->created_at, 'jS M, Y')	}}
									</strong>
								</div>
							</div>
						</div>
					@endforeach
				</div>
			</div>
		</div>
		{{ $notices->links() }}
	
	
	</div>

@endsection

@section('js')
	<script>
        $('#myList a').on('click', function (e) {
            e.preventDefault();
            $(this).tab('show')
        })
	</script>
@stop
