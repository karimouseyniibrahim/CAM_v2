<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>{{ config('app.name', 'Laraflat') }} | @yield('title')</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <!-- Bootstrap Core Css -->
    {{ Html::Style('website/css/css/bootstrap.min.css') }}
    <!-- Waves Effect Css -->
    {{ Html::Style('website/css/css/mdb.min.css') }}

    {{ Html::Style('website/css/themes/all-themes.css') }}


 @if(getDir() == 'rtl')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.4.0/css/bootstrap-rtl.css">
    @endif
    {{ Html::style('css/sweetalert.css') }}
    {{ Html::Style('website/css/custom.css') }}
</head>

<body class="theme-light-blue">

<header>

<!--Navbar-->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark  theme-light-blue">

  <!-- Additional container -->
  <div class="container">
  <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars" style="display: block;"></a>
                <a class="navbar-brand" href="widgets/../../index.html">CAM - MATERIAL DESIGN</a>
            </div>
        <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
      aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="navbar-collapse">
 
       <ul class="nav navbar-nav nav-flex-icons ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>

        <!-- Dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">Dropdown</a>
          <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
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

    <!--Main layout-->

    <main class="mt-5 pt-2">
        <div class="container">

            <div class="card card-cascade wider reverse my-4 pb-5">

                <!--Card image-->
                <div class="view view-cascade overlay wow fadeIn" style=" height: 250px;  ">
                    <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(132).jpg" class="img-fluid">
                    <a href="#!">
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>
                <!--/Card image-->

                <!--Card content-->
                <div class="card-body card-body-cascade text-center wow fadeIn" data-wow-delay="0.2s">
                    <!--Title-->
                    <h4 class="card-title"><strong>My adventure</strong></h4>
                    <h5 class="blue-text"><strong>Photography</strong></h5>

                    <p class="card-text">Sed ut perspiciatis unde omnis iste natus sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
                    </p>

                        <a class="btn btn-primary btn-lg">Primary button</a>
                        <a class="btn btn-secondary btn-lg">Secondary button</a>
                        <a class="btn btn-default btn-lg">Default button</a>

                </div>
                <!--/.Card content-->

            </div> 
            
        </div>


        <div class="container">

            <!--Section: Post-->
            <section class="mt-4">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-8 mb-4">

                        <!--Featured Image-->
                        <div class="card mb-4 wow fadeIn" style="visibility: visible; animation-name: fadeIn;">

                            <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(144).jpg" class="img-fluid" alt="">

                        </div>
                        <!--/.Featured Image-->

                        <!--Card-->
                        <div class="card mb-4 wow fadeIn" style="visibility: visible; animation-name: fadeIn;">

                            <!--Card content-->
                            <div class="card-body text-center">

                                <p class="h5 my-4">What is MDB?</p>

                                <p>MDB is world's most popular Material Design framework for building responsive, mobile-first
                                    websites and apps.</p>

                                <h5 class="my-4">
                                    <strong>MDB - trusted by 400 000 + developers &amp; designers</strong>
                                </h5>

                                <!-- Logo carousel -->
                                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" data-interval="1800">
                                    <div class="carousel-inner">
                                        <!-- First slide -->
                                        <div class="carousel-item active">
                                            <!--Grid row-->
                                            <div class="row">

                                                <!--First column-->
                                                <div class="col-lg-3 col-md-6 d-flex align-items-center justify-content-center">
                                                    <img src="https://mdbootstrap.com/img/logo/brands/nike.png" class="img-fluid px-4" alt="Nike - logo" style="max-height: 40px">
                                                </div>
                                                <!--/First column-->

                                                <!--Second column-->
                                                <div class="col-lg-3 col-md-6 d-flex align-items-center justify-content-center">
                                                    <img src="https://mdbootstrap.com/img/logo/brands/amazon.png" class="img-fluid px-4" alt="Amazon - logo" style="max-height: 40px">
                                                </div>
                                                <!--/Second column-->

                                                <!--Third column-->
                                                <div class="col-lg-3 col-md-6 d-flex align-items-center justify-content-center">
                                                    <img src="https://mdbootstrap.com/img/logo/brands/sony.png" class="img-fluid px-4" alt="Sony - logo" style="max-height: 40px">
                                                </div>
                                                <!--/Third column-->

                                                <!--Fourth column-->
                                                <div class="col-lg-3 col-md-6 d-flex align-items-center justify-content-center">
                                                    <img src="https://mdbootstrap.com/img/logo/brands/samsung.png" class="img-fluid px-4" alt="Samsung - logo" style="max-height: 40px">
                                                </div>
                                                <!--/Fourth column-->

                                            </div>
                                            <!--/Grid row-->
                                        </div>
                                        <!-- First slide -->

                                        <!-- Second slide -->
                                        <div class="carousel-item">
                                            <!--Grid row-->
                                            <div class="row">

                                                <!--First column-->
                                                <div class="col-lg-3 col-md-6 d-flex align-items-center justify-content-center">
                                                    <img src="https://mdbootstrap.com/img/logo/brands/airbus.png" class="img-fluid px-4" alt="Airbus - logo" style="max-height: 40px">
                                                </div>
                                                <!--/First column-->

                                                <!--Second column-->
                                                <div class="col-lg-3 col-md-6 d-flex align-items-center justify-content-center">
                                                    <img src="https://mdbootstrap.com/img/logo/brands/yahoo.png" class="img-fluid px-4" alt="Yahoo - logo" style="max-height: 40px">
                                                </div>
                                                <!--/Second column-->

                                                <!--Third column-->
                                                <div class="col-lg-3 col-md-6 d-flex align-items-center justify-content-center">
                                                    <img src="https://mdbootstrap.com/img/logo/brands/deloitte.png" class="img-fluid px-4" alt="Deloitte - logo" style="max-height: 40px">
                                                </div>
                                                <!--/Third column-->

                                                <!--Fourth column-->
                                                <div class="col-lg-3 col-md-6 d-flex align-items-center justify-content-center">
                                                    <img src="https://mdbootstrap.com/img/logo/brands/ge.png" class="img-fluid px-4" alt="GE - logo" style="max-height: 40px">
                                                </div>
                                                <!--/Fourth column-->

                                            </div>
                                            <!--/Grid row-->
                                        </div>
                                        <!-- Second slide -->

                                        <!-- Third slide -->
                                        <div class="carousel-item">
                                            <!--Grid row-->
                                            <div class="row">

                                                <!--First column-->
                                                <div class="col-lg-3 col-md-6 d-flex align-items-center justify-content-center">
                                                    <img src="https://mdbootstrap.com/img/logo/brands/kpmg.png" class="img-fluid px-4" alt="KPMG - logo" style="max-height: 40px">
                                                </div>
                                                <!--/First column-->

                                                <!--Second column-->
                                                <div class="col-lg-3 col-md-6 d-flex align-items-center justify-content-center">
                                                    <img src="https://mdbootstrap.com/img/logo/brands/unity.png" class="img-fluid px-4" alt="Unity - logo" style="max-height: 40px">
                                                </div>
                                                <!--/Second column-->

                                                <!--Third column-->
                                                <div class="col-lg-3 col-md-6 d-flex align-items-center justify-content-center">
                                                    <img src="https://mdbootstrap.com/img/logo/brands/ikea.png" class="img-fluid px-4" alt="Ikea - logo" style="max-height: 40px">
                                                </div>
                                                <!--/Third column-->

                                                <!--Fourth column-->
                                                <div class="col-lg-3 col-md-6 d-flex align-items-center justify-content-center">
                                                    <img src="https://mdbootstrap.com/img/logo/brands/aegon.png" class="img-fluid px-4" alt="Aegon - logo" style="max-height: 40px">
                                                </div>
                                                <!--/Fourth column-->

                                            </div>
                                            <!--/Grid row-->
                                        </div>
                                        <!-- Third slide -->
                                    </div>
                                </div>
                                <!-- Logo carousel -->

                                <hr>

                                <a class="btn btn-outline-primary waves-effect waves-light" href="https://mdbootstrap.com/docs/jquery/getting-started/download/" role="button" target="_blank">MDB free download<i class="fas fa-download ml-2"></i></a>

                            </div>

                        </div>
                        <!--/.Card-->

                        <!--Card-->
                        <div class="card mb-4 wow fadeIn" style="visibility: visible; animation-name: fadeIn;">

                            <!--Card content-->
                            <div class="card-body">

                                <p class="h5 my-4">That's a very long heading </p>


                                <blockquote class="blockquote">
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                    <footer class="blockquote-footer">Someone famous in
                                        <cite title="Source Title">Source Title</cite>
                                    </footer>
                                </blockquote>

                                <p class="h5 my-4">That's a very long heading </p>

                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae, ut rerum deserunt corporis
                                    ducimus at, deleniti ea alias dolor reprehenderit sit vel. Incidunt id illum doloribus,
                                    consequuntur maiores sed eligendi.</p>

                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae, ut rerum deserunt corporis
                                    ducimus at, deleniti ea alias dolor reprehenderit sit vel. Incidunt id illum doloribus,
                                    consequuntur maiores sed eligendi.</p>

                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae, ut rerum deserunt corporis
                                    ducimus at, deleniti ea alias dolor reprehenderit sit vel. Incidunt id illum doloribus,
                                    consequuntur maiores sed eligendi.</p>

                            </div>

                        </div>
                        <!--/.Card-->

                        <!--Card-->
                        <div class="card mb-4 wow fadeIn" style="visibility: visible; animation-name: fadeIn;">

                            <div class="card-header font-weight-bold">
                                <span>About author</span>
                                <span class="pull-right">
                                    <a href="">
                                        <i class="fab fa-facebook-f mr-2"></i>
                                    </a>
                                    <a href="">
                                        <i class="fab fa-twitter mr-2"></i>
                                    </a>
                                    <a href="">
                                        <i class="fab fa-instagram mr-2"></i>
                                    </a>
                                    <a href="">
                                        <i class="fab fa-linkedin-in mr-2"></i>
                                    </a>
                                </span>
                            </div>

                            <!--Card content-->
                            <div class="card-body">

                                <div class="media d-block d-md-flex mt-3">
                                    <img class="d-flex mb-3 mx-auto z-depth-1" src="https://mdbootstrap.com/img/Photos/Avatars/img (30).jpg" alt="Generic placeholder image" style="width: 100px;">
                                    <div class="media-body text-center text-md-left ml-md-3 ml-0">
                                        <h5 class="mt-0 font-weight-bold">Caroline Horwitz
                                        </h5>
                                        At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti
                                        quos dolores et quas molestias excepturi sint occaecati cupiditate non provident,
                                        similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum
                                        fuga.
                                    </div>
                                </div>

                            </div>

                        </div>
                        <!--/.Card-->
                        <section class="contact-section my-5">

  <!-- Form with header -->
  <div class="card">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-lg-8">

        <div class="card-body form">

          <!-- Header -->
          <h3 class="mt-4"><i class="fas fa-envelope pr-2"></i>Write to us:</h3>

          <!-- Grid row -->
          <div class="row">

            <!-- Grid column -->
            <div class="col-md-6">
              <div class="md-form mb-0">
                <input type="text" id="form-contact-name" class="form-control">
                <label for="form-contact-name" class="">Your name</label>
              </div>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-6">
              <div class="md-form mb-0">
                <input type="text" id="form-contact-email" class="form-control">
                <label for="form-contact-email" class="">Your email</label>
              </div>
            </div>
            <!-- Grid column -->

          </div>
          <!-- Grid row -->

          <!-- Grid row -->
          <div class="row">

            <!-- Grid column -->
            <div class="col-md-6">
              <div class="md-form mb-0">
                <input type="text" id="form-contact-phone" class="form-control">
                <label for="form-contact-phone" class="">Your phone</label>
              </div>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-6">
              <div class="md-form mb-0">
                <input type="text" id="form-contact-company" class="form-control">
                <label for="form-contact-company" class="">Your company</label>
              </div>
            </div>
            <!-- Grid column -->

          </div>
          <!-- Grid row -->

          <!-- Grid row -->
          <div class="row">

            <!-- Grid column -->
            <div class="col-md-12">
              <div class="md-form mb-0">
                <textarea type="text" id="form-contact-message" class="form-control md-textarea" rows="3"></textarea>
                <label for="form-contact-message">Your message</label>
                <a class="btn-floating btn-lg blue">
                  <i class="far fa-paper-plane"></i>
                </a>
              </div>
            </div>
            <!-- Grid column -->

          </div>
          <!-- Grid row -->

        </div>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-lg-4">

        <div class="card-body contact text-center h-100 white-text">

          <h3 class="my-4 pb-2">Contact information</h3>
          <ul class="text-lg-left list-unstyled ml-4">
            <li>
              <p><i class="fas fa-map-marker-alt pr-2"></i>New York, 94126, USA</p>
            </li>
            <li>
              <p><i class="fas fa-phone pr-2"></i>+ 01 234 567 89</p>
            </li>
            <li>
              <p><i class="fas fa-envelope pr-2"></i>contact@example.com</p>
            </li>
          </ul>
          <hr class="hr-light my-4">
          <ul class="list-inline text-center list-unstyled">
            <li class="list-inline-item">
              <a class="p-2 fa-lg tw-ic">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="p-2 fa-lg li-ic">
                <i class="fab fa-linkedin-in"> </i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="p-2 fa-lg ins-ic">
                <i class="fab fa-instagram"> </i>
              </a>
            </li>
          </ul>

        </div>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Form with header -->

</section>


<section class="text-center my-5">

  <!-- Section heading -->
  <h2 class="h1-responsive font-weight-bold text-center my-5">Our bestsellers</h2>
  <!-- Section description -->
   
  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
      <!-- Collection card -->
      <div class="card collection-card z-depth-1-half">
        <!-- Card image -->
        <div class="view zoom">
          <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/5.jpg" class="img-fluid"
            alt="">
          <div class="stripe dark">
            <a>
              <p>Red trousers
                <i class="fas fa-angle-right"></i>
              </p>
            </a>
          </div>
        </div>
        <!-- Card image -->
      </div>
      <!-- Collection card -->
    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
      <!-- Collection card -->
      <div class="card collection-card z-depth-1-half">
        <!-- Card image -->
        <div class="view zoom">
          <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/8.jpg" class="img-fluid"
            alt="">
          <div class="stripe light">
            <a>
              <p>Sweatshirt
                <i class="fas fa-angle-right"></i>
              </p>
            </a>
          </div>
        </div>
        <!-- Card image -->
      </div>
      <!-- Collection card -->
    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-3 col-md-6 mb-md-0 mb-4">
      <!-- Collection card -->
      <div class="card collection-card z-depth-1-half">
        <!-- Card image -->
        <div class="view zoom">
          <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/9.jpg" class="img-fluid"
            alt="">
          <div class="stripe dark">
            <a>
              <p>Accessories
                <i class="fas fa-angle-right"></i>
              </p>
            </a>
          </div>
        </div>
        <!-- Card image -->
      </div>
      <!-- Collection card -->
    </div>
    <!-- Grid column -->

    <!-- Fourth column -->
    <div class="col-lg-3 col-md-6">
      <!-- Collection card -->
      <div class="card collection-card z-depth-1-half">
        <!-- Card image -->
        <div class="view zoom">
          <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/7.jpg" class="img-fluid"
            alt="">
          <div class="stripe light">
            <a>
              <p>Sweatshirt
                <i class="fas fa-angle-right"></i>
              </p>
            </a>
          </div>
        </div>
        <!-- Card image -->
      </div>
      <!-- Collection card -->
    </div>
    <!-- Fourth column -->

  </div>
  <!-- Grid row -->


<!-- Section: Products v.4 -->
</section>
<!-- Section: Team v.3 -->
<section class="team-section my-5">

  <!-- Section heading -->
  <h2 class="h1-responsive font-weight-bold text-center my-5">Formation</h2>
  <!-- Grid row-->
  <div class="row text-center text-md-left">

    <!-- Grid column -->
<div class="col-md-4 mb-2 clearfix d-none d-md-block">
          <!-- Card -->
          <div class="card card-cascade narrower card-ecommerce">
            <!-- Card image -->
            <div class="view view-cascade overlay">
              <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(22).jpg" class="card-img-top"
                alt="sample photo">
              <a>
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>
            <!-- Card image -->
            <!-- Card content -->
            <div class="card-body card-body-cascade text-center">
              <!-- Category & Title -->
              <a href="" class="text-muted">
                <h5>Jeans</h5>
              </a>
              <!-- Card footer -->
              <div class="card-footer px-1">
                <span class="float-left">99$</span>
                <span class="float-right">
                  <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Look">
                    <i class="fas fa-eye ml-3"></i>
                  </a>
                  <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist">
                    <i class="fas fa-heart ml-3"></i>
                  </a>
                </span>
              </div>
            </div>
            <!-- Card content -->
          </div>
          <!-- Card -->
        </div>
        <div class="col-md-4 mb-2 clearfix d-none d-md-block">
          <!-- Card -->
          <div class="card card-cascade narrower card-ecommerce">
            <!-- Card image -->
            <div class="view view-cascade overlay">
              <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(22).jpg" class="card-img-top"
                alt="sample photo">
              <a>
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>
            <!-- Card image -->
            <!-- Card content -->
            <div class="card-body card-body-cascade text-center">
              <!-- Category & Title -->
              <a href="" class="text-muted">
                <h5>Jeans</h5>
              </a>
              <!-- Card footer -->
              <div class="card-footer px-1">
                <span class="float-left">99$</span>
                <span class="float-right">
                  <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Look">
                    <i class="fas fa-eye ml-3"></i>
                  </a>
                  <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist">
                    <i class="fas fa-heart ml-3"></i>
                  </a>
                </span>
              </div>
            </div>
            <!-- Card content -->
          </div>
          <!-- Card -->
        </div>
        <div class="col-md-4 mb-2 clearfix d-none d-md-block">
          <!-- Card -->
          <div class="card card-cascade narrower card-ecommerce">
            <!-- Card image -->
            <div class="view view-cascade overlay">
              <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(22).jpg" class="card-img-top"
                alt="sample photo">
              <a>
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>
            <!-- Card image -->
            <!-- Card content -->
            <div class="card-body card-body-cascade text-center">
              <!-- Category & Title -->
              <a href="" class="text-muted">
                <h5>Jeans</h5>
              </a>
              <!-- Card footer -->
              <div class="card-footer px-1">
                <span class="float-left">99$</span>
                <span class="float-right">
                  <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Look">
                    <i class="fas fa-eye ml-3"></i>
                  </a>
                  <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist">
                    <i class="fas fa-heart ml-3"></i>
                  </a>
                </span>
              </div>
            </div>
            <!-- Card content -->
          </div>
          <!-- Card -->
        </div>

  </div>
  <!-- Grid row-->

</section>
<h2 class="h1-responsive font-weight-bold text-center my-5">Recent posts</h2>
<section class="text-center my-5">
  <!-- Carousel Wrapper -->
  <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">
    <!-- Controls -->
 
    <!-- Controls -->
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li class="primary-color active" data-target="#multi-item-example" data-slide-to="0"></li>
      <li class="primary-color" data-target="#multi-item-example" data-slide-to="1"></li> 
    </ol>
    <!-- Indicators -->
    <!-- Slides -->
    <div class="carousel-inner" role="listbox">
      <!-- First slide -->
      <div class="carousel-item active">
          <!-- Section: Blog v.1 -->
    <div class="jumbotron text-center hoverable p-4">

        <!-- Grid row -->
            <div class="row">
      <!-- Grid column -->
      <div class="col-md-4 offset-md-1 mx-3 my-3">
        <!-- Featured image -->
        <div class="view overlay">
          <img src="https://mdbootstrap.com/img/Photos/Others/laptop-sm.jpg" class="img-fluid" alt="Sample image for first version of blog listing">
          <a>
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
                <div class="col-md-7 text-md-left ml-3 mt-3">

      <!-- Excerpt -->
      <a href="#!" class="green-text">
        <h6 class="h6 pb-1"><i class="fas fa-desktop pr-1"></i> Work</h6>
      </a>

      <h4 class="h4 mb-4">This is title of the news</h4>

      <p class="font-weight-normal">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque, totam
        rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
        dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur.</p>
      <p class="font-weight-normal">by <a><strong>Carine Fox</strong></a>, 19/08/2016</p>

      <a class="btn btn-indigo btn-md">Read more</a>

                </div>
    <!-- Grid column -->
            </div>
  <!-- Grid row -->

        </div> 
      </div>
      <!-- First slide -->
      <!-- Second slide -->
      <div class="carousel-item">
        <!-- News jumbotron -->
        <div class="jumbotron text-center hoverable p-4">

        <!-- Grid row -->
            <div class="row">
      <!-- Grid column -->
      <div class="col-md-4 offset-md-1 mx-3 my-3">
        <!-- Featured image -->
        <div class="view overlay">
          <img src="https://mdbootstrap.com/img/Photos/Others/laptop-sm.jpg" class="img-fluid" alt="Sample image for first version of blog listing">
          <a>
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
                <div class="col-md-7 text-md-left ml-3 mt-3">

      <!-- Excerpt -->
      <a href="#!" class="green-text">
        <h6 class="h6 pb-1"><i class="fas fa-desktop pr-1"></i> Work</h6>
      </a>

      <h4 class="h4 mb-4">This is title of the news</h4>

      <p class="font-weight-normal">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque, totam
        rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
        dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur.</p>
      <p class="font-weight-normal">by <a><strong>Carine Fox</strong></a>, 19/08/2016</p>

      <a class="btn btn-indigo btn-md">Read more</a>

                </div>
    <!-- Grid column -->
            </div>
  <!-- Grid row -->
        </div>         
      </div>
      <!-- Second slide -->
 
    </div>
    <!-- Slides -->
  </div>
  <!-- Carousel Wrapper -->
</section>

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-4 mb-4">

                        <!--Card: Jumbotron-->
                        <div class="card blue-gradient mb-4 wow fadeIn" style="visibility: visible; animation-name: fadeIn;">

                            <!-- Content -->
                            <div class="card-body text-white text-center">

                                <h4 class="mb-4">
                                    <strong>Learn Bootstrap 4 with MDB</strong>
                                </h4>
                                <p>
                                    <strong>Best &amp; free guide of responsive web design</strong>
                                </p>
                                <p class="mb-4">
                                    <strong>The most comprehensive tutorial for the Bootstrap 4. Loved by over 500 000 users. Video
                                        and written versions available. Create your own, stunning website.</strong>
                                </p>
                                <a target="_blank" href="https://mdbootstrap.com/education/bootstrap/" class="btn btn-outline-white btn-md waves-effect waves-light">Start free tutorial
                                    <i class="fas fa-graduation-cap ml-2"></i>
                                </a>

                            </div>
                            <!-- Content -->
                        </div>
                        <!--Card: Jumbotron-->

                        <!--Card : Dynamic content wrapper-->
                        <div class="card mb-4 text-center wow fadeIn" style="visibility: visible; animation-name: fadeIn;">

                            <div class="card-header">Do you want to get informed about new articles?</div>

                            <!--Card content-->
                            <div class="card-body">

                                <!-- Default form login -->
                                <form>

                                    <!-- Default input email -->
                                    <label for="defaultFormEmailEx" class="grey-text">Your email</label>
                                    <input type="email" id="defaultFormLoginEmailEx" class="form-control">

                                    <br>

                                    <!-- Default input password -->
                                    <label for="defaultFormNameEx" class="grey-text">Your name</label>
                                    <input type="text" id="defaultFormNameEx" class="form-control">

                                    <div class="text-center mt-4">
                                        <button class="btn btn-info btn-md waves-effect waves-light" type="submit">Sign up</button>
                                    </div>
                                </form>
                                <!-- Default form login -->

                            </div>

                        </div>
                        <!--/.Card : Dynamic content wrapper-->

    

                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

            </section>
            <!--Section: Post-->

        </div>
    </main>
    <!--Main layout-->

    <!-- Footer -->
   <footer class="page-footer font-small  light-blue text-center text-md-left pt-4">

        <!--Footer Links-->
        <div class="container-fluid">
            <div class="row">

                <!--First column-->
                <div class="col-md-3">
                    <h5 class="text-uppercase font-weight-bold mb-4">Footer Content</h5>
                    <p>Here you can use rows and columns here to organize your footer content.</p>
                </div>
                <!--/.First column-->

                <hr class="w-100 clearfix d-md-none">

                <!--Second column-->
                <div class="col-md-2 mx-auto">
                    <h5 class="text-uppercase font-weight-bold mb-4">Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#!">Link 1</a></li>
                        <li><a href="#!">Link 2</a></li>
                        <li><a href="#!">Link 3</a></li>
                        <li><a href="#!">Link 4</a></li>
                    </ul>
                </div>
                <!--/.Second column-->

                <hr class="w-100 clearfix d-md-none">

                <!--Third column-->
                <div class="col-md-2 mx-auto">
                    <h5 class="text-uppercase font-weight-bold mb-4">Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#!">Link 1</a></li>
                        <li><a href="#!">Link 2</a></li>
                        <li><a href="#!">Link 3</a></li>
                        <li><a href="#!">Link 4</a></li>
                    </ul>
                </div>
                <!--/.Third column-->

                <hr class="w-100 clearfix d-md-none">

                <!--Fourth column-->
                <div class="col-md-2 mx-auto">
                    <h5 class="text-uppercase font-weight-bold mb-4">Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#!">Link 1</a></li>
                        <li><a href="#!">Link 2</a></li>
                        <li><a href="#!">Link 3</a></li>
                        <li><a href="#!">Link 4</a></li>
                    </ul>
                </div>
                <!--/.Fourth column-->

            </div>
        </div>
        <!--/.Footer Links-->

        <hr>

        <!--Call to action-->
        <div class="call-to-action text-center my-4">
            <ul class="list-unstyled list-inline">
                <li class="list-inline-item">
                    <h5>Register for free</h5>
                </li>
                <li class="list-inline-item"><a href="" class="btn btn-primary">Sign up!</a></li>
            </ul>
        </div>
        <!--/.Call to action-->
 

        <!--Copyright-->
        <div class="footer-copyright py-3 text-center">
            <div class="container-fluid">
               

            </div>
        </div>
        <!--/.Copyright-->

    </footer>
    <!-- Footer -->


    <!-- Jquery Core Js -->
    {{ Html::script('website/css/js/jquery-3.3.1.min.js') }}
    <!-- Bootstrap Core Js -->
    {{ Html::script('website/css/js/popper.min.js') }}
    <!-- Select Plugin Js -->
    {{ Html::script('website/css/js/bootstrap.min.js') }}
    <!-- Slimscroll Plugin Js -->
    {{ Html::script('website/css/js/mdb.min.js') }}

    <script>

        // SideNav Initialization
        $(".button-collapse").sideNav();
        
        new WOW().init();
    
    </script>


</body>
</html>
