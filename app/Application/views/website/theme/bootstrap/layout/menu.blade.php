<div class="top-container">
  <h1>Scroll Down</h1>
  <p>Scroll down to see the sticky effect.</p>
</div>
<header id="header" class="container header mb-5">
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark  theme-light-blue">
    
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
            <!-- Links -->
            <ul class="navbar-nav mr-auto">
                {!! website_menu('website') !!}
            </ul>
           
          <!-- Links -->
        </div>
        <!-- Collapsible content -->
    
      </div>
      <!-- Additional container -->
    
    </nav>
    <!--/.Navbar-->
    
    </header>