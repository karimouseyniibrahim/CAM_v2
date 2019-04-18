<h2>{{ ucfirst(trans('admin.Latest'))}} {{ ucfirst('formation') }}</h2>
<hr>
@php $sidebarFormation = \App\Application\Model\Formation::orderBy("id", "DESC")->limit(5)->get(); @endphp
@if (count($sidebarFormation) > 0)
	@foreach ($sidebarFormation as $d)
			<div>
			<a href="{{ url($d->url) }}" ><p>{{ str_limit($d->libelle_lang , 20) }}</a></p > 
			<p><a href="{{ url($d->url) }}" ><i class="fa fa-eye" ></i ></a> <small ><i class="fa fa-calendar-o" ></i > {{ $d->created_at }}</small ></p > 
		<hr > 
		</div> 
	@endforeach
@endif
			