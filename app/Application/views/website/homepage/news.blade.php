<h2>{{ ucfirst(trans('admin.Random'))}} {{ ucfirst('news') }}</h2>
<hr>
@php $sidebarNews = \App\Application\Model\News::inRandomOrder()->limit(5)->get(); @endphp
		@if (count($sidebarNews) > 0)
			@foreach ($sidebarNews as $d)
				 <div>
					<h2 > {{ str_limit($d->title_lang , 50) }}</h2 > 
					<p> {{ str_limit($d->description_lang , 300) }}</p > 
					 <img src="{{ small($d->image)}}"  width = "80" />
					 <p><a href="{{ url("news/".$d->id."/view") }}" ><i class="fa fa-eye" ></i ></a> <small ><i class="fa fa-calendar-o" ></i > {{ $d->created_at }}</small ></p > 
				<hr > 
				</div> 
			@endforeach
		@endif
			