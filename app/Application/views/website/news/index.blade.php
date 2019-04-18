@extends(layoutExtend('website'))

@section('title')
     {{ trans('news.news') }} {{ trans('home.control') }}
@endsection

@section('content')
	<!-- Section: Our News -->
	<section>
		<!-- Section heading -->
		<h2 class="h1-responsive font-weight-bold text-center">{{ trans('website.news') }}</h2>
		<hr class="my-5" />
		@if (count($items) > 0) 
			@foreach ($items as $d) 
				<!-- Grid row -->
				<div class="row">
					<!-- Grid column -->
					<div class="col-lg-5">
						<!-- Featured image -->
						<div class="view overlay rounded z-depth-2 mb-lg-0 mb-4">
							<img class="img-fluid" src="{{ url('/'.env('UPLOAD_PATH').'/news/'.$d->id.'/'.$d->image) }}" alt="{{$d->title_lang}}">
							<a>
								<div class="mask rgba-white-slight"></div>
							</a>
						</div>
					</div>
					<!-- Grid column -->
					<!-- Grid column -->
					<div class="col-lg-7">
						<!-- Post title -->
						<h3 class="font-weight-bold mb-3"><strong>{{$d->title_lang}}</strong></h3>
						<!-- Excerpt -->
						<p>{!! str_limit($d->description_lang, 150) !!}</p>
						<!-- Read more button -->
						<a class="btn btn-primary btn-md" href="{{ url($d->url) }}">{{ trans('website.read-more') }}</a>
					</div>
					<!-- Grid column -->
				</div>
				<!-- Grid row -->
				<hr class="my-5" />
			@endforeach
			@include(layoutPaginate() , ["items" => $items])
		@else
			<a href="{{ url('/') }}" class="btn btn-danger btn-sm"><i class="fa fa-arrow-left"></i> {{ trans('website.Back') }}  </a>

			<!-- Card -->
			<div class="card card-cascade">
				<!-- Card image -->
				<div class="view view-cascade gradient-card-header blue-gradient">
				<!-- Title -->
				<h2 class="card-header-title mb-3">{{ trans('news.empty') }}</h2>
				</div>
			</div>
			<!-- Card -->
		@endif
	</section>
@endsection
