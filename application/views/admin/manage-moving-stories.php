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
                                <th>Show On Homepage</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Type</th>
                                <th>Decision</th>
                                <th>Challenge</th>
                                <th>Happy</th>
                                <th>Moving Story</th>
                                <th>Date</th>
                            </tr>
                          </thead>
                          <tbody>
                          <?php 
                            
                            if(count($stories)):
                              $i=1;
                              foreach($stories as $val):
                          ?>
                              <tr>
                                <td><?= $i++;?></td>
                                <td>
                                  <div class="btn-group btn-group-justified">
                                    <button class="btn btn-danger btn-sm" onclick="Delete(<?= $val['moving_story_id'];?>)"><i class="fa fa-times"></i></button>

                                  </div>
                                  <label class="switch">
                                    <input type="checkbox" <?php if($val['status']==1){ echo "checked";  }?> onclick="Status('<?= $val['moving_story_id'];?>')">>
                                    <span class="slider round"></span>
                                  </label>
                                </td>
                                <td class="text-center"><input type="radio" name="homepage" onclick="setForHomepage(<?= $val['moving_story_id'];?>);" <?php if($val['show_on_homepage'] == 1){ echo 'checked';} ?>  ></td>
                                <td><?= $val['fname']." ".$val['lname'] ;?></td>
                                <td><?= $val['email'];?></td>
                                <td><?= $val['mobile'];?></td>
                                <td><?= $val['type'];?></td>
                                <td><?= $val['decision'];?></td>
                                <td><?= $val['challenge'];?></td>
                                <td><?= $val['happy'];?></td>
                                <td><?= $val['moving_story'];?></td>
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
function setForHomepage(id)
{
    $.ajax({
        url:"<?= BASE_URL?>blog/AdminBlog/homepageStatus",
        type:"post",
        data:{"id":id,"<?= $this->security->get_csrf_token_name();?>":"<?= $this->security->get_csrf_hash();?>"},
        success:function(res){
            var response = JSON.parse(res);
           if(response.status == 1)
           {
               $.notify(response.msg,"success");
           }
           else
           {
               $.notify(response.msg,"error");
           }
         }
    });
}
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
            data:{"id":id,"table":"moving_story","field":"moving_story_id","<?= $this->security->get_csrf_token_name();?>":"<?= $this->security->get_csrf_hash();?>"},
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
            data:{"id":id,"field":"moving_story_id","table":"moving_story","<?= $this->security->get_csrf_token_name();?>":"<?= $this->security->get_csrf_hash();?>"},
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
</script>  mam