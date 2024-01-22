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
                  <form id="addBlog" method="post" enctype="multipart/form-data">
                    <?= form_hidden($this->security->get_csrf_token_name(),$this->security->get_csrf_hash()); ?>
                    <div class="row">

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
                          <label for="author">Author</label>
                          <input type="text" name="author" id="author" required="" class="form-control" placeholder="Enter Author" autocomplete="off">
                        </div>
                      </div>

                      <div class="col-sm-4">
                        <div class="form-group">
                          <label for="subject">Subject</label>
                          <input type="text" name="subject" id="subject" required="" class="form-control" placeholder="Enter Subject" autocomplete="off">
                        </div>
                      </div>

                      <div class="col-sm-4">
                        <div class="form-group">
                          <label for="image">Select Image</label>
                          <input type="file" name="image" id="image" required="" class="form-control" autocomplete="off">
                        </div>
                      </div>

                      <div class="col-sm-12">
                        <div class="form-group">
                          <label for="tags">Tags</label>
                          <textarea type="test" name="tags" id="tags" required="" class="form-control" autocomplete="off" placeholder="Enter Tags"></textarea>
                        </div>
                      </div>


                    </div>

                    <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label for="description">Description</label>
                          <textarea type="text" name="description" id="description" required="" class="form-control summernote" rows="2" autocomplete="off"></textarea>
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

     $("#addBlog").validate({
           ignore: ":hidden",
           rules:{
               title:{
                 required:true,
               },
               author:{
                required:true
               },
               subject:{
                required:true
               },
               image:{
                required:true
               }
           },
           messages:{
                title:{
                    required:"Enter Title",
                },
                author:{
                    required:"Enter Author"
                },
                subject:{
                    required:"Enter Subject"
                },
                image:{
                    required:"Select Image"
                }
           },
           submitHandler: function (form) {

             $.ajax({ 
               type: "POST",
               url: '<?= BASE_URL?>/submitblog',
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