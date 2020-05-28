<?php

$host="localhost";
$user="root"
$password="";
$db="register";

mysql_connect($host,$user,$password);
mysql_select_db($db);
if(isset($_POST['firstname'])){
    $fname=$_POST['firstname'];
    $lname=$_POST['lastname'];
    $password=$_POST['password'];
    $cPassword=$_POST['Confirm_password'];

    $sql="select * from registerform where firstname='".$fname."' AND password='".$password."' limit 1";
    $result=mysql_query(sql);

    if(mysql_num_rows($result)==1){
        echo "You have sucessfully Logged In";
        exit();
    }
    else{
        echo"You have entered Wrong Password";
    }


}







?>
<!DOCTYPE>
<html>
<head>
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <link href="style.css" rel="stylesheet" type="text/css">
    <link rel="styleshet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css ">
    <title>Register</title>
</head>
<body class="register">
 
 <div class="registerBox" >
    <h2>Sign Up</h2>


    <form method="POST" action="register.php">
    
    <p>First Name</p>
    <input type="text" name="firstname" placeholder="First name" required="required" autofocus="autofocus" />
    <p>Last Name</p>
    <input type="text" name="lastname"placeholder ="Last name" required="required"/>
    <p>Password</p>
    <input type="password" name="password" name="firstname" placeholder="password"/>
    <br/>
    <p>Confirm password</p>
    <input type="password" name="confirm_password" placeholder="Confirm Password"/>
    <p>Gender</p>
    <select class="dropBox"name="sex">
        <option value="male">Male</option>
        <option value="female">Female</option>
    </select>
    <input type="submit" class="submit" value="Register" />
    </form>
</div>
     
</body>