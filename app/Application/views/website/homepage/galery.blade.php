<h2>{{ ucfirst(trans('admin.Random'))}} {{ ucfirst('galery') }}</h2>
<hr>
@php $sidebarGalery = \App\Application\Model\Galery::inRandomOrder()->limit(5)->get(); @endphp
		@if (count($sidebarGalery) > 0)
			@foreach ($sidebarGalery as $d)
				 <div>
					<h2 > {{ str_limit($d->name_lang , 50) }}</h2 > 
					<p> {{ str_limit($d->description_lang , 300) }}</p > 
					<p> {{ str_limit($d->images , 300) }}</p > 
					 <p><a href="{{ url("galery/".$d->id."/view") }}" ><i class="fa fa-eye" ></i ></a> <small ><i class="fa fa-calendar-o" ></i > {{ $d->created_at }}</small ></p > 
				<hr > 
				</div> 
			@endforeach
		@endif
			