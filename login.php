<?php
session_start();

if (isset($_SESSION["admin"])) {
    header("Location:Dashboard_Admin.php");
}
if (isset($_SESSION["teacher"])) {
    header("Location:Dashboard_Teacher.php");
}
if (isset($_SESSION["student"])) {
    header("Location:Dashboard_Student.php");
}
?>

<?php include_once 'header.php'; ?>

<div class="row">
    <div class="col-md-12">
        <div class="images_bg1 img-fluid">
            <img src="images/shape-2.png" alt="image">
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="log_image">
                <img class="img-fluid" src="images/Login.png" alt="">
            </div>
        </div>
        <div class="col-md-6 log_data">
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6 b_order">
                    <section class="login">
                        <h2>Login</h2>
                        <form method="POST" action="validation.php" enctype="multipart/form-data">
                            <div class="mb-3">
                                <input type="email" name="email" class="form-control" placeholder="Email Id">
                            </div>
                            <div class="mb-3">
                                <input type="password" name="password" class="form-control" placeholder="Password">
                            </div>
                            <div class="mb-3 style">
                                <button type="reset" class="btn btn-primary">Reset</button>
                                <button type="submit" class="btn btn-primary">Login</button>
                                <p>Don't have an account? <a href="signup.php"> SignUp </a> </p>
                                <a href="forgot.php"> Forgot Password?</a>
                            </div>
                        </form>
                    </section>
                </div>
                <div class="col-3"></div>
            </div>
        </div>
    </div>
</div>
<?php include_once 'Footer.php'; ?>