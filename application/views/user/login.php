<!DOCTYPE html>
<html lang="en">
<head>
	<!--===== Meta Tag =====-->
	<?php require "template/CssLink.php"; ?>
  
</head>
<body id="top">
<!-- Start Login Form
	====================================================-->
	<div class="login-form position-relative">
		<div class="login-form-area shadow p-50 lg-px-15 bg-white position-relative">
			<form class="position-relative" id="login" method="post">
				<?= form_hidden($this->security->get_csrf_token_name(),$this->security->get_csrf_hash()); ?>
				<div class="form-logo text-center pb-50"><a href="<?= BASE_URL; ?>"><img class="logo-bottom" src="<?= FOOTER; ?>" alt="logo-image"></a></div>

				<div class="form-group">
					<input class="form-control"  autocomplete="off" type="text" name="email" id="email" placeholder="Enter Email" required>
					<!-- <span class="data-placeholder" data-placeholder="Email or Username"></span> -->
				</div>

				<div class="form-group">
					<!-- <span class="btn-show-pass">
						<i class="fa fa-eye" aria-hidden="true"></i>
					</span> -->
							
					<input class="form-control" autocomplete="off" type="password" name="password" id="password" placeholder="Enter Password" required>
					<!-- <span class="data-placeholder" data-placeholder="Password"></span> -->
				</div>
				<!-- <a class="mb-30 color-primary" href="#">Forgot Password?</a> -->

				<button type="submit" class="btn btn-primary d-table mx-auto w-100" name="sign_in" value="sign_in">Sign In</button>

				<div class="text-center mt-30 wow slideInUp animated">
					<span class="text-dark">Don’t have an account?</span>
					<a class="color-primary" href="<?= BASE_URL;?>register">Sign Up!</a>
				</div>
			</form>
			<div class="login-form-footer color-gray">
				<ul class="form-list d-table mx-auto color-secondary-a mt-md-30">
					<li class="text-dark">© 2020 <?= $this->data['app_name'];?></li>
					<li><a href="<?= BASE_URL;?>Contact">Contact Us</a></li>
					<li><a href="<?= BASE_URL; ?>">Home</a></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- End Login Form
	====================================================-->
<!-- jquery Links
==================================================================-->
  <?php require "template/ScriptLink.php"; ?>
  <script>
	  $("#login").validate({
		ignore: "hidden",
		rules:{
			email:{
				required:true,
				email:true
			},
			password:{
				required:true,
				minlength:8				
			}
		},
		messages:{
			email:{
				required:"Enter Email",
				email:"Enter Valid Email Address"
			},
			password:{
				required:"Enter Password",
				minlength:"Enter password minimum 8 character long"				
			}
		},
		submitHandler: function (form) {

			$.ajax({ 
				type: "POST",
				url: '<?= BASE_URL?>userLogin',
				data: new FormData(form),
				mimeType: "multipart/form-data",
				contentType: false,
				processData: false,
				beforeSend: function(){
					$('#login').find('[name="sign_in"]').attr("disabled",true);
				},
				complete: function(){
					$('#login').find('[name="sign_in"]').attr("disabled",false);
				},
				success: function(e){ 
					var res=JSON.parse(e);
					if (res[0].status==0){
						$.notify(res[0].msg,'error');
						$('#login').find('[name="sign_in"]').attr("disabled",true);
					}else{
						$.notify(res[0].msg,"success");
						setTimeout(function(){ window.location.href='<?= BASE_URL;?>Account'; }, 2500);
					}
				},
				error:function(){
					$.notify("Server error occure.","error");
					$('#login').find('[name="sign_in"]').attr("disabled",true);
				}
			});
			return false; // required to block normal submit since you used ajax
		}
	});
  </script>
</body>
</html>