{{ dd($menus)}}
@foreach ($menus as $menu)
    @if (isset($menu['sub']))
		<a class="nav-link" href="{{ url($menu['link']) }}">{{ getDefaultValueKey($menu['name']) }}</a>
	@endif
	@if ($key == 'sub')
		<!-- <a class="nav-link" href="{{ url($menu['link']) }}">{{ getDefaultValueKey($menu['name']) }}</a> -->
	@endif
@endforeach
