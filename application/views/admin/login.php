
<!DOCTYPE html>
<html lang="en">
<head>
   <?php require "template/CssLink.php";?>

</head>

  <body class="login-body">

    <div class="container">
      <div class="row">
        <div class="col-sm-4 mx-auto">
          <img alt="" src="<?= LOGO; ?>" style="height:150px;width:100%;">
        </div>
      </div>

      <form class="form-signin" method="post" id="adminlogin">
        <?= form_hidden($this->security->get_csrf_token_name(),$this->security->get_csrf_hash());?>
        <h2 class="form-signin-heading">sign in now</h2>
        <div class="login-wrap">

          <input type="text" class="form-control" name="email" id="email" placeholder="Email" autofocus="">
          <input type="password" class="form-control" name="password" id="password" placeholder="Password">
           
          <button class="btn btn-lg btn-login btn-block" name="adminlogin" value="adminlogin" type="submit">Sign in</button>
            
        </div>
      </form>
    </div>

    <?php require "template/ScriptLink.php"; ?>

<script type="text/javascript">
  $("#adminlogin").validate({
    rules:{
      email:{
        required:true,
        email:true
      },
      password:{
        required:true
      }
    },
    messages:{
      email:{
        required:"Enter Email",
        email:"Enter Valid Email"
      },
      password:{
        required:"Enter Password"
      }
    },submitHandler: function (form) {

      $.ajax({ 
        type: "POST",
        url: '<?= BASE_URL;?>loginAuth',
        data: new FormData(form),
        mimeType: "multipart/form-data",
        contentType: false,
        processData: false,
          success: function(e){ 
            var res = JSON.parse(e);
            if (res[0].status==0){
              $.notify(res[0].msg,'error');
            }else{
              $.notify(res[0].msg,"success");
              location.reload();
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


  </body>
</html>

<?php
  if(isset($_REQUEST['msg']) && $_REQUEST['msg']=='email'){
    echo "<script>
      Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'Email wrong.',
            showConfirmButton: false,
            timer: 1500
          });
    </script>";
  }

  if(isset($_REQUEST['msg']) && $_REQUEST['msg']=='password'){
    echo "<script>
      Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'Password wrong',
            showConfirmButton: false,
            timer: 1500
          });
    </script>";
  }

  if(isset($_REQUEST['msg']) && $_REQUEST['msg']=='empty'){
    echo "<script>
      Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'All field required',
            showConfirmButton: false,
            timer: 1500
          });
    </script>";
  }
?>
<?php
  if(isset($_REQUEST['msg']) && $_REQUEST['msg']=='logout'){
    echo "<script>
          Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'Your session expired.',
            showConfirmButton: false,
            timer: 1500
          });
    </script>";
  }
  ?>
