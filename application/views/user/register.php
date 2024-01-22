<!DOCTYPE html>
<html lang="en">
<head>
	<!--===== Meta Tag =====-->
  <?php require "template/CssLink.php"; ?>
  
</head>
<body>
<?php require "template/Header.php"; ?>
<!-- Start Login Form
	====================================================-->
	<section class="register-area bg-gray">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="terms-conditions">
						<div class="navbar-brand wow slideInDown animated"></div>
						<form class="my-30" action="#" method="post">
							<h3 class="mb-30 color-secondary wow slideInRight animated">Read our terms and conditions and fill up the fields a membership.</h3>
							<ul class="list-bottom select-option wow slideInLeft animated">
                                <li>
                                    <input id="feature-1" class="d-none" type="checkbox">
                                    <label for="feature-1">Mattis. Elementum phasellus iaculis porttitor rutrum. Tempor interdum, metus ultrices.</label>
                                </li>
                                <li>
                                    <input id="feature-2" class="d-none" type="checkbox">
                                    <label for="feature-2">Dictum libero. Sociis. Penatibus ultricies hymenaeos scelerisque. Cum donec ridiculus.</label>
                                </li>
                                <li>
                                    <input id="feature-3" class="d-none" type="checkbox">
                                    <label for="feature-3">Molestie metus tincidunt praesent, per sodales natoque feugiat, varius ullamcorper.</label>
                                </li>
                                <li>
                                    <input id="feature-4" class="d-none" type="checkbox">
                                    <label for="feature-4">Vestibulum fringilla. Vehicula donec. Rutrum ullamcorper Maecenas.</label>
                                </li>
                                <li>
                                    <input id="feature-5" class="d-none" type="checkbox">
                                    <label for="feature-5">Blandit neque cum nulla curae; Cubilia faucibus tristique vehic.</label>
                                </li>
                                <li>
                                    <input id="feature-6" class="d-none" type="checkbox">
                                    <label for="feature-6">Molestie metus tincidunt praesent, per sodales natoque feugiat, varius ullamcorper.</label>
                                </li>
                                <li>
                                    <input id="feature-7" class="d-none" type="checkbox">
                                    <label for="feature-7">Ut ultrices enim fermentum nisl urna justo. Vulputate. Congue tristique.</label>
                                </li>
                            </ul>
						</form>
						<p class="wow slideInDown animated">Convallis diam velit class velit curae; varius pede facil euismod nisl convallis pulvinar molestie Adipiscing scelerisque.</p>
						<hr class="my-30">
						<!--<ul class="pagination d-inline-block w-100">
							<li class="page-item float-left wow slideInRight animated"><a class="page-link" href="#">Prev</a></li>
							<li class="page-item float-right wow slideInLeft animated"><a class="page-link" href="#">Next</a></li>
						</ul>-->
					</div>
				</div>
				<div class="col-lg-6">
					<div class="register-form mt-md-30">
						<form class="signup-form" id="sign_up" method="post">
						  <?= form_hidden($this->security->get_csrf_token_name(),$this->security->get_csrf_hash()); ?>
							<h3 class="line-bottom pb-15 mb-30 color-secondary wow slideInLeft animated">Sign Up Now!</h3>
							
							<div class="row wow slideInRight animated">
								<div class="form-group col-md-12 col-lg-12">
									<input type="text" name="name" autocomplete="off" id="name" class="form-control" placeholder="Full Name">
								</div>
								<div class="form-group col-md-12 col-lg-12">
									<input type="text" name="mobile" autocomplete="off" id="mobile" class="form-control" placeholder="Phone Number">
								</div>
								<div class="form-group col-md-12 col-lg-12">
									<input type="text" name="email" autocomplete="off" id="email" class="form-control" placeholder="Email Address">
								</div>
								<div class="form-group col-md-12 col-lg-12">
									<textarea type="password" name="address" autocomplete="off" id="address" class="form-control" placeholder="address"></textarea>
								</div>
								<div class="form-group col-md-12 col-lg-12">
									<input type="password" name="password" autocomplete="off" id="password" class="form-control" placeholder="Password">
								</div>
								<div class="form-group col-md-12 col-lg-12">
									<input type="password" name="cpassword" autocomplete="off" id="cpassword" class="form-control" placeholder="Retype password">
								</div>
								<div class="col-lg-12"><button type="submit" class="btn btn-primary w-100">Sign Up</button></div>
							</div>
						</form>
						<div class="text-center mt-30 lg-mb-30 wow slideInDown animated">
							<span class="mr-15 color-secondary">Already registered?</span>
							<a class="color-primary" href="<?= BASE_URL;?>login">Login!</a>
						</div>
						<hr class="my-30">
						<!--<ul class="social-media-2 large color-secondary-a text-center wow slideInUp animated">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-behance"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						</ul>-->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Login Form
	====================================================-->
	<!-- Footer Start
	==================================================-->
	<?php require "template/Footer.php";?>

<!-- jquery Links
==================================================================-->
  <?php require "template/ScriptLink.php"; ?>
  <script>
	  $("#sign_up").validate({
		ignore: "hidden",
		rules:{
			name:{
				required:true,
			},
			email:{
				required:true,
				email:true
			},
			mobile:{
				required:true,
                number:true,
                minlength:10,
                maxlength:10
			},
			address:{
				required:true
			},
			password:{
				required:true,
				minlength:8				
			},
			cpassword:{
				required:true,
				minlength:8,
				equalTo:"#password"
			}
		},
		messages:{
			name:{
				required:"Enter Name",
			},
			email:{
				required:"Enter Email",
				email:"Enter Valid Email Address"
			},
			mobile:{
				required:"Enter mobile number",
                number:"Enter Only Digit",
                minlength:"Enter only 10 digit",
                maxlength:"Enter only 10 digit"
			},
			address:{
				required:"Enter Address"
			},
			password:{
				required:"Enter Password",
				minlength:"Enter password minimum 8 character long"				
			},
			cpassword:{
				required:"Enter Confirm Password",
				minlength:"Enter password minimum 8 character long",
				equalTo:"Password dosn't match."
			}
		},
		submitHandler: function (form) {

			$.ajax({ 
				type: "POST",
				url: '<?= BASE_URL?>/registerUser',
				data: new FormData(form),
				mimeType: "multipart/form-data",
				contentType: false,
				processData: false,
				beforeSend: function(){
					$('#blogComment').find('[name="blogSubmit"]').attr("disabled",true);
				},
				complete: function(){
					$('#blogComment').find('[name="blogSubmit"]').attr("disabled",false);
				},
				success: function(e){ 
					var res=JSON.parse(e);
					if (res[0].status==0){
						$.notify(res[0].msg,'error');
						$('#blogComment').find('[name="blogSubmit"]').attr("disabled",true);
					}else{
						$.notify(res[0].msg,"success");
						setTimeout(function(){ location.reload(); }, 2500);
					}
				},
				error:function(){
					$.notify("Server error occure.","error");
					$('#blogComment').find('[name="blogSubmit"]').attr("disabled",true);
				}
			});
			return false; // required to block normal submit since you used ajax
		}
	});
  </script>
</body>
</html>