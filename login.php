<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<?php require_once('header.php'); ?>
<?php require_once('menu.php'); ?>
    <div class="page-container animsition">
        <div class="login">
    <div class="login-container">
        <div class="login-form">
            <div class="logo mb-5">
                <a href="../index.html">
                    <span class="logo-emblem"><img src="../images/boot.png" alt="BA" /></span>
                    <span class="logo-full">Bootadmin</span>
                </a>
            </div>

            <form action="#">
                <div class="form-group">
                    <input type="text" name="username" placeholder="Username or E-Mail" />
                    <label><i class="fas fa-user"></i></label>
                </div>
                <div class="form-group">
                    <input type="password" name="password" placeholder="Password" />
                    <label><i class="fas fa-lock"></i></label>
                </div>
                <div class="row login-button">
                    <div class="col-6">
                        <a href="../forgot-password.html" class="forgot-password">Forgot Password?</a>
                    </div>
                    <div class="col text-right">
                        <a href="../index.html" class="btn btn-success">Sign In</a>
                    </div>
                </div>
            </form>

            <div class="or-separator">
                <span>Don't have an account?</span>
            </div>

            <div class="login-facebook">
                <a href="../signup.html" class="btn btn-primary">Sign Up for Free</a>
            </div>
        </div>
    </div>
</div>



        
<?php require_once('footer.php'); ?>