<?php

require_once("../../config/connect.php");
$name=$_POST["name"];
$email=$_POST["email"];
$username=$_POST["username"];
$old=$_POST["old"];
$password=$_POST["password"];
$number=$_POST["number"];
$time=time();
$dater=date("Y.m.d",$time);
$sql1="SELECT * FROM users WHERE username='$username' OR email='$email' OR number='$number';";
$result=mysqli_query($con,$sql1);


if(mysqli_fetch_row($result)){
    $_SESSION["status"]="eror";
    header("Location: form-insert.php");
    exit();
}

else
{
$sql2="INSERT INTO users(curs_id,NAME,username,number,email,PASSWORD,OLD,dateregister,typeid) 

VALUES('','$name','$username','$number','$email','$password','$old','$dater','1');";

$result1=mysqli_query($con,$sql2);


$sql3="SELECT id FROM users WHERE username='$username';";

$result2=mysqli_query($con,$sql3);

$idst=mysqli_fetch_assoc($result2);

$id=$idst["id"];

$sql4="INSERT INTO students(student_id) VALUES('$id');";
mysqli_query($con,$sql4);
$_SESSION["status"]="ok";
}


?>