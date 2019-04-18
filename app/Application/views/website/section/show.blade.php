@extends(layoutExtend('website'))

@section('title')
    {{ trans('section.section') }} {{ trans('home.view') }}
@endsection

@section('content')
<a href="{{ url('section') }}" class="btn btn-danger btn-sm"><i class="fa fa-arrow-left"></i> {{ trans('website.Back') }}  </a>
<section class="text-center my-5">
	<!-- Grid row -->
	<div class="row pull-{{ getDirection() }}">
		<!-- Grid column -->
		<div class="col-lg-12 col-md-12 mb-0">
			<!-- Featured image -->
			<div class="view overlay rounded z-depth-2 mb-4">
				<img class="card-img-top mx-auto d-block" style=" height: 250px;  " src="{{ url('/'.env('UPLOAD_PATH').'/Section/'.$item->id.'/'.$item->image) }}" alt="{{ $item->name_lang }}">
				<a>
					<div class="mask rgba-white-slight"></div>
				</a>
			</div>

			<!-- Post title -->
			<h4 class="font-weight-bold mb-3"><strong>{{ $item->name_lang }}</strong></h4>
			<!-- Excerpt -->
			<p class="dark-grey-text">{!! $item->description_lang !!}</p>

			<hr/>

			@foreach ($data['locaux'] as $local)
				<!-- Grid row -->
				<div class="row text-left">
					<!-- Grid column -->
					<!--Image-->
					<div class="col-lg-3 mb-lg-0 mb-3">
						<div class="view overlay rounded z-depth-1">
							<img class="img-fluid" src="{{ url('/'.env('UPLOAD_PATH').'/Local/'.$local->id.'/'.$local->image) }}"  style=" height: 150px;  "  alt="{{ $local->name_lang }}">
							<a>
								<div class="mask rgba-white-slight"></div>
							</a>
						</div>
					</div>
					<!-- Grid column -->
					<!-- Grid column -->
					<div class="col-lg-9">
						<!-- Excerpt -->
						<!-- Grid row -->
						<div class="row mb-3">
								<div class="col-md-11 col-10">
									<h5 class="font-weight-bold">{{ $local->name_lang }}</h5>									
								</div>
						</div>
							<!-- Grid row -->
							<div class="form-row">
									<div class="form-group col-md-6">
											<strong class=" font-weight-bold">{{ trans('local.price') }}:</strong> {{ $local->price }} {{ trans('local.price_unit') }}
									</div>
									<div class="form-group col-md-6">
											<strong class="font-weight-bold">{{ trans('local.area') }}:</strong> {{ $local->area }} {{ trans('local.area_unit') }}
									</div>									
								</div>
						<div class="d-flex justify-content-between">
							
							<div class="col-11 text-truncate pl-0 mb-3">
								<p href="#!" class="dark-grey-text"> {!! str_limit($local->description_lang,50) !!}</p>
							</div>
							<a href="{{ url($local->url) }}"><i class="fas fa-angle-double-right"></i></a>
						</div>
						
					</div>
					<!-- Grid column -->

				</div>
				<hr/>
				<!-- Grid row -->		
			@endforeach

			<!-- Read more button -->
			<a class="btn btn-info btn-rounded btn-md" data-toggle="modal" data-target="#modalRequest">{{ trans('section.request') }}</a>
			
			</div>
			<!-- Grid column -->
		</div>
		<!-- Grid row -->
		@include("website.section.request",  ["sections" => $data['data'], "section_id" => $item->id,"local_id" => null])
	
</section>
@endsection


