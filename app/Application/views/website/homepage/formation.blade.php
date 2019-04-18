<h2>{{ ucfirst(trans('admin.Random'))}} {{ ucfirst('formation') }}</h2>
<hr>
@php $sidebarFormation = \App\Application\Model\Formation::inRandomOrder()->limit(5)->get(); @endphp
@if (count($sidebarFormation) > 0)
	@foreach ($sidebarFormation as $d)
			<div>
			<h2 > {{ str_limit($d->libelle_lang , 50) }}</h2 > 
			<p> {{ str_limit($d->description_lang , 300) }}</p > 
				<p><a href="{{ url($d->url) }}" ><i class="fa fa-eye" ></i ></a> <small ><i class="fa fa-calendar-o" ></i > {{ $d->created_at }}</small ></p > 
		<hr > 
		</div> 
	@endforeach
@endif 