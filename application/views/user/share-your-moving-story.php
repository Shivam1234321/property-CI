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
      <!-- Start Header
         ===================================================================-->
      <?php require 'template/Header.php';?>
      <!-- Service Details Start
         ==================================================================-->
      <section>
         <div class="container">
            <div class="row">
               <div class="col-md-12 col-lg-3">
                  <p><a href="moving-stories.php">< Back to Moving Stories</a></p>
               </div>
               <div class="col-md-12 col-lg-8">
                  <div class="service-images owl-carousel slide-1 dot-on-slider position-relative wow slideInDown animated">
                     <img src="<?= IMAGES; ?>MovingStories.jpg" alt="image">
                     <!--<img src="<?= IMAGES; ?>others/18.jpg" alt="image">
                        <img src="<?= IMAGES; ?>others/19.jpg" alt="image">-->
                  </div>
                  <div class="wow slideInRight animated">
                     <h3 class="color-secondary mt-30 mb-20">Share your moving story</h3>
                     <h5>Have you moved recently? Was it a move that really has changed your life for the better?</h5>
                     <p>Whether you moved to be closer to friends and family, to find more space for a work-from-home office, or to a totally new location – we would love to hear why it was your right move.
                     </p>
                     <p class="mt-15">Please provide us with some details about your move for the chance to be featured on Rightmove. You can see examples of Moving Stories we’ve shared <a href="#">here</a>.
                     </p>
                  </div>
                  <div class="mt-20">
                     <form id="moving-story" enctype="multiple/form-data" method="post">
                     	<?= form_hidden($this->security->get_csrf_token_name(),$this->security->get_csrf_hash());?>
                        <div class="row">
                           <div class="form-group col-md-12 col-lg-6 wow slideInRight animated">
                              <input type="text" name="fname" id="fname" class="form-control bg-gray" required="" placeholder="First Name*">
                           </div>
                           <div class="form-group col-md-12 col-lg-6 wow slideInRight animated">
                              <input type="text" name="lname" id="lname" class="form-control bg-gray" required="" placeholder="Last Name*">
                           </div>
                           <div class="form-group col-md-12 col-lg-6 wow slideInLeft animated">
                              <input type="email" name="email" id="email" class="form-control bg-gray" required="" placeholder="Email Address*">
                           </div>
                           <div class="form-group col-md-12 col-lg-6 wow slideInRight animated">
                              <input type="tel" name="mobile" class="form-control bg-gray" required="" placeholder="Mobile Number">
                           </div>
                           <div class="form-group col-md-12 col-lg-6 wow slideInRight animated">
                              <div class="select-wrapper position-relative">
                              	 <?php $type=array("Rent","Buy"); ?>
                                 <label>Did you rent or buy your new property?</label>
                                 <select class="select form-control" name="type" id="type" required="">
                                    <option value="">Please choose one</option>
                                    <?php 
  									   foreach($type as $val): ?>
 										<option value="<?= $val; ?>"><?= $val; ?></option>
  									<?php   endforeach;
                                     ?>
                                 </select>
                              </div>
                           </div>
                           <div class="form-group col-md-12 col-lg-12 wow slideInRight animated">
                              <textarea class="form-control bg-gray" id="decision" name="decision" required="" title="Decision" rows="7" placeholder="What was the main reason that inspired your decision to move?*"></textarea>
                           </div>
                           <div class="form-group col-md-12 col-lg-12 wow slideInRight animated">
                              <textarea class="form-control bg-gray" id="challenge" name="challenge" required="" title="Challenge" rows="7" placeholder="What was the biggest challenge you faced in your move?*"></textarea>
                           </div>
                           <div class="form-group col-md-12 col-lg-12 wow slideInRight animated">
                              <textarea class="form-control bg-gray" id="happy" name="happy" required="" title="Happy look" rows="7" placeholder="What does “happy” look like for you now?*"></textarea>
                           </div>
                           <div class="form-group col-md-12 col-lg-12 wow slideInRight animated">
                              <textarea class="form-control bg-gray" id="moving_stories" required="" title="Moving Story" name="moving_stories" rows="7" placeholder="Is there anything else about your moving story you’d like to tell us?"></textarea>
                           </div>
                           <div class="form-group col-md-12 col-lg-12 wow slideInRight animated">
                              <label>If you have any photos that you'd like to add, please do so here:</label>
                              
                              <div class="drag-drop bg-gray px-30 py-40 text-center mt-15" onclick="getImage()">
                                 <span class="fa fa-upload color-primary"></span>
                                 <h4 class="inner-title mt-15">Select Multiple Images Here</h4>
                              </div>
                              <input type="file" name="image[]" hidden id="image" required="" title="Select Image" multiple="">
                           </div>
                           <div class="col-lg-12 wow slideInUp animated"><button type="submit" id="Send" class="btn btn-secondary">Share my story</button></div>
                           <p class="trmpr">Please note that Rightmove will only use the above details to contact you if we want to feature your story in the future. By submitting your Moving Story you confirm that you agree to our website <a href="term-and-condition.php">terms of use</a> and <a href="privacy-policy.php">privacy policy</a>.</p>
                        </div>
                        <div class="error-handel position-relative">
                           <div id="success">Thank you.</div>
                           <div id="error">Please try again later.</div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <?php include 'footer.php';?>
      <!-- Footer Start
         ==================================================================-->
      <!-- Footer End
         ==================================================================-->
      <!-- jquery Links
         ==================================================================-->
      <?php require "template/ScriptLink.php"; ?>
   </body>
</html>
<script type="text/javascript">
	function getImage(){
		$("#image").click();
	}

	$("#moving-story").validate({
		ignore: "hidden",
		rules:{
			fname:{
				required:true,
			},
			lname:{
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
			type:{
				required:true
			},
			decision:{
				required:true
			},
			challenge:{
				required:true
			},
			happy:{
				required:true
			},
			moving_stories:{
				required:true
			},
			image:{
				required:true
			}
		},
		messages:{
			fname:{
				required:"Enter First Name",
			},
			lname:{
				required:"Enter First Name",
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
			type:{
				required:"Select Type"
			},
			decision:{
				required:"Enter Decision"
			},
			challenge:{
				required:"Enter Challenge"
			},
			happy:{
				required:"Enter Happy look"
			},
			moving_stories:{
				required:"Enter Moving Story"
			},
			image:{
				required:"Select Image"
			}
		},
		submitHandler: function (form) {

			$.ajax({ 
				type: "POST",
				url: '<?= BASE_URL?>movingStorySubmit',
				data: new FormData(form),
				mimeType: "multipart/form-data",
				contentType: false,
				processData: false,
				success: function(e){ 
					var res=JSON.parse(e);
					if (res[0].status==0){
						$.notify(res[0].msg,'error');
					}else{
						$.notify(res[0].msg,"success");
						setTimeout(function(){ location.reload(); }, 2500);
					}
				},
				error:function(){
					$.notify("Server error occure.","error");
				}
			});
			return false; // required to block normal submit since you used ajax
		}
	});
</script>