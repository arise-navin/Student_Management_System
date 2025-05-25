<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SMS</title>

    <link rel="icon" type="image/x-icon" href="images/logo1.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+P+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Baumans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="sms.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <header class="header_section">
                    <div class="container">
                        <nav class="navbar navbar-expand-lg bg-body-transparent">
                            <div class="container-fluid">
                                <div class="row heading align-items-center">
                                    <div class="col">
                                        <!-- <a class="navbar-brand" href="Index.php"> -->
                                        <img src="images/logo1.png" class="navbar-brand" alt="logo">
                                    </div>
                                    <div class="col sms">
                                        <span> SMS </span>
                                    </div>
                                </div>

                                </a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                        <li class="nav-item">
                                            <a class="nav-link" aria-current="page" href="index.php"> Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " aria-current="page" href="about.php"> About</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="contact.php"> Contact</a>
                                        </li>
                                        <li>&emsp;&emsp;&emsp;</li>
                                        <li class="nav-item">
                                            <a> <img src="images/RG_Logo.png" width="40px"> </a>
                                            <!-- <a class="nav-link" href="login.php"> Login</a> -->
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </header>
            </div>
        </div>
    </div>


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







    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2" class="admin_dash">
                <h2>Dashboard </h2>


                <ul style="list-style-type:none">
                    <li><a class="active" href="">All Approved Students</a></li>
                    <li><a class="active" href="">Pending Students</a></li>
                    <li><a class="active" href="">Rejected Students</a></li>
                    <br>

                    <li><a class="active" href="">All Approved Teachers</a></li>
                    <li><a class="active" href="">Pending Teachers</a></li>
                    <li><a class="active" href="">Rejected Teachers</a></li>
                    <br>

                    <li><a class="active" href="">Upload Assignment </a></li>
                    <li><a class="active" href="">View Notice </a></li>
                    <li><a class="active" href="">Add Notice </a></li>
                </ul>
            </div>

        </div>
    </div>

    <?php include_once 'Footer.php'; ?>