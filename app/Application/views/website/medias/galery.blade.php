@extends(layoutExtend('website'))

@section('title')
     {{ trans('medias.medias') }} {{ trans('home.control') }}
@endsection
@section('style')
	{{ Html::style('/website/css/lightgallery.min.css') }}
	{{ Html::style('/website/css/animation.css') }}
@endsection

@section('content')
<h2 class="h1-responsive font-weight-bold text-center my-5"> {{trans('medias.galery')}}</h2>
<div class="alert alert-warning" role="alert">
  {{trans('medias.message-alert')}}
</div>

<div class="container mt-40">
            <div class="row mt-30">
			@if (count($items) > 0) 
			@foreach ($items as $d)
                <div class="col-md-6 col-sm-6">
                    <div class="box3">
						@php $url =  isset($d->filesmedia) ? $d->filesmedia[0]->src : "/files/82.jpg" @endphp

                        <img src="{{$url}}" style="height:300px">
                        <div class="box-content">
                            <h3 class="title">{{str_limit($d->name_lang , 70) }}</h3>
                            
                            <div class="description d">
								{!! str_limit($d->description_lang , 150) !!}
                            </div>
                            <ul class="icon">
                                
								<a class="btn btn-primary btn-rounded " id="{{$d->id}}" onClick="viewlightbox(this,{{$d->id}},{{$d->filesmedia}})"><i class="fas fa-clone left"></i> {{trans("medias.views")}}</a>
								<a class="btn btn-primary btn-rounded " onClick="modal('{{$d->description_lang}}')"><i class="fas fa-clone left"></i> {{trans('medias.details')}}</a>
                            </ul>
                        </div>
                    </div>
                </div>
			@endforeach
			@endif     
            </div>
        </div>


@endsection

@section('script')
	@include('sweet::alert')
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	{{ Html::script('/website/js/prettify.js') }}
	{{ Html::script('/website/js/transition.js') }}
	{{ Html::script('/website/js/collapse.js') }}
	{{ Html::script('/website/js/lightgallery.js') }}
	{{ Html::script('/website/js/lg-zoom.js') }}
	{{ Html::script('/website/js/demos.js') }}
	
	@include('website.viewbox')
@endsection