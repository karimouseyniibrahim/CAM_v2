@extends(layoutExtend('website'))

@section('title')
     {{ trans('section.section') }} {{ trans('home.control') }}
@endsection

@section('content')
	
		@if (count($items) > 0) 
			<!--Card : Dynamic content wrapper-->
			<div class="card mb-4 text-center wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
				<!--Card content-->
				<div class="card-body">
					<form method="get">
						<div class="input-group form-md form-1 pl-0">
							<input class="form-control my-0 py-1" name="name" type="text" placeholder="{{ trans('section.name') }}" value="{{ request()->has("name") ? request()->get("name") : "" }}" aria-label="Search">
							<div class="input-group-append">
								<button class="btn input-group-text cyan lighten-2" style="padding: .375rem .75rem; margin: 0;" type="submit"><i class="fas fa-search text-white" aria-hidden="true"></i></button>
								<a  href="{{ url("section") }}" class="btn input-group-text red lighten-2" style="padding: .375rem .75rem; margin: 0;"><i class="fa fa-trash text-white" aria-hidden="true"></i></a>
							</div>
						</div>
					</form >
				</div>
			</div>
			<!--/.Card : Dynamic content wrapper-->
			<div class="text-center mb-3">
				<a class="btn btn-primary btn-rounded" data-toggle="modal" data-target="#modalRequest">{{ trans('section.request') }}</a>
			</div>
			<!-- Grid row -->
			<div class="row pull-{{ getDirection() }}">
				@foreach ($items as $d)
					<!-- Grid column -->
					<div class="col-lg-4 col-md-4 mb-lg-0 mb-4">
					<!-- Card Light -->
						<div class="card">

							<!-- Card image -->
							<div class="view overlay">
								<img class="card-img-top" style=" height: 150px;  " src="{{ url('/'.env('UPLOAD_PATH').'/Section/'.$item->id.'/'.$d->image) }}" alt="Card image cap">
								<a>
								<div class="mask rgba-white-slight"></div>
								</a>
							</div>

							<!-- Card content -->
							<div class="card-body">

								<!-- Social shares button -->						
								<!-- Title -->
								<h4 class="card-title">{{ $d->name_lang }}</h4>
								<hr>
								<!-- Link -->
								<a href="{{ url('section/'.$d->id.'/view') }}" class="black-text d-flex justify-content-end"><h5>Read more <i class="fas fa-angle-double-right"></i></h5></a>

							</div>

						</div>
					</div>
					<!-- Card Light -->


					<!-- Grid column -->
					@endforeach
			</div>
			<!-- Grid row -->
			@include("website.section.request",  ["sections" => $data, "section_id" => null,"local_id" => null])
		@else
			<a href="{{ url('formation') }}" class="btn btn-danger btn-sm"><i class="fa fa-arrow-left"></i> {{ trans('website.Back') }}  </a>

			<!-- Card -->
			<div class="card card-cascade">
				<!-- Card image -->
				<div class="view view-cascade gradient-card-header blue-gradient">
				<!-- Title -->
				<h2 class="card-header-title mb-3">{{ trans('section.empty') }}</h2>
				</div>
			</div>
			<!-- Card -->
		@endif
	
	@include(layoutPaginate() , ["items" => $items])
@endsection

