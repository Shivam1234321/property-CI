<?php defined("BASEPATH") OR exit("No direct script access allowed."); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php require "template/CssLink.php"; ?>

  </head>

  <body class="light-sidebar-nav">

  <section id="container">
      <!--header start-->
      <?php require "template/TopBar.php"; ?>
      <!--header end-->
      <!--sidebar start-->
      <?php require "template/SideBar.php"; ?>
      <!--sidebar end-->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

              <div class="row">
                  <div class="col-lg-12">
                      <!--breadcrumbs start -->
                      <nav aria-label="breadcrumb">
                          <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="index"><i class="fa fa-home"></i> Home</a></li>
                              <li class="breadcrumb-item"><a href="#"><?= $page;?></a></li>
                              <!-- <li class="breadcrumb-item active" aria-current="page">Data</li> -->
                          </ol>
                      </nav>
                      <!--breadcrumbs end -->
                  </div>
              </div>

              <!--state overview start-->
              
              <div class="card">
                <div class="card-header"><h3><?= $page;?></h3></div>
                <div class="card-body">
                  <form id="moving-story" method="post" enctype="multipart/form-data">
                    <?= form_hidden($this->security->get_csrf_token_name(),$this->security->get_csrf_hash()); ?>
                    <div class="row">

                      <div class="col-sm-4">
                        <div class="form-group">
                          <label for="title">First Name</label>
                          <input type="text" name="fname" id="fname" required="" class="form-control" placeholder="Enter First Name" autocomplete="off">
                        </div>
                      </div>

                      <div class="col-sm-4">
                        <div class="form-group">
                          <label for="slug">Last Name</label>
                          <input type="text" name="lname" id="lname" required="" class="form-control" placeholder="Enter Last Name" autocomplete="off">
                        </div>
                      </div>

                      <div class="col-sm-4">
                        <div class="form-group">
                          <label for="email">Email</label>
                          <input type="text" name="email" id="email" required="" class="form-control" placeholder="Enter Email" autocomplete="off">
                        </div>
                      </div>

                      <div class="col-sm-4">
                        <div class="form-group">
                          <label for="mobile">Mobile</label>
                          <input type="number" name="mobile" id="mobile" required="" class="form-control" placeholder="Enter Mobile" autocomplete="off">
                        </div>
                      </div>
                      
                      <div class="col-sm-4">
                        <div class="form-group">
                          <label for="type">Did you rent or buy your new property?</label>
                          <select class="form-control" name="type">
                              <option value="buy">Buy</option>
                              <option value="rent">Rent</option>
                          </select>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label for="decision">What was the main reason that inspired your decision to move?*</label>
                          <textarea type="text" name="decision" id="decision" required="" class="form-control" rows="2" autocomplete="off"></textarea>
                        </div>
                      </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                          <label for="challenge">What was the biggest challenge you faced in your move?*</label>
                          <textarea type="text" name="challenge" id="challenge" required="" class="form-control" rows="4" autocomplete="off"></textarea>
                        </div>
                      </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                          <label for="happy">What does “happy” look like for you now?*</label>
                          <textarea type="text" name="happy" id="happy" required="" class="form-control" rows="4" autocomplete="off"></textarea>
                        </div>
                      </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                          <label for="moving_stories">Is there anything else about your moving story you’d like to tell us?</label>
                          <textarea type="text" name="moving_stories" id="moving_stories" required="" class="form-control" rows="4" autocomplete="off"></textarea>
                        </div>
                    </div>
                    
                    <div class="col-sm-4">
                        <div class="form-group">
                          <label for="image">Select Image</label>
                          <input type="file" name="image[]" id="image" required="" class="form-control" multiple autocomplete="off">
                        </div>
                      </div>

                      <div class="col-sm-12">
                        <button class="btn btn-primary" name="submit" value="addBlog">Submit</button>
                      </div>

                    </div>

                  </form>
                </div>
              </div>
            
              <!--state overview end-->

          </section>
      </section>
      <!--main content end-->

     

      <!--footer start-->
      <?php require "template/Footer.php"; ?>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <?php require "template/ScriptLink.php"; ?>

  </body>
</html>

  <script type="text/javascript">

    function setProductSlug(title)
    {
        var slug = title.replace(/ /g,"-");
        $("#slug").val(slug);
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