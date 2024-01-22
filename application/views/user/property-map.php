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
=========================================================================-->
<?php include 'header.php';?>
<!-- End Header
=========================================================================-->
<!-- Map Start 
==================================================================-->
<div class="home-map p-0 position-relative">
	<div class="map-home" id="map"></div>
</div>
<!-- Map End 
==================================================================-->
<!-- Advanced Search Start
==================================================================-->
<div class="py-80">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-12 wow animated slideInUp">
				<form class="adbanced-form-two amenities-list">
	  				<div class="row">
	  					<div class="form-group col-lg-3 position-relative">
	  						<div class="custom-radio y-center">
	  							<label>
								    <input type="radio" name="light" checked>
								    <span class="design"></span>
								    <span class="text">Buy</span>
							  	</label>
							  	<label>
								    <input type="radio" name="light">
								    <span class="design"></span>
								    <span class="text">Rent</span>
							  	</label>
							  	<label>
								    <input type="radio" name="light">
								    <span class="design"></span>
								    <span class="text">Sale</span>
							  	</label>
	  						</div>
	  					</div>
	  					<div class="form-group col-lg-3 col-md-6 col-6">
							<div class="select-wrapper position-relative">
								<select class="select form-control">
									<option>All Type</option>
									<option>Appartment</option>
									<option>Office</option>
									<option>Industry</option>
									<option>Commercial</option>
									<option>Land</option>
								</select>
							</div>
						</div>
						<div class="form-group col-lg-3 col-md-6 col-6">
							<div class="select-wrapper position-relative">
								<select class="select form-control">
									<option>Select Country</option>
									<option>USA</option>
									<option>Australia</option>
									<option>Russia</option>
									<option>France</option>
									<option>Cyprus</option>
								</select>
							</div>
						</div>
						<div class="form-group col-lg-3 col-md-6 col-6">
							<div class="select-wrapper position-relative">
								<select class="select form-control">
									<option>Select Location</option>
									<option>Newyork</option>
									<option>London</option>
									<option>Dubai</option>
									<option>Melbourne</option>
									<option>Sydney</option>
								</select>
							</div>
						</div>
						<div class="form-group col-xl-4 col-lg-2 col-md-6 col-6">
							<input class="form-control" type="text" name="address" placeholder="Address, State/City, Zip Code, Location">
						</div>
						<div class="form-group col-lg-2 col-md-6 col-6">
							<div class="select-wrapper position-relative">
								<select class="select form-control has-val">
									<option>Beds</option>
									<option>One</option>
									<option>Two</option>
									<option>Three</option>
									<option>Four</option>
								</select>
							</div>
						</div>
						<div class="form-group mb-0 col-lg-2 col-md-6 col-6">
							<div class="select-wrapper position-relative">
								<select class="select form-control has-val">
									<option>Baths</option>
									<option>One</option>
									<option>Two</option>
									<option>Three</option>
									<option>Four</option>
								</select>
							</div>
						</div>
						<div class="form-group mb-0 col-lg-2 col-md-6 col-6">
							<div class="select-wrapper position-relative">
								<select class="select form-control has-val">
									<option>Kitchen</option>
									<option>One</option>
									<option>Two</option>
									<option>Three</option>
									<option>Four</option>
								</select>
							</div>
						</div>
						<div class="form-group mb-0 col-lg-2 col-md-6 col-6">
							<div class="select-wrapper position-relative">
								<select class="select form-control has-val">
									<option>Garage</option>
									<option>Yes</option>
									<option>No</option>
								</select>
							</div>
						</div>	
						<div class="form-group mb-0 mt-md-15 col-lg-2 col-md-6 col-6">
							<input class="form-control" type="text" name="min-area" placeholder="Min Area (sqft)">
						</div>
						<div class="form-group mb-0 mt-md-15 col-lg-2 col-md-6 col-6">
							<input class="form-control" type="text" name="max-area" placeholder="Max Area (sqft)">
						</div>
						<div class="form-group mb-0 mt-md-15 col-lg-4 col-md-6">
							<div class="price_range">
								<div class="price-filter">
									<span class="price-slider">
										<input class="filter_price" type="text" name="price" value="100000;900000" />
									</span>
								</div>
							</div>
						</div>
						<div class="form-group col-md-6 col-lg-3 col-xl-2">
							<input class="btn btn-primary w-100 mt-md-15" type="submit" name="search" value="Search">
						</div>
						<div class="form-group col-md-12 col-lg-3 col-xl-2">
							<a class="color-secondary position-relative plus-minus pl-15 mt-md-15 d-block y-center" data-toggle="collapse" href="#Collapse1" role="button" aria-expanded="false" aria-controls="Collapse1">Advanced search</a>
						</div>
						<div class="col-md-12 col-lg-12">
							<div class="collapse" id="Collapse1">
								<div class="row">
									<div class="form-group mb-0 col-lg-12">
										<ul class="list-bottom amenities select-option pt-15">
				                            <li>
				                                <input id="feature-1" class="d-none" type="checkbox">
				                                <label for="feature-1">Air Condition</label>
				                            </li>
				                            <li>
				                                <input id="feature-2" class="d-none" type="checkbox">
				                                <label for="feature-2">Refrigerator</label>
				                            </li>
				                            <li>
				                                <input id="feature-3" class="d-none" type="checkbox">
				                                <label for="feature-3">TV Cable</label>
				                            </li>
				                            <li>
				                                <input id="feature-4" class="d-none" type="checkbox">
				                                <label for="feature-4">Dryer</label>
				                            </li>
				                            <li>
				                                <input id="feature-5" class="d-none" type="checkbox">
				                                <label for="feature-5">Wifi</label>
				                            </li>
				                            <li>
				                                <input id="feature-6" class="d-none" type="checkbox">
				                                <label for="feature-6">Laundry</label>
				                            </li>
				                            <li>
				                                <input id="feature-7" class="d-none" type="checkbox">
				                                <label for="feature-7">Swimming Pool</label>
				                            </li>
				                            <li>
				                                <input id="feature-8" class="d-none" type="checkbox">
				                                <label for="feature-8">Outdoor Shower</label>
				                            </li>
				                            <li>
				                                <input id="feature-9" class="d-none" type="checkbox">
				                                <label for="feature-9">Barbeque</label>
				                            </li>
				                            <li>
				                                <input id="feature-10" class="d-none" type="checkbox">
				                                <label for="feature-10">Washer</label>
				                            </li>
				                            <li>
				                                <input id="feature-11" class="d-none" type="checkbox">
				                                <label for="feature-11">Sauna</label>
				                            </li>
				                            <li>
				                                <input id="feature-12" class="d-none" type="checkbox">
				                                <label for="feature-12">Microwave</label>
				                            </li>
				                            <li>
				                                <input id="feature-13" class="d-none" type="checkbox">
				                                <label for="feature-13">Gym</label>
				                            </li>
				                            <li>
				                                <input id="feature-14" class="d-none" type="checkbox">
				                                <label for="feature-14">Lawn</label>
				                            </li>
				                            <li>
				                                <input id="feature-15" class="d-none" type="checkbox">
				                                <label for="feature-15">Window Covering</label>
				                            </li>
				                            <li>
				                                <input id="feature-16" class="d-none" type="checkbox">
				                                <label for="feature-16">Home Theater</label>
				                            </li>
				                            <li>
				                                <input id="feature-17" class="d-none" type="checkbox">
				                                <label for="feature-17">Garden</label>
				                            </li>
				                            <li>
				                                <input id="feature-18" class="d-none" type="checkbox">
				                                <label for="feature-18">Fire Protection</label>
				                            </li>
				                            <li>
				                                <input id="feature-19" class="d-none" type="checkbox">
				                                <label for="feature-19">Emergency Exit</label>
				                            </li>
				                            <li>
				                                <input id="feature-20" class="d-none" type="checkbox">
				                                <label for="feature-20">Security System</label>
				                            </li>
				                        </ul>
				                    </div>
								</div>
							</div>
						</div>						
	  				</div>
	  			</form>
			</div>
		</div>
	</div>
</div>
<!-- Advanced Search End
==================================================================-->
<!-- Recent Properties Start
==================================================================-->
<section class="bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 wow animated slideInUp">
				<div class="main-title w-75 mx-auto d-table text-center mb-30">
					<span class="small-title color-primary position-relative line-2-primary">New Arrival Collections</span>
					<h2 class="title mb-20 color-secondary">Recent Properties</h2>
					<span class="sub-title">Congue commodo ipsum, risus urna nisi. Primis velit turpis sollicitudin. Felis aptent sagittis aliquet turpis et tristique montes vestibulum rutrum. Scelerisque viverra ac ridiculus enim. Curabitur.</span>
				</div>
			</div>
			<div class="col-lg-12 wow animated slideInDown">
				<div class="owl-carousel slide-3 owl-nav-side owl-dots-none mt-30 owl-loaded owl-drag">
					<div class="property-item">
						<div class="property-img position-relative overflow-hidden overlay-secondary-4">
							<img src="images/property/1.jpg" alt="image">
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

					<div class="property-item">
						<div class="property-img position-relative overflow-hidden overlay-secondary-4">
							<img src="images/property/2.jpg" alt="image">
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
					<div class="property-item">
						<div class="property-img position-relative overflow-hidden overlay-secondary-4">
							<img src="images/property/3.jpg" alt="image">
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
					<div class="property-item">
						<div class="property-img position-relative overflow-hidden overlay-secondary-4">
							<img src="images/property/4.jpg" alt="image">
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

					<div class="property-item">
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
					<div class="property-item">
						<div class="property-img position-relative overflow-hidden overlay-secondary-4">
							<img src="images/property/6.jpg" alt="image">
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
									<li>$ 530,000</li>
								</ul>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Recent Properties End
==================================================================-->
<!-- Best Offer Start
==================================================================-->
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-12 wow animated slideInUp">
				<div class="main-title w-75 mx-auto d-table text-center mb-30">
					<span class="small-title color-primary position-relative line-2-primary">Hot Property</span>
					<h2 class="title mb-20 color-secondary">Best Offers of This Week</h2>
					<span class="sub-title">Congue commodo ipsum, risus urna nisi. Primis velit turpis sollicitudin. Felis aptent sagittis aliquet turpis et tristique montes vestibulum rutrum. Scelerisque viverra ac ridiculus enim. Curabitur.</span>
				</div>
			</div>
			<div class="col-md-12 col-lg-12 wow animated slideInDown">
				<!-- Slider HTML markup -->
				<div id="slider" style="height:330px;margin:0 auto;">
					
					
					<!-- Slide 1-->
					<div class="ls-slide" data-ls="duration:4000; transition2d:1; kenburnsscale:1.2;">
						<p style=" box-shadow: 0px 4px 2px -3px rgba(0,0,0,0.4);width:940px; height:300px; background:#f5f5f5; top:30px; left:0px;" class="ls-l" data-ls="offsetxin:80; offsetxout:-80; durationout:400; parallaxlevel:0;"></p>
						<img width="491" height="300" src="images/property/20.jpg" class="ls-l" alt="" style="top:30px; left:0px;" data-ls="offsetxin:80; offsetxout:-80; durationout:400; parallaxlevel:0;">
						<div style="width:50px; height:50px; top:144px; left:466px;" class="ls-l" data-ls="delayin:500; rotatein:90; scalexin:0.5; scaleyin:0.5; transformoriginin:50% 50% 50%; offsetxout:-80; durationout:0; rotateout:-90; parallaxlevel:0;">
							<div style="-webkit-transform: rotate(45deg); transform: rotate(45deg); background:#242424; width:100%;height:100%;"></div>
						</div>
						<p style='font-family:"Roboto"; font-size:18px; font-weight: 500; top:78px; left:555px;' class="color-primary ls-l" data-ls="offsetxin:20; delayin:1600; easingin:easeOutQuint; offsetxout:-80; durationout:400; parallaxlevel:0;">$ 12000</p>
						<p style='font-family:"Montserrat"; font-size:24px; font-weight: 600; color:#242424; top:111px; left:555px;' class="ls-l" data-ls="offsetxin:20; delayin:1600; easingin:easeOutQuint; offsetxout:-80; durationout:400; parallaxlevel:0;">Park Avanue Apartment</p>
						<p style='font-family:"Roboto"; font-size:14px; font-weight: 400; color:#666666; top:151px; left:555px;' class="ls-l" data-ls="offsetxin:20; delayin:1600; easingin:easeOutQuint; offsetxout:-80; durationout:400; parallaxlevel:0;"><span class="icon-primary f-14 mr-5"><i class="fa fa-map-marker"></i></span> 11-13 Whitehall, London SW1A 2DD, UK</p>
						<div style='font-weight:300; text-align:justify;width:320px; font-family:"Roboto"; font-size:16px; color:#595959; top:190px; left:555px; white-space:normal;' class="ls-l" data-ls="offsetxin:20; delayin:1700; easingin:easeOutQuint; offsetxout:-80; durationout:400; parallaxlevel:0;">
							<ul class="property-hot-slider-icon icon-primary">
								<li><i class="flaticon-fit-screen"></i> 200</li>
								<li><i class="flaticon-hotel"></i> 3</li>
								<li><i class="flaticon-bathtub"></i> 2</li>
								<li><i class="flaticon-garage"></i> 1</li>
							</ul>
						</div>
						<p style="cursor:pointer;font-family:'Montserrat'; font-size:16px; color:#ffffff; top:235px; left:555px; background:#242424; padding-top:13px; padding-bottom:13px; padding-right:30px; padding-left:30px; border-radius:0px; letter-spacing: 1px; white-space:normal;" class="ls-l" data-ls="durationin:2000; delayin:2300; easingin:easeInOutQuart; rotatexin:90; transformoriginin:50% 0% 0; offsetxout:-80; durationout:400; hover:true; hoverdurationin:300; hoveropacity:1; hoverbgcolor:#242424; parallaxlevel:0;">Visit Property</p>
						<p style='padding-top:5px; padding-right:15px; padding-bottom:5px; padding-left:15px; font-family:"Roboto"; color:#ffffff; background:#242424; border-radius:0px; top:30px; left:445px;' class="ls-l" data-ls="durationin:2000; delayin:2300; easingin:easeInOutQuart; rotatexin:-90; transformoriginin:50% 100% 0; offsetxout:-80; durationout:400; parallaxlevel:0;">For Sale</p>
						<p style='font-family:"Roboto"; font-size:16px; text-align: center; line-height:16px; color:#ffffff; top:153px; left:480px;' class="ls-l" data-ls="delayin:1000; offsetxout:-80; durationout:400; parallaxlevel:0;">NO</p>
						<p style='font-family:"Roboto"; font-size:18px; line-height:26px; text-align: center; color:#ffffff; top:167px; left:485px;' class="ls-l" data-ls="delayin:1000; offsetxout:-80; durationout:400; parallaxlevel:0;">1</p>
					</div>
					
					
					<!-- Slide 2-->
					<div class="ls-slide" data-ls="duration:4000; transition2d:1; kenburnsscale:1.2;">
						<p style=" box-shadow: 0px 4px 2px -3px rgba(0,0,0,0.4);width:940px; height:300px; background:#f5f5f5; top:30px; left:0px;" class="ls-l" data-ls="offsetxin:80; offsetxout:-80; durationout:400; parallaxlevel:0;"></p>
						<img width="491" height="300" src="images/property/21.jpg" class="ls-l" alt="" style="top:30px; left:450px;" data-ls="offsetxin:80; offsetxout:-80; durationout:400; parallaxlevel:0;">
						<div style="width:50px; height:50px; top:145px; left:425px;" class="ls-l" data-ls="delayin:500; rotatein:90; scalexin:0.5; scaleyin:0.5; transformoriginin:50% 50% 50%; offsetxout:-80; durationout:0; rotateout:-90; parallaxlevel:0;">
							<div style="-webkit-transform: rotate(45deg); transform: rotate(45deg); background:#000; width:100%;height:100%;"></div>
						</div>
						<p style='font-family:"Roboto"; font-size:18px; font-weight: 500; top:78px; left:55px;' class="color-primary ls-l" data-ls="offsetxin:20; delayin:1600; easingin:easeOutQuint; offsetxout:-80; durationout:400; parallaxlevel:0;">$ 15000</p>
						<p style='font-family:"Montserrat"; font-size:24px; font-weight: 600; color:#242424; top:111px; left:55px;' class="ls-l" data-ls="offsetxin:20; delayin:1600; easingin:easeOutQuint; offsetxout:-80; durationout:400; parallaxlevel:0;">Villa on Grand Avenue</p>
						<p style='font-family:"Roboto"; font-size:14px; font-weight: 400; color:#666666; top:151px; left:55px;' class="ls-l" data-ls="offsetxin:20; delayin:1600; easingin:easeOutQuint; offsetxout:-80; durationout:400; parallaxlevel:0;"><span class="icon-primary f-14 mr-5"><i class="fa fa-map-marker"></i></span> 40 Tower Avenue, Melbourne, Australia.</p>
						<div style='font-weight:300; text-align:justify;width:320px; font-family:"Roboto"; font-size:16px; color:#595959; top:190px; left:55px; white-space:normal;' class="ls-l" data-ls="offsetxin:20; delayin:1700; easingin:easeOutQuint; offsetxout:-80; durationout:400; parallaxlevel:0;">
							<ul class="property-hot-slider-icon icon-primary">
								<li><i class="flaticon-fit-screen"></i> 300</li>
								<li><i class="flaticon-hotel"></i> 4</li>
								<li><i class="flaticon-bathtub"></i> 2</li>
								<li><i class="flaticon-garage"></i> 1</li>
							</ul>
						</div>
						<p style="cursor:pointer;font-family:'Montserrat'; font-size:16px; color:#ffffff; top:235px; left:55px; background:#242424; padding-top:13px; padding-bottom:13px; padding-right:30px; padding-left:30px; border-radius:0px; letter-spacing: 1px; white-space:normal;" class="ls-l" data-ls="durationin:2000; delayin:2300; easingin:easeInOutQuart; rotatexin:90; transformoriginin:50% 0% 0; offsetxout:-80; durationout:400; hover:true; hoverdurationin:300; hoveropacity:1; hoverbgcolor:#242424; parallaxlevel:0;">Visit Property</p>
						<p style='padding-top:5px; padding-right:15px; padding-bottom:5px; padding-left:15px; font-family:"Roboto"; color:#ffffff; background:#242424; border-radius:0px; top:30px; left:405px;' class="ls-l" data-ls="durationin:2000; delayin:2300; easingin:easeInOutQuart; rotatexin:-90; transformoriginin:50% 100% 0; offsetxout:-80; durationout:400; parallaxlevel:0;">For Sale</p>
						<p style='font-family:"Roboto"; font-size:16px; text-align: center; line-height:16px; color:#ffffff; top:153px; left:440px;' class="ls-l" data-ls="delayin:1000; offsetxout:-80; durationout:400; parallaxlevel:0;">NO</p>
						<p style='font-family:"Roboto"; font-size:18px; line-height:26px; text-align: center; color:#ffffff; top:167px; left:445px;' class="ls-l" data-ls="delayin:1000; offsetxout:-80; durationout:400; parallaxlevel:0;">2</p>
					</div>
					
					
					<!-- Slide 3-->
					<div class="ls-slide" data-ls="duration:4000; transition2d:1; kenburnsscale:1.2;">
						<p style=" box-shadow: 0px 4px 2px -3px rgba(0,0,0,0.4);width:940px; height:300px; background:#f5f5f5; top:30px; left:0px;" class="ls-l" data-ls="offsetxin:80; offsetxout:-80; durationout:400; parallaxlevel:0;"></p>
						<img width="491" height="300" src="images/property/22.jpg" class="ls-l" alt="" style="top:30px; left:0px;" data-ls="offsetxin:80; offsetxout:-80; durationout:400; parallaxlevel:0;">
						<div style="width:50px; height:50px; top:144px; left:466px;" class="ls-l" data-ls="delayin:500; rotatein:90; scalexin:0.5; scaleyin:0.5; transformoriginin:50% 50% 50%; offsetxout:-80; durationout:0; rotateout:-90; parallaxlevel:0;">
							<div style="-webkit-transform: rotate(45deg); transform: rotate(45deg); background:#242424; width:100%;height:100%;"></div>
						</div>
						<p style='font-family:"Roboto"; font-size:18px; font-weight: 500; color:#fd9834; top:78px; left:555px;' class="color-primary ls-l" data-ls="offsetxin:20; delayin:1600; easingin:easeOutQuint; offsetxout:-80; durationout:400; parallaxlevel:0;">$ 50000</p>
						<p style='font-family:"Montserrat"; font-size:24px; font-weight: 600; color:#242424; top:111px; left:555px;' class="ls-l" data-ls="offsetxin:20; delayin:1600; easingin:easeOutQuint; offsetxout:-80; durationout:400; parallaxlevel:0;">Park Avanue Apartment</p>
						<p style='font-family:"Roboto"; font-size:14px; font-weight: 400; color:#666666; top:151px; left:555px;' class="ls-l" data-ls="offsetxin:20; delayin:1600; easingin:easeOutQuint; offsetxout:-80; durationout:400; parallaxlevel:0;"><span class="icon-primary f-14 mr-5"><i class="fa fa-map-marker"></i></span> 11-13 Whitehall, London SW1A 2DD, UK</p>
						<div style='font-weight:300; text-align:justify;width:320px; font-family:"Roboto"; font-size:16px; color:#595959; top:190px; left:555px; white-space:normal;' class="ls-l" data-ls="offsetxin:20; delayin:1700; easingin:easeOutQuint; offsetxout:-80; durationout:400; parallaxlevel:0;">
							<ul class="property-hot-slider-icon icon-primary">
								<li><i class="flaticon-fit-screen"></i> 400</li>
								<li><i class="flaticon-hotel"></i> 6</li>
								<li><i class="flaticon-bathtub"></i> 4</li>
								<li><i class="flaticon-garage"></i> 1</li>
							</ul>
						</div>
						<p style="cursor:pointer;font-family:'Montserrat'; font-size:16px; color:#ffffff; top:235px; left:555px; background:#242424; padding-top:13px; padding-bottom:13px; padding-right:30px; padding-left:30px; border-radius:0px; letter-spacing: 1px; white-space:normal;" class="ls-l" data-ls="durationin:2000; delayin:2300; easingin:easeInOutQuart; rotatexin:90; transformoriginin:50% 0% 0; offsetxout:-80; durationout:400; hover:true; hoverdurationin:300; hoveropacity:1; hoverbgcolor:#242424; parallaxlevel:0;">Visit Property</p>
						<p style='padding-top:5px; padding-right:15px; padding-bottom:5px; padding-left:15px; font-family:"Roboto"; color:#ffffff; background:#242424; border-radius:0px; top:30px; left:445px;' class="ls-l" data-ls="durationin:2000; delayin:2300; easingin:easeInOutQuart; rotatexin:-90; transformoriginin:50% 100% 0; offsetxout:-80; durationout:400; parallaxlevel:0;">For Sale</p>
						<p style='font-family:"Roboto"; font-size:16px; text-align: center; line-height:16px; color:#ffffff; top:153px; left:480px;' class="ls-l" data-ls="delayin:1000; offsetxout:-80; durationout:400; parallaxlevel:0;">NO</p>
						<p style='font-family:"Roboto"; font-size:18px; line-height:26px; text-align: center; color:#ffffff; top:167px; left:485px;' class="ls-l" data-ls="delayin:1000; offsetxout:-80; durationout:400; parallaxlevel:0;">3</p>
					</div>
					
					
					<!-- Slide 4-->
					<div class="ls-slide" data-ls="duration:4000; transition2d:1; kenburnsscale:1.2;">
						<p style=" box-shadow: 0px 4px 2px -3px rgba(0,0,0,0.4);width:940px; height:300px; background:#f5f5f5; top:30px; left:0px;" class="ls-l" data-ls="offsetxin:80; offsetxout:-80; durationout:400; parallaxlevel:0;"></p>
						<img width="491" height="300" src="images/property/23.jpg" class="ls-l" alt="" style="top:30px; left:450px;" data-ls="offsetxin:80; offsetxout:-80; durationout:400; parallaxlevel:0;">
						<div style="width:50px; height:50px; top:145px; left:425px;" class="ls-l" data-ls="delayin:500; rotatein:90; scalexin:0.5; scaleyin:0.5; transformoriginin:50% 50% 50%; offsetxout:-80; durationout:0; rotateout:-90; parallaxlevel:0;">
							<div style="-webkit-transform: rotate(45deg); transform: rotate(45deg); background:#000; width:100%;height:100%;"></div>
						</div>
						<p style='font-family:"Roboto"; font-size:18px; font-weight: 500; top:78px; left:55px;' class="color-primary ls-l" data-ls="offsetxin:20; delayin:1600; easingin:easeOutQuint; offsetxout:-80; durationout:400; parallaxlevel:0;">$ 75000</p>
						<p style='font-family:"Montserrat"; font-size:24px; font-weight: 600; color:#242424; top:111px; left:55px;' class="ls-l" data-ls="offsetxin:20; delayin:1600; easingin:easeOutQuint; offsetxout:-80; durationout:400; parallaxlevel:0;">Villa on Grand Avenue</p>
						<p style='font-family:"Roboto"; font-size:14px; font-weight: 400; color:#666666; top:151px; left:55px;' class="ls-l" data-ls="offsetxin:20; delayin:1600; easingin:easeOutQuint; offsetxout:-80; durationout:400; parallaxlevel:0;"><span class="icon-primary f-14 mr-5"><i class="fa fa-map-marker"></i></span> 40 Tower Avenue, Melbourne, Australia.</p>
						<div style='font-weight:300; text-align:justify;width:320px; font-family:"Roboto"; font-size:16px; color:#595959; top:190px; left:55px; white-space:normal;' class="ls-l" data-ls="offsetxin:20; delayin:1700; easingin:easeOutQuint; offsetxout:-80; durationout:400; parallaxlevel:0;">
							<ul class="property-hot-slider-icon icon-primary">
								<li><i class="flaticon-fit-screen"></i> 500</li>
								<li><i class="flaticon-hotel"></i> 6</li>
								<li><i class="flaticon-bathtub"></i> 4</li>
								<li><i class="flaticon-garage"></i> 1</li>
							</ul>
						</div>
						<p style="cursor:pointer;font-family:'Montserrat'; font-size:16px; color:#ffffff; top:235px; left:55px; background:#242424; padding-top:13px; padding-bottom:13px; padding-right:30px; padding-left:30px; border-radius:0px; letter-spacing: 1px; white-space:normal;" class="ls-l" data-ls="durationin:2000; delayin:2300; easingin:easeInOutQuart; rotatexin:90; transformoriginin:50% 0% 0; offsetxout:-80; durationout:400; hover:true; hoverdurationin:300; hoveropacity:1; hoverbgcolor:#242424; parallaxlevel:0;">Visit Property</p>
						<p style='padding-top:5px; padding-right:15px; padding-bottom:5px; padding-left:15px; font-family:"Roboto"; color:#ffffff; background:#242424; border-radius:0px; top:30px; left:405px;' class="ls-l" data-ls="durationin:2000; delayin:2300; easingin:easeInOutQuart; rotatexin:-90; transformoriginin:50% 100% 0; offsetxout:-80; durationout:400; parallaxlevel:0;">For Sale</p>
						<p style='font-family:"Roboto"; font-size:16px; text-align: center; line-height:16px; color:#ffffff; top:153px; left:440px;' class="ls-l" data-ls="delayin:1000; offsetxout:-80; durationout:400; parallaxlevel:0;">NO</p>
						<p style='font-family:"Roboto"; font-size:18px; line-height:26px; text-align: center; color:#ffffff; top:167px; left:445px;' class="ls-l" data-ls="delayin:1000; offsetxout:-80; durationout:400; parallaxlevel:0;">4</p>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>
<!-- Best Offer End
==================================================================-->
<!-- Popular City Start
==================================================================-->
<section class="gallery bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 wow animated slideInUp">
				<div class="main-title w-75 mx-auto d-table text-center mb-30">
					<span class="small-title color-primary position-relative line-2-primary">Choose Best Place to Buy</span>
					<h2 class="title mb-20 color-secondary">Popular Cities</h2>
					<span class="sub-title">Congue commodo ipsum, risus urna nisi. Primis velit turpis sollicitudin. Felis aptent sagittis aliquet turpis et tristique montes vestibulum rutrum. Scelerisque viverra ac ridiculus enim. Curabitur.</span>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="row">
					<div class="col-lg-12 wow animated slideInUp">
						<div class="gallery-img overflow-hidden position-relative mt-30 overlay-secondary">
							<img src="images/gallery/1.jpg" alt="image">
							<div class="cities-info">
								<h5><a class="color-white" href="#">New York</a></h5>
								<span class="color-gray-light mt-5 d-inline-block">20 Properties</span>
							</div>
						</div>
					</div>
					<div class="col-lg-12 wow animated slideInRight">
						<div class="gallery-img overflow-hidden position-relative mt-30 overlay-secondary">
							<img src="images/gallery/2.jpg" alt="image">
							<div class="cities-info">
								<h5><a class="color-white" href="#">Las Vegas</a></h5>
								<span class="color-gray-light mt-5 d-inline-block">15+ Properties</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-5">
				<div class="gallery-img overflow-hidden position-relative mt-30 overlay-secondary wow animated slideInDown">
					<img src="images/gallery/3.jpg" alt="image">
					<div class="cities-info">
						<h5><a class="color-white" href="#">San Francisco</a></h5>
						<span class="color-gray-light mt-5 d-inline-block">42 Properties</span>
					</div>
				</div>
				<div class="gallery-img overflow-hidden position-relative mt-30 overlay-secondary wow animated slideInLeft">
					<img src="images/gallery/4.jpg" alt="image">
					<div class="cities-info">
						<h5><a class="color-white" href="#">California</a></h5>
						<span class="color-gray-light mt-5 d-inline-block">35+ Properties</span>
					</div>
				</div>

			</div>
			<div class="col-lg-3">
				<div class="gallery-img overflow-hidden position-relative mt-30 overlay-secondary wow animated slideInUp">
					<img src="images/gallery/6.jpg" alt="image">
					<div class="cities-info">
						<h5><a class="color-white" href="#">Melbourne</a></h5>
						<span class="color-gray-light mt-5 d-inline-block">20+ Properties</span>
					</div>
				</div>
				<div class="gallery-img overflow-hidden position-relative mt-30 overlay-secondary wow animated slideInRight">
					<img src="images/gallery/7.jpg" alt="image">
					<div class="cities-info">
						<h5><a class="color-white" href="#">Moscow</a></h5>
						<span class="color-gray-light mt-5 d-inline-block">30+ Properties</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Popular City End
==================================================================-->
<!-- Experience and Achievements Start
==================================================================-->
<div class="experience-achievement bg-gray">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 col-lg-4 wow animated slideInLeft">
				<div class="row">
					<div class="bg-secondary py-80 px-60 color-white">
						<h3>More than <span class="display-1 color-primary">39</span>years of Experience</h3>
					</div>
				</div>
			</div>
			<div class="col-md-12 col-lg-8 py-80 px-60 overlay-secondary-6 wow animated slideInRight" style="background: url(images/background/2.png) center center /cover; height: fit-content; margin-top: 80px;">
				<div class="fact-counter text-center">
		            <div class="row">
		              <div class="col-md-6 col-lg-6 col-xl-3">
		                <div class="counter count wow py-40 px-15 bg-secondary">
		                  <div class="counter-point d-inline-block">
		                    <h2 class="count-num color-primary" data-speed="3000" data-stop="2529">0</h2>
		                  </div>
		                  <h6 class="achievement-title color-white">Property For Rent</h6>
		                </div>
		              </div>
		              <div class="col-md-6 col-lg-6 col-xl-3">
		                <div class="counter count wow py-40 px-15 mt-sm-30 bg-secondary">
		                  <div class="counter-point d-inline-block">
		                    <h2 class="count-num color-primary" data-speed="3000" data-stop="1064">0</h2>
		                  </div>
		                  <h6 class="achievement-title color-white">Property For Sale</h6>
		                </div>
		              </div>
		              <div class="col-md-6 col-lg-6 col-xl-3">
		                <div class="counter count wow py-40 px-15 mt-lg-30 bg-secondary">
		                  <div class="counter-point d-inline-block">
		                    <h2 class="count-num color-primary" data-speed="3000" data-stop="720">0</h2>
		                  </div>
		                  <h6 class="achievement-title color-white">Agents</h6>
		                </div>
		              </div>
		              <div class="col-md-6 col-lg-6 col-xl-3">
		                <div class="counter count wow py-40 px-15 mt-lg-30 bg-secondary">
		                  <div class="counter-point d-inline-block">
		                    <h2 class="count-num color-primary" data-speed="3000" data-stop="117">0</h2>
		                  </div>
		                  <h6 class="achievement-title color-white">Broker Houses</h6>
		                </div>
		              </div>
		            </div>
		        </div>
			</div>
		</div>
	</div>
</div>
<!-- Experience and Achievements Start
==================================================================-->
<!-- Properties Thumbnail Start
==================================================================-->
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-12 wow animated slideInUp">
				<div class="main-title w-75 mx-auto d-table text-center mb-30">
					<span class="small-title color-primary position-relative line-2-primary">Find Out the Best One</span>
					<h2 class="title mb-20 color-secondary">Featured Properties</h2>
					<span class="sub-title">Congue commodo ipsum, risus urna nisi. Primis velit turpis sollicitudin. Felis aptent sagittis aliquet turpis et tristique montes vestibulum rutrum. Scelerisque viverra ac ridiculus enim. Curabitur.</span>
				</div>
			</div>
			<div class="col-md-12 col-lg-6 wow animated slideInUp">
				<div class="property-thumbnail mt-30">
					<div class="property-img position-relative overflow-hidden overlay-secondary-4">
						<img src="images/property/7.jpg" alt="image">
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
								<div class="thumbnail-title pb-10 z-index-1 position-relative">
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
			<div class="col-md-12 col-lg-6 wow animated slideInRight">
				<div class="property-thumbnail mt-30">
					<div class="property-img position-relative overflow-hidden overlay-secondary-4">
						<img src="images/property/8.jpg" alt="image">
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
								<div class="thumbnail-title pb-10 z-index-1 position-relative">
									<span class="thumbnail-price bg-white color-secondary px-15 mb-10 d-table">1.2k <sub>/Month</sub></span>
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
			<div class="col-md-12 col-lg-6 wow animated slideInDown">
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
								<div class="thumbnail-title pb-10 z-index-1 position-relative">
									<span class="thumbnail-price bg-white color-secondary px-15 mb-10 d-table">$ 15200</span>
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
			<div class="col-md-12 col-lg-6 wow animated slideInLeft">
				<div class="property-thumbnail mt-30">
					<div class="property-img position-relative overflow-hidden overlay-secondary-4">
						<img src="images/property/2.jpg" alt="image">
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
								<div class="thumbnail-title pb-10 z-index-1 position-relative">
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
		</div>
	</div>
</section>
<!-- Properties Thumbnail End
==================================================================-->
<!-- Home Loan Start
==================================================================-->
<div class="wow animated slideInUp" style="background: url(images/background/11.jpg) top center /cover; padding: 150px 0;">
	<div class="container">
		<div class="row" style="min-height: 50px;">
			<div class="col-md-12 col-lg-5">
				<div class="loan color-secondary bg-white py-40 px-30">
					<h2>Need a Home Loan?</h2>
					<h3 class="mb-20 color-primary">Get Pre-Approved</h3>
					<p>Etiam dictumst amet arcu senects sagit felis ultrice ligula magna class platea pretium molest ridiculu gravida lorem sceleris taciti diam cursus nullam luctu etiam proin imper nisi laoreet neque.</p>
				</div>
				
			</div>
			<div class="col align-self-end">
		      <a class="btn btn-primary position-relative mt-md-30" href="#">Get Pre-Approved Now</a>
		    </div>
		</div>
	</div>
</div>
<!-- Home Loan End
==================================================================-->
<!-- Top Agencies Start
==================================================================-->
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-6 wow animated slideInUp">
				<div class="side-title pb-30">
					<span class="small-title color-primary position-relative line-primary">Hot</span>
					<h2 class="title mb-20 color-secondary">Top Agencies</h2>
					<p>Luctus posuere facilisi eros auctor lacinia litora. Convall aptent nisy parturient scelerisq. Nullam fringil condimen integer mauris lacus aliquam, quam massa lobortis commod proin magna.</p>
				</div>
			</div>
			<div class="col-md-12 col-lg-12">
				<div class="row">
					<div class="col-md-12 col-lg-6 wow animated slideInUp">
						<div class="agencies mt-30 py-40 px-30 bg-gray hover-secondery-primary">
							<div class="row">
								<div class="col-md-12 col-lg-12 col-xl-4 d-flex align-items-center">
									<a href="#"><img src="images/partner/1.png" alt="image"></a>
								</div>
								<div class="col-md-12 col-lg-12 col-xl-8">
									<div class="agencies-content">
										<a href="#"><h4>Homelax Builders</h4></a>
										<span class="mt-5 mb-30 d-block">11-13 Whitehall, London SW1A 2DD, UK</span>
										<ul>
											<li>
												<div class="position-relative bg-secondary color-white py-5 px-10 d-inline-block">
													Properties <span class="number">57</span>
												</div>
											</li>
											<li>
												<div class="position-relative bg-secondary color-white py-5 px-10 d-inline-block">
													Featured <span class="number">36</span>
												</div>
											</li>
											<li>
												<div class="position-relative bg-secondary color-white py-5 px-10 d-inline-block">
													Agents <span class="number">18</span>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-lg-6 wow animated slideInRight">
						<div class="agencies mt-30 py-40 px-30 bg-gray hover-secondery-primary">
							<div class="row">
								<div class="col-md-12 col-lg-12 col-xl-4 d-flex align-items-center">
									<a href="#"><img src="images/partner/2.png" alt="image"></a>
								</div>
								<div class="col-md-12 col-lg-12 col-xl-8">
									<div class="agencies-content">
										<a href="#"><h4>Landex Builders</h4></a>
										<span class="mt-5 mb-30 d-block">366 Glenmore Ave, Brooklyn, USA.</span>
										<ul>
											<li>
												<div class="position-relative bg-secondary color-white py-5 px-10 d-inline-block">
													Properties <span class="number">89</span>
												</div>
											</li>
											<li>
												<div class="position-relative bg-secondary color-white py-5 px-10 d-inline-block">
													Featured <span class="number">43</span>
												</div>
											</li>
											<li>
												<div class="position-relative bg-secondary color-white py-5 px-10 d-inline-block">
													Agents <span class="number">24</span>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-lg-6 wow animated slideInDown">
						<div class="agencies mt-30 py-40 px-30 bg-gray hover-secondery-primary">
							<div class="row">
								<div class="col-md-12 col-lg-12 col-xl-4 d-flex align-items-center">
									<a href="#"><img src="images/partner/3.png" alt="image"></a>
								</div>
								<div class="col-md-12 col-lg-12 col-xl-8">
									<div class="agencies-content">
										<a href="#"><h4>Nester Builders</h4></a>
										<span class="mt-5 mb-30 d-block">40 Tower Avenue, Melbourne, Australia.</span>
										<ul>
											<li>
												<div class="position-relative bg-secondary color-white py-5 px-10 d-inline-block">
													Properties <span class="number">47</span>
												</div>
											</li>
											<li>
												<div class="position-relative bg-secondary color-white py-5 px-10 d-inline-block">
													Featured <span class="number">26</span>
												</div>
											</li>
											<li>
												<div class="position-relative bg-secondary color-white py-5 px-10 d-inline-block">
													Agents <span class="number">12</span>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-lg-6 wow animated slideInLeft">
						<div class="agencies mt-30 py-40 px-30 bg-gray hover-secondery-primary">
							<div class="row">
								<div class="col-md-12 col-lg-12 col-xl-4 d-flex align-items-center">
									<a href="#"><img src="images/partner/4.png" alt="image"></a>
								</div>
								<div class="col-md-12 col-lg-12 col-xl-8">
									<div class="agencies-content">
										<a href="#"><h4>Realhome Builders</h4></a>
										<span class="mt-5 mb-30 d-block">11-13 Whitehall, London SW1A 2DD, UK</span>
										<ul>
											<li>
												<div class="position-relative bg-secondary color-white py-5 px-10 d-inline-block">
													Properties <span class="number">57</span>
												</div>
											</li>
											<li>
												<div class="position-relative bg-secondary color-white py-5 px-10 d-inline-block">
													Featured <span class="number">36</span>
												</div>
											</li>
											<li>
												<div class="position-relative bg-secondary color-white py-5 px-10 d-inline-block">
													Agents <span class="number">18</span>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Top Agencies End
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
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDlVVUxeZqpBLv-jrgsQO1XQ7wvBS9mlRo"></script>
  <script src="js/map/markerwithlabel_packed.js"></script>
  <script src="js/map/infobox.js"></script> 
  <script src="js/map/markerclusterer_packed.js"></script> 
  <script src="js/validate.js"></script>
  <script src="js/map/custom-map.js"></script> 
	<script>
		(function($){
		// Map View Latitude & Longitude
  		//------------------------------------
			var _latitude = 36.596165;
			var _longitude = -97.062988;
			createHomepageGoogleMap(_latitude,_longitude);
		// Layer Slider
  		//------------------------------------
			$('#slider').layerSlider({
				sliderVersion: '6.0.0',
				type: 'fullwidth',
				responsiveUnder: 940,
				maxRatio: 1,
				hideOver: 100000,
				skin: 'noskin',
				navPrevNext: false,
				thumbnailNavigation: 'disabled',
				allowRestartOnResize: true,
				width: 940,
				skinsPath: 'images/slider/skins/'
			});

		})(jQuery);

	</script>
</body>
</html>