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
<div class="page-banner overlay-black" style="padding: 150px 0">
	<div class="container h-100">
		<div class="row h-100 align-items-center">
			<div class="col-lg-12">
				<h1 class="page-banner-title color-primary">Property Grid</h1>
				<div class="text-area w-50 mt-15 color-white">
					<p>Porttitor luctus est sit lacinia non praesent aptent hymenaeos taciti tortor. Sociosq platea porta facilisis vitae dictum bibendun tellus ante fusce vulputate dolor lorem vulputate hac quisque diam etiam.</p>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="bg-secondary">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-12">
				<nav aria-label="breadcrumb">
				  <ol class="breadcrumb m-0 py-15 px-0 bg-transparent hover-white-primary">
				    <li class="breadcrumb-item"><a href="#">Home</a></li>
				    <li class="breadcrumb-item"><a href="#">Listing</a></li>
				    <li class="breadcrumb-item"><a href="#">Property</a></li>
				    <li class="breadcrumb-item active" aria-current="page">Property Grid Full Width</li>
				  </ol>
				</nav>
			</div>
		</div>
	</div>
</div>
<!-- Page Banner End
==================================================================-->
<!-- Property Grid Start
==================================================================-->
<section class="bg-light">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-12 wow slideInDown animated">
				<div class="top-filter pb-15">
					<div class="row">
						<div class="col-md-3 col-lg-6 col-xl-7">
							<label>1-12 of 85 results</label>
						</div>
						<div class="col-md-9 col-lg-6 col-xl-5">
							<div class="row">
								<div class="col-md-8 col-lg-7">
									<form>						
										<div class="form-group d-flex mb-0">
											<label class="w-50">Short By :</label>
											<div class="select-wrapper position-relative w-100">
												<select class="select form-control">
													<option>Default</option>
													<option>Newest</option>
													<option>Oldest</option>
													<option>Random</option>
												</select>
											</div>
										</div>
									</form>
								</div>
								<div class="col-md-4 col-lg-5">
									<ul class="nav nav-tabs border-0 float-right navbar-tab-view mt-sm-15" id="myTab" role="tablist" style="line-height: 20px;">
								  		<li class="nav-item">
									    	<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><i class="fa fa-th-large" aria-hidden="true"></i></a>
									  	</li>
									  	<li class="nav-item">
										    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"><i class="fa fa-th" aria-hidden="true"></i></a>
									  	</li>
									  	<li class="nav-item">
									    	<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><i class="fa fa-list" aria-hidden="true"></i></a>
									  	</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-12 col-lg-12">
				<div class="tab-content  border-top-1-gray" id="myTabContent">
			  		<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
			  			<div class="row">
			  				<div class="col-md-12 col-lg-6 col-xl-4 wow slideInRight animated">
			  					<div class="property-item position-relative mt-30">
									<div class="property-img position-relative overflow-hidden overlay-secondary-4">
										<img src="images/property/1.jpg" alt="image">
										<span class="thum-category category-1 bg-secondary color-white z-index-1 px-15">For Sale</span>
										<span class="thum-category category-2 bg-secondary color-white z-index-1 px-15">Featured</span>
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
									<div class="property-content bg-white pt-30 pb-50 px-30">
										<a class="color-secondary mb-5" href="single-property.html"><h4>park Avanue Apartment.</h4></a>
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
			  				</div>
			  				<div class="col-md-12 col-lg-6 col-xl-4 wow slideInUp animated">
			  					<div class="property-item position-relative mt-30">
									<div class="property-img position-relative overflow-hidden overlay-secondary-4">
										<img src="images/property/2.jpg" alt="image">
										<span class="thum-category category-1 bg-secondary color-white z-index-1 px-15">For Sale</span>
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
									<div class="property-content bg-white pt-30 pb-50 px-30">
										<a class="color-secondary mb-5" href="single-property.html"><h4>Villa on Grand Avenue</h4></a>
										<span class="address icon-primary f-14"><i class="fa fa-map-marker"></i>801 Rosedale Ave SE, Atlanta, USA.</span>
										<ul class="about-property list-half icon-primary d-table f-14 mb-30 mt-20">
											<li><i class="flaticon-fit-screen"></i>300 sqft</li>
											<li><i class="flaticon-hotel"></i>5 Bedrooms</li>
											<li><i class="flaticon-bathtub"></i>4 Bathrooms</li>
											<li><i class="flaticon-garage"></i>2 Garage</li>
										</ul>
										<div class="property-cost color-white list-half w-100">
											<ul>
												<li>For Sale</li>
												<li>$ 530,000</li>
											</ul>
										</div>
									</div>
								</div>
			  				</div>
			  				<div class="col-md-12 col-lg-6 col-xl-4 wow slideInLeft animated">
			  					<div class="property-item position-relative mt-30">
									<div class="property-img position-relative overflow-hidden overlay-secondary-4">
										<img src="images/property/3.jpg" alt="image">
										<span class="thum-category category-1 bg-secondary color-white z-index-1 px-15">For Rent</span>
										<span class="thum-category category-2 bg-secondary color-white z-index-1 px-15">Featured</span>
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
									<div class="property-content bg-white pt-30 pb-50 px-30">
										<a class="color-secondary mb-5" href="single-property.html"><h4>Villa on Grand Avenue</h4></a>
										<span class="address icon-primary f-14"><i class="fa fa-map-marker"></i>14523 Carowinds Blvd, Charlotte, USA.</span>
										<ul class="about-property list-half icon-primary d-table f-14 mb-30 mt-20">
											<li><i class="flaticon-fit-screen"></i>300 sqft</li>
											<li><i class="flaticon-hotel"></i>5 Bedrooms</li>
											<li><i class="flaticon-bathtub"></i>4 Bathrooms</li>
											<li><i class="flaticon-garage"></i>2 Garage</li>
										</ul>
										<div class="property-cost color-white list-half w-100">
											<ul>
												<li>For Sale</li>
												<li>$ 530,000</li>
											</ul>
										</div>
									</div>
								</div>
			  				</div>
			  				<div class="col-md-12 col-lg-6 col-xl-4 wow slideInLeft animated">
			  					<div class="property-item position-relative mt-30">
									<div class="property-img position-relative overflow-hidden overlay-secondary-4">
										<img src="images/property/4.jpg" alt="image">
										<span class="thum-category category-1 bg-secondary color-white z-index-1 px-15">For Sale</span>
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
									<div class="property-content bg-white pt-30 pb-50 px-30">
										<a class="color-secondary mb-5" href="single-property.html"><h4>park Avanue Apartment.</h4></a>
										<span class="address icon-primary f-14"><i class="fa fa-map-marker"></i>40 Tower Avenue, Melbourne, Australia.</span>
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
			  				<div class="col-md-12 col-lg-6 col-xl-4 wow slideInDown animated">
			  					<div class="property-item position-relative mt-30">
									<div class="property-img position-relative overflow-hidden overlay-secondary-4">
										<img src="images/property/5.jpg" alt="image">
										<span class="thum-category category-1 bg-secondary color-white z-index-1 px-15">For Rent</span>
										<span class="thum-category category-2 bg-secondary color-white z-index-1 px-15">Featured</span>
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
									<div class="property-content bg-white pt-30 pb-50 px-30">
										<a class="color-secondary mb-5" href="single-property.html"><h4>park Avanue Apartment.</h4></a>
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
			  				</div>
			  				<div class="col-md-12 col-lg-6 col-xl-4 wow slideInRight animated">
			  					<div class="property-item position-relative mt-30">
									<div class="property-img position-relative overflow-hidden overlay-secondary-4">
										<img src="images/property/6.jpg" alt="image">
										<span class="thum-category category-1 bg-secondary color-white z-index-1 px-15">For Rent</span>
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
									<div class="property-content bg-white pt-30 pb-50 px-30">
										<a class="color-secondary mb-5" href="single-property.html"><h4>Villa on Grand Avenue</h4></a>
										<span class="address icon-primary f-14"><i class="fa fa-map-marker"></i>11-13 Whitehall, London SW1A 2DD, UK</span>
										<ul class="about-property list-half icon-primary d-table f-14 mb-30 mt-20">
											<li><i class="flaticon-fit-screen"></i>500 sqft</li>
											<li><i class="flaticon-hotel"></i>8 Bedrooms</li>
											<li><i class="flaticon-bathtub"></i>4 Bathrooms</li>
											<li><i class="flaticon-garage"></i>2 Garage</li>
										</ul>
										<div class="property-cost color-white list-half w-100">
											<ul>
												<li>For Sale</li>
												<li>$ 27,000</li>
											</ul>
										</div>
									</div>
								</div>
			  				</div>
			  				
			  				<div class="col-md-12 col-lg-6 col-xl-4 wow slideInRight animated">
			  					<div class="property-item position-relative mt-30">
									<div class="property-img position-relative overflow-hidden overlay-secondary-4">
										<img src="images/property/7.jpg" alt="image">
										<span class="thum-category category-1 bg-secondary color-white z-index-1 px-15">For Sale</span>
										<span class="thum-category category-2 bg-secondary color-white z-index-1 px-15">Featured</span>
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
									<div class="property-content bg-white pt-30 pb-50 px-30">
										<a class="color-secondary mb-5" href="single-property.html"><h4>park Avanue Apartment.</h4></a>
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
												<li>1.2k <sub>/Month</sub></li>
											</ul>
										</div>
									</div>
								</div>
			  				</div>
			  				<div class="col-md-12 col-lg-6 col-xl-4 wow slideInUp animated">
			  					<div class="property-item position-relative mt-30">
									<div class="property-img position-relative overflow-hidden overlay-secondary-4">
										<img src="images/property/8.jpg" alt="image">
										<span class="thum-category category-1 bg-secondary color-white z-index-1 px-15">For Sale</span>
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
									<div class="property-content bg-white pt-30 pb-50 px-30">
										<a class="color-secondary mb-5" href="single-property.html"><h4>Villa on Grand Avenue</h4></a>
										<span class="address icon-primary f-14"><i class="fa fa-map-marker"></i>801 Rosedale Ave SE, Atlanta, USA.</span>
										<ul class="about-property list-half icon-primary d-table f-14 mb-30 mt-20">
											<li><i class="flaticon-fit-screen"></i>300 sqft</li>
											<li><i class="flaticon-hotel"></i>5 Bedrooms</li>
											<li><i class="flaticon-bathtub"></i>4 Bathrooms</li>
											<li><i class="flaticon-garage"></i>2 Garage</li>
										</ul>
										<div class="property-cost color-white list-half w-100">
											<ul>
												<li>For Sale</li>
												<li>$ 50,000</li>
											</ul>
										</div>
									</div>
								</div>
			  				</div>
			  				<div class="col-md-12 col-lg-6 col-xl-4 wow slideInLeft animated">
			  					<div class="property-item position-relative mt-30">
									<div class="property-img position-relative overflow-hidden overlay-secondary-4">
										<img src="images/property/9.jpg" alt="image">
										<span class="thum-category category-1 bg-secondary color-white z-index-1 px-15">For Rent</span>
										<span class="thum-category category-2 bg-secondary color-white z-index-1 px-15">Featured</span>
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
									<div class="property-content bg-white pt-30 pb-50 px-30">
										<a class="color-secondary mb-5" href="single-property.html"><h4>Villa on Grand Avenue</h4></a>
										<span class="address icon-primary f-14"><i class="fa fa-map-marker"></i>14523 Carowinds Blvd, Charlotte, USA.</span>
										<ul class="about-property list-half icon-primary d-table f-14 mb-30 mt-20">
											<li><i class="flaticon-fit-screen"></i>300 sqft</li>
											<li><i class="flaticon-hotel"></i>5 Bedrooms</li>
											<li><i class="flaticon-bathtub"></i>4 Bathrooms</li>
											<li><i class="flaticon-garage"></i>2 Garage</li>
										</ul>
										<div class="property-cost color-white list-half w-100">
											<ul>
												<li>For Sale</li>
												<li>$ 20,000</li>
											</ul>
										</div>
									</div>
								</div>
			  				</div>
			  				<div class="col-md-12 col-lg-6 col-xl-4 wow slideInLeft animated">
			  					<div class="property-item position-relative mt-30">
									<div class="property-img position-relative overflow-hidden overlay-secondary-4">
										<img src="images/property/29.jpg" alt="image">
										<span class="thum-category category-1 bg-secondary color-white z-index-1 px-15">For Sale</span>
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
									<div class="property-content bg-white pt-30 pb-50 px-30">
										<a class="color-secondary mb-5" href="single-property.html"><h4>park Avanue Apartment.</h4></a>
										<span class="address icon-primary f-14"><i class="fa fa-map-marker"></i>40 Tower Avenue, Melbourne, Australia.</span>
										<ul class="about-property list-half icon-primary d-table f-14 mb-30 mt-20">
											<li><i class="flaticon-fit-screen"></i>200 sqft</li>
											<li><i class="flaticon-hotel"></i>3 Bedrooms</li>
											<li><i class="flaticon-bathtub"></i>2 Bathrooms</li>
											<li><i class="flaticon-garage"></i>1 Garage</li>
										</ul>
										<div class="property-cost color-white list-half w-100">
											<ul>
												<li>For Rent</li>
												<li>1.1k <sub>/Month</sub></li>
											</ul>
										</div>
									</div>
								</div>
			  				</div>
			  				<div class="col-md-12 col-lg-6 col-xl-4 wow slideInDown animated">
			  					<div class="property-item position-relative mt-30">
									<div class="property-img position-relative overflow-hidden overlay-secondary-4">
										<img src="images/property/30.jpg" alt="image">
										<span class="thum-category category-1 bg-secondary color-white z-index-1 px-15">For Rent</span>
										<span class="thum-category category-2 bg-secondary color-white z-index-1 px-15">Featured</span>
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
									<div class="property-content bg-white pt-30 pb-50 px-30">
										<a class="color-secondary mb-5" href="single-property.html"><h4>park Avanue Apartment.</h4></a>
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
												<li>1.4k <sub>/Month</sub></li>
											</ul>
										</div>
									</div>
								</div>
			  				</div>
			  				<div class="col-md-12 col-lg-6 col-xl-4 wow slideInRight animated">
			  					<div class="property-item position-relative mt-30">
									<div class="property-img position-relative overflow-hidden overlay-secondary-4">
										<img src="images/property/31.jpg" alt="image">
										<span class="thum-category category-1 bg-secondary color-white z-index-1 px-15">For Rent</span>
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
									<div class="property-content bg-white pt-30 pb-50 px-30">
										<a class="color-secondary mb-5" href="single-property.html"><h4>Villa on Grand Avenue</h4></a>
										<span class="address icon-primary f-14"><i class="fa fa-map-marker"></i>11-13 Whitehall, London SW1A 2DD, UK</span>
										<ul class="about-property list-half icon-primary d-table f-14 mb-30 mt-20">
											<li><i class="flaticon-fit-screen"></i>500 sqft</li>
											<li><i class="flaticon-hotel"></i>8 Bedrooms</li>
											<li><i class="flaticon-bathtub"></i>4 Bathrooms</li>
											<li><i class="flaticon-garage"></i>2 Garage</li>
										</ul>
										<div class="property-cost color-white list-half w-100">
											<ul>
												<li>For Sale</li>
												<li>$ 30,000</li>
											</ul>
										</div>
									</div>
								</div>
			  				</div>
			  				<div class="col-lg-12 wow slideInDown animated">
								<div class="mx-auto d-table">
									<ul class="pagination mt-50">
										<li class="page-item"><a class="page-link" href="#">Prev</a></li>
										<li class="page-item"><a class="page-link active" href="#">1</a></li>
										<li class="page-item"><a class="page-link" href="#">2</a></li>
										<li class="page-item"><a class="page-link" href="#">3</a></li>
										<li class="page-item"><a class="page-link" href="#">Next</a></li>
									</ul>
								</div>
							</div>
			  			</div>
			  		</div>
			  		<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
			  			<div class="row">
			  				<div class="col-md-12 col-lg-6 col-xl-4 wow slideInRight animated">
			  					<div class="property-thumbnail mt-30">
									<div class="property-img position-relative overflow-hidden overlay-secondary-4">
										<img src="images/property/7.jpg" alt="image">
										<div class="thumbnail-content z-index-1 color-white-a color-white">
											<span class="thum-category category-1 bg-secondary color-white z-index-1 px-15">For Sale</span>
											<ul class="hover-option position-absolute icon-white z-index-1">
												<li>
													<a data-toggle="tooltip" data-placement="top" title="Wishlist" href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
												</li>
												<li>
													<a data-toggle="tooltip" data-placement="top" title="Compare" href="#"><i class="fa fa-random" aria-hidden="true"></i></a>
												</li>
											</ul>
											<div class="hover-content py-30 px-20 overlay-hover-gradient">
												<div class="thumbnail-title z-index-1 position-relative">
													<span class="thumbnail-price bg-white color-secondary px-15 mb-10 d-table">$ 12000</span>
													<a class="color-secondary mb-5" href="single-property.html"><h4>Villa on Grand Avenue</h4></a>
													<span class="address icon-primary f-14"><i class="fa fa-map-marker"></i>11-13 Whitehall, London SW1A 2DD, UK</span>
												</div>
												<ul class="about-property icon-primary d-table f-14 z-index-1 position-relative">
													<li><span class="color-primary">400</span> sqft</li>
													<li><span class="color-primary">3</span> Bedrooms</li>
													<li><span class="color-primary">2</span> Bathrooms</li>
													<li><span class="color-primary">1</span> Garage</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
			  				</div>
			  				<div class="col-md-12 col-lg-6 col-xl-4 wow slideInUp animated">
			  					<div class="property-thumbnail mt-30">
									<div class="property-img position-relative overflow-hidden overlay-secondary-4">
										<img src="images/property/8.jpg" alt="image">
										<div class="thumbnail-content z-index-1 color-white-a color-white">
											<span class="thum-category category-1 bg-secondary color-white z-index-1 px-15">For Rent</span>
											<ul class="hover-option position-absolute icon-white z-index-1">
												<li>
													<a data-toggle="tooltip" data-placement="top" title="Wishlist" href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
												</li>
												<li>
													<a data-toggle="tooltip" data-placement="top" title="Compare" href="#"><i class="fa fa-random" aria-hidden="true"></i></a>
												</li>
											</ul>
											<div class="hover-content py-30 px-20 overlay-hover-gradient">
												<div class="thumbnail-title z-index-1 position-relative">
													<span class="thumbnail-price bg-white color-secondary px-15 mb-10">1.2k <sub>/Month</sub></span>
													<a class="color-secondary mb-5" href="single-property.html"><h4>park Avanue Apartment</h4></a>
													<span class="address icon-primary f-14"><i class="fa fa-map-marker"></i>Urbis Building Cathedral Gardens, UK</span>
												</div>
												<ul class="about-property icon-primary d-table f-14 z-index-1 position-relative">
													<li><span class="color-primary">300</span> sqft</li>
													<li><span class="color-primary">4</span> Bedrooms</li>
													<li><span class="color-primary">2</span> Bathrooms</li>
													<li><span class="color-primary">1</span> Garage</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
			  				</div>
			  				<div class="col-md-12 col-lg-6 col-xl-4 wow slideInLeft animated">
			  					<div class="property-thumbnail mt-30">
									<div class="property-img position-relative overflow-hidden overlay-secondary-4">
										<img src="images/property/9.jpg" alt="image">
										<div class="thumbnail-content z-index-1 color-white-a color-white">
											<span class="thum-category category-1 bg-secondary color-white z-index-1 px-15">For Sale</span>
											<span class="thum-category category-2 bg-secondary color-white z-index-1 px-15">Featured</span>
											<ul class="hover-option position-absolute icon-white z-index-1">
												<li>
													<a data-toggle="tooltip" data-placement="top" title="Wishlist" href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
												</li>
												<li>
													<a data-toggle="tooltip" data-placement="top" title="Compare" href="#"><i class="fa fa-random" aria-hidden="true"></i></a>
												</li>
											</ul>
											<div class="hover-content py-30 px-20 overlay-hover-gradient">
												<div class="thumbnail-title z-index-1 position-relative">
													<span class="thumbnail-price bg-white color-secondary px-15 mb-10">$ 15200</span>
													<a class="color-secondary mb-5" href="single-property.html"><h4>Diamond Manor Apartment</h4></a>
													<span class="address icon-primary f-14"><i class="fa fa-map-marker"></i>40 Tower Avenue, Melbourne, Australia.</span>
												</div>
												<ul class="about-property icon-primary d-table f-14 z-index-1 position-relative">
													<li><span class="color-primary">500</span> sqft</li>
													<li><span class="color-primary">8</span> Bedrooms</li>
													<li><span class="color-primary">4</span> Bathrooms</li>
													<li><span class="color-primary">2</span> Garage</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
			  				</div>
			  				<div class="col-md-12 col-lg-6 col-xl-4 wow slideInLeft animated">
			  					<div class="property-thumbnail mt-30">
									<div class="property-img position-relative overflow-hidden overlay-secondary-4">
										<img src="images/property/29.jpg" alt="image">
										<div class="thumbnail-content z-index-1 color-white-a color-white">
											<span class="thum-category category-1 bg-secondary color-white z-index-1 px-15">For Sale</span>
											<span class="thum-category category-2 bg-secondary color-white z-index-1 px-15">Featured</span>
											<ul class="hover-option position-absolute icon-white z-index-1">
												<li>
													<a data-toggle="tooltip" data-placement="top" title="Wishlist" href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
												</li>
												<li>
													<a data-toggle="tooltip" data-placement="top" title="Compare" href="#"><i class="fa fa-random" aria-hidden="true"></i></a>
												</li>
											</ul>
											<div class="hover-content py-30 px-20 overlay-hover-gradient">
												<div class="thumbnail-title z-index-1 position-relative">
													<span class="thumbnail-price bg-white color-secondary px-15 mb-10 d-table">$ 12000</span>
													<a class="color-secondary mb-5" href="single-property.html"><h4>Villa on Grand Avenue</h4></a>
													<span class="address icon-primary f-14"><i class="fa fa-map-marker"></i>11-13 Whitehall, London SW1A 2DD, UK</span>
												</div>
												<ul class="about-property icon-primary d-table f-14 z-index-1 position-relative">
													<li><span class="color-primary">400</span> sqft</li>
													<li><span class="color-primary">3</span> Bedrooms</li>
													<li><span class="color-primary">2</span> Bathrooms</li>
													<li><span class="color-primary">1</span> Garage</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
			  				</div>
			  				<div class="col-md-12 col-lg-6 col-xl-4 wow slideInDown animated">
			  					<div class="property-thumbnail mt-30">
									<div class="property-img position-relative overflow-hidden overlay-secondary-4">
										<img src="images/property/30.jpg" alt="image">
										<div class="thumbnail-content z-index-1 color-white-a color-white">
											<span class="thum-category category-1 bg-secondary color-white z-index-1 px-15">For Rent</span>
											<ul class="hover-option position-absolute icon-white z-index-1">
												<li>
													<a data-toggle="tooltip" data-placement="top" title="Wishlist" href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
												</li>
												<li>
													<a data-toggle="tooltip" data-placement="top" title="Compare" href="#"><i class="fa fa-random" aria-hidden="true"></i></a>
												</li>
											</ul>
											<div class="hover-content py-30 px-20 overlay-hover-gradient">
												<div class="thumbnail-title z-index-1 position-relative">
													<span class="thumbnail-price bg-white color-secondary px-15 mb-10">1.2k <sub>/Month</sub></span>
													<a class="color-secondary mb-5" href="single-property.html"><h4>park Avanue Apartment</h4></a>
													<span class="address icon-primary f-14"><i class="fa fa-map-marker"></i>Urbis Building Cathedral Gardens, UK</span>
												</div>
												<ul class="about-property icon-primary d-table f-14 z-index-1 position-relative">
													<li><span class="color-primary">300</span> sqft</li>
													<li><span class="color-primary">4</span> Bedrooms</li>
													<li><span class="color-primary">2</span> Bathrooms</li>
													<li><span class="color-primary">1</span> Garage</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
			  				</div>
			  				<div class="col-md-12 col-lg-6 col-xl-4 wow slideInRight animated">
			  					<div class="property-thumbnail mt-30">
									<div class="property-img position-relative overflow-hidden overlay-secondary-4">
										<img src="images/property/31.jpg" alt="image">
										<div class="thumbnail-content z-index-1 color-white-a color-white">
											<span class="thum-category category-1 bg-secondary color-white z-index-1 px-15">For Sale</span>
											<ul class="hover-option position-absolute icon-white z-index-1">
												<li>
													<a data-toggle="tooltip" data-placement="top" title="Wishlist" href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
												</li>
												<li>
													<a data-toggle="tooltip" data-placement="top" title="Compare" href="#"><i class="fa fa-random" aria-hidden="true"></i></a>
												</li>
											</ul>
											<div class="hover-content py-30 px-20 overlay-hover-gradient">
												<div class="thumbnail-title z-index-1 position-relative">
													<span class="thumbnail-price bg-white color-secondary px-15 mb-10">$ 15200</span>
													<a class="color-secondary mb-5" href="single-property.html"><h4>Diamond Manor Apartment</h4></a>
													<span class="address icon-primary f-14"><i class="fa fa-map-marker"></i>40 Tower Avenue, Melbourne, Australia.</span>
												</div>
												<ul class="about-property icon-primary d-table f-14 z-index-1 position-relative">
													<li><span class="color-primary">500</span> sqft</li>
													<li><span class="color-primary">8</span> Bedrooms</li>
													<li><span class="color-primary">4</span> Bathrooms</li>
													<li><span class="color-primary">2</span> Garage</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
			  				</div>

			  				<div class="col-md-12 col-lg-6 col-xl-4 wow slideInRight animated">
			  					<div class="property-thumbnail mt-30">
									<div class="property-img position-relative overflow-hidden overlay-secondary-4">
										<img src="images/property/1.jpg" alt="image">
										<div class="thumbnail-content z-index-1 color-white-a color-white">
											<span class="thum-category category-1 bg-secondary color-white z-index-1 px-15">For Sale</span>
											<span class="thum-category category-2 bg-secondary color-white z-index-1 px-15">Featured</span>
											<ul class="hover-option position-absolute icon-white z-index-1">
												<li>
													<a data-toggle="tooltip" data-placement="top" title="Wishlist" href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
												</li>
												<li>
													<a data-toggle="tooltip" data-placement="top" title="Compare" href="#"><i class="fa fa-random" aria-hidden="true"></i></a>
												</li>
											</ul>
											<div class="hover-content py-30 px-20 overlay-hover-gradient">
												<div class="thumbnail-title z-index-1 position-relative">
													<span class="thumbnail-price bg-white color-secondary px-15 mb-10 d-table">$ 12000</span>
													<a class="color-secondary mb-5" href="single-property.html"><h4>Villa on Grand Avenue</h4></a>
													<span class="address icon-primary f-14"><i class="fa fa-map-marker"></i>11-13 Whitehall, London SW1A 2DD, UK</span>
												</div>
												<ul class="about-property icon-primary d-table f-14 z-index-1 position-relative">
													<li><span class="color-primary">400</span> sqft</li>
													<li><span class="color-primary">3</span> Bedrooms</li>
													<li><span class="color-primary">2</span> Bathrooms</li>
													<li><span class="color-primary">1</span> Garage</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
			  				</div>
			  				<div class="col-md-12 col-lg-6 col-xl-4 wow slideInUp animated">
			  					<div class="property-thumbnail mt-30">
									<div class="property-img position-relative overflow-hidden overlay-secondary-4">
										<img src="images/property/2.jpg" alt="image">
										<div class="thumbnail-content z-index-1 color-white-a color-white">
											<span class="thum-category category-1 bg-secondary color-white z-index-1 px-15">For Rent</span>
											<ul class="hover-option position-absolute icon-white z-index-1">
												<li>
													<a data-toggle="tooltip" data-placement="top" title="Wishlist" href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
												</li>
												<li>
													<a data-toggle="tooltip" data-placement="top" title="Compare" href="#"><i class="fa fa-random" aria-hidden="true"></i></a>
												</li>
											</ul>
											<div class="hover-content py-30 px-20 overlay-hover-gradient">
												<div class="thumbnail-title z-index-1 position-relative">
													<span class="thumbnail-price bg-white color-secondary px-15 mb-10">1.2k <sub>/Month</sub></span>
													<a class="color-secondary mb-5" href="single-property.html"><h4>park Avanue Apartment</h4></a>
													<span class="address icon-primary f-14"><i class="fa fa-map-marker"></i>Urbis Building Cathedral Gardens, UK</span>
												</div>
												<ul class="about-property icon-primary d-table f-14 z-index-1 position-relative">
													<li><span class="color-primary">300</span> sqft</li>
													<li><span class="color-primary">4</span> Bedrooms</li>
													<li><span class="color-primary">2</span> Bathrooms</li>
													<li><span class="color-primary">1</span> Garage</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
			  				</div>
			  				<div class="col-md-12 col-lg-6 col-xl-4 wow slideInLeft animated">
			  					<div class="property-thumbnail mt-30">
									<div class="property-img position-relative overflow-hidden overlay-secondary-4">
										<img src="images/property/3.jpg" alt="image">
										<div class="thumbnail-content z-index-1 color-white-a color-white">
											<span class="thum-category category-1 bg-secondary color-white z-index-1 px-15">For Sale</span>
											<ul class="hover-option position-absolute icon-white z-index-1">
												<li>
													<a data-toggle="tooltip" data-placement="top" title="Wishlist" href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
												</li>
												<li>
													<a data-toggle="tooltip" data-placement="top" title="Compare" href="#"><i class="fa fa-random" aria-hidden="true"></i></a>
												</li>
											</ul>
											<div class="hover-content py-30 px-20 overlay-hover-gradient">
												<div class="thumbnail-title z-index-1 position-relative">
													<span class="thumbnail-price bg-white color-secondary px-15 mb-10">$ 15200</span>
													<a class="color-secondary mb-5" href="single-property.html"><h4>Diamond Manor Apartment</h4></a>
													<span class="address icon-primary f-14"><i class="fa fa-map-marker"></i>40 Tower Avenue, Melbourne, Australia.</span>
												</div>
												<ul class="about-property icon-primary d-table f-14 z-index-1 position-relative">
													<li><span class="color-primary">500</span> sqft</li>
													<li><span class="color-primary">8</span> Bedrooms</li>
													<li><span class="color-primary">4</span> Bathrooms</li>
													<li><span class="color-primary">2</span> Garage</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
			  				</div>

			  				<div class="col-md-12 col-lg-6 col-xl-4 wow slideInLeft animated">
			  					<div class="property-thumbnail mt-30">
									<div class="property-img position-relative overflow-hidden overlay-secondary-4">
										<img src="images/property/4.jpg" alt="image">
										<div class="thumbnail-content z-index-1 color-white-a color-white">
											<span class="thum-category category-1 bg-secondary color-white z-index-1 px-15">For Sale</span>
											<span class="thum-category category-2 bg-secondary color-white z-index-1 px-15">Featured</span>
											<ul class="hover-option position-absolute icon-white z-index-1">
												<li>
													<a data-toggle="tooltip" data-placement="top" title="Wishlist" href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
												</li>
												<li>
													<a data-toggle="tooltip" data-placement="top" title="Compare" href="#"><i class="fa fa-random" aria-hidden="true"></i></a>
												</li>
											</ul>
											<div class="hover-content py-30 px-20 overlay-hover-gradient">
												<div class="thumbnail-title z-index-1 position-relative">
													<span class="thumbnail-price bg-white color-secondary px-15 mb-10 d-table">$ 12000</span>
													<a class="color-secondary mb-5" href="single-property.html"><h4>Villa on Grand Avenue</h4></a>
													<span class="address icon-primary f-14"><i class="fa fa-map-marker"></i>11-13 Whitehall, London SW1A 2DD, UK</span>
												</div>
												<ul class="about-property icon-primary d-table f-14 z-index-1 position-relative">
													<li><span class="color-primary">400</span> sqft</li>
													<li><span class="color-primary">3</span> Bedrooms</li>
													<li><span class="color-primary">2</span> Bathrooms</li>
													<li><span class="color-primary">1</span> Garage</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
			  				</div>
			  				<div class="col-md-12 col-lg-6 col-xl-4 wow slideInUp animated">
			  					<div class="property-thumbnail mt-30">
									<div class="property-img position-relative overflow-hidden overlay-secondary-4">
										<img src="images/property/5.jpg" alt="image">
										<div class="thumbnail-content z-index-1 color-white-a color-white">
											<span class="thum-category category-1 bg-secondary color-white z-index-1 px-15">For Rent</span>
											<span class="thum-category category-2 bg-secondary color-white z-index-1 px-15">Featured</span>
											<ul class="hover-option position-absolute icon-white z-index-1">
												<li>
													<a data-toggle="tooltip" data-placement="top" title="Wishlist" href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
												</li>
												<li>
													<a data-toggle="tooltip" data-placement="top" title="Compare" href="#"><i class="fa fa-random" aria-hidden="true"></i></a>
												</li>
											</ul>
											<div class="hover-content py-30 px-20 overlay-hover-gradient">
												<div class="thumbnail-title z-index-1 position-relative">
													<span class="thumbnail-price bg-white color-secondary px-15 mb-10">1.2k <sub>/Month</sub></span>
													<a class="color-secondary mb-5" href="single-property.html"><h4>park Avanue Apartment</h4></a>
													<span class="address icon-primary f-14"><i class="fa fa-map-marker"></i>Urbis Building Cathedral Gardens, UK</span>
												</div>
												<ul class="about-property icon-primary d-table f-14 z-index-1 position-relative">
													<li><span class="color-primary">300</span> sqft</li>
													<li><span class="color-primary">4</span> Bedrooms</li>
													<li><span class="color-primary">2</span> Bathrooms</li>
													<li><span class="color-primary">1</span> Garage</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
			  				</div>
			  				<div class="col-md-12 col-lg-6 col-xl-4 wow slideInRight animated">
			  					<div class="property-thumbnail mt-30">
									<div class="property-img position-relative overflow-hidden overlay-secondary-4">
										<img src="images/property/6.jpg" alt="image">
										<div class="thumbnail-content z-index-1 color-white-a color-white">
											<span class="thum-category category-1 bg-secondary color-white z-index-1 px-15">For Sale</span>
											<ul class="hover-option position-absolute icon-white z-index-1">
												<li>
													<a data-toggle="tooltip" data-placement="top" title="Wishlist" href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
												</li>
												<li>
													<a data-toggle="tooltip" data-placement="top" title="Compare" href="#"><i class="fa fa-random" aria-hidden="true"></i></a>
												</li>
											</ul>
											<div class="hover-content py-30 px-20 overlay-hover-gradient">
												<div class="thumbnail-title z-index-1 position-relative">
													<span class="thumbnail-price bg-white color-secondary px-15 mb-10">$ 15200</span>
													<a class="color-secondary mb-5" href="single-property.html"><h4>Diamond Manor Apartment</h4></a>
													<span class="address icon-primary f-14"><i class="fa fa-map-marker"></i>40 Tower Avenue, Melbourne, Australia.</span>
												</div>
												<ul class="about-property icon-primary d-table f-14 z-index-1 position-relative">
													<li><span class="color-primary">500</span> sqft</li>
													<li><span class="color-primary">8</span> Bedrooms</li>
													<li><span class="color-primary">4</span> Bathrooms</li>
													<li><span class="color-primary">2</span> Garage</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
			  				</div>
			  				<div class="col-lg-12 wow slideInDown animated">
								<div class="mx-auto d-table">
									<ul class="pagination mt-50">
										<li class="page-item"><a class="page-link" href="#">Prev</a></li>
										<li class="page-item"><a class="page-link active" href="#">1</a></li>
										<li class="page-item"><a class="page-link" href="#">2</a></li>
										<li class="page-item"><a class="page-link" href="#">3</a></li>
										<li class="page-item"><a class="page-link" href="#">Next</a></li>
									</ul>
								</div>
							</div>
			  			</div>
			  		</div>
			  		<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
			  			<div class="row">
			  				<div class="col-md-12 col-lg-12 wow slideInDown animated">
								<div class="property-list mt-30">
									<div class="property-item d-flex">
										<div class="property-img position-relative overflow-hidden overlay-secondary-4">
											<img src="images/property/1.jpg" alt="image">
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
										<div class="property-content bg-white pt-30 pb-50 px-30 position-relative">
											<a class="color-secondary mb-5" href="single-property.html"><h4>park Avanue Apartment.</h4></a>
											<span class="address icon-primary f-14"><i class="fa fa-map-marker"></i>366 Glenmore Ave, Brooklyn, USA.</span>
											<ul class="about-property icon-primary d-table mt-20">
												<li><i class="flaticon-fit-screen"></i>200 sqft</li>
												<li><i class="flaticon-hotel"></i>3 Bedrooms</li>
												<li><i class="flaticon-bathtub"></i>2 Bathrooms</li>
												<li><i class="flaticon-garage"></i>1 Garage</li>
											</ul>
											<span class="tags color-gray mb-30 d-block">Appartment, Bar, Hotel, House</span>
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
							<div class="col-md-12 col-lg-12 wow slideInUp animated">
								<div class="property-list mt-30">
									<div class="property-item d-flex">
										<div class="property-img position-relative overflow-hidden overlay-secondary-4">
											<img src="images/property/2.jpg" alt="image">
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
										<div class="property-content bg-white pt-30 pb-50 px-30 position-relative">
											<a class="color-secondary mb-5" href="single-property.html"><h4>Diamond Manor Apartment</h4></a>
											<span class="address icon-primary f-14"><i class="fa fa-map-marker"></i>40 Tower Avenue, Melbourne, Australia.</span>
											<ul class="about-property icon-primary d-table mt-20">
												<li><i class="flaticon-fit-screen"></i>400 sqft</li>
												<li><i class="flaticon-hotel"></i>4 Bedrooms</li>
												<li><i class="flaticon-bathtub"></i>2 Bathrooms</li>
												<li><i class="flaticon-garage"></i>1 Garage</li>
											</ul>
											<span class="tags color-gray mb-30 d-block">Appartment, Bar, Hotel, House</span>
											<div class="property-cost color-white list-half w-100">
												<ul>
													<li>For Rent</li>
													<li>$ 5,000 <sub>/Month</sub></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-12 wow slideInDown animated">
								<div class="property-list mt-30">
									<div class="property-item d-flex">
										<div class="property-img position-relative overflow-hidden overlay-secondary-4">
											<img src="images/property/3.jpg" alt="image">
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
										<div class="property-content bg-white pt-30 pb-50 px-30 position-relative">
											<a class="color-secondary mb-5" href="single-property.html"><h4>Villa on Grand Avenue</h4></a>
											<span class="address icon-primary f-14"><i class="fa fa-map-marker"></i>11-13 Whitehall, London SW1A 2DD, UK</span>
											<ul class="about-property icon-primary d-table mt-20">
												<li><i class="flaticon-fit-screen"></i>400 sqft</li>
												<li><i class="flaticon-hotel"></i>4 Bedrooms</li>
												<li><i class="flaticon-bathtub"></i>2 Bathrooms</li>
												<li><i class="flaticon-garage"></i>1 Garage</li>
											</ul>
											<span class="tags color-gray mb-30 d-block">Appartment, Bar, Hotel, House</span>
											<div class="property-cost color-white list-half w-100">
												<ul>
													<li>For Sale</li>
													<li>$ 57,000</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-12 col-lg-12 wow slideInUp animated">
								<div class="property-list mt-30">
									<div class="property-item d-flex">
										<div class="property-img position-relative overflow-hidden overlay-secondary-4">
											<img src="images/property/4.jpg" alt="image">
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
										<div class="property-content bg-white pt-30 pb-50 px-30 position-relative">
											<a class="color-secondary mb-5" href="single-property.html"><h4>park Avanue Apartment.</h4></a>
											<span class="address icon-primary f-14"><i class="fa fa-map-marker"></i>366 Glenmore Ave, Brooklyn, USA.</span>
											<ul class="about-property icon-primary d-table mt-20">
												<li><i class="flaticon-fit-screen"></i>200 sqft</li>
												<li><i class="flaticon-hotel"></i>3 Bedrooms</li>
												<li><i class="flaticon-bathtub"></i>2 Bathrooms</li>
												<li><i class="flaticon-garage"></i>1 Garage</li>
											</ul>
											<span class="tags color-gray mb-30 d-block">Appartment, Bar, Hotel, House</span>
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
							<div class="col-md-12 col-lg-12 wow slideInDown animated">
								<div class="property-list mt-30">
									<div class="property-item d-flex">
										<div class="property-img position-relative overflow-hidden overlay-secondary-4">
											<img src="images/property/5.jpg" alt="image">
											<span class="thum-category category-1 bg-secondary color-white z-index-1 px-15">Featured</span>
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
										<div class="property-content bg-white pt-30 pb-50 px-30 position-relative">
											<a class="color-secondary mb-5" href="single-property.html"><h4>Diamond Manor Apartment</h4></a>
											<span class="address icon-primary f-14"><i class="fa fa-map-marker"></i>40 Tower Avenue, Melbourne, Australia.</span>
											<ul class="about-property icon-primary d-table mt-20">
												<li><i class="flaticon-fit-screen"></i>400 sqft</li>
												<li><i class="flaticon-hotel"></i>4 Bedrooms</li>
												<li><i class="flaticon-bathtub"></i>2 Bathrooms</li>
												<li><i class="flaticon-garage"></i>1 Garage</li>
											</ul>
											<span class="tags color-gray mb-30 d-block">Appartment, Bar, Hotel, House</span>
											<div class="property-cost color-white list-half w-100">
												<ul>
													<li>For Rent</li>
													<li>$ 5,000 <sub>/Month</sub></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-12 wow slideInUp animated">
								<div class="property-list mt-30">
									<div class="property-item d-flex">
										<div class="property-img position-relative overflow-hidden overlay-secondary-4">
											<img src="images/property/6.jpg" alt="image">
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
										<div class="property-content bg-white pt-30 pb-50 px-30 position-relative">
											<a class="color-secondary mb-5" href="single-property.html"><h4>Villa on Grand Avenue</h4></a>
											<span class="address icon-primary f-14"><i class="fa fa-map-marker"></i>11-13 Whitehall, London SW1A 2DD, UK</span>
											<ul class="about-property icon-primary d-table mt-20">
												<li><i class="flaticon-fit-screen"></i>400 sqft</li>
												<li><i class="flaticon-hotel"></i>4 Bedrooms</li>
												<li><i class="flaticon-bathtub"></i>2 Bathrooms</li>
												<li><i class="flaticon-garage"></i>1 Garage</li>
											</ul>
											<span class="tags color-gray mb-30 d-block">Appartment, Bar, Hotel, House</span>
											<div class="property-cost color-white list-half w-100">
												<ul>
													<li>For Sale</li>
													<li>$ 57,000</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-12 col-lg-12 wow slideInDown animated">
								<div class="property-list mt-30">
									<div class="property-item d-flex">
										<div class="property-img position-relative overflow-hidden overlay-secondary-4">
											<img src="images/property/8.jpg" alt="image">
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
										<div class="property-content bg-white pt-30 pb-50 px-30 position-relative">
											<a class="color-secondary mb-5" href="single-property.html"><h4>park Avanue Apartment.</h4></a>
											<span class="address icon-primary f-14"><i class="fa fa-map-marker"></i>366 Glenmore Ave, Brooklyn, USA.</span>
											<ul class="about-property icon-primary d-table mt-20">
												<li><i class="flaticon-fit-screen"></i>200 sqft</li>
												<li><i class="flaticon-hotel"></i>3 Bedrooms</li>
												<li><i class="flaticon-bathtub"></i>2 Bathrooms</li>
												<li><i class="flaticon-garage"></i>1 Garage</li>
											</ul>
											<span class="tags color-gray mb-30 d-block">Appartment, Bar, Hotel, House</span>
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
							<div class="col-md-12 col-lg-12 wow slideInUp animated">
								<div class="property-list mt-30">
									<div class="property-item d-flex">
										<div class="property-img position-relative overflow-hidden overlay-secondary-4">
											<img src="images/property/8.jpg" alt="image">
											<span class="thum-category category-1 bg-secondary color-white z-index-1 px-15">Featured</span>
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
										<div class="property-content bg-white pt-30 pb-50 px-30 position-relative">
											<a class="color-secondary mb-5" href="single-property.html"><h4>Diamond Manor Apartment</h4></a>
											<span class="address icon-primary f-14"><i class="fa fa-map-marker"></i>40 Tower Avenue, Melbourne, Australia.</span>
											<ul class="about-property icon-primary d-table mt-20">
												<li><i class="flaticon-fit-screen"></i>400 sqft</li>
												<li><i class="flaticon-hotel"></i>4 Bedrooms</li>
												<li><i class="flaticon-bathtub"></i>2 Bathrooms</li>
												<li><i class="flaticon-garage"></i>1 Garage</li>
											</ul>
											<span class="tags color-gray mb-30 d-block">Appartment, Bar, Hotel, House</span>
											<div class="property-cost color-white list-half w-100">
												<ul>
													<li>For Rent</li>
													<li>$ 5,000 <sub>/Month</sub></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-12 wow slideInDown animated">
								<div class="property-list mt-30">
									<div class="property-item d-flex">
										<div class="property-img position-relative overflow-hidden overlay-secondary-4">
											<img src="images/property/9.jpg" alt="image">
											<span class="thum-category category-1 bg-secondary color-white z-index-1 px-15">Featured</span>
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
										<div class="property-content bg-white pt-30 pb-50 px-30 position-relative">
											<a class="color-secondary mb-5" href="single-property.html"><h4>Villa on Grand Avenue</h4></a>
											<span class="address icon-primary f-14"><i class="fa fa-map-marker"></i>11-13 Whitehall, London SW1A 2DD, UK</span>
											<ul class="about-property icon-primary d-table mt-20">
												<li><i class="flaticon-fit-screen"></i>400 sqft</li>
												<li><i class="flaticon-hotel"></i>4 Bedrooms</li>
												<li><i class="flaticon-bathtub"></i>2 Bathrooms</li>
												<li><i class="flaticon-garage"></i>1 Garage</li>
											</ul>
											<span class="tags color-gray mb-30 d-block">Appartment, Bar, Hotel, House</span>
											<div class="property-cost color-white list-half w-100">
												<ul>
													<li>For Sale</li>
													<li>$ 57,000</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-12 col-lg-12 wow slideInUp animated">
								<div class="property-list mt-30">
									<div class="property-item d-flex">
										<div class="property-img position-relative overflow-hidden overlay-secondary-4">
											<img src="images/property/29.jpg" alt="image">
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
										<div class="property-content bg-white pt-30 pb-50 px-30 position-relative">
											<a class="color-secondary mb-5" href="single-property.html"><h4>park Avanue Apartment.</h4></a>
											<span class="address icon-primary f-14"><i class="fa fa-map-marker"></i>366 Glenmore Ave, Brooklyn, USA.</span>
											<ul class="about-property icon-primary d-table mt-20">
												<li><i class="flaticon-fit-screen"></i>200 sqft</li>
												<li><i class="flaticon-hotel"></i>3 Bedrooms</li>
												<li><i class="flaticon-bathtub"></i>2 Bathrooms</li>
												<li><i class="flaticon-garage"></i>1 Garage</li>
											</ul>
											<span class="tags color-gray mb-30 d-block">Appartment, Bar, Hotel, House</span>
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
							<div class="col-md-12 col-lg-12 wow slideInDown animated">
								<div class="property-list mt-30">
									<div class="property-item d-flex">
										<div class="property-img position-relative overflow-hidden overlay-secondary-4">
											<img src="images/property/30.jpg" alt="image">
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
										<div class="property-content bg-white pt-30 pb-50 px-30 position-relative">
											<a class="color-secondary mb-5" href="single-property.html"><h4>Diamond Manor Apartment</h4></a>
											<span class="address icon-primary f-14"><i class="fa fa-map-marker"></i>40 Tower Avenue, Melbourne, Australia.</span>
											<ul class="about-property icon-primary d-table mt-20">
												<li><i class="flaticon-fit-screen"></i>400 sqft</li>
												<li><i class="flaticon-hotel"></i>4 Bedrooms</li>
												<li><i class="flaticon-bathtub"></i>2 Bathrooms</li>
												<li><i class="flaticon-garage"></i>1 Garage</li>
											</ul>
											<span class="tags color-gray mb-30 d-block">Appartment, Bar, Hotel, House</span>
											<div class="property-cost color-white list-half w-100">
												<ul>
													<li>For Rent</li>
													<li>$ 5,000 <sub>/Month</sub></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-12 wow slideInUp animated">
								<div class="property-list mt-30">
									<div class="property-item d-flex">
										<div class="property-img position-relative overflow-hidden overlay-secondary-4">
											<img src="images/property/31.jpg" alt="image">
											<span class="thum-category category-1 bg-secondary color-white z-index-1 px-15">Featured</span>
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
										<div class="property-content bg-white pt-30 pb-50 px-30 position-relative">
											<a class="color-secondary mb-5" href="single-property.html"><h4>Villa on Grand Avenue</h4></a>
											<span class="address icon-primary f-14"><i class="fa fa-map-marker"></i>11-13 Whitehall, London SW1A 2DD, UK</span>
											<ul class="about-property icon-primary d-table mt-20">
												<li><i class="flaticon-fit-screen"></i>400 sqft</li>
												<li><i class="flaticon-hotel"></i>4 Bedrooms</li>
												<li><i class="flaticon-bathtub"></i>2 Bathrooms</li>
												<li><i class="flaticon-garage"></i>1 Garage</li>
											</ul>
											<span class="tags color-gray mb-30 d-block">Appartment, Bar, Hotel, House</span>
											<div class="property-cost color-white list-half w-100">
												<ul>
													<li>For Sale</li>
													<li>$ 57,000</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12 wow slideInDown animated">
								<div class="mx-auto d-table">
									<ul class="pagination mt-50">
										<li class="page-item"><a class="page-link" href="#">Prev</a></li>
										<li class="page-item"><a class="page-link active" href="#">1</a></li>
										<li class="page-item"><a class="page-link" href="#">2</a></li>
										<li class="page-item"><a class="page-link" href="#">3</a></li>
										<li class="page-item"><a class="page-link" href="#">Next</a></li>
									</ul>
								</div>
							</div>
			  			</div>
			  		</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Property Grid End
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
  <script src="js/wow.js"></script>
  <script src="js/jquery.cookie.js"></script>
  <script src="js/color-settings.js"></script>
  <script src="js/custom.js"></script>
</body>
</html>