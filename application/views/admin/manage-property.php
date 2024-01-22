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
                              <li class="breadcrumb-item"><a href="#"> <?= $page; ?></a></li>
                              <!--<li class="breadcrumb-item active" aria-current="page">Data</li> -->
                          </ol>
                      </nav>
                      <!--breadcrumbs end -->
                  </div>
              </div>

              <!--state overview start-->

             <div class="card">
               <div class="card-body">
                 <div class="row">
                   <div class="col-sm-12">
                     <div class="table-responsive">
                        <table class="display table table-bordered" id="responsivetable">
                          <thead>
                            <tr>
                                <th>ID</th>
                                <th>Action</th>
                                <th>Is Available For Student</th>
                                <th>Category</th>
                                <th>Title</th>
                                <th>Slug</th>
                                <th>Address</th>
                                <th>Property Type</th>
                                <th>City</th>
                                <th>Floor Map</th>
                                <th>furnish_type</th>
                                <th>Date</th>
                            </tr>
                          </thead>
                          <tbody>
                          <?php 
                            
                            if(count($property)):
                              $i=1;
                              foreach($property as $val):
                          ?>
                              <tr>
                                <td><?= $i++;?></td>
                                <td>
                                  <div class="btn-group btn-group-justified">
                                    <button class="btn btn-danger btn-sm" onclick="Delete(<?= $val['property_id'];?>)"><i class="fa fa-times"></i></button>

                                    <a href="<?= BASE_URL."editproperty/".$val['property_id'];?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>

                                    <a href="<?= BASE_URL."viewproperty/".$val['property_id'];?>" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a>

                                  </div>
                                  <label class="switch">
                                    <input type="checkbox" <?php if($val['status']==1){ echo "checked";  }?> onclick="Status('<?= $val['property_id'];?>')">>
                                    <span class="slider round"></span>
                                  </label>
                                </td>
                                <td>
                                  <label class="switch">
                                    <input type="checkbox" <?php if($val['is_available_for_student']==1){ echo "checked";  }?> onclick="StudentStatus('<?= $val['property_id'];?>')">>
                                    <span class="slider round"></span>
                                  </label>
                                </td>
                                <td><?= $val['category'];?></td>
                                <td><?= $val['title'];?></td>
                                <td><?= $val['slug'];?></td>
                                <td><?= $val['address'];?></td>
                                <td><?= $this->dm->getSingleValueWhere("property_type","name",array("property_type_id"=>$val['property_type']));?></td>
                                <td><?= $this->dm->getSingleValueWhere("city","city",array("city_id"=>$val['region']));?></td>
                                <td><img src="<?= BASE_URL.$val['image_url'].$val['floor_map'];?>" style="height:100px;width:100px;"></td>
                                <td><?= $val['furnish_type'];?></td>
                                <td><?= date("d M, Y",strtotime($val['date']));?></td>
                              </tr>
                          <?php endforeach; ?>
                          <?php endif; ?>
                              
                          </tbody>
                        </table>

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

  </body>
</html>

<script>

function Delete(id) {
      Swal.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
      if (result.value) {
        $.ajax({
            url:"<?= BASE_URL?>dashboard/delete",
            type:"post",
            data:{"id":id,"table":"property","field":"property_id","<?= $this->security->get_csrf_token_name();?>":"<?= $this->security->get_csrf_hash();?>"},
            success:function(data){
              location.reload();
             }
        });   
      }
      else{
        //location.reload();
      }
    });
}

  function Status(id){
      Swal.fire({
        title: 'Are you sure?',
        text: "Are you sure change status!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, change it!'
      }).then((result) => {
        if (result.value) {
          $.ajax({
            url:"<?= BASE_URL?>dashboard/status",
            type:"post",
            data:{"id":id,"field":"property_id","table":"property","<?= $this->security->get_csrf_token_name();?>":"<?= $this->security->get_csrf_hash();?>"},
            success:function(data){
              // $("#"+id).text(data);
               location.reload();
             }
          });
        }
        else{
          location.reload();
        }
      });
  }

  function StudentStatus(id){
      Swal.fire({
        title: 'Are you sure?',
        text: "Are you sure change status!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, change it!'
      }).then((result) => {
        if (result.value) {
          $.ajax({
            url:"<?= BASE_URL?>property/Property/StudentStatus",
            type:"post",
            data:{"id":id,"field":"property_id","table":"property","<?= $this->security->get_csrf_token_name();?>":"<?= $this->security->get_csrf_hash();?>"},
            success:function(data){
              // $("#"+id).text(data);
               location.reload();
             }
          });
        }
        else{
          location.reload();
        }
      });
  }
</script>  