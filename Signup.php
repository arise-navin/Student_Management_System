<?php include_once 'header.php'; ?>

<div class="row">
    <div class="col-md-12">
        <div class="images_bg4 img-fluid">
            <img src="images/shape-4.png" alt="image">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="images_bg2 img-fluid">
            <img src="images/shape-1.png" alt="image">
        </div>
    </div>
</div>

<div class="container-fluid sign_up">
    <div class="row">

        <div class="col-6 sign">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <section class="login">
                        <h2>SignUp Now</h2>
                        <form method="POST" action="mail/welcome_mail.php" enctype="multipart/form-data">
                            <div class="mb-3">
                                <input name="fname" type="text" class="form-control" placeholder="First Name" required>

                            </div>
                            <div class="mb-3">
                                <input name="lname" type="text" class="form-control" placeholder="Last Name" required>
                            </div>
                            <div class="mb-3">
                                <input name="email" type="email" class="form-control" placeholder="Email ID" required>
                            </div>
                            <div class="mb-3">
                                <input name="password" type="password" class="form-control" placeholder="Password" required>
                            </div>
                            <div class="mb-3">
                                <label> SignUp as </label>
                                <label class="form-check-label" for="student"> Student </label>
                                <input name="usertype" class="form-check-input" type="radio" name="user" id="student" value="01" required>

                                <label class="form-check-label" for="teacher">&emsp; &emsp; Teacher </label>
                                <input name="usertype" class="form-check-input" type="radio" name="user" id="teacher" value="01" required>

                            </div>
                            <div class="mb-3 style">
                                <button type="reset" class="btn btn-primary">Reset</button>
                                <button type="submit" class="btn btn-primary">SignUp</button>
                                <p>Already have an account? <a href="login.php"> Login</a> </p>
                            </div>
                        </form>
                    </section>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="log_image">
                <img class="img-fluid" src="images/Signup.svg" alt="">
            </div>
        </div>
    </div>
</div>
<?php include_once 'Footer.php'; ?>