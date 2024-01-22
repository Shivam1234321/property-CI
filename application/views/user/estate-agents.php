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
      .page-link.active {
	background-color: #00afa9;
}
.btn.btn-primary.w-100 {
	background-color: #00afa9 !important;
}
.btn.btn-primary.w-100:hover {
	background-color: transparent !important;
	color:#343a40 !important;
}
.btn.btn-primary.w-100 {
	border: 2px solid #00afa9 !important;
}
.bg-white.shadow.py-80 {
	background-color: #ffff !important;
}
.nav-link.active {
	background-color: #00afa9  !important;
}
.animated {
	display: ;
	animation: none !important;
}
.agencies.mt-30.py-40.px-30.bg-white.hover-secondery-primary {
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
<!-- Property Grid Start
==================================================================-->
<section class="bg-light">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-12 wow slideInDown animated">
				<div class="top-filter pb-15 border-bottom-1-gray">
					<div class="row">
						<div class="col-md-3 col-lg-6 col-xl-7">
							<label>1-6 of 20 results</label>
						</div>
						<div class="col-md-9 col-lg-6 col-xl-5">
							<div class="row">
								<div class="col-md-9 col-lg-7">
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
								<div class="col-md-3 col-lg-5">
									<ul class="nav nav-tabs border-0 float-right navbar-tab-view mt-sm-15" id="myTab" role="tablist" style="line-height: 20px;">
								  		<li class="nav-item">
									    	<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><i class="fa fa-th-large" aria-hidden="true"></i></a>
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
			<div class="col-md-12 col-lg-4">
				<form class="adbanced-form-two amenities-list bg-white py-40 px-30 mt-30 wow slideInUp animated" style="background-color:#fff !important">
					<h3 class="color-secondary line-bottom pb-15 mb-20">Find Agency</h3>
	  				<div class="row">
	  					<div class="form-group col-md-12">
							<input type="text" class="form-control bg-gray" placeholder="Write Agent Name">
						</div>
	  					<div class="form-group col-lg-12 pt-15">
							<div class="select-wrapper position-relative">
								<select class="select form-control">
									<option>All Category</option>
									<option>Apartment</option>
									<option>Building</option>
									<option>Condominium</option>
									<option>House</option>
									<option>Office</option>
									<option>Shop</option>
								</select>
							</div>
						</div>
						<div class="form-group col-md-12 mt-15">
							<input type="text" class="form-control bg-gray" placeholder="Country">
						</div>
						<div class="form-group col-md-12 mt-15">
							<input type="text" class="form-control bg-gray" placeholder="Location">
						</div>
						<div class="col-lg-12 mt-15"><button type="submit" class="btn btn-primary w-100">Search Agencies</button></div>				
	  				</div>
	  			</form>
	  			<div class="sidebar-widget bg-white mt-50 shadow py-40 px-30 wow slideInUp animated" style="background-color:#fff !important">
					<h3 class="color-secondary line-bottom pb-15 mb-20">Top Agency</h3>
					<ul>
						<li class="border-bottom-1-gray pb-15">
							<div class="agencies hover-secondery-primary">
								<a href="./agents-details.php">
									<div class="agencies-content">
										<h5>Homelax Builderss</h5>
										<span class="mt-5 d-block color-gray f-14">11-13 Whitehall, London SW1A 2DD, UK</span>
									</div>
								</a>
							</div>
						</li>
						<li class="color-secondary-a border-bottom-1-gray py-15">
							<div class="agencies hover-secondery-primary">
								<a href="#">
								<div class="agencies-content">
									<h5>Landex Builders</h5>
									<span class="mt-5 d-block color-gray f-14">366 Glenmore Ave, Brooklyn, USA.</span>
								</div>
								</a>
							</div>
						</li>
						<li class="color-secondary-a border-bottom-1-gray py-15">
							<div class="agencies hover-secondery-primary">
								<a href="#">
									<div class="agencies-content">
										<h5>Nester Builders</h5>
										<span class="mt-5 d-block color-gray f-14">40 Tower Avenue, Melbourne, Australia.</span>
									</div>
								</a>
							</div>
						</li>
						<li class="color-secondary-a pt-15">
							<div class="agencies hover-secondery-primary">
								<a href="#">
								<div class="agencies-content">
									<h5>Realhome Builders</h5>
									<span class="mt-5 d-block color-gray f-14">11-13 Whitehall, London SW1A 2DD, UK</span>
								</div>
								</a>
							</div>
						</li>
					</ul>
				</div>
	  	<!--		<div class="sidebar-widget bg-white mt-50 shadow py-40 px-30 wow slideInUp animated">-->
				<!--	<h3 class="color-secondary line-bottom pb-15 mb-20">Latest Properties</h3>-->
				<!--	<div class="owl-carousel slide-1 owl-dots-none">-->
				<!--		<div class="property-item">-->
				<!--			<div class="property-img position-relative overflow-hidden overlay-secondary-4">-->
				<!--				<img src="images/property/5.jpg" alt="image">-->
				<!--				<span class="thum-category category-1 bg-secondary color-white z-index-1 px-15">New</span>-->
				<!--				<ul class="hover-option position-absolute icon-white z-index-1">-->
				<!--					<li>-->
				<!--						<a data-toggle="tooltip" data-placement="top" title="Wishlist" href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>-->
				<!--					</li>-->
				<!--					<li>-->
				<!--						<a data-toggle="tooltip" data-placement="top" title="Compare" href="#"><i class="fa fa-random" aria-hidden="true"></i></a>-->
				<!--					</li>-->
				<!--				</ul>-->
				<!--				<div class="meta-property icon-primary color-white z-index-1">-->
				<!--					<ul>-->
				<!--						<li><i class="fa fa-calendar"></i> 06/27/2020</li>-->
				<!--						<li><i class="fa fa-user"></i> James Bond</li>-->
				<!--					</ul>-->
				<!--				</div>-->
				<!--			</div>-->
				<!--			<div class="property-content bg-white pt-30 pb-50">-->
				<!--				<a class="color-secondary mb-5" href="single-property.html"><h5>Park Avanue Apartment.</h5></a>-->
				<!--				<span class="address icon-primary f-14"><i class="fa fa-map-marker"></i>Urbis Building Cathedral Gardens, UK</span>-->
				<!--				<ul class="about-property list-half icon-primary d-table f-14 mb-30 mt-20">-->
				<!--					<li><i class="flaticon-fit-screen"></i>200 sqft</li>-->
				<!--					<li><i class="flaticon-hotel"></i>6 Bedrooms</li>-->
				<!--					<li><i class="flaticon-bathtub"></i>4 Bathrooms</li>-->
				<!--					<li><i class="flaticon-garage"></i>1 Garage</li>-->
				<!--				</ul>-->
				<!--				<div class="property-cost color-white list-half w-100">-->
				<!--					<ul>-->
				<!--						<li>For Rent</li>-->
				<!--						<li>1.2k <sub>/Month</sub></li>-->
				<!--					</ul>-->
				<!--				</div>-->
				<!--			</div>-->
				<!--		</div>-->
				<!--		<div class="property-item">-->
				<!--			<div class="property-img position-relative overflow-hidden overlay-secondary-4">-->
				<!--				<img src="images/property/1.jpg" alt="image">-->
				<!--				<span class="thum-category category-1 bg-secondary color-white z-index-1 px-15">New</span>-->
				<!--				<ul class="hover-option position-absolute icon-white z-index-1">-->
				<!--					<li>-->
				<!--						<a data-toggle="tooltip" data-placement="top" title="Wishlist" href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>-->
				<!--					</li>-->
				<!--					<li>-->
				<!--						<a data-toggle="tooltip" data-placement="top" title="Compare" href="#"><i class="fa fa-random" aria-hidden="true"></i></a>-->
				<!--					</li>-->
				<!--				</ul>-->
				<!--				<div class="meta-property icon-primary color-white z-index-1">-->
				<!--					<ul>-->
				<!--						<li><i class="fa fa-calendar"></i> 06/27/2020</li>-->
				<!--						<li><i class="fa fa-user"></i> James Bond</li>-->
				<!--					</ul>-->
				<!--				</div>-->
				<!--			</div>-->
				<!--			<div class="property-content bg-white pt-30 pb-50">-->
				<!--				<a class="color-secondary mb-5" href="single-property.html"><h5>Villa on Grand Avenue</h5></a>-->
				<!--				<span class="address icon-primary f-14"><i class="fa fa-map-marker"></i>366 Glenmore Ave, Brooklyn, USA.</span>-->
				<!--				<ul class="about-property list-half icon-primary d-table f-14 mb-30 mt-20">-->
				<!--					<li><i class="flaticon-fit-screen"></i>200 sqft</li>-->
				<!--					<li><i class="flaticon-hotel"></i>3 Bedrooms</li>-->
				<!--					<li><i class="flaticon-bathtub"></i>2 Bathrooms</li>-->
				<!--					<li><i class="flaticon-garage"></i>1 Garage</li>-->
				<!--				</ul>-->
				<!--				<div class="property-cost color-white list-half w-100">-->
				<!--					<ul>-->
				<!--						<li>For Rent</li>-->
				<!--						<li>1.8k <sub>/Month</sub></li>-->
				<!--					</ul>-->
				<!--				</div>-->
				<!--			</div>-->
				<!--		</div>-->
				<!--		<div class="property-item">-->
				<!--			<div class="property-img position-relative overflow-hidden overlay-secondary-4">-->
				<!--				<img src="images/property/4.jpg" alt="image">-->
				<!--				<span class="thum-category category-1 bg-secondary color-white z-index-1 px-15">New</span>-->
				<!--				<ul class="hover-option position-absolute icon-white z-index-1">-->
				<!--					<li>-->
				<!--						<a data-toggle="tooltip" data-placement="top" title="Wishlist" href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>-->
				<!--					</li>-->
				<!--					<li>-->
				<!--						<a data-toggle="tooltip" data-placement="top" title="Compare" href="#"><i class="fa fa-random" aria-hidden="true"></i></a>-->
				<!--					</li>-->
				<!--				</ul>-->
				<!--				<div class="meta-property icon-primary color-white z-index-1">-->
				<!--					<ul>-->
				<!--						<li><i class="fa fa-calendar"></i> 06/27/2020</li>-->
				<!--						<li><i class="fa fa-user"></i> James Bond</li>-->
				<!--					</ul>-->
				<!--				</div>-->
				<!--			</div>-->
				<!--			<div class="property-content bg-white pt-30 pb-50">-->
				<!--				<a class="color-secondary mb-5" href="single-property.html"><h5>Park Avanue Apartment.</h5></a>-->
				<!--				<span class="address icon-primary f-14"><i class="fa fa-map-marker"></i>11-13 Whitehall, London, UK</span>-->
				<!--				<ul class="about-property list-half icon-primary d-table f-14 mb-30 mt-20">-->
				<!--					<li><i class="flaticon-fit-screen"></i>200 sqft</li>-->
				<!--					<li><i class="flaticon-hotel"></i>3 Bedrooms</li>-->
				<!--					<li><i class="flaticon-bathtub"></i>2 Bathrooms</li>-->
				<!--					<li><i class="flaticon-garage"></i>1 Garage</li>-->
				<!--				</ul>-->
				<!--				<div class="property-cost color-white list-half w-100">-->
				<!--					<ul>-->
				<!--						<li>For Rent</li>-->
				<!--						<li>1.8k <sub>/Month</sub></li>-->
				<!--					</ul>-->
				<!--				</div>-->
				<!--			</div>-->
				<!--		</div>-->
				<!--	</div>-->
				<!--</div>-->
			</div>
			<div class="col-md-12 col-lg-8">
				<div class="tab-content" id="myTabContent">
			  		<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
			  			<div class="row">
			  				<div class="col-md-12 col-lg-6 wow slideInLeft animated">
			  					<div class="agencies mt-30 py-40 px-30 bg-white hover-secondery-primary" style="background-color:#fff !important">
									<a href="#"><img src="images/partner/1.png" alt="image"></a>
									<div class="agencies-content mt-10">
										<a href="./agents-details.php"><h4>Homelax Builders</h4></a>
										<span class="mt-5 mb-30 d-block">11-13 Whitehall, London SW1A 2DD, UK</span>
										<ul class="d-table">
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
			  				<div class="col-md-12 col-lg-6 wow slideInRight animated">
			  					<div class="agencies mt-30 py-40 px-30 bg-white hover-secondery-primary" style="background-color:#fff !important">
									<a href="#"><img src="images/partner/2.png" alt="image"></a>
									<div class="agencies-content mt-10">
										<a href="#"><h4>Landex Builders</h4></a>
										<span class="mt-5 mb-30 d-block">366 Glenmore Ave, Brooklyn, USA.</span>
										<ul class="d-table">
											<li>
												<div class="position-relative bg-secondary color-white py-5 px-10 d-inline-block">
													Properties <span class="number">89</span>
												</div>
											</li>
											<li>
												<div class="position-relative bg-secondary color-white py-5 px-10 d-inline-block">
													Featured <span class="number">34</span>
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
							<div class="col-md-12 col-lg-6 wow slideInDown animated">
			  					<div class="agencies mt-30 py-40 px-30 bg-white hover-secondery-primary" style="background-color:#fff !important">
									<a href="#"><img src="images/partner/3.png" alt="image"></a>
									<div class="agencies-content mt-10">
										<a href="#"><h4>Nester Builders</h4></a>
										<span class="mt-5 mb-30 d-block">40 Tower Avenue, Melbourne, Australia.</span>
										<ul class="d-table">
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
							<div class="col-md-12 col-lg-6 wow slideInUp animated">
			  					<div class="agencies mt-30 py-40 px-30 bg-white hover-secondery-primary" style="background-color:#fff !important">
									<a href="#"><img src="images/partner/4.png" alt="image"></a>
									<div class="agencies-content mt-10">
										<a href="#"><h4>Realhome Builders</h4></a>
										<span class="mt-5 mb-30 d-block">11-13 Whitehall, London SW1A 2DD, UK</span>
										<ul class="d-table">
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
							<div class="col-md-12 col-lg-6 wow slideInLeft animated">
			  					<div class="agencies mt-30 py-40 px-30 bg-white hover-secondery-primary" style="background-color:#fff !important">
									<a href="#"><img src="images/partner/5.png" alt="image"></a>
									<div class="agencies-content mt-10">
										<a href="#"><h4>Houser Builders</h4></a>
										<span class="mt-5 mb-30 d-block">40 Tower Avenue, Melbourne, Australia.</span>
										<ul class="d-table">
											<li>
												<div class="position-relative bg-secondary color-white py-5 px-10 d-inline-block">
													Properties <span class="number">47</span>
												</div>
											</li>
											<li>
												<div class="position-relative bg-secondary color-white py-5 px-10 d-inline-block">
													Featured <span class="number">17</span>
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
							<div class="col-md-12 col-lg-6 wow slideInRight animated">
			  					<div class="agencies mt-30 py-40 px-30 bg-white hover-secondery-primary" style="background-color:#fff !important">
									<a href="#"><img src="images/partner/6.png" alt="image"></a>
									<div class="agencies-content mt-10">
										<a href="#"><h4>Realwind Builders</h4></a>
										<span class="mt-5 mb-30 d-block">11-13 Whitehall, London SW1A 2DD, UK</span>
										<ul class="d-table">
											<li>
												<div class="position-relative bg-secondary color-white py-5 px-10 d-inline-block">
													Properties <span class="number">28</span>
												</div>
											</li>
											<li>
												<div class="position-relative bg-secondary color-white py-5 px-10 d-inline-block">
													Featured <span class="number">14</span>
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
			  				<div class="col-lg-12 wow slideInUp animated">
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
			  				<div class="col-md-12 col-lg-12 wow slideInUp animated">
								<div class="agencies mt-30 py-40 px-30 bg-white hover-secondery-primary" style="background-color:#fff !important">
									<div class="row">
										<div class="col-md-12 col-lg-4 d-flex align-items-center">
											<a href="#"><img src="images/partner/1.png" alt="image"></a>
										</div>
										<div class="col-md-12 col-lg-8">
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
							<div class="col-md-12 col-lg-12 wow slideInDown animated">
								<div class="agencies mt-30 py-40 px-30 bg-white hover-secondery-primary" style="background-color:#fff !important">
									<div class="row">
										<div class="col-md-12 col-lg-4 d-flex align-items-center">
											<a href="#"><img src="images/partner/2.png" alt="image"></a>
										</div>
										<div class="col-md-12 col-lg-8">
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
							<div class="col-md-12 col-lg-12 wow slideInUp animated">
								<div class="agencies mt-30 py-40 px-30 bg-white hover-secondery-primary">
									<div class="row">
										<div class="col-md-12 col-lg-4 d-flex align-items-center">
											<a href="#"><img src="images/partner/3.png" alt="image"></a>
										</div>
										<div class="col-md-12 col-lg-8">
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
							<div class="col-md-12 col-lg-12 wow slideInDown animated">
								<div class="agencies mt-30 py-40 px-30 bg-white hover-secondery-primary">
									<div class="row">
										<div class="col-md-12 col-lg-4 d-flex align-items-center">
											<a href="#"><img src="images/partner/4.png" alt="image"></a>
										</div>
										<div class="col-md-12 col-lg-8">
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
							<div class="col-md-12 col-lg-12 wow slideInUp animated">
								<div class="agencies mt-30 py-40 px-30 bg-white hover-secondery-primary">
									<div class="row">
										<div class="col-md-12 col-lg-4 d-flex align-items-center">
											<a href="#"><img src="images/partner/5.png" alt="image"></a>
										</div>
										<div class="col-md-12 col-lg-8">
											<div class="agencies-content">
												<a href="#"><h4>Houser Builders</h4></a>
												<span class="mt-5 mb-30 d-block">40 Tower Avenue, Melbourne, Australia.</span>
												<ul>
													<li>
														<div class="position-relative bg-secondary color-white py-5 px-10 d-inline-block">
															Properties <span class="number">47</span>
														</div>
													</li>
													<li>
														<div class="position-relative bg-secondary color-white py-5 px-10 d-inline-block">
															Featured <span class="number">17</span>
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
							<div class="col-md-12 col-lg-12 wow slideInDown animated">
								<div class="agencies mt-30 py-40 px-30 bg-white hover-secondery-primary">
									<div class="row">
										<div class="col-md-12 col-lg-4 d-flex align-items-center">
											<a href="#"><img src="images/partner/6.png" alt="image"></a>
										</div>
										<div class="col-md-12 col-lg-8">
											<div class="agencies-content">
												<a href="#"><h4>Realwind Builders</h4></a>
												<span class="mt-5 mb-30 d-block">11-13 Whitehall, London SW1A 2DD, UK</span>
												<ul>
													<li>
														<div class="position-relative bg-secondary color-white py-5 px-10 d-inline-block">
															Properties <span class="number">28</span>
														</div>
													</li>
													<li>
														<div class="position-relative bg-secondary color-white py-5 px-10 d-inline-block">
															Featured <span class="number">14</span>
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
							<div class="col-lg-12 wow slideInUp animated">
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