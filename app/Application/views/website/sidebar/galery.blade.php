<h2>{{ ucfirst(trans('admin.Latest'))}} {{ ucfirst('galery') }}</h2>
<hr>
@php $sidebarGalery = \App\Application\Model\Galery::orderBy("id", "DESC")->limit(5)->get(); @endphp
		@if (count($sidebarGalery) > 0)
			@foreach ($sidebarGalery as $d)
				 <div>
					<a href="{{ url("galery/".$d->id."/view") }}" ><p>{{ str_limit($d->name_lang , 20) }}</a></p > 
					<p><a href="{{ url("galery/".$d->id."/view") }}" ><i class="fa fa-eye" ></i ></a> <small ><i class="fa fa-calendar-o" ></i > {{ $d->created_at }}</small ></p > 
				<hr > 
				</div> 
			@endforeach
		@endif
			