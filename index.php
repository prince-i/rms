<?php 
include 'db/config.php';
// mkdir('helloworld');
 ?>


<!DOCTYPE html>
<html>
<head>
  <title>Recruitment Monitoring System</title>
  
</head>
<link rel="stylesheet" href="plugins/iziModal/css/iziModal.css">
<link rel="stylesheet" href="plugins/iziModal/css/iziModal.min.css">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
 <meta name="viewport" content="width=device-width, initial-scale=1">

  <script src="bootstrap/jquery.min.js"></script>
  <?php
  include 'src/link.php';
?>
<body style="background-image: url('img/hrbg.jpg');background-repeat: no-repeat;background-size: 100%;">
<div class="container" >
  <div class="row">
    <div class="col-4 mt5">
    </div>
    <div class="col-4 mt5">
    </div>
    <div class="col-4 mt5">   
      <br><br><br>
      
      <div class="card card-cascade narrower" style="box-shadow: 1px 1px 5px 5px rgba(0,0,0,0.2);">


    <h5 class="card-header info-color white-text text-center py-4">
   <br><br>
  </h5>
  <!--Card content-->
  <img src="img/font.png" style="width: 90%;margin-left: 15px;margin-top: -38px; position: absolute;z-index: 5;"> 
  <div class="card-body px-lg-5 pt-0">

    <!-- Form -->
      <form  style="color: #757575;" class="text-center"  action="src/request.php" method="post">

      <!-- Email -->
      <div class="md-form">
                <label> <i class="fas fa-user prefix"></i></label>
                <input style="margin-left: 30px;" type="text" name="username" id="md" class="form-control" autocomplete="off">
                <label for="md" style="margin-left: 30px;">Username</label>
              </div>

      <!-- Password -->
      <div class="md-form">
                <label><i class="fas fa-lock prefix"></i></label>
                <input style="margin-left: 30px;" type="password" name="password" id="materialLoginFormPassword" class="form-control">
                <label for="md" style="margin-left: 30px;">Password</label>
              </div>

    <div style="margin-left: 25px;">
      <button  name="loginadmin" class="btn btn-primary btn-rounded" style="float:left;margin-left: -10%;" type="submit">Sign in</button>


        <a href="##" id="register" class="btn btn-primary btn-rounded" style="float: right;margin-right: -4%;" data-izimodal-open='#modal' data-izimodal-transitionin='fadeInDown' >Register</a>
    </div>


    </form>
    <!-- Form -->

  </div>

</div>
<!-- Material form login -->


    
    </div>
  </div>
 </div>


<div class="modal" id="modal" data-izimodal-group="alerts" role="dialog">
  <div class="ajax"></div>
</div>





<script>
  $(document).ready(function()
  {
      $('#register').click(function()
      {
          $("#modal").iziModal({
         
         
        });

         $('.ajax').load("registration.php");  
      });

        $('#forgotpassword').click(function()
        {
            
            forgat();
      });

  });


  function forgat(){
   Swal.fire(
  'Forgot Password?',
  'Call IT Staff',
  'question'
)
  }
</script>

<?php
  include 'src/script.php';
?>





<script src="plugins/sweetalert.js"> </script>
<script src="jquery/jquery-3.2.1.js"></script>
<script src="plugins/iziModal/js/iziModal.js"> </script>
<script src="plugins/iziModal/js/iziModal.min.js"> </script>
</body>
<?php

if(isset($_GET['msg'])) 
{
    echo "<script> 

Swal.fire
({
  type: 'error',
  title: 'Oops...',
  text: 'Wrong username or password'
})
</script>";
}

if(isset($_GET['msg1'])) 
{
    echo "<script> 

Swal.fire(
  'Good job!',
  'successfully registered!',
  'success'
)

</script>";
}
?>
</html>