@if (isset($menus['sub']))
	<li class="nav-item dropdown mega-dropdown {{ $menus['item']->active ?? '' }}">
		<a class="nav-link dropdown-toggle text-uppercase" data-toggle="dropdown"
		aria-haspopup="true" aria-expanded="false">{{ getDefaultValueKey($menus['item']['name']) }}
		<span class="sr-only">(current)</span>
		</a>
		<div class="dropdown-menu mega-menu v-1 z-depth-1 white py-5 px-3" aria-labelledby="navbarDropdownMenuLink2">
			<div class="row">
				@foreach ($menus['sub'] as $item)
				<div class="col-md-6 col-xl-4 sub-menu mb-xl-0 mb-4">
              		<h6 class="sub-title text-uppercase font-weight-bold white-text">
					  	<a href="{{ url($item['link']) }}">{{ getDefaultValueKey($item['name']) }}</a>
					</h6>
				</div>
				@endforeach
			</div>
		</div>
	</li>
@endif
