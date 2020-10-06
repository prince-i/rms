<!-- Navbar -->
   
<style type="text/css">
  .navbar {
    background-image: linear-gradient(to right, #5DBCD2, #89AEb2,#5DBCD2);
    ;

  }
</style>




    <nav id="navbar" class="navbar fixed-top navbar-toggleable-md navbar-expand-lg double-nav">
      <!-- SideNav slide-out button -->
      <div class="float-left">
        <a href="#" data-activates="slide-out" class="button-collapse"><img src="img/fas.png" style="width: 70px;"> </i></a>
      </div>
      <!-- Breadcrumb-->
      
      <ul class="nav navbar-nav nav-flex-icons ml-auto">
        <li class="nav-item">
          <a class="nav-link"><i class="fa fa-envelope"></i> <span class="clearfix d-none d-sm-inline-block">Message</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link"><i class="fa fa-comments-o"></i> <span class="clearfix d-none d-sm-inline-block">Support</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link"><i class="fa fa-user"></i> <span class="clearfix d-none d-sm-inline-block"><?php echo $_SESSION['name']; ?></span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
          Summary of Applicant
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="interviewResult.php">Interview Result</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
      </ul>
    </nav>
 