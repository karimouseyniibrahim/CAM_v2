<header>

    <!--Navbar-->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark  theme-light-blue">
    
      <!-- Additional container -->
      <div class="container">
      <div class="navbar-header">
            <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
            <a href="javascript:void(0);" class="bars" style="display: block;"></a>
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ getSetting('siteTitle') }}
                 
                <img class="expanding-hidden" src="{{ url('/'.env('UPLOAD_PATH').'/'.logo()) }}" alt=""/>
                
            </a>
        </div>
        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse"
          aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    
        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="navbar-collapse">
     
           <ul class="nav navbar-nav nav-flex-icons ml-auto">
            {!! website_menu('website') !!}
            <!-- @php $pages = page(); @endphp
            @foreach($pages as $page)
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('page/'.$page->id.'/view') }}">{{ getDefaultValueKey($page->title) }}</a>
                </li>
            @endforeach -->
            <li class="nav-item">
                <a class="nav-link" href="{{ url('contact') }}">{{ trans('website.Contact Us') }}</a>
            </li>
            @if (Auth::check())
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <img src="{{ url('/admin') }}/images/user.png" class="rounded-circle z-depth-0" alt="avatar image" height="35">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-primary" aria-labelledby="navbarDropdownMenuLink-333">
                        <a class="dropdown-item" href="{{ url('/admin/home') }}">{{ trans('website.admin') }}</a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ trans('website.logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </div>
                </li>
            @endif
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="langDropdown" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">{{ getCurrentLang() }}</a>
                <div class="dropdown-menu dropdown-primary" aria-labelledby="langDropdown">
                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <a class="dropdown-item" rel="alternate" hreflang="{{$localeCode}}" href="{{LaravelLocalization::getLocalizedURL($localeCode) }}">
                            {{ $properties['native'] }}
                        </a>
                    @endforeach
                </div>
            </li>
          </ul>
          <!-- Links -->
        </div>
        <!-- Collapsible content -->
    
      </div>
      <!-- Additional container -->
    
    </nav>
    <!--/.Navbar-->
    
    </header>