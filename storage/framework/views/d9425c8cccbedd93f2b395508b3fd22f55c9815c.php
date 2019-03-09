<?php $__env->startSection('content'); ?>

	<!--Card Director word-->
	<div class="card mb-4 wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
		<!--Card content-->
		<div class="card-body">
			<!-- Card Title -->
			<h2 class="card-title"><?php echo e(trans('website.director-word')); ?></h2>

			<blockquote class="blockquote">
				<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
				<footer class="blockquote-footer">Someone famous in
				</footer>
			</blockquote>
		</div>
	</div>
	<!--/.Card Director word-->

	<!--Latest News-->
	<h2 class="h1-responsive font-weight-bold text-center my-5"><?php echo e(trans('website.latest-news')); ?></h2>
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
			</div>
			<!-- Slides -->
		</div>
		<!-- Carousel Wrapper -->
	</section>
	<!--/.Latest News-->

	<!--Section Sites -->
	<section class="text-center my-5">
		<!-- Section heading -->
		<h2 class="h1-responsive font-weight-bold text-center my-5"><?php echo e(trans('website.site')); ?></h2>
		<!-- Section description -->
		<!-- Grid row -->
		<div class="row">
			<!-- Grid column -->
			<div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
				<!-- Site card -->
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
			</div>
			<!-- Grid column -->
		</div>
		<!-- Grid row -->
	</section>
	<!--/.Section Sites -->

	<!-- Section Formations -->
	<section class="team-section my-5">
		<!-- Section heading -->
		<h2 class="h1-responsive font-weight-bold text-center my-5"><?php echo e(trans('website.formation')); ?></h2>
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
		</div>
		<!-- Grid row-->
	  
	</section>
	<!--/.Section Formations -->

	<!-- Section Gallery -->
	<section class="team-section my-5">
		<!-- Section heading -->
		<h2 class="h1-responsive font-weight-bold text-center my-5"><?php echo e(trans('website.gallery')); ?></h2>
		<!-- Grid row-->
		<div class="row text-center text-md-left">
			<!-- Grid column -->
			<div class="col-md-12">

				<div id="mdb-lightbox-ui"></div>
				
				<div class="mdb-lightbox">
			
					<figure class="col-md-4">
					<a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(145).jpg" data-size="1600x1067">
						<img src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(145).jpg" alt="placeholder"
						class="img-fluid">
					</a>
					</figure>
			
					<figure class="col-md-4">
					<a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(150).jpg" data-size="1600x1067">
						<img src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(150).jpg" alt="placeholder"
						class="img-fluid" />
					</a>
					</figure>
			
					<figure class="col-md-4">
					<a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(152).jpg" data-size="1600x1067">
						<img src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(152).jpg" alt="placeholder"
						class="img-fluid" />
					</a>
					</figure>
			
					<figure class="col-md-4">
					<a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(42).jpg" data-size="1600x1067">
						<img src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(42).jpg" alt="placeholder"
						class="img-fluid" />
					</a>
					</figure>
			
					<figure class="col-md-4">
					<a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(151).jpg" data-size="1600x1067">
						<img src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(151).jpg" alt="placeholder"
						class="img-fluid" />
					</a>
					</figure>
			
					<figure class="col-md-4">
					<a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(40).jpg" data-size="1600x1067">
						<img src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(40).jpg" alt="placeholder"
						class="img-fluid" />
					</a>
					</figure>
			
					<figure class="col-md-4">
					<a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(148).jpg" data-size="1600x1067">
						<img src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(148).jpg" alt="placeholder"
						class="img-fluid" />
					</a>
					</figure>
			
					<figure class="col-md-4">
					<a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(147).jpg" data-size="1600x1067">
						<img src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(147).jpg" alt="placeholder"
						class="img-fluid" />
					</a>
					</figure>
			
					<figure class="col-md-4">
					<a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(149).jpg" data-size="1600x1067">
						<img src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(149).jpg" alt="placeholder"
						class="img-fluid" />
					</a>
					</figure>
			
				</div>
			
				</div>
		</div>
		<!-- Grid row-->
		
	</section>
	<!--/.Section Gallery -->
<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>
	<script>
		// MDB Lightbox Init
		$(function () {
			$("#mdb-lightbox-ui").load("website/mdb-lightbox-ui.html");
		});
	</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make(layoutExtend('website'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>