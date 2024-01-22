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
                  <form id="addProperty" action="<?= BASE_URL;?>submitproperty" method="post" enctype="multipart/form-data" onsubmit="return false">
                    <?= form_hidden($this->security->get_csrf_token_name(),$this->security->get_csrf_hash()); ?>
                    <div class="row">

                      <div class="col-sm-4">
                        <div class="form-group">
                          <label for="category">Select Category</label>
                          <?php $category=array("Rent","Buy"); ?>
                          <select class="form-control" name="category" id="category" required="">
                            <option value="">Select Category</option>
                            <?php foreach($category as $val): ?>
                              <option value="<?= $val;?>"><?= $val;?></option>
                            <?php endforeach;  ?>
                          </select>
                        </div>
                      </div>

                      <div class="col-sm-4" hidden>
                        <div class="form-group">
                          <label for="name">Name</label>
                          <input type="text" name="name" value="property" id="name" required="" class="form-control" placeholder="Enter Name" autocomplete="off">
                        </div>
                      </div>

                      <div class="col-sm-4">
                        <div class="form-group">
                          <label for="title">Title</label>
                          <input type="text" name="title" onkeyup="setProductSlug(this.value)" id="title" required="" class="form-control" placeholder="Enter Title" autocomplete="off">
                        </div>
                      </div>

                      <div class="col-sm-4">
                        <div class="form-group">
                          <label for="slug">Slug</label>
                          <input type="text" name="slug" id="slug" required="" class="form-control" placeholder="Enter Slug" autocomplete="off">
                        </div>
                      </div>

                      <div class="col-sm-4">
                        <div class="form-group">
                          <label for="property_type">Select Property Type</label>
                          
                          <select class="form-control" name="property_type" id="property_type" required="">
                            <option value="">Select Property Type</option>
                            <?php if(count($property_type)){ foreach($property_type as $val): ?>
                              <option value="<?= $val['property_type_id'];?>"><?= $val['name'];?></option>
                            <?php endforeach; }  ?>
                          </select>
                        </div>
                      </div>



                      <div class="col-sm-4">
                        <div class="form-group">
                          <label for="address">Address</label>
                          <input type="text" name="address" onblur="getLatLong()" id="address" required="" class="form-control" placeholder="Enter Address" autocomplete="off">
                          <input type="hidden" name="lat" id="lat">
                          <input type="hidden" name="long" id="long">
                        </div>
                      </div>


                      <div class="col-sm-4">
                        <div class="form-group">
                          <label for="price">Price</label>
                          <input type="text" name="price" id="price" required="" class="form-control" placeholder="Enter Price" autocomplete="off">
                        </div>
                      </div>

                      <div class="col-sm-4">
                        <div class="form-group">
                          <label for="no_of_bedroom">No Of Bedroom</label>
                          <input type="text" name="no_of_bedroom" id="no_of_bedroom" required="" class="form-control" placeholder="Enter No. Of Bedroom" autocomplete="off">
                        </div>
                      </div>

                      <div class="col-sm-4">
                        <div class="form-group">
                          <label for="no_of_bathroom">No Of Bathroom</label>
                          <input type="text" name="no_of_bathroom" id="no_of_bathroom" required="" class="form-control" placeholder="Enter No. Of Bathroom" autocomplete="off">
                        </div>
                      </div>

                      <div class="col-sm-4">
                        <div class="form-group">
                          <label for="city">Select City/Region</label>
                          
                          <select class="form-control" name="city" id="city" required="">
                            <option value="">Select  City/Region</option>
                            <?php if(count($city)){ foreach($city as $val): ?>
                              <option value="<?= $val['city_id'];?>"><?= $val['city'];?></option>
                            <?php endforeach; }  ?>
                          </select>
                        </div>
                      </div>

                      

                      <div class="col-sm-4">
                        <div class="form-group">
                          <label for="floor_map">Select Floor Map Image</label>
                          <input type="file" name="floor_map" id="floor_map" accept="image/*" required="" class="form-control" autocomplete="off">
                        </div>
                      </div>

                      <div class="col-sm-4">
                        <div class="form-group">
                          <label for="furnish_type">Select Furnish Type</label>
                          <?php $furnish_type=array("Semi Furnish","Full Furnish","Un-Furnish"); ?>
                          <select class="form-control" name="furnish_type" id="furnish_type" required="">
                            <option value="">Select Furnish Type</option>
                            <?php foreach($furnish_type as $val): ?>
                              <option value="<?= $val;?>"><?= $val;?></option>
                            <?php endforeach;  ?>
                          </select>
                        </div>
                      </div>

                      <div class="col-sm-4 let">
                        <div class="form-group">
                          <label for="let_type">Select Let Type</label>
                          <?php $let_type=array("Long Term","Short Term"); ?>
                          <select class="form-control" name="let_type" id="let_type" required="">
                            <option value="">Select Let Type</option>
                            <?php foreach($let_type as $val): ?>
                              <option value="<?= $val;?>"><?= $val;?></option>
                            <?php endforeach;  ?>
                          </select>
                        </div>
                      </div>

                      <div class="col-sm-4 let">
                        <div class="form-group">
                          <label for="let_available_date">Let Available Date</label>
                          <input type="date" name="let_available_date" id="let_available_date" class="form-control" required="">  
                        </div>
                      </div>

                      <div class="col-sm-4">
                        <div class="form-group">
                          <label for="size">Size</label>
                          <input type="text" name="size" id="size" required="" class="form-control" placeholder="Enter Size">  
                        </div>
                      </div>

                      <div class="col-sm-4">
                        <div class="form-group">
                          <label for="is_available_for_student">Available For Student</label>
                          <?php $is_available_for_student=array("Yes","No"); ?>
                          <select class="form-control" name="is_available_for_student" id="is_available_for_student" required="">
                            <option value="">Select Availability</option>
                            <?php foreach($is_available_for_student as $val): ?>
                              <option value="<?= (($val=="Yes")?1:0); ?>"><?= $val;?></option>
                            <?php endforeach;  ?>
                          </select>
                        </div>
                      </div>

                      <div class="col-sm-4">
                        <div class="form-group">
                          <label for="tour_video">Tour Video</label>
                          <input type="file" name="tour_video" id="tour_video" class="form-control" required="" accept="video/*"> 
                        </div>
                      </div>


                      <div class="col-sm-12" hidden>
                        <div class="form-group">
                          <label for="tags">Tags</label>
                          <textarea type="test" name="tags" id="tags" required="" class="form-control" autocomplete="off" placeholder="Enter Tags">Property</textarea>
                        </div>
                      </div>


                    </div>

                    <div class="row" id="gallery_image">
                      <div class="col-sm-4">
                        <div class="form-group">
                          <label for="galleryimage0">Select Image</label>
                          <input type="file" name="galleryimage[]" id="galleryimage0" accept="image/*" required="" class="form-control">  
                        </div>
                      </div>
                    </div>
                    <button type="button" class="btn btn-primary add-more m-2">Add</button>

                    <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label for="description">Description</label>
                          <textarea type="text" name="description" id="description" required="" class="form-control summernote" rows="2" autocomplete="off"></textarea>
                        </div>
                      </div>

                      <div class="col-sm-12">
                        <button class="btn btn-primary" name="submit" value="addProperty">Submit</button>
                      </div>

                    </div>
                    <div class="row mt-3">
                      <div class="col-sm-12">
                        <div class="progress-bar progress-bar-striped progress-bar-animated  add_progress" style="width:0%">0%</div>
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

    <script type="text/javascript">
      $(document).on("click",".add-more",function(){
        var number=$('#gallery_image .col-sm-4').length;
        var lastimage=$("#galleryimage"+(number-1)).val();

        html=``;
        if(lastimage==""){
          $.notify("Last added image field must be selected.","info");
        }else{
          html=`<div class="col-sm-4 remove">
                  <div class="form-group">
                    <label for="galleryimage`+number+`">Select Image</label>
                    <input type="file" name="galleryimage[]" id="galleryimage`+number+`" required="" class="form-control" accept="image/*">  
                  </div>
                  <button class="btn btn-danger remove-div btn-sm pull-right">*</button>  
                </div>`;
          $("#gallery_image").append(html); 
        }             
      });

      $(document).on("click",".remove-div",function(){
        $(this).closest(".remove").remove();
      });

      $(document).on("change","#category",function(){
        if(this.value=="Rent"){
          $(".let").attr("hidden",true);
        }else{
          $(".let").attr("hidden",false);
        }
      });

    </script>

  </body>
</html>

  <script type="text/javascript">

    function setProductSlug(title)
    {
        var slug = title.replace(/ /g,"-");
        $("#slug").val(slug);
    }

     $("#addProperty").validate({
           ignore: ":hidden",
           rules:{
               title:{
                 required:true,
               }
           },
           messages:{
                title:{
                    required:"Enter Title",
                }
           },
           submitHandler: function (form) {

             $("#addProperty").ajaxSubmit({
              beforeSubmit:function(formData,formObject,formOption){
                console.log(formData);
                formData.push(
                  {name:"submit",value:"addProperty"}
                );
              },
              beforeSend:function(){
                $('#addProperty').find('[name="submit"]').attr("disabled",true);
              },
              uploadProgress:function(event,position,total,percentComplete){
              $(".add_progress").css("width",percentComplete+"%");
              $(".add_progress").text(percentComplete+"%");
              },
              complete: function(){
               $('#addProperty').find('[name="submit"]').attr("disabled",false);
              },
              success: function(e){
                 var res = JSON.parse(e);
               
                 if (res[0].status==0){
                   $.notify(res[0].msg,'error');
                    $('#addProperty').find('[name="submit"]').attr("disabled",false);
                 }else{
                   $.notify(res[0].msg,"success");
                   setTimeout(function(){ location.reload();  }, 2500);
                 }
               },
               error:function(){
                  $.notify("Server error occure.","error");
                  $('#addProperty').find('[name="submit"]').attr("disabled",false);
               }
              
            });
             return false; // required to block normal submit since you used ajax
           }
        });   
    </script>