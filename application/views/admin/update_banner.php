<?php defined("BASEPATH") OR exit("No direct script access allowed."); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php require "template/CssLink.php"; ?>

  </head>
<?php
foreach($banner as $b)
{
    $id = $b['id'];
    $banner = $b['banner'];
}
?>
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
                  <form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>admin/change_banner">
                    <?= form_hidden($this->security->get_csrf_token_name(),$this->security->get_csrf_hash()); ?>
                    <div class="row">
                    <input type="hidden" value="<?php echo $id; ?>" name="id">
                      <div class="col-sm-4">
                        <div class="form-group">
                          <label for="image">Select Image</label>
                          <input type="file" name="banner" id="image" required="" class="form-control" autocomplete="off" required>
                        </div>
                      </div>
                    

                    </div>
<button type="submit" class="btn btn-success">Update</button>
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

  