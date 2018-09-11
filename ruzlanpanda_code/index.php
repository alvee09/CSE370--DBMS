<?php
// include database configuration file
include 'dbConfig.php';
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>menu page</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
         <link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
         <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
        <script type="text/javascript" src="js/memenu.js"></script>
        <style>
            .container {
                padding: 50px;
            }

            .cart-link {
                width: 100%;
                text-align: right;
                display: block;
                font-size: 22px;
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
        </div>
        <div class="container">
            <h1>Menu Items</h1>
            <a href="viewCart.php" class="cart-link" title="View Cart"><i class="glyphicon glyphicon-shopping-cart"></i></a>
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
