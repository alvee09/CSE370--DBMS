<?php
include 'dbConfig.php';
$name= @$_REQUEST["item_name"];
$price= @$_REQUEST["price"];
$res_name = @$_REQUEST["restaurant_name"];
$area_name=@$_REQUEST["area_name"];


if(isset($_POST['add']))
{
    $query = $db->query("INSERT INTO products(name,price,created,res_name) values ('$name','$price','".date("Y-m-d H:i:s")."', '$res_name')");
    $query2 = $db->query("INSERT INTO locations(location,res_name) values ('$area_name','$res_name')");
}
?>
    <!DOCTYPE html>
    <HTML>
        <head>
           
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery.min.js"></script>
         <link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
         <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
        <script type="text/javascript" src="js/memenu.js"></script>
            <style>
    .container{padding: 50px;}
   
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
                                    <?php session_start(); echo "Welcome,Admin"?>
                                </a>
                            </li>
                            <li><a class="lock" href="main.php">Sign Out</a></li>

                            

                        </ul>


                    </div>

                </div>
            </div>
        </div>
               <?php
if(isset($_REQUEST['show'])):
    $result = $db->query("SELECT orders.*, customers.name, customers.phone, customers.address from orders inner join customers on customers.id= orders.customer_id");
?>
        <div class="container">
            <table class="table">
            <tr>
                <th>ID</th>
                <th>Customer ID</th>
                <th>Price</th>
                <th>Confirmation</th>
                <th>Customer Name</th>
                <th>Phone</th>
                <th>Address</th>
            </tr>
            <tr>
                <?php while($row=$result->fetch_assoc()):?>
                    <tr>
                        <td>
                            <?php echo $row['id'];?>
                        </td>
                        <td>
                            <?php echo $row['customer_id'];?>
                        </td>
                        <td>
                            <?php echo $row['total_price'];?>
                        </td>
                        <td>
                            <?php echo $row['confirmed'];?>
                        </td>
                        <td>
                            <?php echo $row['name'];?>
                        </td>
                        <td>
                            <?php echo $row['phone'];?>
                        </td>
                        <td>
                            <?php echo $row['address'];?>
                        </td>

                    </tr>
                    <?php endwhile; ?>
            

        </table>

        <?php
endif;
;if(isset($_REQUEST['delete']))
{
   
      $query = $db->query("update orders
            set confirmed='not'
            WHERE orders.id = ".$_REQUEST["valueToSearch"]);
}
 elseif(isset($_REQUEST['confirmed']))
{

            $query = $db->query("update orders
            set confirmed='yes'
            WHERE orders.id = ".$_REQUEST["valueToSearch"]);
        }
?>
<form >
  <div class="form-group">
    
    <input type="submit" name="show" value="Show all orders" class="btn btn-primary btn-lg">
  </div>
</form>
            <form class="form-inline" action="deletewithdisplay.php" method="REQUEST">
  <div class="form-group">
    <label for="exampleInputEmail2"></label>
    <input type="text" name="valueToSearch" placeholder="Order id">
                
                <input type="submit" name="confirmed" value="Confirm" class="btn btn-success btn-sm">
               
                <input type="submit" name="delete" value="Delete" class="btn btn-danger btn-sm">
  </div>
 
</form>
            <br>
           
       
        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
   <h4>Add restaurant</h4>
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
     <div class="panel panel-info">
         <div class="panel-heading">
                        <div class="panel-title">Add Restaurant Panel</div>

                    </div>
         <div class="panel-body">
    
             <form action="deletewithdisplay.php" method="POST">
           
        <input type="text" name="item_name" placeholder="Item Name">
        <br>
        <br>
        <input type="integer" name="price" placeholder="Item Price">
        <br>
        <br>
        <input type="text" name="restaurant_name" placeholder="Restaurant Name">
        <br>
        <br>
        <input type="text" name="area_name" placeholder="Area of Restaurant">
        <br>
        <br>
        <button  type="submit" name="add" value="Add to menu"  href="#" class="btn btn-primary btn-lg" >Add</BUTTON>
        <br>
        <br>
        <br>
        <br>
    </form>
   
             </div>
        </div>
  </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<h1 class="">REPORT</h1>
     
<?php

   //     if(isset($_REQUEST['maxcustomer']))
       //     {
            
           
            $res = $db->query("SELECT customers.name  as NAME,customers.phone  as Phone,customers.address  as Address, orders.customer_id as Customer_ID, count(customer_id) as Order_Count  from customers join orders on customers.id=orders.customer_id group by customer_id
                order by  Order_Count desc; ");
            $revenue= $db->query("select  sum(total_price) as totalrevenue  from orders where confirmed='yes';");
            $cancel =$db->query("SELECT id,customer_id,total_price, created  from orders where confirmed='not';");
            $confirm =$db->query("SELECT id,customer_id,total_price, created  from orders where confirmed='yes';");
            
            $per_year= $db->query("SELECT count(customer_id) as Total from orders");
            //      }
        ?>
                      
                        
<br>
<br>
<h4>Customer who ordered for the maximum number of times:</h4>
<br>
<table class="table">
            <tr>
                <th>Name</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Customer ID</th>
                <th>Order count</th>
                
            </tr>
            <tr>
                <?php $row=$res->fetch_assoc()?>
                    <tr>
                        <td>
                            <?php echo $row['NAME'];?>
                        </td>
                        <td>
                            <?php echo $row['Phone'];?>
                        </td>
                        <td>
                            <?php echo $row['Address'];?>
                        </td>
                        <td>
                            <?php echo $row['Customer_ID'];?>
                        </td>
                        <td>
                            <?php echo $row['Order_Count'];?>
                        </td>
                        
                        

                    </tr>
                 
            
</table>

<br>
<br>
<h4>Total Sales Revenue:</h4>

<table class="table">
            <tr>
                <th>Sales Revenue</th>
                
            </tr>
            <br>
            <tr>
                <?php $row=$revenue->fetch_assoc()?>
                    <tr>
                        <td>
                            <?php echo $row['totalrevenue'];?>
                        </td>
                   
                    </tr>
                 
            
</table>
<br>
<h4>Customers whose orders were Cancelled:</h4>
<br>
<table class="table">
            <tr>
                <th>Order ID</th>
                <th>Customer ID</th>
                <th>Total Price</th>
                <th>Order Date/Time</th>
               
                
            </tr>
            <tr>
                   <?php while($row=$cancel->fetch_assoc()):?>
               
                    <tr>
                        <td>
                            <?php echo $row['id'];?>
                        </td>
                        <td>
                            <?php echo $row['customer_id'];?>
                        </td>
                        <td>
                            <?php echo $row['total_price'];?>
                        </td>
                        <td>
                            <?php echo $row['created'];?>
                        </td>
                        
                        

                    </tr>
                    <?php endwhile; ?>
                 
            
</table>

<br>
<br>
<h4>Customers whose orders were Confirmed:</h4>
<br>
<table class="table">
            <tr>
                <th>Order ID</th>
                <th>Customer ID</th>
                <th>Total Price</th>
                <th>Order Date/Time</th>
               
                
            </tr>
            <tr>
                   <?php while($row=$confirm->fetch_assoc()):?>
               
                    <tr>
                        <td>
                            <?php echo $row['id'];?>
                        </td>
                        <td>
                            <?php echo $row['customer_id'];?>
                        </td>
                        <td>
                            <?php echo $row['total_price'];?>
                        </td>
                        <td>
                            <?php echo $row['created'];?>
                        </td>
                        
                        

                    </tr>
                 <?php endwhile;?>
            
</table>

<br>
<h4>Total Order placed so far:</h4>

<table class="table">
            <tr>
                <th>Total order:</th>
                
            </tr>
            <br>
            <tr>
                <?php $row=$per_year->fetch_assoc()?>
                    <tr>
                        <td>
                            <?php echo $row['Total'];?>
                        </td>
                   
                    </tr>
                 
            
</table>
                           
                      
 </div>
        
        
        
        <div class="footer">
                <div class="container">
                    <div class="footer-top-at">

                        
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="footer-class">
                    <p>  2016 All Rights Reserved  </p>
                </div>
             <script src="vendor/jquery/jquery.min.js "></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js "></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js "></script>
       
        </body>
    </html>
