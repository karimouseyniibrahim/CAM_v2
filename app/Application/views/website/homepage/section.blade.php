<h2>{{ ucfirst(trans('admin.Random'))}} {{ ucfirst('section') }}</h2>
<hr>
@php $sidebarSection = \App\Application\Model\Section::inRandomOrder()->limit(5)->get(); @endphp
		@if (count($sidebarSection) > 0)
			@foreach ($sidebarSection as $d)
				 <div>
					<h2 > {{ str_limit($d->name_lang , 50) }}</h2 > 
					<p> {{ str_limit($d->description_lang , 300) }}</p > 
					 <img src="{{ small($d->image)}}"  width = "80" />
					 <p><a href="{{ url("section/".$d->id."/view") }}" ><i class="fa fa-eye" ></i ></a> <small ><i class="fa fa-calendar-o" ></i > {{ $d->created_at }}</small ></p > 
				<hr > 
				</div> 
			@endforeach
		@endif
			