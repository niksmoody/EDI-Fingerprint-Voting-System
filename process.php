<?php
//get values passes form in login.php file
$username = $_POST['user'];
$password = $_POST['pass'];

//to prevent mysqli injection
$username = stripcslashes($username);
$password = stripcslashes($password);
//$username = mysqli_real_escape_string($username);
//$password = mysqli_real_escape_string($password);

// connect to the database and select database
$con=mysqli_connect("localhost", "root", "" , "login");
//mysqli_select_db("login");

//query the database for user
$result = mysqli_query($con ,"select * from users where username = '$username' and password = '$password'") 
or die("failed to connect to database". mysqli_error($con));
    $row = mysqli_fetch_array($result);
    if($row['username']== $username && $row['password']== $password){
        echo "login success!!! welcome ".$row['username'];
        echo "<script language=\"JavaScript\">\n";
        echo "alert('Login Successful.');\n";
        echo "window.location='Votecand.php'";
        echo "</script>";
    }else{
        echo "wrong credentials check carefully and try again !!!";
        echo "<script language=\"JavaScript\">\n";
        echo "alert('Login Failed.');\n";
        echo "window.location='login_error.php'";
        echo "</script>";

    }
?>