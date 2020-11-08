<?php
session_start();
include('includes/header.php')
?>

<div class="container" style="margin-top:220px;">

<!-- Outer Row -->
<div class="row justify-content-center">

  <div class="col-xl-10 col-lg-12 col-md-9">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
          <div class="col-lg-6">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
              </div>

              <?php
                    if(isset($_SESSION['status']) && $_SESSION['status'] !='') 
                    {
                        echo '<center><div class="alert alert-danger"><strong> '.$_SESSION['status'].'</strong></div></center>';
                        unset($_SESSION['status']);
                    }
                ?>

              <form action="login_check.php" method="POST">
                <div class="form-group">
                  <input type="email" name="emaill" class="form-control form-control-user"  placeholder="Enter Email Address...">
                </div>
                <div class="form-group">
                  <input type="password" name="passwordd" class="form-control form-control-user" placeholder="Password">
                </div>
                <button type="submit" name="login_btn" class="btn btn-primary btn-user btn-block">Login</button>
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="register.php">Create an Account!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

</div>

</div>

<?php 
include('includes/scripts.php'); 
?>