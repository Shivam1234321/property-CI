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
                              <li class="breadcrumb-item active"><a href="#"><?= $page; ?></a></li>
                              <!-- <li class="breadcrumb-item active" aria-current="page">Data</li> -->
                          </ol>
                      </nav>
                      <!--breadcrumbs end -->
                  </div>
              </div>

              <!--state overview start-->
             <div class="card">
               <div class="card-header"><span class="h2"><?= $page;?></span>
                 <button class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target="#addCityModal">Add City</button>
               </div>
               <div class="card-body">
                 <div class="row">

                    <div class="col-sm-12">
                      <div class="table-responsive">

                        <table class="table table-hover table-bordered" id="datatable">

                          <thead>
                            <tr>
                              <th>#</th>
                              <th>Action</th>
                              <th>City</th>
                              <th>Date</th>
                            </tr>
                          </thead>

                          <tbody>
                            <?php if(count($city)>0): $i=1; ?>
                              <?php foreach($city as $val): ?>
                                <tr>
                                  <td><?= $i++; ?></td>
                                  <td>
                                    <div class="btn-group btn-group-justified">
                                      <button  type="button" class="btn btn-danger btn-sm" onclick="Delete(<?= $val['city_id'];?>)"><i class="fa fa-times"></i></button>
                  
                                      <button type="button" data-toggle="modal" data-target="#editCityModal" data-city_id="<?= $val['city_id'];?>" data-city="<?= $val['city'];?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button>

                                    </div>
                                    <label class="switch">
                                      <input type="checkbox" <?php if($val['status']==1){ echo "checked";  }?> onclick="Status('<?= $val['city_id'];?>')">>
                                      <span class="slider round"></span>
                                    </label>
                                  </td>
                                  <td><?= $val['city']; ?></td>
                                  <td><?= date("d M, Y",strtotime($val['date'])); ?></td>
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
  <!-- Add Category -->
 <div class="modal fade" id="addCityModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add City</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="post" id="addCity" enctype="multipart/form-data">
            <?= form_hidden($this->security->get_csrf_token_name(),$this->security->get_csrf_hash());?>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="city">Enter City</label>
                  <?= form_input(["class"=>"form-control","name"=>"city","id"=>"city","placeholder"=>"Enter City","required"=>"required","autocomplete"=>"off"]);?>
                </div>

                <div class="button-group">
                  <button class="btn btn-primary btn-sm" name="submit" value="addCity">Submit</button>
                </div>

              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  </body>
</html>

<script type="text/javascript">
    $("#addCity").validate({
       ignore: ":hidden",
       rules:{
         city:{
           required:true,
         }
       },
       messages:{
         city:{
           required:"Enter City",
         }
       },
       submitHandler: function (form) {

         $.ajax({ 
           type: "POST",
           url: '<?= BASE_URL;?>addCity',
           data: new FormData(form),
           mimeType: "multipart/form-data",
           contentType: false,
           processData: false,
            beforeSend: function(){
              $('#addCity').find('[name="submit"]').attr("disabled",true);
            },
            complete: function(){
              //$('#addCity').find('[name="submit"]').attr("disabled",false);
            },
            success: function(e){ 
              var res=JSON.parse(e);
              if (res[0].status==0){
                $.notify(res[0].msg,'error');
                $('#addCity').find('[name="submit"]').attr("disabled",true);
              }else{
                $.notify(res[0].msg,"success");
                setTimeout(function(){ location.reload(); }, 2500);
              }
            },
            error:function(){
              $.notify("Server error occure.","error");
              $('#addCity').find('[name="submit"]').attr("disabled",true);
            }
           
         });
         return false; // required to block normal submit since you used ajax
       }
    });   
</script>

 <!-- Add Category -->
  <div class="modal fade" id="editCityModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">

    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit city</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="post" id="editCity" enctype="multipart/form-data">
            <?= form_hidden($this->security->get_csrf_token_name(),$this->security->get_csrf_hash());?>

            <?= form_hidden("city_id");?>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="city">Enter Name</label>
                  <?= form_input(["class"=>"form-control","name"=>"city","placeholder"=>"Enter City","required"=>"required","autocomplete"=>"off"]);?>
                </div>

                <div class="button-group">
                  <button class="btn btn-primary btn-sm" name="submit" value="editCity">Submit</button>
                </div>

              </div>
            </div>

          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <script>
    $(document).ready(function() {
      $('#editCityModal').on('show.bs.modal', function (e) {
          if (e.namespace === 'bs.modal') {
            var opener = e.relatedTarget;

            var city_id     = $(opener).attr('data-city_id');
            var city                 = $(opener).attr('data-city');
          
            $('#editCity').find('[name="city_id"]').val(city_id);
            $('#editCity').find('[name="city"]').val(city);
          }
      });
    });
  </script>

 <script type="text/javascript">
    $("#editCity").validate({
       ignore: ":hidden",
       rules:{
         city:{
           required:true,
         }
       },
       messages:{
         city:{
           required:"Enter City",
         }
       },
       submitHandler: function (form) {

         $.ajax({ 
           type: "POST",
           url: '<?= BASE_URL;?>addCity',
           data: new FormData(form),
           mimeType: "multipart/form-data",
           contentType: false,
           processData: false,
            beforeSend: function(){
                $('#editCity').find('[name="submit"]').attr("disabled",true);
            },
            complete: function(){
               //$('#editCity').find('[name="submit"]').attr("disabled",false);
            },
            success: function(e){ 
              var res=JSON.parse(e);
              if (res[0].status==0){
                $.notify(res[0].msg,'error');
                $('#editCity').find('[name="submit"]').attr("disabled",true);
              }else{
                $.notify(res[0].msg,"success");
                setTimeout(function(){ location.reload(); }, 2500);
              }
            },
            error:function(){
               $.notify("Server error occure.","error");
               $('#editCity').find('[name="submit"]').attr("disabled",true);
            }
           
         });
         return false; // required to block normal submit since you used ajax
       }
    });   


  function Delete(id){
    Swal.fire({
      title: 'Are you sure?',
      text: "Are you sure delete this data!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
      if (result.value) {
        $.ajax({
            url:"<?= BASE_URL;?>dashboard/delete",
            type:"post",
            data:{"id":id,"table":"city","field":"city_id","<?= $this->security->get_csrf_token_name();?>":"<?= $this->security->get_csrf_hash();?>"},
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
      text: "Are you sure change status data!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
      if (result.value) {
        $.ajax({
            url:"<?= BASE_URL;?>dashboard/status",
            type:"post",
            data:{"id":id,"field":"city_id","table":"city","<?= $this->security->get_csrf_token_name();?>":"<?= $this->security->get_csrf_hash();?>"},
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
