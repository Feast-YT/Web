<?php
include('includes/header.php');
include('register_db.php');
?>

<div class="container" style="margin-top:220px;">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>

                            <?php
                            if(isset($_SESSION['success']) && $_SESSION['success'] !='')
                            {
                                echo '<center><div class="alert alert-success"><strong>'.$_SESSION['success'].' </strong></div></center>';
                                unset($_SESSION['success']);
                            }

                            if(isset($_SESSION{'status'}) && $_SESSION['status'] !='')
                            {
                                echo '<center><div class="alert alert-danger"><strong> '.$_SESSION['status'].' </strong></div></center>';
                                unset($_SESSION['status']);
                            }
                            ?>

                            <form action="register_check.php" method="POST">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="username" class="form-control form-control-user" placeholder="Your Name" minlength="7" maxlength="15" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="email" name="email" class="form-control form-control-user" placeholder="Email" minlength="5" maxlength="30" required>
                                        <small class="error_email" style="color: red;"></small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" name="password" class="form-control form-control-user" placeholder="Password" minlength="6" maxlength="30"  required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" name="confirmpassword" class="form-control form-control-user" placeholder="Repeat Password" required>
                                    </div>
                                    <input type="hidden" name="usertype" value="user" >
                                </div>
                                <button type="submit" name="registerbtn" class="btn btn-primary btn-user btn-block">Register Account</button>
                			</a>
                   		 </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="login.php">Already have an account? Login!</a>
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