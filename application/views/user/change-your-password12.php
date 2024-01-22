<!DOCTYPE html>
<html lang="en">

<head>
	<!--===== Meta Tag =====-->
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="description" content="Fresher - Real Estate Template">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords"
		content="business, property, directory, listing, real estate, Real estate template, realtor, developer, apartment, broker, real estate agency, map, company, agent, rent house">
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
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap"
		rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

	<!-- Title -->
	<title>Fresher - Real Estate Template</title>

	<!-- Favicon Icon -->
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
	<style>
		.logreg-btn input {
			border-radius: 4px;
		}

		.logreg-btn {
			padding: 20px;
		}

		.map-sr-content,
		.prop-sr-content,
		.moving-sr-content {
			padding: 5px;
		}

		.quick-link a {
			display: contents !important;
			font-size: 14px !important;
		}

		.text-thumbnail {
			border: 1px solid #DFDFE1;
			border-radius: 5px;
		}

		.form-group {
			margin-bottom: 15px;
			/* padding: 5px; */
			/* margin-left: 10px; */
		}

		.adbanced-form-two.amenities-list.bg-light.p-20.mt-30.pl-0 .form-group .sale-rent {
			margin: auto;
			margin-top: 0px;
			margin-bottom: 15px;
			padding: 5px;
			width: 150px;
		}

		.form-group.sale-rent {
			margin: auto;
			margin-top: 0px;
			width: 150px;
		}

		.form-group.sale-rent .btn {
			padding: 0px !important;
		}

		.d-inline-block a {
			color: black !important;
			margin-top: 11px;
		}

		.d-inline-block a:hover {
			color: #fd9834 !important;
		}

		/*aftr*/
		#navbarSupportedContent li a {
			color: #313131 !important;
		}

		#navbarSupportedContent li a:hover {
			color: #fd9834 !important;
		}

		.fa.fa-search {
			color: #313131 !important;
		}

		.admin-info.color-white-a {
			width: 155px;
			margin-left: 10px;
		}

		.toggle-btn.collapsed span {
			background-color: #fd9834 !important;
		}

		#header.header-seven button.toggle-btn,
		#header.header-six button.toggle-btn {
			background-color: transparent;
		}

		.bg-white,
		.btn-white,
		header.header-fixed,
		.invoice-list-table tbody td:nth-child(2n+1),
		.items-list tr td:nth-child(2n+1),
		.btn-secondery:hover,
		.toggle-btn[aria-expanded="true"] span:nth-child(2) {
			background-color: #fd9834 !important;
		}

		.toggle-btn span {
			background-color: #fd9834 !important;
		}

		.text-thumbnail.w-c-img img {
			width: 274px;
			height: 144px !important;
			float: right !important;
		}

		.my-header {

			display: flex;
			-moz-box-pack: justify;
			width: 100%;
			justify-content: space-between;
			0px 10px 0px 10px
		}

		.usr-icn {
			background-color: rgb(17, 89, 141);
			border-radius: 100%;
			width: 48px;
			height: 48px;
			margin-bottom: 8px;
			display: flex;
			-moz-box-pack: center;
			justify-content: center;
			-moz-box-align: center;
			align-items: center;
			color: #fff;
		}

		.sv1,
		.sv2 {
			width: 100%;
			padding: 24px;
			box-sizing: border-box;
			border-radius: 4px;
			box-shadow: rgba(38, 38, 55, 0.24) 0px 1px 1px 0px, rgba(38, 38, 55, 0.32) 0px 0px 1px 0px;
			display: grid;
			grid-template-columns: auto auto 1fr;
			grid-template-rows: repeat(3, min-content);
			gap: 4px 16px;
			grid-template-areas: "image saved saved""image address address""image price1 price2";
		}

		.rsd {
			line-height: 17px;
			font-size: 14px;
		}

		.upg img {
			width: 96px !important;
			height: 96px !important;
			border-radius: 3px !important;
		}

		.saved-time,
		.upload-time {
			font-size: 12px;
		}

		.pn {
			line-height: 22px;
			font-weight: 600;
		}

		.dob-usr,
		.usr-adrs {
			font-size: 16px;
		}

		@media only screen and (max-width: 768px) {
			.row.mt-20.mv {
				grid-gap: 10px !important;
			}
		}

		.my-header a {
			font-weight: 600;
			color: #FD9834;
		}

		.my-headerbg-light.bg-light {
			display: flex;
			-moz-box-pack: justify;
			width: 100%;
			justify-content: space-between;
		}

		.container.bg,
		.my-headerbg-light.bg-light {
			background-color: #ffff !important;
		}

		/********/
		.my-headerbg-light.bg-light .container {
			display: flex;
			-moz-box-pack: justify;
			width: 100%;
			justify-content: space-between;
		}

		.navbar.navbar-expand-lg.navbar-light.containerr {
			background-color: #ffff !important;
		}

		.my-headerbg-light.bg-light .container {
			border-bottom: 1px dotted #8a8a8a;
			padding-bottom: 28px;
			padding-top: 17px;
		}

		.acc-hdr.bg-light {
			padding-bottom: 0px !important;
		}

		.container.bg {
			padding-bottom: 80px;
			padding-top: 20px;
		}

		.collapsee.navbar-collapsee {
			margin: auto;
		}

		.form-control {
			background-color: #f5f5f5;
		}
.navbar.navbar-expand-lg.navbar-light.containerr {
	box-shadow: rgb(233, 233, 235) 0px -4px 0px 0px inset;
}
.my-headerbg-light.bg-light a {
	font-weight: 600;
	color: #FD9834;
}
.data-placeholder {
	left: 12px;
}
.btn-show-pass {
	right: 12px;
}
.my-headerbg-light.bg-light a {
	font-weight: 600;
	color: #00afa9 !important;
}
.animated {
	display: ;
	animation: none !important;
}
		/*.col-sm-5.upg {*/
		/*	padding-right: 0px !important;*/
		/*}*/
	</style>
</head>

<body>
	<!-- Start Back to top
=========================================================================-->
	<div id="scroll" style="display: none;"><i class="fa fa-angle-up"></i></div>
	<!-- End Back to top
=========================================================================-->
	<!-- Header Six Start
==================================================================-->
	<?php include 'header.php';?>
	<!-- Header Six End
==================================================================-->
	<!-- Main Banner Start 
==================================================================-->
	<div class="acc-hdr bg-light" style="margin-top:130px !imoprtant; padding:20px 0;">
		<div class="my-headerbg-light bg-light">
			<div class="container">
				<span>

					<h3><a href="my-account.php"><i class="fa fa-arrow-left"></i> My Freasher Home</a></h3>

				</span>
				<a href="#">Log Out</a>
			</div>
		</div>
		<nav class="navbar navbar-expand-lg navbar-light containerr">
		
			<div class="collapsee navbar-collapsee ">
				<ul class="navbar-nav container">
					<li class="nav-item ">
						<a class="nav-link " href="account-details.php">Account Details <span
								class="sr-only"></span></a>
					</li>
					<li class="nav-item active">
						<a class="nav-link " href="change-your-password.php">Change Your Password</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="change-your-email.php">Change your email</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="delete-account.php">Delete Account</a>
					</li>
				</ul>
			</div>
		</nav>
	</div>
	<div class="acc-detl bg-light">
		<div class="container bg">
			<div class="ucd">
				<div class="row">
					<div class="col-md-12">
						<form id="contact-form" action="email.php" method="post">
							<h3 class="color-secondary line-bottom pb-15 mb-30 wow slideInDown animated">Change your
								password</h3>
							<!--<div class="row">-->
								<div class="form-group col-md-12 col-lg-6 wow slideInRight animated">
									<div class="form-group validate-input w-100 position-relative wow slideInRight animated"
										data-validate="Enter password">
										<span class="btn-show-pass">
											<i class="fa fa-eye" aria-hidden="true"></i>
										</span>

										<input class="form-control" type="password" name="password">
										<span class="data-placeholder" data-placeholder="Old Password"></span>
									</div>
								</div>
							<div class="form-group col-md-12 col-lg-6 wow slideInRight animated">
									<div class="form-group validate-input w-100 position-relative wow slideInRight animated"
										data-validate="Enter password">
										<span class="btn-show-pass">
											<i class="fa fa-eye" aria-hidden="true"></i>
										</span>

										<input class="form-control" type="password" name="password">
										<span class="data-placeholder" data-placeholder="Old Password"></span>
									</div>
								</div>
							
								<div class="form-group col-md-12 col-lg-6 wow slideInLeft animated">
									<div class="form-group validate-input w-100 position-relative wow slideInLeft animated"
										data-validate="New password">
										<span class="btn-show-pass">
											<i class="fa fa-eye" aria-hidden="true"></i>
										</span>

										<input class="form-control" type="password" name="password">
										<span class="data-placeholder" data-placeholder="Confirm New Password"></span>
									</div>
									


										<div class="wow slideInUp animated"><button type="submit" id="Send"
												class="btn btn-secondary">Change Password</button></div>
									</div>

									<div class="error-handel position-relative">
										<div id="success">Your password has been changed Successfully, Thank you.</div>
										<div id="error">Error occurred while changing password. Please try again later.
										</div>
									</div>
						</form>
					</div>
				
				</div>
			</div>

		</div>

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
		<script src="js/custom.js"></script>
		<script>
			jQuery(function ($) {

				"use strict";
				// Dots View animation View 
				//------------------------------------
				function dotCanvas() {
					var $blocks = $('[data-dots]');
					$blocks.each(function () {
						var $block = $(this);
						var block = $block[0];
						var $canvas = $("<canvas/>").appendTo($block);
						var canvas = $canvas[0];
						var width = $block.width();
						var height = $block.height();
						var ctx = canvas.getContext('2d');
						ctx.width = width;
						ctx.height = height;
						var devicePixelRatio = window.devicePixelRatio || 1,
							backingStoreRatio = ctx.webkitBackingStorePixelRatio || ctx.mozBackingStorePixelRatio || ctx.msBackingStorePixelRatio || ctx.oBackingStorePixelRatio || ctx.backingStorePixelRatio || 1;
						var ratio = devicePixelRatio / backingStoreRatio;
						canvas.width = width * ratio;
						canvas.height = height * ratio;
						ctx.scale(ratio, ratio);
						var mouseX = undefined;
						var mouseY = undefined;

						function Circle(x, y) {
							this.x = x;
							this.y = y;
							this.distance = 7;
							this.radians = 0;
							this.draw = function () {
								ctx.beginPath();
								ctx.strokeStyle = 'rgba(0, 0, 0, .28)';
								ctx.moveTo(this.x + 3, this.y);
								ctx.lineTo(this.x + 3, this.y + 6);
								ctx.moveTo(this.x, this.y + 3);
								ctx.lineTo(this.x + 6, this.y + 3);
								ctx.stroke();
							};
							this.update = function () {
								if (mouseX > -1) {
									var k1 = mouseY - y;
									var k2 = mouseX - x;
									var tan = k1 / k2;
									var yrad = Math.atan(tan);
									if (mouseX < x) {
										yrad = Math.PI - Math.atan(-tan);
									}
									this.x = x + Math.cos(yrad) * this.distance;
									this.y = y + Math.sin(yrad) * this.distance;
								}
								this.draw();
							};
						};
						var circlesArray = [];
						var gutter = 35;
						var countW = Math.floor(width / gutter);
						var countH = Math.floor(height / gutter);
						var len = countW * countH;
						for (var i = 0; i < countH; i++) {
							for (var t = 0; t < countW; t++) {
								var x = gutter * t;
								var y = gutter * i;
								circlesArray.push(new Circle(x, y));
							}
						}
						var loop = function () {
							ctx.clearRect(0, 0, ctx.width, ctx.height);
							for (var i = 0; i < circlesArray.length; i++) {
								circlesArray[i].update();
							}
						};
						document.addEventListener('mousemove', function (e) {
							var parentOffset = $(canvas).parent().offset();
							var relX = e.pageX - parentOffset.left;
							var relY = e.pageY - parentOffset.top;
							mouseX = relX;
							mouseY = relY;
							ctx.clearRect(0, 0, ctx.width, ctx.height);
							for (var i = 0; i < circlesArray.length; i++) {
								circlesArray[i].update();
							}
							loop();
						});
						loop();
					});
				}
				if ($(window).width() > 991) {
					dotCanvas();
				}
			});

		</script>
</body>

</html>