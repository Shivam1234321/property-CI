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
      <?php require "template/accountDetailsUpdate.php";?>
      <div class="acc-detl bg-light">
      <div class="container bg">
         <div class="ucd">
            <div class="row">
               <div class="col-md-12">
                  <form id="updateProfile"  method="post">
                     <?= form_hidden($this->security->get_csrf_token_name(),$this->security->get_csrf_hash()); ?>
                     <h3 class="color-secondary line-bottom pb-15 mb-30 wow slideInDown animated">Update Profile</h3>
                     <div class="row">
                        <div class="form-group col-md-12 col-lg-6 wow slideInRight animated">
                           <?= form_label("Enter Name","name"); ?>
                           <?= form_input(["name"=>"name","class"=>"form-control","id"=>"name","Placeholder"=>"Enter Name","value"=>$user['name']]);?>
                        </div>
                        <div class="form-group col-md-12 col-lg-6 wow slideInLeft animated">
                           <?= form_label("Enter Mobile","mobile"); ?>
                           <?= form_input(["name"=>"mobile","class"=>"form-control","id"=>"mobile","Placeholder"=>"Enter Mobile","readonly"=>"","value"=>$user['mobile']]);?>
                        </div>
                        <div class="form-group col-md-6 col-lg-6 wow slideInLeft animated">
                           <?= form_label("Enter Email","email"); ?>
                           <?= form_input(["name"=>"email","class"=>"form-control","id"=>"email","Placeholder"=>"Enter Email","readonly"=>"","value"=>$user['email']]);?>
                        </div>
                        <div class="form-group col-md-12 col-lg-6 wow slideInRight animated">
                           <?= form_label("Enter Address","address"); ?>
                           <?= form_input(["name"=>"address","class"=>"form-control","id"=>"address","Placeholder"=>"Enter Address","value"=>$user['address']]);?>
                        </div>
                        <div class="form-group col-md-12 col-lg-6 wow slideInLeft animated">
                           <?= form_label("Enter Address","address"); ?>
                           <?= form_input(["name"=>"city","class"=>"form-control","id"=>"city","Placeholder"=>"Enter City","value"=>$user['city']]);?>
                        </div>
                        <div class="form-group col-md-12 col-lg-6 wow slideInLeft animated">
                           <?= form_label("Enter Pincode","pincode"); ?>
                           <?= form_input(["name"=>"pincode","class"=>"form-control","id"=>"pincode","Placeholder"=>"Enter Pincode","value"=>$user['pincode']]);?>
                        </div>
                        <div class="col-lg-12 wow slideInUp animated"><button type="submit" id="Send" class="btn btn-secondary">Update Details</button></div>
                     </div>
                     <div class="error-handel position-relative">
                        <div id="success">Your deatils has been updated Successfully, Thank you.</div>
                        <div id="error">Error occurred while updating details. Please try again later.</div>
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

<script type="text/javascript">
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
            address:{
                required:true             
            },
            city:{
                required:true
            },
            pincode:{
                required:true             
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
            address:{
                required:"Enter Address",            
            },
            city:{
                required:"Enter City"
            },
            pincode:{
                required:"Enter Pincode"             
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
                        setTimeout(function(){ window.location.href='<?= BASE_URL;?>accountDetails'; }, 2500);
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
</script>