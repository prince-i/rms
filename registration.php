<?php
include 'db/config.php';


?>
<div class="card">

    <h5 class="card-header info-color white-text text-center py-4">
        <strong>Sign up</strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">

        <!-- Form -->
        <form class="text-center" style="color: #757575;" action="sql/regitrationProcess.php" method="post">
            <div class="form-row">
                <div class="col">
                    <!-- First name -->
                    <div class="md-form">
                        <input type="text" id="id_number" name="id_number" class="form-control" autocomplete="off">
                        <label for="id_number">ID No.</label>
                    </div>
                </div>
                <div class="col">
                    <!-- Last name -->
                    <div class="md-form">
                        <input type="text" id="fname" name="fname" class="form-control" autocomplete="off">
                        <label for="name">Name</label>
                    </div>
                </div>
            </div>

            <!-- E-mail -->
            <div class="md-form mt-0">
                <input type="text" id="username" name="username" class="form-control" autocomplete="off">
                <label for="username">Username</label>
            </div>

            <!-- Password -->
            <div class="md-form">
                <input type="password" id="password" name="password" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock">
                <label for="materialRegisterFormPassword">Password</label>
                <small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                    At least 4 characters
                </small>
            </div>

            <!-- Phone number -->
            <div class="form-row">
                <div class="col">
                    <!-- First name -->
                    <div class="md-form">
                        <select name="position" class="fileselect browser-default form-control" style="width: 250px;">
                        <option disabled selected>Position</option>
                        <option value="Jr Staff">Jr. Staff</option>
                        <option value="Staff">Staff</option>
                        <option value="Supervisor">Supervisor</option>
                        <option value="Assistant Manager">Assistant Manager</option>
                        <option value="Manager">Manager</option>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <!-- Last name -->
                    <div class="md-form">
                        <select name="department" class="fileselect browser-default form-control" style="width: 250px;">
                          <option value="" disabled selected>Department</option>
                          <?php

                          $sql = "SELECT * from tbl_department";
                          $query = $db->query($sql);
                          while ($res = mysqli_fetch_assoc($query)) {
                              echo "<option value='".$res['Department']."'>".$res['Department']."</option>";
                          }

                          ?>
                    </select>
                    </div>
                </div>
            </div>

            <!-- Newsletter -->
            <!-- <div class="form-check">
                <input type="checkbox" class="form-check-input" id="materialRegisterFormNewsletter">
                <label class="form-check-label" for="materialRegisterFormNewsletter">Subscribe to our newsletter</label>
            </div> -->

            <!-- Sign up button -->
            <button name="submit" class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Sign in</button>

            <!-- Social register -->
       <!--      <p>or sign up with:</p> -->
<!-- 
            <a type="button" class="btn-floating btn-fb btn-sm">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a type="button" class="btn-floating btn-tw btn-sm">
                <i class="fab fa-twitter"></i>
            </a>
            <a type="button" class="btn-floating btn-li btn-sm">
                <i class="fab fa-linkedin-in"></i>
            </a>
            <a type="button" class="btn-floating btn-git btn-sm">
                <i class="fab fa-github"></i>
            </a> -->

            <hr>

            <!-- Terms of service -->
          <!--   <p>By clicking
                <em>Sign up</em> you agree to our
               
 -->
        </form>
        <!-- Form -->

    </div>

</div>
<!-- Material form register