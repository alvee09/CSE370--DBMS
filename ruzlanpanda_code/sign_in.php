<?php
//for sign_up
//connecting to the server and select database
$db =mysqli_connect("localhost","root","","ruzlanpanda");

if(isset($_POST['signup_btn'])){
    session_start();
     $name=  mysql_real_escape_string($_POST['name']);
    $address=  mysql_real_escape_string($_POST['address']);
    $mobile_no=  mysql_real_escape_string($_POST['mobile']);
    $username=  mysql_real_escape_string($_POST['username']);
    $password=  mysql_real_escape_string($_POST['password']);
    $password2=  mysql_real_escape_string($_POST['password2']);

    $email=  mysql_real_escape_string($_POST['email']);

    if($password== $password2 ){
   
    $_SESSION['yolo']=$username;

    $sql ="INSERT INTO customers(name,address,phone,username,password,email) VALUES ('$name','$address','$mobile_no','$username','$password','$email')";
    mysqli_query($db, $sql);
    $_SESSION['sessCustomerID']=mysqli_insert_id ($db);

    echo "You are signed in";
    echo 'welcome'.$username;
    header('location:products.php');
    }
    else if ($password== " "){

        echo 'Please enter the Password ';
    }
    else{
        echo 'Password didnot matched';
    }




}



//get the values from the main login page

if(isset($_POST['login_btn'])){

$username =$_POST['user'];
$password =$_POST['pass'];


$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);


//connecting to the server and select database
mysql_connect("localhost","root","");
mysql_select_db("ruzlanpanda");


//Query for the database
$result= mysql_query("select * from customers where username ='$username' and password ='$password'")
          or die("Failed".  mysql_error());

$row=  mysql_fetch_array($result);
//checking for admin
if( $username== 'admin' && $password== 'admin'){
    header("Location:deletewithdisplay.php");
}
else{

    //checking for the user
if($row['username']== $username && $row['password']== $password)
{
    session_start();
    $_SESSION['yolo']=$username;
    $_SESSION['sessCustomerID']=$row['id'];
    echo "Welcome".$row['username'];

    header("Location:products.php");

}else{

    echo "Failed to login.Please SIGN UP!";


}
}


}
?>
