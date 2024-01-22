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
      <!-- Header Six Start
         ==================================================================-->
      <?php require 'template/Header.php';?>
      <!-- Header Six End
         ==================================================================-->
      <!-- Main Banner Start 
         ==================================================================-->
      <?php require "template/accountDetailsUpdate.php";?>

      <div class="acc-detl bg-light">
      <div class="container bg">
         <div class="ucd">
            <div class="row">
               <div class="col-md-12">
                  <form id="changeEmail" action="email.php" method="post">
                  	<?= form_hidden($this->security->get_csrf_token_name(),$this->security->get_csrf_hash()); ?>
                     <h3 class="color-secondary line-bottom pb-15  wow slideInDown animated">Change your
                        email
                     </h3>
                     <p class="eml pb-15 mb-30">Current email: <span class="current-email"><?= $user['email'];?></span></p>
                     <div class="form-group col-md-12 col-lg-6 wow slideInRight animated">
                        <input type="email" name="email" id="email" required="" class="form-control bg-gray" placeholder="New email">
                     </div>
                     <div class="form-group col-md-12 col-lg-6 wow slideInRight animated">
                        <input type="email" name="cemail" id="cemail" required="" class="form-control bg-gray" placeholder="Confirm new email">
                     </div>
                     <div class="form-group col-md-12 col-lg-6 wow slideInRight animated">
                        <div class="form-group validate-input w-100 position-relative wow slideInRight animated"
                           data-validate="Enter password">
                           <span class="btn-show-pass">
                           <i class="fa fa-eye" aria-hidden="true"></i>
                           </span>
                           <input class="form-control" type="text" name="password" id="password">
                           <span class="data-placeholder" data-placeholder="Password"></span>
                        </div>
                        <div class="wow slideInUp animated mt-20"><button type="submit" id="Send" name="submit" class="btn btn-secondary">Change Password</button></div>
                     </div>
                     <div class="error-handel position-relative">
                        <div id="success">Your email has been changed Successfully, Thank you.</div>
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
      <?php require "template/ScriptLink.php"; ?>
   </body>
</html>

<script>
	  $("#changeEmail").validate({
		ignore: "hidden",
		rules:{
			password:{
				required:true,
				minlength:8
			},
			email:{
				required:true,
				email:true				
			},
			cemail:{
				required:true,
				email:true,
				equalTo:"#email"
			}
		},
		messages:{
			password:{
				required:"Enter Password"				
			},
			email:{
				required:"Enter New Email",
				email:"Enter Valid Email"				
			},
			cemail:{
				required:"Enter Confirm Email",
                email:"Enter Valid Email",
				equalTo:"Email not matched."
			}
		},
		submitHandler: function (form) {

			$.ajax({ 
				type: "POST",
				url: '<?= BASE_URL?>/changeEmailSubmit',
				data: new FormData(form),
				mimeType: "multipart/form-data",
				contentType: false,
				processData: false,
				beforeSend: function(){
					$('#changeEmail').find('[name="submit"]').attr("disabled",true);
				},
				complete: function(){
					$('#changeEmail').find('[name="submit"]').attr("disabled",false);
				},
				success: function(e){ 
					var res=JSON.parse(e);
					if (res[0].status==0){
						$.notify(res[0].msg,'error');
						$('#changeEmail').find('[name="submit"]').attr("disabled",true);
					}else if (res[0].status==1){
						$.notify(res[0].msg,'error');
						//setTimeout(function(){ location.reload(); }, 2500);
						$('#changeEmail').find('[name="submit"]').attr("disabled",true);
					}else{
						$.notify(res[0].msg,"success");
						setTimeout(function(){ location.reload(); }, 2500);
					}
				},
				error:function(){
					$.notify("Server error occure.","error");
					$('#changeEmail').find('[name="submit"]').attr("disabled",true);
				}
			});
			return false; // required to block normal submit since you used ajax
		}
	});
  </script>