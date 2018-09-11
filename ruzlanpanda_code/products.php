<?php
include 'dbConfig.php';

?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>restuarants page</title>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery.min.js"></script>
        <!-- Custom Theme files -->
        <!--theme-style-->
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
        <!--//theme-style-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
       
        <script type="application/x-javascript">
            addEventListener("load", function () {
                setTimeout(hideURLbar, 0);
            }, false);

            function hideURLbar() {
                window.scrollTo(0, 1);
            }
        </script>
        <!--fonts-->
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
        <!--//fonts-->
        <!-- start menu -->
        <link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
        <script type="text/javascript" src="js/memenu.js"></script>
        <script>
            $(document).ready(function () {
                $(".memenu").memenu();
            });
        </script>
        <script src="js/simpleCart.min.js">
        </script>
        <style>
            .sbutton{
                background:rgb(239, 95, 33);
                color:black;
            }
            .sbutton:hover{
                background:black;
                color:rgb(239, 95, 33);
            }
        </style>
    </head>

    <body>
        <!--header-->
        <div class="header">
            <div class="header-top">
                <div class="container">
                    <div class="panda_logo">
                        <a class=" navbar-brand page-scroll" href="#page-top">Ru<i id="iconic">z</i>lan Pa<i id="iconic">n</i>da</a>
                        <img src="images/panda_logo.png" alt="logo" class="panda_logo">
                    </div>

                    <div class="header-left">
                        <ul>
                            <li>
                                <a class="page-scroll" href="" id="username">
                                    <?php session_start(); echo "Welcome,".$_SESSION['yolo'];?>
                                </a>
                            </li>
                            <li><a class="lock" href="main.php">Sign Out</a></li>

                            

                        </ul>


                    </div>

                </div>
            </div>
            <div class="container">
                <div class="head-top">
                    <div class="header-content-inner">
                        <h3 id="search_title">Search Your Area  </h3>
                        <form action="products.php" method="POST">
                            <input type="text" name="valueToSearch" placeholder="Location" class="col-md-10">
                            <br>
                            <br>
                            <input type="submit" name="search" value="Search" class="col-md-2 btn btn-default btn-lg sbutton">
                            <br>
                            <br>
                        </form>
                        <?php
                    $loc_name=@$_POST['valueToSearch'];

                    if(isset($_POST['search']))
                    {
                        $result = $db->query("select * from locations where location= '$loc_name'");
                    }
                    ?>

                        <table class="table">
                                <tr>

                                    <th>Restaurant</th>


                                </tr>


                                <?php if (!empty($result)){ while($row = $result->fetch_assoc()): ?>
                                    <tr>
                                        <td>
                                            <a href="index.php?res_name=<?php echo $row['res_name'] ?>">
                                                <?php
                                                           echo $row['res_name']; ?>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php endwhile; } ?>
                            </table>



                    </div>


                </div>
            </div>


            <!--content-->
            <!---->
            <div class="product">
                <div class="container">
                    <div id="products" class="row list-group">
                <?php
        //get rows query
        
        $resName = @$_GET['res_name'];
        if ($resName)
        {
            $query = $db->query("SELECT * FROM products where res_name='$resName' ");
        }
        else {
            $query = $db->query("SELECT * FROM products ");
        }
                
        if($query->num_rows > 0){
            while($row = $query->fetch_assoc()){
        ?>
                    <div class="item col-lg-4">
                        <div class="thumbnail">
                            <div class="caption">
                                <h4 class="list-group-item-heading"><?php echo $row["name"]; ?></h4>
                                <p class="list-group-item-heading">
                                    <?php echo $row["res_name"]; ?>
                                </p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="lead">
                                            <?php echo '$'.$row["price"].' USD'; ?>
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <a class="btn btn-success" href="cartAction.php?action=addToCart&id=<?php echo $row['id']; ?>">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } }else{ ?>
                        <p>Product(s) not found.....</p>
                        <?php } ?>
            </div>
                </div>

            </div>

            <!---->

            <!--//content-->
            <div class="footer">
                <div class="container">
                    <div class="footer-top-at">

                        <div class="col-md-4 amet-sed">
                            <h4>MORE INFO</h4>
                            <ul class="nav-bottom">
                                <li><a href="#">How to order</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="contact.html">Location</a></li>
                                <li><a href="#">Shipping</a></li>
                                <li><a href="#">Membership</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4 amet-sed ">
                            <h4>CONTACT US</h4>

                            <p>
                                Contrary to popular belief</p>
                            <p>The standard chunk</p>
                            <p>office: +12 34 995 0792</p>
                            <ul class="social">
                                <li><a href="#"><i> </i></a></li>
                                <li><a href="#"><i class="twitter"> </i></a></li>
                                <li><a href="#"><i class="rss"> </i></a></li>
                                <li><a href="#"><i class="gmail"> </i></a></li>

                            </ul>
                        </div>
                        <div class="col-md-4 amet-sed">
                            <h4>Newsletter</h4>
                            <p>Sign Up to get all news update and promo</p>
                            <form>
                                <input type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
                                <input type="submit" value="Sign up">
                            </form>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="footer-class">
                    <p>© 2016 All Rights Reserved | </p>
                </div>
            </div>
    </body>

    </html>
