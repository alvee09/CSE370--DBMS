<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ruzlan panda</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/creative.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">



</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class=" navbar-brand page-scroll" href="#page-top">Ru<i id="iconic">z</i>lan Pa<i id="iconic">n</i>da</a>
                <img src="img/logo.png" alt="logo" class="logo">
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#about">Sign Up</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Log in </a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Food Gallary</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading">Ru<i id="iconic">z</i>lan Pa<i id="iconic">n</i>da </h1>
                <hr>
                <p>Getting your food delivered before it is being cooked :3</p>
                <a href="#about" class="btn btn-primary btn-xl page-scroll">Find Out More</a>
            </div>
        </div>
    </header>

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Delivering the Fastest Food in BD </h2>
                    <hr class="light">
                    <p class="text-faded">The Hella Company is pleased to offer a variety of handcrafted goods that raise the bar on your imbibing and culinary experience. We handcraft each product in small batches with the finest ingredients available; the resulting quality is no coincidence.</p>
                    <a class="page-scroll btn btn-default btn-xl sr-button" data-toggle="modal" data-target="#diform">Sign Up Now </a>
                </div>
            </div>
        </div>
    </section>

    <div id="diform" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">


            <div id="signupbox" class="mainbox  ">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <div class="panel-title">Sign Up</div>

                    </div>
                    <div class="panel-body">
                        <form id="signupform" class="form-horizontal" role="form" method="POST" action="sign_in.php">

                            <div id="signupalert" style="display:none" class="alert alert-danger">
                                <p>Error:</p>
                                <span></span>
                            </div>





                            <div class="form-group form-inline " >
                                <label for="firstname" class="col-md-3 control-label"> Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="name" placeholder=" Name">
                                </div>
                            </div>
                            <div class="form-group form-inline">
                                <label for="lastname" class="col-md-3 control-label">Address(Only Area)</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="address" placeholder="Address">
                                </div>
                            </div>
                            <div class="form-group form-inline">
                                <label for="lastname" class="col-md-3 control-label">Mobile no</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="mobile" placeholder="telephone">
                                </div>
                            </div>
                            <div class="form-group form-inline">
                                <label for="lastname" class="col-md-3 control-label">Username</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="username" placeholder="Username">
                                </div>
                            </div>
                            
                            <div class="form-group form-inline">
                                <label for="password" class="col-md-3 control-label">Password</label>
                                <div class="col-md-9">
                                    <input type="password" class="form-control" name="password" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group form-inline">
                                <label for="password2" class="col-md-3 control-label">Confirm Password</label>
                                <div class="col-md-9">
                                    <input type="password" class="form-control" name="password2" placeholder="Confirm Password">
                                </div>
                            </div>
                            <div class="form-group form-inline">
                                <label for="lastname" class="col-md-3 control-label">Email</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="email" placeholder="email">
                                </div>
                            </div>



                            <div class="form-group">
                                <!-- Button -->
                                <div class="text-center">
                                    <button  id="btn-signup" name="signup_btn" type="submit" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Sign Up</button>

                                </div>
                            </div>





                        </form>
                    </div>
                </div>




            </div>

        </div>

        <!-- /.modal-content -->

        <!-- /.modal-dialog -->
    </div>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Log in</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-newspaper-o text-primary sr-icons"></i>
                        <h3>Up to Date</h3>
                        <p class="text-muted">With the latest food from near you area !</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 text-center">
                    <div class="panel panel-info panel_bod">
                        <div class="panel-heading panel_mod">
                            <div class="panel-title">Sign In</div>

                        </div>

                        <div style="padding-top:30px" class="panel-body">

                            <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                            <form id="loginform" class="form-horizontal" role="form" method="post" action="sign_in.php">

                                <div style="margin-bottom: 25px" class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input id="login-username" type="text" class="form-control" name="user" value="" placeholder="username or email">
                                </div>

                                <div style="margin-bottom: 25px" class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                    <input id="login-password" type="password" class="form-control" name="pass" placeholder="password">
                                </div>



                                <div class="input-group">
                                    <div class="checkbox">
                                        <label>
                                            <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                                        </label>
                                    </div>
                                </div>


                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls text-center">
                                        <button id="btn-login" name="login_btn" type="submit" class="btn btn-success">Login  </button>


                                    </div>
                                </div>



                            </form>



                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-paper-plane text-primary sr-icons"></i>
                        <h3>Ready to Ship</h3>
                        <p class="text-muted">With in the next one hour</p>
                    </div>
                </div>
            </div>
    </section>

    <section class="no-padding" id="portfolio">
        <div class="container-fluid">
            <div class="row no-gutter popup-gallery">
                <div class="col-lg-4 col-sm-6">
                    <a href="img/feature1.jpg" class="portfolio-box">
                        <img src="img/feature1.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Bangali
                                </div>
                                <div class="project-name">
                                    Gorur-mangsho
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="img/feature2.jpg" class="portfolio-box">
                        <img src="img/feature2.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Indian
                                </div>
                                <div class="project-name">
                                    Hydrabadi Biriyani
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="img/feature3.jpg" class="portfolio-box">
                        <img src="img/feature3.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Italian
                                </div>
                                <div class="project-name">
                                    Pizza
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="img/feature2.jpg" class="portfolio-box">
                        <img src="img/feature2.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    American
                                </div>
                                <div class="project-name">
                                    Burgers
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="img/feature3.jpg" class="portfolio-box">
                        <img src="img/feature3.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Japanese
                                </div>
                                <div class="project-name">
                                    Ramens
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="img/feature1.jpg" class="portfolio-box">
                        <img src="img/feature1.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Arabian
                                </div>
                                <div class="project-name">
                                    Shawrma
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>



    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Let's Get In Touch!</h2>
                    <hr class="primary">
                    <p>Meet the idiots who made this masterpiece!</p>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="thumbnail know">
                        <img src="img/sazzad.jpg" alt="sazzad" class="img-responsive " style="height:200px; width:300px">
                        <div class=" caption text-center">
                            <h3>Sazzad Hossain</h3>
                            <p>President </p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 ">
                    <div class="thumbnail ">
                        <img src="img/ruzlan.jpg " alt="ruzlan " class="img-responsive " style="height:200px; width:300px">
                        <div class="caption text-center">
                            <h3>Ruzlan Karim</h3>
                            <p>CEO ...</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/rezwan.jpg" alt="rezwan" class="img-responsive " style="height:200px; width:300px">
                        <div class=" caption text-center">
                            <h3>Rezwan Hossain</h3>
                            <p>Managing Director</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 ">
                    <div class="thumbnail ">
                        <img src="img/alvee.jpg " alt="alvee " class="img-responsive " style="height:200px;width:300px ">
                        <div class="caption text-center ">
                            <h3>Alvee Rahman</h3>
                            <p>Vice President </p>

                        </div>
                    </div>
                </div>



            </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js "></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js "></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js "></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js "></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js "></script>

    <!-- Theme JavaScript -->
    <script src="js/creative.min.js "></script>
    <script src="js/main.js "></script>

</body>

</html>
