<h2>{{ ucfirst(trans('admin.Latest'))}} {{ ucfirst('section') }}</h2>
<hr>
@php $sidebarSection = \App\Application\Model\Section::orderBy("id", "DESC")->limit(5)->get(); @endphp
@if (count($sidebarSection) > 0)
	@foreach ($sidebarSection as $d)
			<div>
			<a href="{{ url($d->url) }}" ><p>{{ str_limit($d->name_lang , 20) }}</a></p > 
			<p><a href="{{ url($d->url) }}" ><i class="fa fa-eye" ></i ></a> <small ><i class="fa fa-calendar-o" ></i > {{ $d->created_at }}</small ></p > 
		<hr > 
		</div> 
	@endforeach
@endif
			