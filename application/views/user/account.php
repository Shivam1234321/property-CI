<!DOCTYPE html>
<html lang="en">

<head>
    <!--===== Meta Tag =====-->
    <?php require "template/CssLink.php"; ?>
</head>

<body>
    <!-- Start Back to top
=========================================================================-->
    <div id="scroll" style="display: none;"><i class="fa fa-angle-up"></i></div>
    <!-- End Back to top
=========================================================================-->
    <!-- Header Six Start
==================================================================-->
<?php require 'template/Header.php';?>
    
    <!-- Header Six End
==================================================================-->
    <!-- Main Banner Start 
==================================================================-->
    <div class="acc-hdr" style="margin-top:130px !imoprtant; padding:20px 0;">
        <div class="container">
            <div class="my-header">
                <span>
                    <div class="usr-icn">
                        <h5><?php echo preg_replace('/(.)[^\s]+\s?/', '${1}.', strtoupper($user['name'])); ?></h5>
                    </div>
                    <h3>Hi! <?= $user['name'];?></h3>
                    <!--<h4>DOB: <span class="dob-usr">03/12/1999</span></h4>-->
                    <h4>Mobile: <span class="dob-usr"><?= $user['mobile'];?></span></h4>
                    <h4>Email: <span class="dob-usr"><?= $user['email'];?></span></h4>
                    <h4>Adress: <span class="usr-adrs"><?= $user['address'];?></span></h4>
                    <a  href="<?= BASE_URL;?>accountDetails" data-name="<?= $user['name'];?>" data-mobile="<?= $user['mobile'];?>" data-email="<?= $user['email'];?>" data-address="<?= $user['address'];?>">Update Profile</a>
                    <a href="<?= BASE_URL;?>accountDetails">Change Password</a>
                </span>
                <a href="#" data-toggle="modal" data-target="#logoutModal">Log Out</a>
            </div>

            <div class="row mt-20">
                <div class="col-sm col-md-12 col-lg-8">
                    <div class="saved-prop">
                        <div class="my-header">
                            <span>
                                <h3>Saved properties</h3>
                            </span>
                            <a href="#">View all</a>
                        </div>
                        <div class="row mt-20 mv">
                            <div class="col-sm-12 col-md-6">
                                <div class="sv1">
                                    <div class="upg">
                                        <div class="row">
                                            <div class="col col-md-5 upg">
                                                <img class="z-index-1 position-relative" src="<?= IMAGES;?>66289_29235952_IMG_00_0000.jpeg">

                                            </div>
                                            <div class="col col-md-7">
                                                <div class="pd">
                                                    <p class="saved-time">Saved: <span class="st">2 days ago</span></p>
                                                    <p class="pn">Elm Walk, Hampstead NW3</p>
                                                    <p class="prop-price">$99,90</p>
                                                </div>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>

                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="sv2">
                                    <div class="s1">
                                        <div class="row">
                                            <div class="col col-md-5 upg">
                                                <img class="z-index-1 position-relative" src="<?= IMAGES;?>66289_29235952_IMG_00_0000.jpeg">

                                            </div>
                                            <div class="col col-md-7">
                                                <div class="pd">
                                                    <p class="saved-time">Saved: <span class="st">2 days ago</span></p>
                                                    <p class="pn">Elm Walk, Hampstead NW3</p>
                                                    <p class="prop-price">$99,90</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-1"></div>
                <div class="col-md-12 col-lg-3">
                    <div class="urs1">
                        <h3>Searches and alerts</h3>
                        <p>Recent searches</p>
                        <h5 class="rst mt-20">NW3, to let</h5>
                        <p class="rsd">Detached, Semi-detached, Terraced, Min 2 beds, Max £20,000.
                        </p>
                    </div>
                </div>


            </div>
            <div class="row mt-20">
                <div class="col-sm col-md-12 col-lg-8">
                    <div class="my-adds">
                        <div class="my-header">
                            <span>

                                <h3>My advertisement</h3>

                            </span>
                            <a href="#">Post Advertisement</a>
                        </div>
                        <div class="row mt-20 mv">
                            <div class="col-sm-12 col-md-6">
                                <div class="sv1">
                                    <div class="upg">
                                        <div class="row">
                                            <div class="col col-md-5 upg">
                                                <img class="z-index-1 position-relative" src="<?= IMAGES;?>66289_29235952_IMG_00_0000.jpeg">

                                            </div>
                                            <div class="col col-md-7">
                                                <div class="pd">
                                                    <p class="upload-time">Uploaded: <span class="st">2 days ago</span>
                                                    </p>
                                                    <p class="pn">Elm Walk, Hampstead NW3</p>
                                                    <p class="prop-price">$99,90</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--<img class="z-index-1 position-relative"  src="images/66289_29235952_IMG_00_0000.jpeg">-->

                                    </div>
                                </div>

                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="sv2">
                                    <div class="s1">
                                        <div class="row">
                                            <div class="col col-md-5 upg">
                                                <img class="z-index-1 position-relative" src="<?= IMAGES;?>66289_29235952_IMG_00_0000.jpeg">

                                            </div>
                                            <div class="col col-md-7">
                                                <div class="pd">
                                                    <p class="upload-time">Uploaded: <span class="st">2 days ago</span>
                                                    </p>
                                                    <p class="pn">Elm Walk, Hampstead NW3</p>
                                                    <p class="prop-price">$99,90</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4"></div>
                <!--<div class="col-md-12 col-lg-3">-->
                <!--  <div class="urs1">-->
                <!--                    <h3>Searches and alerts</h3>-->
                <!--                    <p>Recent searches</p>-->
                <!--                    <h5 class="rst mt-20">NW3, to let</h5>-->
                <!--                       <p class="rsd">Detached, Semi-detached, Terraced, Min 2 beds, Max £20,000.-->
                <!--                    </p>-->
                <!--                </div>-->
                <!--</div>-->


            </div>
        </div>
    </div>

    <!-- Main Banner End
==================================================================-->
    <!-- Looking For Start
==================================================================-->


    <!-- Looking For End

==================================================================-->
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

<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="updateProfileModal" class="modal fade" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><i class="fa fa-user"></i> Update Profile</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
               <form id="updateProfile" method="post">
                  <?= form_hidden($this->security->get_csrf_token_name(),$this->security->get_csrf_hash()); ?>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <?= form_label("Enter Name","name"); ?>
                        <?= form_input(["name"=>"name","class"=>"form-control","id"=>"name","Placeholder"=>"Enter Name"]);?>

                      </div>
                      <div class="form-group">
                        <?= form_label("Enter Mobile","mobile"); ?>
                        <?= form_input(["name"=>"mobile","class"=>"form-control","id"=>"mobile","Placeholder"=>"Enter Mobile","readonly"=>""]);?>

                      </div>
                      <div class="form-group">
                        <?= form_label("Enter Email","email"); ?>
                        <?= form_input(["name"=>"email","class"=>"form-control","id"=>"email","Placeholder"=>"Enter Email","readonly"=>""]);?>

                      </div>
                      
                      <div class="form-group">
                        <?= form_label("Enter Address","address"); ?>
                        <?= form_input(["name"=>"address","class"=>"form-control","id"=>"address","Placeholder"=>"Enter Address"]);?>

                      </div>

                      <div class="button-group">
                        <button class="btn btn-primary" name="submit">Submit</button>
                      </div>

                    </div>
                  </div>
               </form>

            </div>
            <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-danger" type="button">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    $("#updateProfile").validate({
		ignore: "hidden",
		rules:{
            name:{
                required:true
            },
            mobile:{
                required:true,
                minlength:10,
                maxlength:10,
                number:true
            },
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
            name:{
                required:"Enter Name"
            },
            mobile:{
                required:"Enter Mobile Number",
                minlength:"Enter only ten digit",
                maxlength:"Enter only ten digit",
                number:"Enter Only Digit"
            },
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
				url: '<?= BASE_URL?>updateProfile',
				data: new FormData(form),
				mimeType: "multipart/form-data",
				contentType: false,
				processData: false,
				beforeSend: function(){
					$('#updateProfile').find('[name="submit"]').attr("disabled",true);
				},
				complete: function(){
					$('#updateProfile').find('[name="submit"]').attr("disabled",false);
				},
				success: function(e){ 
					var res=JSON.parse(e);
					if (res[0].status==0){
						$.notify(res[0].msg,'error');
						$('#updateProfile').find('[name="submit"]').attr("disabled",true);
					}else if (res[0].status==1){
						$.notify(res[0].msg,'info');
						setTimeout(function(){ location.reload(); }, 2500);
					}else{
						$.notify(res[0].msg,"success");
						setTimeout(function(){ window.location.href='<?= BASE_URL;?>Account'; }, 2500);
					}
				},
				error:function(){
					$.notify("Server error occure.","error");
					$('#updateProfile').find('[name="submit"]').attr("disabled",true);
				}
			});
			return false; // required to block normal submit since you used ajax
		}
	});

  $(document).ready(function(){
    $("#updateProfileModal").on("show.bs.modal",function(e){
        if(e.namespace === "bs.modal"){
            var opener = e.relatedTarget;

            var name = $(opener).attr("data-name");
            var mobile = $(opener).attr("data-mobile");
            var email = $(opener).attr("data-email");
            var address = $(opener).attr("data-address");

            $("#updateProfile").find("[name='name']").val(name);
            $("#updateProfile").find("[name='mobile']").val(mobile);
            $("#updateProfile").find("[name='email']").val(email);
            $("#updateProfile").find("[name='address']").val(address);
        }
    });
  });
</script>