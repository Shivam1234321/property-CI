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
                  <form id="deleteAccount" method="post">
                  	 <?= form_hidden($this->security->get_csrf_token_name(),$this->security->get_csrf_hash()); ?>
                     <h4 class="color-secondary line-bottom pb-15  wow slideInDown animated">We are sorry to see you go!
                     </h4>
                     <p class="eml pb-15 mb-30 ">Please confirm your password for <span class="current-email"><?= $user['email'];?></span> to close your Realstate account.<br>
                        <!--This may take up to 72 hours.-->
                     </p>
                     <div class="form-group col-md-12 col-lg-6 wow slideInRight animated">
                        <div class="form-group validate-input w-100 position-relative wow slideInRight animated"
                           data-validate="Enter password">
                           <span class="btn-show-pass">
                           <i class="fa fa-eye" aria-hidden="true"></i>
                           </span>
                           <input class="form-control" type="password" name="password" id="password" required="">
                           <span class="data-placeholder" data-placeholder="Enter your password"></span>
                        </div>
                        <div class="wow slideInUp animated mt-20"><button type="submit" id="Send" name="submit" class="btn btn-danger">Delete Account</button></div>
                     </div>
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
      <?php   require "template/ScriptLink.php";?>
   </body>
</html>

<script>
	  $("#deleteAccount").validate({
		ignore: "hidden",
		rules:{
			password:{
				required:true,
				minlength:8
			}
		},
		messages:{
			password:{
				required:"Enter Password"				
			}
		},
		submitHandler: function (form) {

			$.ajax({ 
				type: "POST",
				url: '<?= BASE_URL?>/deleteAccountSubmit',
				data: new FormData(form),
				mimeType: "multipart/form-data",
				contentType: false,
				processData: false,
				beforeSend: function(){
					$('#deleteAccount').find('[name="submit"]').attr("disabled",true);
				},
				complete: function(){
					$('#deleteAccount').find('[name="submit"]').attr("disabled",false);
				},
				success: function(e){ 
					var res=JSON.parse(e);
					if (res[0].status==0){
						$.notify(res[0].msg,'error');
						$('#deleteAccount').find('[name="submit"]').attr("disabled",true);
					}else if (res[0].status==1){
						$.notify(res[0].msg,'error');
						//setTimeout(function(){ location.reload(); }, 2500);
						$('#deleteAccount').find('[name="submit"]').attr("disabled",true);
					}else{
						$.notify(res[0].msg,"success");
						setTimeout(function(){ window.location.href="<?= BASE_URL?>Account"; }, 2500);
					}
				},
				error:function(){
					$.notify("Server error occure.","error");
					$('#deleteAccount').find('[name="submit"]').attr("disabled",true);
				}
			});
			return false; // required to block normal submit since you used ajax
		}
	});
  </script>