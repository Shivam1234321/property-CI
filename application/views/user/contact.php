<!DOCTYPE html>
<html lang="en">
<head>
	<?php require "template/CssLink.php"; ?>
</head>
<body>
<!-- Start Back to top
=========================================================================-->

<!-- End Back to top
=========================================================================-->
<!-- Start Header
===================================================================-->
<?php require 'template/Header.php';?>
<!-- End Header
==================================================================-->
<!-- Page Banner Start
==================================================================-->
<div class="page-banner overlay-black" style="padding: 150px 0">
	<div class="container h-100">
		<div class="row h-100 align-items-center">
			<div class="col-lg-12">
				<h1 class="page-banner-title color-primary">Contact Us</h1>
				<div class="text-area w-50 mt-15 color-white">
					<p></p>
				</div>
			</div>
		</div>
	</div>
</div>
<!--<div class="bg-secondary">-->
<!--	<div class="container">-->
<!--		<div class="row">-->
<!--			<div class="col-md-12 col-lg-12">-->
<!--				<nav aria-label="breadcrumb">-->
<!--				  <ol class="breadcrumb m-0 py-15 px-0 bg-transparent hover-white-primary">-->
<!--				    <li class="breadcrumb-item"><a href="#">Home</a></li>-->
<!--				    <li class="breadcrumb-item"><a href="#">Pages</a></li>-->
<!--				    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>-->
<!--				  </ol>-->
<!--				</nav>-->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->
<!--</div>-->
<!-- Page Banner End
==================================================================-->
<!-- Start Map 
==================================================================-->
<div class="wow slideInDown animated" id="map" class="map-canvas contact"></div>
<!-- End Map
==================================================================-->
<!-- Contact us Start
==================================================================-->
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-7 col-xl-8">
				<form id="contact-form" method="post">
					<?= form_hidden($this->security->get_csrf_token_name(),$this->security->get_csrf_hash());?>
					<h3 class="color-secondary line-bottom pb-15 mb-30 wow slideInDown animated">Get in Touch</h3>
					<div class="row">
						<div class="form-group col-md-12 col-lg-6 wow slideInRight animated">
							<input type="text" name="name" id="name" class="form-control bg-gray" placeholder="Your Name*">
						</div>
						<div class="form-group col-md-12 col-lg-6 wow slideInLeft animated">
							<input type="email" name="email" id="email" class="form-control bg-gray" placeholder="Email Address*">
						</div>
						<div class="form-group col-md-12 col-lg-12 wow slideInLeft animated">
							<input type="text" id="subject" id="subject" name="subject" class="form-control bg-gray" placeholder="Subject*">
						</div>
						<div class="form-group col-md-12 col-lg-12 wow slideInRight animated">
							<textarea class="form-control bg-gray" id="message" name="message" rows="7" placeholder="Type Message..."></textarea>
						</div>
						<div class="col-lg-12 wow slideInUp animated"><button type="submit" name="submit" id="Send" class="btn btn-secondary">Send</button></div>
					</div>

					<div class="error-handel position-relative">
						<div id="success">Your email sent Successfully, Thank you.</div>
						<div id="error">Error occurred while sending email. Please try again later.</div>
					</div>
				</form>
			</div>
			<div class="col-md-12 col-lg-5 col-xl-4">
				<h3 class="color-secondary line-bottom pb-15 mb-30 mt-md-50 wow slideInDown animated">Contact With Us</h3>
				<ul class="contact-info icon-font-small icon-primary wow slideInUp animated">
					<li>
						<i class="fa fa-phone"></i>
						<div class="d-inline-block">
							<strong class="d-block">Phone</strong>
							<span>+(844) 234-567-800</span>
							<span>+(844) 123-456-700</span>
						</div>
					</li>
					<li>
						<i class="fa fa-envelope"></i>
						<div class="d-inline-block">
							<strong class="d-block">Email</strong>
							<span>support@yourdomail.com</span>
							<span>info@yourdomail.com</span>
						</div>
					</li>
					<li>
						<i class="fa fa-map-marker"></i>
						<div class="d-inline-block">
							<strong class="d-block">Address</strong>
							<span>40 Towerhill Avenue, Melbourne, Australia.</span>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<!-- Contact us End
==================================================================-->
<!--  Partners and Subscribe Form Start
==================================================================-->
<!--<div class="patner-subscribe bg-light">-->
<!--	<div class="container">-->
<!--		<div class="row">-->
<!--			<div class="col-md-12 col-lg-12 wow animated slideInDown">-->
<!--				<div class="bg-white shadow py-80">-->
<!--					<div class="row">-->
<!--						<div class="col-md-12 col-lg-6 px-60 border-right">-->
<!--							<div class="side-title pb-30">-->
<!--								<span class="small-title color-primary position-relative line-primary">Partners</span>-->
<!--								<h2 class="title mb-20 color-secondary">Our Popular Fellows!</h2>-->
<!--								<p>Luctus posuere facilisi eros auctor lacinia litora. Convall aptent nisy parturient scelerisq. Nullam fringil condimen integer mauris lacus aliquam, quam massa lobortis commod proin magna.</p>-->
<!--							</div>-->
<!--							<div class="owl-carousel partners mt-30">-->
<!--								<img src="images/partner/1.png" alt="Image not found!">-->
<!--								<img src="images/partner/2.png" alt="Image not found!">-->
<!--								<img src="images/partner/3.png" alt="Image not found!">-->
<!--								<img src="images/partner/4.png" alt="Image not found!">-->
<!--								<img src="images/partner/5.png" alt="Image not found!">-->
<!--								<img src="images/partner/6.png" alt="Image not found!">-->
<!--							</div>-->
<!--						</div>-->
<!--						<div class="col-md-12 col-lg-6 px-60">-->
<!--							<div class="side-title pb-30 mt-md-50 text-right">-->
<!--								<span class="small-title color-primary position-relative line-right-primary">Newsletter</span>-->
<!--								<h2 class="title mb-20 color-secondary">Get Update Now!</h2>-->
<!--								<p>Luctus posuere facilisi eros auctor lacinia litora. Convall aptent nisy parturient scelerisq. Nullam fringil condimen integer mauris lacus aliquam, quam massa lobortis commod proin magna.</p>-->
<!--							</div>-->
<!--							<form class="news-letter bg-gray mt-30">-->
<!--								<div class="form-group position-relative">-->
<!--									<input class="form-control" type="text" name="email" placeholder="Subscribe">-->
<!--									<button class="bg-gray color-secondary"><i class="fa fa-paper-plane"></i></button>-->
<!--								</div>-->
<!--							</form>-->
<!--						</div>-->
<!--					</div>-->
<!--				</div>-->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->
<!--</div>-->
<!--  Partners and Subscribe Form Start
==================================================================-->

<!-- Footer Start
==================================================================-->
 <?php require 'template/Footer.php';?>
<!-- Footer End
==================================================================-->
<!-- jquery Links
==================================================================-->
  <?php require "template/ScriptLink.php"; ?>
  <script>
	  $("#contact-form").validate({
		ignore: "hidden",
		rules:{
			name:{
				required:true
			},
			email:{
				required:true,
				email:true
			},
			subject:{
				required:true			
			},
			message:{
				required:true			
			}
		},
		messages:{
			name:{
				required:"Enter Name"
			},
			email:{
				required:"Enter Email Id",
				email:"Enter Valid Email Id"
			},
			subject:{
				required:"Enter Subject"			
			},
			message:{
				required:"Enter Message"			
			}
		},
		submitHandler: function (form) {

			$.ajax({ 
				type: "POST",
				url: '<?= BASE_URL?>submitContact',
				data: new FormData(form),
				mimeType: "multipart/form-data",
				contentType: false,
				processData: false,
				beforeSend: function(){
					$('#contact-form').find('[name="submit"]').attr("disabled",true);
				},
				complete: function(){
					$('#contact-form').find('[name="submit"]').attr("disabled",false);
				},
				success: function(e){ 
					var res=JSON.parse(e);
					if (res[0].status==0){
						$.notify(res[0].msg,'error');
						$('#contact-form').find('[name="submit"]').attr("disabled",true);
					}else{
						$.notify(res[0].msg,"success");
						setTimeout(function(){ location.reload(); }, 2500);
					}
				},
				error:function(){
					$.notify("Server error occure.","error");
					$('#contact-form').find('[name="submit"]').attr("disabled",true);
				}
			});
			return false; // required to block normal submit since you used ajax
		}
	});
  </script>
  
</body>
</html>