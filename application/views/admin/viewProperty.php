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
                              <li class="breadcrumb-item"><a href="#">View Property</a></li>
                              <!-- <li class="breadcrumb-item active" aria-current="page">Data</li> -->
                          </ol>
                      </nav>
                      <!--breadcrumbs end -->
                  </div>
              </div>

              <!--state overview start-->

             <div class="card">
               <div class="card-header"><span class="h3"><?= $property['title'];?></span>
                  <a href="<?= BASE_URL."editproperty/".$property['property_id'];?>" class="btn btn-primary btn-sm pull-right"><i class="fa fa-edit"></i> Edit</a>
               </div>
               <div class="card-body">
                  <div class="row">
                    <?php if(count($gallery)){ ?>
                      <?php foreach($gallery as $val): ?>
                        <div class="col-sm-3">
                          <div class="card">
                            <img src="<?= BASE_URL.$property["image_url"].$val['image']; ?>" class="card-img" style="height:200px;">
                            <div class="card-body text-centre">
                                <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#updateGalleryModal" data-image_id="<?= $val['id']; ?>" data-image_url="<?= $property['image_url'];?>" data-image="<?= $val['image'];?>">Update</button>
                            </div>
                          </div>
                        </div>
                      <?php endforeach; ?>
                    <?php } ?>
                  </div>

                   <div class="row">
                      <div class="col-sm-4">
                        <div class="card">
                          <div class="card-header"><span class="h5">Floor Map</span></div>
                          <img src="<?= BASE_URL.$property['image_url'].$property['floor_map']; ?>" style="height:150px;">
                          <div class="card">
                            <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#updateupdateFloorImageModal" data-property_id="<?= $property['property_id']; ?>" data-image_url="<?= $property['image_url'];?>" data-image="<?= $property['floor_map'];?>">Update</button>
                          </div>
                        </div>
                      </div>
                    </div>



                    <div class="row">
                      <div class="col-sm-12">
                        <div class="card">
                          <div class="card-body">
                            <div class="table-responsive">
                              <table class="table table-bordered">
                                <tr>
                                  <th>Category</th>
                                  <td><?= $property['category']?></td>
                                  <th>Title</th>
                                  <td><?= $property['title']?></td>
                                </tr>

                                <tr>
                                  <th>Slug</th>
                                  <td><?= $property['slug']?></td>
                                  <th>Address</th>
                                  <td><?= $property['address']?></td>
                                </tr>

                                <tr>
                                  <th>Latitude</th>
                                  <td><?= $property['latitude']?></td>
                                  <th>Longitude</th>
                                  <td><?= $property['longitude']?></td>
                                </tr>

                                <tr>
                                  <th>Property Type</th>
                                  <td><?= $this->dm->getSingleValueWhere("property_type","name",array("property_type_id"=>$property['property_type']));?></td>
                                  <th>Price</th>
                                  <td><?= $property['price']?></td>
                                </tr>

                                <tr>
                                  <th>No. Of Bedroom</th>
                                  <td><?= $property['no_of_bedroom']?></td>
                                  <th>No. Of Bathroom</th>
                                  <td><?= $property['no_of_bathroom']?></td>
                                </tr>

                                <tr>
                                  <th>City/Region</th>
                                  <td><?= $this->dm->getSingleValueWhere("city","city",array("city_id"=>$property['region']));?></td>
                                  <th>Furnish Type</th>
                                  <td><?= $property['furnish_type']?></td>
                                </tr>

                                <tr>
                                  <th>Let Type</th>
                                  <td><?= $property['let_type']?></td>
                                  <th>Let Available Date</th>
                                  <td><?= $property['let_available_date']?></td>
                                </tr>

                                <tr>
                                  <th>Size</th>
                                  <td><?= $property['size']?></td>
                                  <th>Description</th>
                                  <td><?= $property['description']?></td>
                                </tr>

                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

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

    <div class="modal fade bs-example-modal-md" id="updateupdateFloorImageModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header" style="background-color:#2d3a50;">
                    <h5 class="modal-title mt-0 text-white" id="myLargeModalLabel">Update Gallery Image</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
                         <?= form_open_multipart("",["id"=>"updateFloorImage"])?>
                           <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                            <div class="form-group">
                                <?= form_hidden("property_id");?>
                                <?= form_hidden("oimg");?>
                            </div>
                            <div class="form-group">
                              <?= form_label("Old Image","image");?><?= form_label("New Image","image",["class"=>"pull-right"]);?><br/>
                              <img src="" id="productimg1" style="height:100px;width:100px;">
                              <img src="<?= BASE_URL.$property['image_url'];?>demo.png" class="pull-right" id="newimg1" style="height:100px;width:100px;"><br/>
                              <?= form_label("Select Floor Map","image1");?>
                              <?= form_upload(["class"=>"form-control mt-2","name"=>"image1","required"=>"required","id"=>"image1","onchange"=>"newImg1(this)","accept"=>"image/*"]);?>
                            </div>
                            <div class="button-group">
                                <?= form_submit(["class"=>"btn btn-primary","name"=>"updateFloorImage","value"=>"Upload","type"=>"submit"]);?>
                            </div>
                        <?= form_close();?>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger m-l-5 pull-left" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
     $(document).ready()
      {
          function newImg1(input) {
              if (input.files && input.files[0]) {
                  var reader = new FileReader();
                  reader.onload = function (e) {
                      $('#newimg1').attr('src', e.target.result);
                      $("#newimg1").css("display", "block");
                  };
                  reader.readAsDataURL(input.files[0]);
              }
          }
          //$("#ques").css("display", "none");
      };

      $(document).ready(function() {
        $('#updateupdateFloorImageModal').on('show.bs.modal', function (e) {
            if (e.namespace === 'bs.modal') {
                var opener=e.relatedTarget;
                var property_id         = $(opener).attr('data-property_id');
                var image = $(opener).attr('data-image');
                var image_url = $(opener).attr('data-image_url');

                $('#updateFloorImage').find('[name="property_id"]').val(property_id);
                $('#updateFloorImage').find('[name="oimg"]').val(image_url+image);
                $("#productimg1").attr("src","<?= BASE_URL;?>"+image_url+image);
                if(image==""){
                  $("#productimg1").attr("src","<?= BASE_URL;?>demo.png");
                }
            }
        }); 
     });

      $("#updateFloorImage").validate({
        ignore:"hidden",
        rules:{
          image1:{
            required:true
          }
        },
        messages:{
          image1:{
            required:"Select Image"
          }
        },
        submitHandler:function(form){
          $.ajax({
            url:"<?=  BASE_URL;?>floorImageUpload",
            type:"post",
            data: new FormData(form),
            mimeType: "multipart/form-data",
            contentType: false,
            processData: false,
            beforeSend:function(){
              $("#updateFloorImage").find("[name='submit']").attr("disabled",true);
            },
            complete:function(){

            },
            success:function(e){
              var data=JSON.parse(e);
              if(data[0].status==0){
                $.notify(data[0].msg,"info");
                $("#updateFloorImage").find("[name='submit']").attr("disabled",false);
              }else{
                $.notify(data[0].msg,"success");
                setTimeout(function(){ location.reload(); },1500);
              }
            },
            error:function(){
              $.notify("Server error find.","info");
              $("#updateFloorImage").find("[name='submit']").attr("disabled",false);
            }
          });
          return false; // required to block normal submit since you used ajax
        }
       });

    </script> 

    <div class="modal fade bs-example-modal-md" id="updateGalleryModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header" style="background-color:#2d3a50;">
                    <h5 class="modal-title mt-0 text-white" id="myLargeModalLabel">Update Gallery Image</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
                         <?= form_open_multipart("",["id"=>"updateGallertImage"])?>
                           <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                            <div class="form-group">
                                <?= form_hidden("image_id");?>
                                <?= form_hidden("oimg");?>
                            </div>
                            <div class="form-group">
                              <?= form_label("Old Image","image");?><?= form_label("New Image","image",["class"=>"pull-right"]);?><br/>
                              <img src="" id="productimg" style="height:100px;width:100px;">
                              <img src="<?= BASE_URL.$property['image_url'];?>demo.png" class="pull-right" id="newimg" style="height:100px;width:100px;"><br/>
                              <?= form_label("Select Image","image");?>
                              <?= form_upload(["class"=>"form-control mt-2","name"=>"image","required"=>"required","id"=>"image","onchange"=>"newImg(this)","accept"=>"image/*"]);?>
                            </div>
                            <div class="button-group">
                                <?= form_submit(["class"=>"btn btn-primary","name"=>"updateGallertImage","value"=>"Upload","type"=>"submit"]);?>
                            </div>
                        <?= form_close();?>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger m-l-5 pull-left" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
     $(document).ready()
      {
          function newImg(input) {
              if (input.files && input.files[0]) {
                  var reader = new FileReader();
                  reader.onload = function (e) {
                      $('#newimg').attr('src', e.target.result);
                      $("#newimg").css("display", "block");
                  };
                  reader.readAsDataURL(input.files[0]);
              }
          }
          //$("#ques").css("display", "none");
      };

      $(document).ready(function() {
        $('#updateGalleryModal').on('show.bs.modal', function (e) {
            if (e.namespace === 'bs.modal') {
                var opener=e.relatedTarget;
                var image_id         = $(opener).attr('data-image_id');
                var image = $(opener).attr('data-image');
                var image_url = $(opener).attr('data-image_url');

                $('#updateGallertImage').find('[name="image_id"]').val(image_id);
                $('#updateGallertImage').find('[name="oimg"]').val(image_url+image);
                $("#productimg").attr("src","<?= BASE_URL;?>"+image_url+image);
                if(image==""){
                  $("#productimg").attr("src","<?= BASE_URL;?>demo.png");
                }
            }
        }); 
     });

      $("#updateGallertImage").validate({
        ignore:"hidden",
        rules:{
          image:{
            required:true
          }
        },
        messages:{
          image:{
            required:"Select Image"
          }
        },
        submitHandler:function(form){
          $.ajax({
            url:"<?=  BASE_URL;?>galleryImageUpload",
            type:"post",
            data: new FormData(form),
            mimeType: "multipart/form-data",
            contentType: false,
            processData: false,
            beforeSend:function(){
              $("#updateGallertImage").find("[name='submit']").attr("disabled",true);
            },
            complete:function(){

            },
            success:function(e){
              var data=JSON.parse(e);
              if(data[0].status==0){
                $.notify(data[0].msg,"info");
                $("#updateGallertImage").find("[name='submit']").attr("disabled",false);
              }else{
                $.notify(data[0].msg,"success");
                setTimeout(function(){ location.reload(); },1500);
              }
            },
            error:function(){
              $.notify("Server error find.","info");
              $("#updateGallertImage").find("[name='submit']").attr("disabled",false);
            }
          });
          return false; // required to block normal submit since you used ajax
        }
       });

    </script> 

  </body>
</html>