<!DOCTYPE html>
<html lang="en">
<head>
	<!--===== Meta Tag =====-->
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="description" content="Fresher - Real Estate Template">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="business, property, directory, listing, real estate, Real estate template, realtor, developer, apartment, broker, real estate agency, map, company, agent, rent house">
	<meta name="author" content="root">
	<!--CSs Links
	==================================================================-->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/color.css" id="color-change">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/layerslider.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/jquery.fancybox.min.css">
	<link rel="stylesheet" href="fonts/flaticon/flaticon.css">
	<!--====================================================
	Typography links 
	Import Google Fonts
	======================================================-->
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
  	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
  	
  	<!-- Title -->
	<title>Fresher - Real Estate Template</title>
	
	<!-- Favicon Icon -->
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <style>
      .social-media-1 li a{
          line-height:27px !important;
      }
      .social-media-1.d-flex.color-black-a.float-right li a {
	color: #666666;
}
.property-content.bg-white.pt-30.pb-50.px-30 {
	background-color: #fff !important;
}
.property-cost.color-white.list-half.w-100 li {
	background-color: #fd9834 ;
}
.sidebar-widget.bg-white.mt-50.shadow.py-40.px-30.wow.slideInUp.animated {
	background-color: #ffff !important;
}
.sidebar-widget.bg-white.mt-50.shadow.py-40.px-30.wow.slideInDown.animated {
	background-color: #ffff !important;
}
.property-content.bg-white.pt-30.pb-50 {
	background-color: #fff !important;
}
/*.property-cost li:last-child::before {*/
/*	border: 26px solid transparent;*/
/*}*/
.property-cost li:last-child::before {

	left: -49px;
	top: 0;
}
.nav-link.active {
	background-color: #fd9834 !important;
}
.bg-white.shadow.py-80 {
	background-color: #fff !important;
}
  </style>
</head>
<body>
<!-- Start Back to top
=========================================================================-->
<div id="scroll" style="display: none;"><i class="fa fa-angle-up"></i></div>
<!-- End Back to top
=========================================================================-->
<!-- Start Header
===================================================================-->
<?php include 'header.php';?>
<!-- End Header
==================================================================-->
<!-- Page Banner Start
==================================================================-->
<!--<div class="page-banner overlay-black" style="padding: 150px 0">-->
<!--	<div class="container h-100">-->
<!--		<div class="row h-100 align-items-center">-->
<!--			<div class="col-lg-12">-->
<!--				<h1 class="page-banner-title color-primary">Single Property</h1>-->
<!--				<div class="text-area w-50 mt-15 color-white">-->
<!--					<p>Porttitor luctus est sit lacinia non praesent aptent hymenaeos taciti tortor. Sociosq platea porta facilisis vitae dictum bibendun tellus ante fusce vulputate dolor lorem vulputate hac quisque diam etiam.</p>-->
<!--				</div>-->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->
<!--</div>-->
<!--<div class="bg-secondary">-->
<!--	<div class="container">-->
<!--		<div class="row">-->
<!--			<div class="col-md-12 col-lg-12">-->
<!--				<nav aria-label="breadcrumb">-->
<!--				  <ol class="breadcrumb m-0 py-15 px-0 bg-transparent hover-white-primary">-->
<!--				    <li class="breadcrumb-item"><a href="#">Home</a></li>-->
<!--				    <li class="breadcrumb-item"><a href="#">Listing</a></li>-->
<!--				    <li class="breadcrumb-item"><a href="#">Property</a></li>-->
<!--				    <li class="breadcrumb-item active" aria-current="page">Single Property</li>-->
<!--				  </ol>-->
<!--				</nav>-->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->
<!--</div>-->
<!-- Page Banner End
==================================================================-->
<!-- Single Property Start
==================================================================-->
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-12">
				<div class="mb-30">
					<div class="row">
						<div class="col-md-12 col-lg-8 wow slideInRight animated">
							<div class="single-property position-relative">
								<span class="bg-secondary color-white z-index-1 px-15 py-5 mr-20">For Sale</span>
								<strong class="color-primary f-20">$ 530,000</strong>
								<h3 class="color-secondary mt-15">Diamond Manor Apartment</h3>
								<span class="address icon-primary f-14 mt-5"><i class="fa fa-map-marker"></i>40 Tower Avenue, Melbourne, Australia.</span>
								<ul class="property-features icon-primary d-table f-14 mt-15">
									<li><i class="flaticon-fit-screen"></i>300 sqft</li>
									<li><i class="flaticon-hotel"></i>5 Bedrooms</li>
									<li><i class="flaticon-bathtub"></i>4 Bathrooms</li>
									<li><i class="flaticon-garage"></i>2 Garage</li>
								</ul>
							</div>
						</div>
						<div class="col-md-12 col-lg-4 wow slideInLeft animated">
							<div class="thumbnail-content float-right">
								<ul class="hover-option icon-white z-index-1 position-relative mt-md-30" style="opacity: 1; top: 0; right: 0;">
									<li>
										<a data-toggle="tooltip" data-placement="top" title="" href="#" data-original-title="Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
									</li>
									<li>
										<a data-toggle="tooltip" data-placement="top" title="" href="#" data-original-title="Compare"><i class="fa fa-random" aria-hidden="true"></i></a>
									</li>
									<li>
										<a data-toggle="tooltip" data-placement="top" title="" href="#" data-original-title="Print" onclick="window.print()"><i class="fa fa-print" aria-hidden="true"></i></a>
									</li>
									<li>
										<a data-toggle="tooltip" data-placement="top" title="" href="#" data-original-title="Share"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
									</li>
								</ul>
								<!-- Nav tabs -->
								<ul class="nav nav-tabs border-0 float-right navbar-tab-view mt-15 sm-mt-0" role="tablist" style="line-height: 20px;">
								  <li class="nav-item">
								    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><i class="fa fa-file-image-o" aria-hidden="true"></i></a>
								  </li>
								  <li class="nav-item">
								    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><i class="flaticon-location"></i></a>
								  </li>
								  <li class="nav-item">
								    <a class="nav-link" id="messages-tab" data-toggle="tab" href="#messages" role="tab" aria-controls="messages" aria-selected="false"><i class="flaticon-street-view"></i></a>
								  </li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid wow slideInUp animated">
		<div class="row d-flow-root">
			<div class="product-slider">
				<div class="tab-content">
				  	<div class="tab-pane active position-relative" id="home" role="tabpanel" aria-labelledby="home-tab">
					  	<div class="service-images owl-carousel slide-1 dot-on-slider">
							<img src="images/property/33.jpg" alt="image">
							<img src="images/property/34.jpg" alt="image">
							<img src="images/property/32.jpg" alt="image">
						</div>
				  	</div>
				  	<div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
				  		<div id="map" class="canvas" style="height: 600px"></div>
				  	</div>
				  	<div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">
				  		<div class="mapimageview"><iframe src="https://www.google.com/maps/embed?pb=!4v1599036304356!6m8!1m7!1sqKj5Ao7cdLkLmIAAieQWgw!2m2!1d-37.78266616894371!2d145.0232453320753!3f99.89449149743196!4f-13.159907315623357!5f0.7820865974627469" height="600" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
				  	</div>
			  	</div> 	
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-8">
				<div class="text-area mt-50 wow slideInLeft animated">
					<h3 class="color-secondary line-bottom pb-15 mb-20">Description</h3>
					<p>Aliquam gravida hendrerit name enim phasellus molestie magnis vitae vivamus odio mattis lacinia. Tincidunt mollis Volutpat mi nostra volutpat quam consectetuer fames pal fermentum luctus phasellus augue placerat turpis facilisi tellus volutpat sodales arcu sociis erat, euismod curabitur natoque mollis, proin senectus porta ante. Nam habitant suscipit vehicula curae magnis eros velit nonummy curae non penatibus pretium fringilla felis augue iaculis cum cubilia non, augue turpis ullamcorper adipiscin class sociis potenti suspendisse enim tortor augue suspendisse pretium magnis fusce fusce mi accumsa. Aliquet ut volutpat diam inceptos. Turpis ultrices odio, dapibus Blandit. Sollicitudin auctor euismod Iaculis parturient.</p>
					<p class="mt-15">Fames curabitur aenean maecenas tortor odio nonummy bibendum lorem consequat posuere turpis parturie lorem integer erat iaculis mi velit enim potent penatibus hac pede. Morbi vehicula luctus sem vulputate tortor tincidunt sociis luctus cursus dolor dictum suscipit, auctor odio sociis et euismod lacus.</p>
					<div class="agent-more-details color-secondary-a">
						<a class="color-secondary position-relative plus-minus my-15 pl-15 d-block" data-toggle="collapse" href="#multiCollapse1" role="button" aria-expanded="false" aria-controls="multiCollapse1">More Details</a>
						<div class="collapse" id="multiCollapse1">
							<p>Ullamcorper dui commodo eleifend at pellentesque molestie, curabitur metus natoque felis erat consectetue cum accumsan rutrum dolor sodales semper auctor aptent metus nibh. Risus est etiam Ornar feugiat curabit sapien quam lacus, dapibus placerat hendrerit netus aenean ipsum quam consequat vivamus curabitur preta mauris, volutpat erat cum lorem, suscipit natoque eleifend sapien magnis bibendum cras lectus velit natoque in laoreet magna tempor neque. Venenatis mollis fringilla ultricies lorem mus ante mus parturient sapien nisi est leo conubia id libero massa.</p>
							<p class="mt-15">Fames curabitur aenean maecenas tortor odio nonummy bibendum lorem consequat posuere turpis parturie lorem integer erat iaculis mi velit enim potent penatibus hac pede. Morbi vehicula luctus sem vulputate tortor tincidunt sociis luctus cursus dolor dictum suscipit, auctor odio sociis et euismod lacus.</p>
							<p class="my-15">Aliquam gravida hendrerit name enim phasellus molestie magnis vitae vivamus odio mattis lacinia. Tincidunt mollis Volutpat mi nostra volutpat quam consectetuer fames pal fermentum luctus phasellus augue placerat turpis facilisi tellus volutpat sodales arcu sociis erat, euismod curabitur natoque mollis, proin senectus porta ante. Nam habitant suscipit vehicula curae magnis eros velit nonummy curae non penatibus pretium fringilla felis augue iaculis cum cubilia non, augue turpis ullamcorper adipiscin class sociis potenti suspendisse enim tortor augue suspendisse pretium magnis fusce fusce mi accumsa. Aliquet ut volutpat diam inceptos. Turpis ultrices odio, dapibus Blandit. Sollicitudin auctor euismod Iaculis parturient.</p>
						</div>
					</div>
				</div>
				<div class="border-top-1-gray py-30 wow slideInRight animated">
					<h3 class="color-secondary line-bottom pb-15 mb-20">Property Details</h3>
					<div class="row">
						<div class="col-md-12 col-lg-6">
							<ul class="list-by-tag">
								<li>Bedrooms : <span>5</span></li>
								<li>Orienten : <span>East</span></li>
								<li>Bathrooms : <span>4</span></li>
								<li>Type : <span>Private House</span></li>
								<li>Livingrooms : <span>3</span></li>
							</ul>
						</div>
						<div class="col-md-12 col-lg-6">
							<ul class="list-by-tag hover-secondery-primary">
								<li>Garages : <span>2</span></li>
								<li>Rooms : <span>12</span></li>
								<li>Area : <span> 3000 Sqft</span></li>
								<li>Plot size : <span>300x200x300</span></li>
								<li>Kitchens : <span>2</span></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="border-top-1-gray py-30 wow slideInLeft animated">
					<h3 class="color-secondary line-bottom pb-15 mb-20">Amenities</h3>
					<div class="row">
						<div class="col-md-12 col-lg-12">
							<ul class="single-property-amenities icon-primary my-20">
								<li><i class="fa fa-check-square" aria-hidden="true"></i> Air Conditioning</li>
								<li><i class="fa fa-check-square" aria-hidden="true"></i> Lawn</li>
								<li><i class="fa fa-check-square" aria-hidden="true"></i> Barbeque</li>
								<li><i class="fa fa-check-square" aria-hidden="true"></i> Swimming Pool</li>
								<li><i class="fa fa-check-square" aria-hidden="true"></i> TV Cable</li>
								<li><i class="fa fa-check-square" aria-hidden="true"></i> Washer</li>
								<li><i class="fa fa-check-square" aria-hidden="true"></i> WiFi</li>
								<li><i class="fa fa-check-square" aria-hidden="true"></i> Gym</li>
								<li><i class="fa fa-check-square" aria-hidden="true"></i> Park</li>
								<li><i class="fa fa-check-square" aria-hidden="true"></i> Outdoor Shower</li>
								<li><i class="fa fa-check-square" aria-hidden="true"></i> Refrigerator</li>
								<li><i class="fa fa-check-square" aria-hidden="true"></i> Dryer</li>
								<li><i class="fa fa-check-square" aria-hidden="true"></i> Laundry</li>
								<li><i class="fa fa-check-square" aria-hidden="true"></i> Sauna</li>
								<li><i class="fa fa-check-square" aria-hidden="true"></i> Microwave</li>
								<li><i class="fa fa-check-square" aria-hidden="true"></i> Lawn</li>
								<li><i class="fa fa-check-square" aria-hidden="true"></i> Window Covering</li>
								<li><i class="fa fa-check-square" aria-hidden="true"></i> Home Theater</li>
								<li><i class="fa fa-check-square" aria-hidden="true"></i> Garden</li>
								<li><i class="fa fa-check-square" aria-hidden="true"></i> Security System</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="border-top-1-gray py-30 wow slideInUp animated">
					<h3 class="color-secondary line-bottom pb-15 mb-20">Property Video</h3>
					<div class="property-video bg-img-3 position-relative">
						<a data-fancybox="" class="video-popup xy-center bg-primary color-white" href="https://www.youtube.com/watch?v=8NXLyGiShjs"><i class="fa fa-play" aria-hidden="true"></i></a>
						<div class="loader xy-center">
							<div class="loader-inner ball-scale-multiple">
								<div></div>
								<div></div>
								<div></div>
							</div>
						</div>
					</div>
				</div>
				<div class="border-top-1-gray py-30 wow slideInDown animated">
					<h3 class="color-secondary line-bottom pb-15 mb-20">Floor Plan</h3>
					<div id="accordion" class="accordion-style-two">
					  	<div class="card border-0 mb-10">
						    <div class="st-top border-0 d-inline-block position-relative card-header p-0 bg-light" id="headingone">
						        <button class="d-block border-0 bg-gray px-30 py-15 w-100 text-left" data-toggle="collapse" data-target="#collapseone" aria-expanded="true" aria-controls="collapseone">
						          First Floor
						        </button>
						    </div>

						    <div id="collapseone" class="collapse show" aria-labelledby="headingone" data-parent="#accordion">
					      		<div class="card-body">
							      	<ul class="d-inline-block py-20 px-30 list-left">
		                                <li><span class="color-secondary">Bed: </span>170 sqft</li>
		                                <li><span class="color-secondary">Kitchen: </span>105 sqft</li>
		                                <li><span class="color-secondary">Dining: </span>150 sqft</li>
		                                <li><span class="color-secondary">Bath: </span>40 sqft</li>
		                                <li><span class="color-secondary">Storage: </span>125 sqft</li>
		                            </ul>
					         		<img src="images/others/plan-1.png" alt="">    
						      	</div>
						    </div>
					  	</div>
					  	<div class="card border-0 mb-10">
						    <div class="st-top border-0 d-inline-block position-relative card-header p-0 bg-light" id="headingtwo">
						        <button class="d-block border-0 bg-gray px-30 py-15 w-100 text-left collapsed" data-toggle="collapse" data-target="#collapsetwo" aria-expanded="false" aria-controls="collapsetwo">
						          Second Floor
						        </button>
						    </div>
						    <div id="collapsetwo" class="collapse" aria-labelledby="headingtwo" data-parent="#accordion">
						      <div class="card-body">
						      	<ul class="d-inline-block py-20 px-30 list-left">
	                                <li><span class="color-secondary">Bed: </span>170 sqft</li>
	                                <li><span class="color-secondary">Kitchen: </span>105 sqft</li>
	                                <li><span class="color-secondary">Dining: </span>150 sqft</li>
	                                <li><span class="color-secondary">Bath: </span>40 sqft</li>
	                                <li><span class="color-secondary">Storage: </span>125 sqft</li>
	                            </ul>
						        <img src="images/others/plan-1.png" alt="">
						      </div>
						    </div>
					  	</div>
					  	<div class="card border-0 mb-10">
						    <div class="st-top border-0 d-inline-block position-relative card-header p-0 bg-light" id="headingthree">
						        <button class="d-block border-0 bg-gray px-30 py-15 w-100 text-left collapsed" data-toggle="collapse" data-target="#collapsethree" aria-expanded="false" aria-controls="collapsethree">
						          Third Floor
						        </button>
						    </div>
						    <div id="collapsethree" class="collapse" aria-labelledby="headingthree" data-parent="#accordion">
						      <div class="card-body">
						      	<ul class="d-inline-block py-20 px-30 list-left">
	                                <li><span class="color-secondary">Bed: </span>170 sqft</li>
	                                <li><span class="color-secondary">Kitchen: </span>105 sqft</li>
	                                <li><span class="color-secondary">Dining: </span>150 sqft</li>
	                                <li><span class="color-secondary">Bath: </span>40 sqft</li>
	                                <li><span class="color-secondary">Storage: </span>125 sqft</li>
	                            </ul>
						        <img src="images/others/plan-1.png" alt="">
						      </div>
						    </div>
					  	</div>
					</div>
				</div>
				<div class="border-top-1-gray py-30 wow slideInRight animated">
					<h3 class="color-secondary line-bottom pb-15 mb-20">What's Nearby</h3>
					<h5 class="color-dark">Education</h5>
					<hr>
					<div class="single-review d-table w-100">
						<p>Eladia's Kids (1.10 miles)</p>
						<div class="rating float-right">
	                    	<i class="fa fa-star"></i>
	                    	<i class="fa fa-star"></i>
	                    	<i class="fa fa-star"></i>
	                    	<i class="fa fa-star"></i>
	                    	<i class="fa fa-star"></i>
	                    	<span>895 reviews</span>
	                    </div>
					</div>
					<div class="single-review mt-10 d-table w-100">
						<p>Fredrika "Freddy" Keefer (2.31 miles)</p>
						<div class="rating float-right">
	                    	<i class="fa fa-star"></i>
	                    	<i class="fa fa-star"></i>
	                    	<i class="fa fa-star"></i>
	                    	<i class="fa fa-star"></i>
	                    	<i class="fa fa-star-half-o"></i>
	                    	<span>527 reviews</span>
	                    </div>
					</div>
					<div class="single-review mt-10 d-table w-100">
						<p>Brooklyn Brainery (4.21 miles)</p>
						<div class="rating float-right">
	                    	<i class="fa fa-star"></i>
	                    	<i class="fa fa-star"></i>
	                    	<i class="fa fa-star"></i>
	                    	<i class="fa fa-star-half-o"></i>
	                    	<i class="fa fa-star-o"></i>
	                    	<span>321 reviews</span>
	                    </div>
					</div>

					<h5 class="color-dark mt-20">Food</h5>
					<hr>
					<div class="single-review d-table w-100">
						<p>Brae, Birregurra, VIC. (0.57 miles)</p>
						<div class="rating float-right">
	                    	<i class="fa fa-star"></i>
	                    	<i class="fa fa-star"></i>
	                    	<i class="fa fa-star"></i>
	                    	<i class="fa fa-star"></i>
	                    	<i class="fa fa-star"></i>
	                    	<span>1087 reviews</span>
	                    </div>
					</div>
					<div class="single-review mt-10 d-table w-100">
						<p>Vue de Monde, VIC. (1.32 miles)</p>
						<div class="rating float-right">
	                    	<i class="fa fa-star"></i>
	                    	<i class="fa fa-star"></i>
	                    	<i class="fa fa-star"></i>
	                    	<i class="fa fa-star"></i>
	                    	<i class="fa fa-star"></i>
	                    	<span>2707 reviews</span>
	                    </div>
					</div>
					<div class="single-review mt-10 d-table w-100">
						<p>Cutler & Co, VIC. (2.21 miles)</p>
						<div class="rating float-right">
	                    	<i class="fa fa-star"></i>
	                    	<i class="fa fa-star"></i>
	                    	<i class="fa fa-star"></i>
	                    	<i class="fa fa-star"></i>
	                    	<i class="fa fa-star-half-o"></i>
	                    	<span>972 reviews</span>
	                    </div>
					</div>

					<h5 class="color-dark mt-20">Health & Medical</h5>
					<hr>
					<div class="single-review d-table w-100">
						<p>Bethesda Hospital (0.57 miles)</p>
						<div class="rating float-right">
	                    	<i class="fa fa-star"></i>
	                    	<i class="fa fa-star"></i>
	                    	<i class="fa fa-star"></i>
	                    	<i class="fa fa-star"></i>
	                    	<i class="fa fa-star"></i>
	                    	<span>2710 reviews</span>
	                    </div>
					</div>
					<div class="single-review mt-10 d-table w-100">
						<p>Attadale Hospital (1.32 miles)</p>
						<div class="rating float-right">
	                    	<i class="fa fa-star"></i>
	                    	<i class="fa fa-star"></i>
	                    	<i class="fa fa-star"></i>
	                    	<i class="fa fa-star"></i>
	                    	<i class="fa fa-star"></i>
	                    	<span>2707 reviews</span>
	                    </div>
					</div>
					<div class="single-review mt-10 d-table w-100">
						<p>Bentley Hospital (2.21 miles)</p>
						<div class="rating float-right">
	                    	<i class="fa fa-star"></i>
	                    	<i class="fa fa-star"></i>
	                    	<i class="fa fa-star"></i>
	                    	<i class="fa fa-star"></i>
	                    	<i class="fa fa-star"></i>
	                    	<span>5907 reviews</span>
	                    </div>
					</div>
				</div>
				<div class="border-top-1-gray py-30 wow slideInLeft animated">
					<div class="row">
						<div class="col-md-12 col-lg-6">
							<h3 class="color-secondary line-bottom pb-15 mb-20">Page statistics</h3>
						</div>
						<div class="col-md-12 col-lg-6">
							<!-- Nav tabs -->
							<ul class="nav nav-tabs nav-link-view border-0 float-right" role="tablist" style="line-height: 20px;">
							  	<li class="nav-item">
							    	<a class="nav-link active" id="hours-tab" data-toggle="tab" href="#hours" role="tab" aria-controls="hours" aria-selected="true">Hours</a>
							  	</li>
							  	<li class="nav-item">
								    <a class="nav-link" id="weekly-tab" data-toggle="tab" href="#weekly" role="tab" aria-controls="weekly" aria-selected="false">Weekly</a>
							  	</li>
							  	<li class="nav-item">
								    <a class="nav-link" id="monthly-tab" data-toggle="tab" href="#monthly" role="tab" aria-controls="monthly" aria-selected="false">Monthly</a>
							  	</li>
							</ul>
						</div>
					</div>
					<div class="tab-content">
					  	<div class="tab-pane active" id="hours" role="tabpanel" aria-labelledby="hours-tab">
						  	<div class="app">
							  <line-chart></line-chart>
							</div>
					  	</div>
					  	<div class="tab-pane" id="weekly" role="tabpanel" aria-labelledby="weekly-tab">
					  		<div class="round-chart d-table mx-auto position-relative" style="width: 300px">
							  <div class="xy-center" style="top: 42%">Sepetmber</div>
							  <canvas id="myChart" width="300" height="300"></canvas>
							</div>

					  	</div>
					  	<div class="tab-pane" id="monthly" role="tabpanel" aria-labelledby="monthly-tab">
					  		 <canvas id="chart" width="100" height="50"></canvas>
					  	</div>
				  	</div>
				</div>
				<div class="border-top-1-gray py-30 wow slideInDown animated">
					<h3 class="color-secondary line-bottom pb-15 mb-20">Give Your Review</h3>
					<form action="#" method="post" class="form-rating">
						<div class="row">
							<div class="form-group col-md-12 rating-animation">
								<span>Move Mouse for Rating</span>
							  	<div class="star-rating pt-10">
								  	<select id="star-rating" name="rating" autocomplete="off">
									  	<option value="Strongly Disagree">Very Bad Review</option>
									  	<option value="Disagree">Bad Review</option>											  
									  	<option value="Neither Agree or Disagree" selected="selected">Good Review</option>
									  	<option value="Agree">Very Good Quality</option>
									  	<option value="Strongly Agree">Excellent Quality</option>
								  	</select>
							  	</div>
							</div>
							<div class="form-group col-md-12 col-lg-6">
								<input type="text" class="form-control bg-gray" placeholder="Your Name*">
							</div>
							<div class="form-group col-md-12 col-lg-6">
								<input type="email" class="form-control bg-gray" placeholder="Email Address*">
							</div>
							<div class="form-group col-md-12 col-lg-12">
								<textarea class="form-control bg-gray" rows="7" placeholder="Type Comments..."></textarea>
							</div>
							<div class="col-lg-12"><button type="submit" class="btn btn-secondary">Send</button></div>
						</div>
					</form>
				</div>
				<div class="border-top-1-gray pt-30 wow slideInUp animated">
					<div class="comments-area">
						<h3 class="color-secondary line-bottom pb-15 mb-20">User Reviews</h3>
						<div class="comment">
							<div class="float-left text-center">
								<div class="user-image"><img src="images/testimonial/1.jpg" class="rounded-circle" alt="images"></div>
								<a class="btn-link mt-15" href="#"><i>Replay</i></a>
							</div>
							<div class="comment-content d-table">
								<div class="meta d-inline-block mb-15">
									<h5 class="color-dark">Dwyane Clark</h5>
									<div class="user-rating">
										<ul>
											<li class="active"></li>
											<li class="active"></li>
											<li class="active"></li>
											<li class="active"></li>
											<li class="deactive"></li>
										</ul>
									</div>
								</div>
								<div class="float-right f-14">Posted On 10th September, 2020</div>
								<p>Purus litora accumsan platea convallis consequat congue iaculis primis consectetse rutrum nisl senectus molestie luctus. Facilisis varius arcu lacinia. Dignissim cursus imperdie nostra dui semper commodo sociosq.</p>
							</div>
						</div>
						<div class="comment mt-50 ml-50">
							<div class="float-left text-center">
								<div class="user-image"><img src="images/testimonial/2.jpg" class="rounded-circle" alt="images"></div>
								<a class="btn-link mt-15" href="#"><i>Replay</i></a>
							</div>
							<div class="comment-content d-table">
								<div class="meta d-inline-block mb-15">
									<h5 class="color-dark">Elizabeth Maria</h5>
									<div class="user-rating">
										<ul>
											<li class="active"></li>
											<li class="active"></li>
											<li class="active"></li>
											<li class="active"></li>
											<li class="deactive"></li>
										</ul>
									</div>
								</div>
								<div class="float-right f-14">Posted On 5th September, 2020</div>
								<p>Purus litora accumsan platea convallis consequat congue iaculis primis consectetse rutrum nisl senectus molestie luctus. Facilisis varius arcu lacinia. Dignissim cursus imperdie nostra dui semper commodo sociosq.</p>
							</div>
						</div>
						<div class="comment mt-50">
							<div class="float-left text-center">
								<div class="user-image"><img src="images/testimonial/3.jpg" class="rounded-circle" alt="images"></div>
								<a class="btn-link mt-15" href="#"><i>Replay</i></a>
							</div>
							<div class="comment-content d-table">
								<div class="meta d-inline-block mb-15">
									<h5 class="color-dark">Jennifer Susan</h5>
									<div class="user-rating">
										<ul>
											<li class="active"></li>
											<li class="active"></li>
											<li class="active"></li>
											<li class="active"></li>
											<li class="deactive"></li>
										</ul>
									</div>
								</div>
								<div class="float-right f-14">Posted On 24th August, 2020</div>
								<p>Purus litora accumsan platea convallis consequat congue iaculis primis consectetse rutrum nisl senectus molestie luctus. Facilisis varius arcu lacinia. Dignissim cursus imperdie nostra dui semper commodo sociosq.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-12 col-lg-4">
				<div class="sidebar-widget bg-white mt-50 shadow py-40 px-30 wow slideInUp animated">
					<h3 class="color-secondary line-bottom pb-15 mb-20">Contact an Agent</h3>
					<div class="d-flex">
						<div class="contact-agent-image mr-20 float-left"><img src="images/team/1.jpg" class="rounded-circle" alt="images"></div>
	                    <div class="align-self-center color-gray">
	                    	<h6 class="d-block mb-1 w-100 color-secondary">Andrew Gunservice</h6>
	                    	<p>fresher@info.com</p>
	                    	<p> (012) 234 567 890</p>
	                    </div>
					</div>
					<form action="#" method="post" class="mt-30">
						<div class="row">
							<div class="form-group col-md-12">
								<input type="text" class="form-control bg-gray" placeholder="Your Name">
							</div>
							<div class="form-group col-md-12">
								<input type="email" class="form-control bg-gray" placeholder="Email Address">
							</div>
							<div class="form-group col-md-12">
								<input type="text" class="form-control bg-gray" placeholder="Phone">
							</div>
							<div class="form-group col-md-12">
								<textarea class="form-control bg-gray" rows="4" placeholder="Type Your Massage"></textarea>
							</div>
							<div class="col-lg-12"><button type="submit" class="btn btn-primary w-100">Send Message</button></div>
						</div>
					</form>
				</div>
				<div class="sidebar-widget bg-white mt-50 shadow py-40 px-30 wow slideInDown animated">
					<h3 class="color-secondary line-bottom pb-15 mb-20">Latest Properties</h3>
					<div class="owl-carousel slide-1 owl-dots-none">
						<div class="property-item">
							<div class="property-img position-relative overflow-hidden overlay-secondary-4">
								<img src="images/property/5.jpg" alt="image">
								<span class="thum-category category-1 bg-secondary color-white z-index-1 px-15">New</span>
								<ul class="hover-option position-absolute icon-white z-index-1">
									<li>
										<a data-toggle="tooltip" data-placement="top" title="Wishlist" href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
									</li>
									<li>
										<a data-toggle="tooltip" data-placement="top" title="Compare" href="#"><i class="fa fa-random" aria-hidden="true"></i></a>
									</li>
								</ul>
								<div class="meta-property icon-primary color-white z-index-1">
									<ul>
										<li><i class="fa fa-calendar"></i> 06/27/2020</li>
										<li><i class="fa fa-user"></i> James Bond</li>
									</ul>
								</div>
							</div>
							<div class="property-content bg-white pt-30 pb-50">
								<a class="color-secondary mb-5" href="single-property.html"><h5>Park Avanue Apartment.</h5></a>
								<span class="address icon-primary f-14"><i class="fa fa-map-marker"></i>Urbis Building Cathedral Gardens, UK</span>
								<ul class="about-property list-half icon-primary d-table f-14 mb-30 mt-20">
									<li><i class="flaticon-fit-screen"></i>200 sqft</li>
									<li><i class="flaticon-hotel"></i>6 Bedrooms</li>
									<li><i class="flaticon-bathtub"></i>4 Bathrooms</li>
									<li><i class="flaticon-garage"></i>1 Garage</li>
								</ul>
								<div class="property-cost color-white list-half w-100">
									<ul>
										<li>For Rent</li>
										<li>1.2k <sub>/Month</sub></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="property-item">
							<div class="property-img position-relative overflow-hidden overlay-secondary-4">
								<img src="images/property/1.jpg" alt="image">
								<span class="thum-category category-1 bg-secondary color-white z-index-1 px-15">New</span>
								<ul class="hover-option position-absolute icon-white z-index-1">
									<li>
										<a data-toggle="tooltip" data-placement="top" title="Wishlist" href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
									</li>
									<li>
										<a data-toggle="tooltip" data-placement="top" title="Compare" href="#"><i class="fa fa-random" aria-hidden="true"></i></a>
									</li>
								</ul>
								<div class="meta-property icon-primary color-white z-index-1">
									<ul>
										<li><i class="fa fa-calendar"></i> 06/27/2020</li>
										<li><i class="fa fa-user"></i> James Bond</li>
									</ul>
								</div>
							</div>
							<div class="property-content bg-white pt-30 pb-50">
								<a class="color-secondary mb-5" href="single-property.html"><h5>Villa on Grand Avenue</h5></a>
								<span class="address icon-primary f-14"><i class="fa fa-map-marker"></i>366 Glenmore Ave, Brooklyn, USA.</span>
								<ul class="about-property list-half icon-primary d-table f-14 mb-30 mt-20">
									<li><i class="flaticon-fit-screen"></i>200 sqft</li>
									<li><i class="flaticon-hotel"></i>3 Bedrooms</li>
									<li><i class="flaticon-bathtub"></i>2 Bathrooms</li>
									<li><i class="flaticon-garage"></i>1 Garage</li>
								</ul>
								<div class="property-cost color-white list-half w-100">
									<ul>
										<li>For Rent</li>
										<li>1.8k <sub>/Month</sub></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="property-item">
							<div class="property-img position-relative overflow-hidden overlay-secondary-4">
								<img src="images/property/4.jpg" alt="image">
								<span class="thum-category category-1 bg-secondary color-white z-index-1 px-15">New</span>
								<ul class="hover-option position-absolute icon-white z-index-1">
									<li>
										<a data-toggle="tooltip" data-placement="top" title="Wishlist" href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
									</li>
									<li>
										<a data-toggle="tooltip" data-placement="top" title="Compare" href="#"><i class="fa fa-random" aria-hidden="true"></i></a>
									</li>
								</ul>
								<div class="meta-property icon-primary color-white z-index-1">
									<ul>
										<li><i class="fa fa-calendar"></i> 06/27/2020</li>
										<li><i class="fa fa-user"></i> James Bond</li>
									</ul>
								</div>
							</div>
							<div class="property-content bg-white pt-30 pb-50">
								<a class="color-secondary mb-5" href="single-property.html"><h5>Park Avanue Apartment.</h5></a>
								<span class="address icon-primary f-14"><i class="fa fa-map-marker"></i>11-13 Whitehall, London, UK</span>
								<ul class="about-property list-half icon-primary d-table f-14 mb-30 mt-20">
									<li><i class="flaticon-fit-screen"></i>200 sqft</li>
									<li><i class="flaticon-hotel"></i>3 Bedrooms</li>
									<li><i class="flaticon-bathtub"></i>2 Bathrooms</li>
									<li><i class="flaticon-garage"></i>1 Garage</li>
								</ul>
								<div class="property-cost color-white list-half w-100">
									<ul>
										<li>For Rent</li>
										<li>1.8k <sub>/Month</sub></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="sidebar-widget bg-white mt-50 shadow py-40 px-30 wow slideInUp animated">
					<h3 class="color-secondary line-bottom pb-15 mb-20">Mortgage Calculator</h3>
					<ul class="list-by-tag">
						<li>Total Amount <span>Your payment</span></li>
						<li><strong class="color-primary f-20">$ 530,000</strong> <span class="color-primary">$ 1,458</span></li>
					</ul>
					<ul class="list-by-tag mt-20">
						<li>Total cost of loan <span>$ 610,718</span></li>
						<li>Total interest paid <span>$ 80,718</span></li>
						<li>Payment <span>Monthly</span></li>
						<li>Mortgage payment <span>$ 1,458</span></li>
					</ul>
					<form action="#" method="post" class="mt-20 border-top-1-gray pt-20 adbanced-form-two">
						<div class="row">
							<div class="form-group col-md-12">
								<label>Total Amount </label>
								<input type="text" class="form-control bg-gray" value="$ 530,000">
							</div>
							<div class="form-group col-md-12">
								<label>Down Payment </label>
								<input type="text" class="form-control bg-gray" value="$ 0">
							</div>
							<div class="form-group col-md-12">
								<label>Interest Rate </label>
								<input type="text" class="form-control bg-gray" value="% 2.5">
							</div>
							<div class="form-group col-md-12">
								<label>Loan Period</label>
								<div class="select-wrapper position-relative">
									<select class="select form-control has-val">
										<option>5 Years</option>
										<option>10 Years</option>
										<option>15 Years</option>
										<option>20 Years</option>
										<option>25 Years</option>
										<option>30 Years</option>
									</select>
								</div>
							</div>
							<div class="form-group col-md-12">
								<label>Payment Preiod</label>
								<div class="select-wrapper position-relative">
									<select class="select form-control has-val">
										<option>Monthly</option>
										<option>Semi-Monthly</option>
										<option>Bi-Weekly</option>
										<option>Weekly</option>
									</select>
								</div>
							</div>
							<div class="col-lg-12"><button type="submit" class="btn btn-primary w-100">Calculate</button></div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Single Property End
==================================================================-->
<!--  Partners and Subscribe Form Start
==================================================================-->
<div class="patner-subscribe bg-light">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-12 wow animated slideInDown">
				<div class="bg-white shadow py-80">
					<div class="row">
						<div class="col-md-12 col-lg-6 px-60 border-right">
							<div class="side-title pb-30">
								<span class="small-title color-primary position-relative line-primary">Partners</span>
								<h2 class="title mb-20 color-secondary">Our Popular Fellows!</h2>
								<p>Luctus posuere facilisi eros auctor lacinia litora. Convall aptent nisy parturient scelerisq. Nullam fringil condimen integer mauris lacus aliquam, quam massa lobortis commod proin magna.</p>
							</div>
							<div class="owl-carousel partners mt-30">
								<img src="images/partner/1.png" alt="Image not found!">
								<img src="images/partner/2.png" alt="Image not found!">
								<img src="images/partner/3.png" alt="Image not found!">
								<img src="images/partner/4.png" alt="Image not found!">
								<img src="images/partner/5.png" alt="Image not found!">
								<img src="images/partner/6.png" alt="Image not found!">
							</div>
						</div>
						<div class="col-md-12 col-lg-6 px-60">
							<div class="side-title pb-30 mt-md-50 text-right">
								<span class="small-title color-primary position-relative line-right-primary">Newsletter</span>
								<h2 class="title mb-20 color-secondary">Get Update Now!</h2>
								<p>Luctus posuere facilisi eros auctor lacinia litora. Convall aptent nisy parturient scelerisq. Nullam fringil condimen integer mauris lacus aliquam, quam massa lobortis commod proin magna.</p>
							</div>
							<form class="news-letter bg-gray mt-30">
								<div class="form-group position-relative">
									<input class="form-control" type="text" name="email" placeholder="Subscribe">
									<button class="bg-gray color-secondary"><i class="fa fa-paper-plane"></i></button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--  Partners and Subscribe Form Start
==================================================================-->

<!-- Footer Start
==================================================================-->
 <?php include 'footer.php';?>
<!-- Footer End
==================================================================-->
<!-- jquery Links
==================================================================-->
  <script src="js/jquery-v3.4.1.js"></script>
  <script src="js/greensock.js"></script>
  <script src="js/layerslider.transitions.js"></script>
  <script src="js/layerslider.kreaturamedia.jquery.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/tmpl.js"></script>
  <script src="js/jquery.dependClass-0.1.js"></script>
  <script src="js/draggable-0.1.js"></script>  
  <script src="js/jquery.slider.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/wow.js"></script>
  <script src="js/jquery.cookie.js"></script>
  <script src="js/color-settings.js"></script>
  <script src="js/chart.min.js"></script>
  <script src="js/vue-chartjs.js"></script>
  <script src="js/vue.js"></script>
  <script src="js/jquery.barrating.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDlVVUxeZqpBLv-jrgsQO1XQ7wvBS9mlRo"></script>
  <script src="js/map.scripts.js"></script>
 <script>
 	// Hourly views Chart js
	//-------------------------------
  	Vue.component('line-chart', {
		  extends: VueChartJs.Line,
		  mounted () {
		    this.gradient = this.$refs.canvas.getContext('2d').createLinearGradient(0, 0, 0, 450)

		    this.gradient.addColorStop(0, 'rgba(247,108,6, 0.9)')
		    this.gradient.addColorStop(0.5, 'rgba(247,108,6, 0.25)');
		    this.gradient.addColorStop(1, 'rgba(247,108,6, 0)');

		    this.renderChart({
		      labels: ['Tue 9:00', 'Tue 10:00', 'Tue 11:00', 'Tue 12:00', 'Tue 13:00', 'Tue 14:00', 'Tue 15:00', 'Tue 16:00', 'Tue 17:00', 'Tue 18:00', 'Tue 19:00', 'Tue 20:00', 'Tue 21:00', 'Tue 22:00', 'Tue 23:00', 'Tue 24:00', 'Fri 1:00', 'Fri 3:00', 'Fri 5:00', 'Fri 7:00', 'Fri 8:00'],
		      datasets: [
		        {
		          label: 'View',
		          borderColor: '#fd9834',
		          pointBackgroundColor: '#242424',
		          borderWidth: 1,
		          pointBorderColor: '#fd9834',
		          backgroundColor: this.gradient,
		          data: [5, 22, 3, 8, 17, 32, 24, 28, 14, 8, 19, 12, 9 ,0 , 5, 9, 12, 5, 33, 3, 14]
		        }
		      ]
		    }, {responsive: true, maintainAspectRatio: false})

		  }
		})

		var vm = new Vue({
		  el: '.app'
		})

	// Weekly views Chart js
	//-------------------------------
	var ctx = document.getElementById("myChart");
	var myChart = new Chart(ctx, {
	    type: 'doughnut',
	    data: {
	        labels: ["First Week", "Second Week", "Third Week", "Fourth Week"],
	        datasets: [{
	            label: '',
	            data: [316, 257, 407, 300],
	            backgroundColor: [
	                '#fd9834',
	                '#666666',
	                '#cacaca',
	                '#242424'
	            ]
	        }]
	    },
	  options: {
	    tooltips: {
	      enabled: true,
	      mode: 'single',
	      callbacks: {
	        label: function (tooltipItems, data) {
	                       return data.labels[tooltipItems.index] + data.datasets[tooltipItems.datasetIndex].label + ': ' + 'View ' + data.datasets[tooltipItems.datasetIndex].data[tooltipItems.index];
	        }

	      }
	    },
	    legend: {
	      position: 'bottom'
	    }
	  }
	});
	// Monthly views Chart js
	//-------------------------------
	var MONTHS = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
		var color = Chart.helpers.color;
		var barChartData = {
		  labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
		  datasets: [{
		    label: 'Views',
		    backgroundColor: '#fd9834',
		    background: '-webkit-gradient(linear, left top, left bottom, from(#ccc), to(#000))',
		    data: [
		      1276,
		      1097,
		      1670,
		      1387,
		      1069,
		      1276,
		      1171,
		      1671, 
		      1076,
		      1392,
		      1604,
		      1087
		    ]
		  }]
		};

	window.onload = function() {
	  var ctx = document.getElementById('chart').getContext('2d');
	  window.myBar = new Chart(ctx, {
	    type: 'bar',
	    data: barChartData,
	    options: {
	      responsive: true,
	      legend: {
	        position: 'top',
	      },
	      scales: {
	        xAxes: [{
	            barPercentage: 0.9,
	            gridLines : {display : false}      
	        }
	        ],
	        yAxes: [{
	                gridLines : {display : false},
	                ticks: {
	                    suggestedMin: 50,
	                    suggestedMax: 100
	                }
	            }]
	    }
	    }
	  });
	}; 
	// Star Rating js
	//-------------------------------
	$(function() {
      $('#star-rating').barrating({
        theme: 'fontawesome-stars'
      });
   });
  </script>
</body>
</html>