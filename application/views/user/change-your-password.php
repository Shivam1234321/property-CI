<!DOCTYPE html>
<html lang="en">
   <head>
      <!--===== Meta Tag =====-->
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
                  <form id="changePassword" method="post">
                  	<?= form_hidden($this->security->get_csrf_token_name(),$this->security->get_csrf_hash()); ?>
                     <h3 class="color-secondary line-bottom pb-15 mb-30 wow slideInDown animated">Change your
                        password
                     </h3>
                     <!--<div class="row">-->
                     <div class="form-group col-md-12 col-lg-6 wow slideInRight animated">
                        <div class="form-group validate-input w-100 position-relative wow slideInRight animated"
                           data-validate="Enter password">
                           <span class="btn-show-pass">
                           <i class="fa fa-eye" aria-hidden="true"></i>
                           </span>
                           <input class="form-control" type="password" name="opass" id="opass" required="">
                           <span class="data-placeholder" data-placeholder="Old Password"></span>
                        </div>
                     </div>
                     <div class="form-group col-md-12 col-lg-6 wow slideInRight animated">
                        <div class="form-group validate-input w-100 position-relative wow slideInRight animated"
                           data-validate="Enter password">
                           <span class="btn-show-pass">
                           <i class="fa fa-eye" aria-hidden="true"></i>
                           </span>
                           <input class="form-control" type="password" name="npass" id="npass" required="">
                           <span class="data-placeholder" data-placeholder="New Password"></span>
                        </div>
                     </div>
                     <div class="form-group col-md-12 col-lg-6 wow slideInLeft animated">
                        <div class="form-group validate-input w-100 position-relative wow slideInLeft animated"
                           data-validate="New password">
                           <span class="btn-show-pass">
                           <i class="fa fa-eye" aria-hidden="true"></i>
                           </span>
                           <input class="form-control" type="password" name="cpass" id="cpass" required="">
                           <span class="data-placeholder" data-placeholder="Confirm New Password"></span>
                        </div>
                        <div class="wow slideInUp animated"><button type="submit" name="submit" id="Send" class="btn btn-secondary">Change Password</button></div>
                     </div>
                     <div class="error-handel position-relative">
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <!-- Footer Start
         ==================================================================-->
      <?php require 'template/Footer.php';?>
      <!-- Footer End
         ==================================================================-->
      <!-- jquery Links
         ==================================================================-->
      <?php require "template/ScriptLink.php"; ?>
   </body>
</html>

<script>
	  $("#changePassword").validate({
		ignore: "hidden",
		rules:{
			npass:{
				required:true,
				minlength:8
			},
			npass:{
				required:true,
				minlength:8				
			},
			cpass:{
				required:true,
				minlength:8,
				equalTo:"#npass"
			}
		},
		messages:{
			opass:{
				required:"Enter Old Password",
				minlength:"Enter password minimum 8 character long"				
			},
			npass:{
				required:"Enter New Password",
				minlength:"Enter password minimum 8 character long"				
			},
			cpass:{
				required:"Enter Confirm Password",
				minlength:"Enter password minimum 8 character long",
				equalTo:"Password dosn't match."
			}
		},
		submitHandler: function (form) {

			$.ajax({ 
				type: "POST",
				url: '<?= BASE_URL?>/changePasswordSubmit',
				data: new FormData(form),
				mimeType: "multipart/form-data",
				contentType: false,
				processData: false,
				beforeSend: function(){
					$('#changePassword').find('[name="submit"]').attr("disabled",true);
				},
				complete: function(){
					$('#changePassword').find('[name="submit"]').attr("disabled",false);
				},
				success: function(e){ 
					var res=JSON.parse(e);
					if (res[0].status==0){
						$.notify(res[0].msg,'error');
						$('#changePassword').find('[name="submit"]').attr("disabled",true);
					}else if (res[0].status==1){
						$.notify(res[0].msg,'error');
						//setTimeout(function(){ location.reload(); }, 2500);
						$('#changePassword').find('[name="submit"]').attr("disabled",true);
					}else{
						$.notify(res[0].msg,"success");
						setTimeout(function(){ location.reload(); }, 2500);
					}
				},
				error:function(){
					$.notify("Server error occure.","error");
					$('#changePassword').find('[name="submit"]').attr("disabled",true);
				}
			});
			return false; // required to block normal submit since you used ajax
		}
	});
  </script>