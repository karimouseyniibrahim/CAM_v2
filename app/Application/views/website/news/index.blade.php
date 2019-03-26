@extends(layoutExtend('website'))

@section('title')
     {{ trans('news.news') }} {{ trans('home.control') }}
@endsection

@section('content')
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
					<a class="btn btn-primary btn-md" href="{{ url('news/'.$d->id.'/view') }}">Read more</a>
				</div>
				<!-- Grid column -->
			</div>
			<!-- Grid row -->
			<hr class="my-5">

		@endforeach
	@endif
@endsection
