@extends(layoutExtend('website'))

@section('title')
    {{ trans('local.local') }} {{ trans('home.view') }}
@endsection

@section('content')
<a href="{{ url('section/'.$item->section_id.'/view') }}" class="btn btn-danger btn-sm"><i class="fa fa-arrow-left"></i> {{ trans('website.Back') }}  </a>
<section class="text-center my-5">
		
	<!-- Grid row -->
	<div class="row pull-{{ getDirection() }}">
		<!-- Grid column -->
		<div class="col-lg-12 col-md-12 mb-0">
			<!-- Featured image -->
			<div class="view overlay rounded z-depth-2 mb-4">
				<img class="img-fluid" src="{{ url('/'.env('UPLOAD_PATH').'/'.$item->image) }}" alt="{{ $item->name_lang }}">
				<a>
					<div class="mask rgba-white-slight"></div>
				</a>
			</div>
		  
		
			<!-- Post title -->
			<h4 class="font-weight-bold mb-3"><strong>{{ $item->name_lang }}</strong></h4>

			<!-- Price -->
			<a class="blue-text">
					<h6 class="font-weight-bold mb-3">{{ $item->price }} {{ trans('local.price_unit') }}</h6>
			</a>
			<a class="blue-text">
					<h6 class="font-weight-bold mb-3">{{ $item->area }} {{ trans('local.area_unit') }}</h6>
			</a>

			<!-- Post data -->
			<!-- Excerpt -->
			<p class="dark-grey-text">{!! $item->description_lang !!}</p>
			<!-- Read more button -->
			<a class="btn btn-info btn-rounded btn-md" data-toggle="modal" data-target="#modalRequest">{{ trans('local.request') }}</a>
		  
			</div>
			<!-- Grid column -->
		</div>
		<!-- Grid row -->
	
		@include("website.section.request", ["sections" => $data['data'], "section_id" => $item->section_id,'local_id'=>$item->id])
		@include(layoutMessage('website'))
</section>
@endsection


