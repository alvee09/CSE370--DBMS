<?php
// include database configuration file
include 'dbConfig.php';

// initializ shopping cart class
include 'Cart.php';
$cart = new Cart;

// redirect to home if cart is empty
if($cart->total_items() <= 0){
    header("Location: index.php");
}

// set customer ID in session
//$_SESSION['sessCustomerID'] = 1;

// get customer details by session customer ID
$query = $db->query("SELECT * FROM customers WHERE id = ".$_SESSION['sessCustomerID']);
$custRow = $query->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>order placement</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
         <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
        <script type="text/javascript" src="js/memenu.js"></script>
    <style>
    .container{width: 100%;padding: 50px;}
    .table{width: 65%;float: left;}
    .shipAddr{width: 30%;float: left;margin-left: 30px;}
    .footBtn{width: 95%;float: left;}
    .orderBtn {float: right;}
    </style>
</head>
<body>
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
                                    <?php  echo "Welcome,".$_SESSION['yolo'];?>
                                </a>
                            </li>
                            <li><a class="lock" href="main.php">Sign Out</a></li>

                            

                        </ul>


                    </div>

                </div>
            </div>
        </div>
<div class="container">
    <h1>Order Preview</h1>
    <table class="table">
    <thead>
        <tr>
            <th>Product</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Subtotal</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if($cart->total_items() > 0){
            //get cart items from session
            $cartItems = $cart->contents();
            foreach($cartItems as $item){
        ?>
        <tr>
            <td><?php echo $item["name"]; ?></td>
            <td><?php echo '$'.$item["price"].' USD'; ?></td>
            <td><?php echo $item["qty"]; ?></td>
            <td><?php echo '$'.$item["subtotal"].' USD'; ?></td>
        </tr>
        <?php } }else{ ?>
        <tr><td colspan="4"><p>No items in your cart......</p></td>
        <?php } ?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="3"></td>
            <?php if($cart->total_items() > 0){ ?>
            <td class="text-center"><strong>Total <?php echo '$'.$cart->total().' USD'; ?></strong></td>
            <?php } ?>
        </tr>
    </tfoot>
    </table>
    <div class="shipAddr">
        <h4>Shipping Details</h4>
        <p><b>Name: </b><?php echo $custRow['name']; ?></p>
        <p><b>Email: </b><?php echo $custRow['email']; ?></p>
        <p><b>Phone: </b><?php echo $custRow['phone']; ?></p>
        <p><b>Address: </b><?php echo $custRow['address']; ?></p>
    </div>
    <div class="footBtn">
        <a href="index.php" class="btn btn-warning"><i class="glyphicon glyphicon-menu-left"></i> Continue Shopping</a>
        <a href="cartAction.php?action=placeOrder" class="btn btn-success orderBtn">Place Order <i class="glyphicon glyphicon-menu-right"></i></a>
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