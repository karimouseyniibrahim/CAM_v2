@extends(layoutExtend('website'))

@section('title')
    {{ trans('news.news') }} {{ trans('home.view') }}
@endsection

@section('content')
	<a href="{{ url('news') }}" class="btn btn-danger btn-sm"><i class="fa fa-arrow-left"></i> {{ trans('website.Back') }}  </a>
	
	<div class="single-news mt-4 ">
		<!-- Image -->
		<div class="view view-cascade overlay z-depth-1-half mb-4 ">
			<img class="card-img-top mx-auto d-block" src="{{ url('/'.env('UPLOAD_PATH').'/news/'.$item->id.'/'.$item->image) }}" style="height:200px" >
		</div>		  
		<!-- Data -->
		<div class="news-data d-flex justify-content-between">
		</div>
		<!-- Excerpt -->
		<h3 class="font-weight-bold dark-grey-text mb-3 text-center"><a>{{ nl2br($item->title_lang) }}</a></h3>
		<p class="dark-grey-text">{!! nl2br($item->description_lang) !!}</p>

	</div>
	<!-- Featured news -->       

@endsection
