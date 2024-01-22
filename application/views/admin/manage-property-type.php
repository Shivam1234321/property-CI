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
                              <!-- <li class="breadcrumb-item"><a href="#">Library</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Data</li> -->
                          </ol>
                      </nav>
                      <!--breadcrumbs end -->
                  </div>
              </div>

              <!--state overview start-->
             <div class="card">
               <div class="card-header"><span class="h2"><?= $page;?></span>
                 <button class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target="#addPropertyTypeModal">Add Property Type</button>
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
                              <th>Property Type</th>
                              <th>Date</th>
                            </tr>
                          </thead>

                          <tbody>
                            <?php if(count($property_type)>0): $i=1; ?>
                              <?php foreach($property_type as $val): ?>
                                <tr>
                                  <td><?= $i++; ?></td>
                                  <td>
                                    <div class="btn-group btn-group-justified">
                                      <button  type="button" class="btn btn-danger btn-sm" onclick="Delete(<?= $val['property_type_id'];?>)"><i class="fa fa-times"></i></button>
                  
                                      <button type="button" data-toggle="modal" data-target="#editPropertyTypeModal" data-property_type_id="<?= $val['property_type_id'];?>" data-name="<?= $val['name'];?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button>

                                    </div>
                                    <label class="switch">
                                      <input type="checkbox" <?php if($val['status']==1){ echo "checked";  }?> onclick="Status('<?= $val['property_type_id'];?>')">>
                                      <span class="slider round"></span>
                                    </label>
                                  </td>
                                  <td><?= $val['name']; ?></td>
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
 <div class="modal fade" id="addPropertyTypeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Propert Type</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="post" id="addPropertyType" enctype="multipart/form-data">
            <?= form_hidden($this->security->get_csrf_token_name(),$this->security->get_csrf_hash());?>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="name">Enter Property Type</label>
                  <?= form_input(["class"=>"form-control","name"=>"name","id"=>"name","placeholder"=>"Enter Property Type","required"=>"required","autocomplete"=>"off"]);?>
                </div>

                <div class="button-group">
                  <button class="btn btn-primary btn-sm" name="submit" value="addPropertyType">Submit</button>
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
    $("#addPropertyType").validate({
       ignore: ":hidden",
       rules:{
         name:{
           required:true,
         }
       },
       messages:{
         name:{
           required:"Enter Property Type",
         }
       },
       submitHandler: function (form) {

         $.ajax({ 
           type: "POST",
           url: '<?= BASE_URL;?>addPropertyType',
           data: new FormData(form),
           mimeType: "multipart/form-data",
           contentType: false,
           processData: false,
            beforeSend: function(){
              $('#addCategory').find('[name="submit"]').attr("disabled",true);
            },
            complete: function(){
              $('#addCategory').find('[name="submit"]').attr("disabled",false);
            },
            success: function(e){ 
              var res=JSON.parse(e);
              if (res[0].status==0){
                $.notify(res[0].msg,'error');
                $('#addCategory').find('[name="submit"]').attr("disabled",true);
              }else{
                $.notify(res[0].msg,"success");
                setTimeout(function(){ location.reload(); }, 2500);
              }
            },
            error:function(){
              $.notify("Server error occure.","error");
              $('#addCategory').find('[name="submit"]').attr("disabled",true);
            }
           
         });
         return false; // required to block normal submit since you used ajax
       }
    });   
</script>

 <!-- Add Category -->
  <div class="modal fade" id="editPropertyTypeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">

    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Propert Type</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="post" id="editPropertyType" enctype="multipart/form-data">
            <?= form_hidden($this->security->get_csrf_token_name(),$this->security->get_csrf_hash());?>

            <?= form_hidden("property_type_id");?>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="name">Enter Property Type</label>
                  <?= form_input(["class"=>"form-control","name"=>"name","placeholder"=>"Enter Propert Type","required"=>"required","autocomplete"=>"off"]);?>
                </div>

                <div class="button-group">
                  <button class="btn btn-primary btn-sm" name="submit" value="editPropertyType">Submit</button>
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
      $('#editPropertyTypeModal').on('show.bs.modal', function (e) {
          if (e.namespace === 'bs.modal') {
            var opener = e.relatedTarget;

            var property_type_id     = $(opener).attr('data-property_type_id');
            var name                 = $(opener).attr('data-name');
          
            $('#editPropertyType').find('[name="property_type_id"]').val(property_type_id);
            $('#editPropertyType').find('[name="name"]').val(name);
          }
      });
    });
  </script>

 <script type="text/javascript">
    $("#editPropertyType").validate({
       ignore: ":hidden",
       rules:{
         name:{
           required:true,
         }
       },
       messages:{
         name:{
           required:"Enter Name",
         }
       },
       submitHandler: function (form) {

         $.ajax({ 
           type: "POST",
           url: '<?= BASE_URL;?>addPropertyType',
           data: new FormData(form),
           mimeType: "multipart/form-data",
           contentType: false,
           processData: false,
            beforeSend: function(){
                $('#editPropertyType').find('[name="submit"]').attr("disabled",true);
            },
            complete: function(){
               $('#editPropertyType').find('[name="submit"]').attr("disabled",false);
            },
            success: function(e){ 
              var res=JSON.parse(e);
              if (res[0].status==0){
                $.notify(res[0].msg,'error');
                $('#editPropertyType').find('[name="submit"]').attr("disabled",true);
              }else{
                $.notify(res[0].msg,"success");
                setTimeout(function(){ location.reload(); }, 2500);
              }
            },
            error:function(){
               $.notify("Server error occure.","error");
               $('#editPropertyType').find('[name="submit"]').attr("disabled",true);
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
            data:{"id":id,"table":"property_type","field":"property_type_id","<?= $this->security->get_csrf_token_name();?>":"<?= $this->security->get_csrf_hash();?>"},
            success:function(data){
              location.reload();
            }
        });  
      }
      else{
        location.reload();
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
            data:{"id":id,"field":"property_type_id","table":"property_type","<?= $this->security->get_csrf_token_name();?>":"<?= $this->security->get_csrf_hash();?>"},
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
