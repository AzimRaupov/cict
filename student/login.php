<?php
session_start();
require_once("../config/connect.php");

if(isset($_POST["send"])){
$login=$_POST["login"];
$password=$_POST["password"];
$result="";
if(strpos($login,'@')){
    $sql1="SELECT * FROM users WHERE email='$login' AND PASSWORD='$password';";
    $result=mysqli_query($con,$sql1);
    
}
else{
    $sql2="SELECT * FROM users WHERE username='$login' AND PASSWORD='$password';";
    $result=mysqli_query($con,$sql2);
}
if(mysqli_fetch_row($result)>0){
    $row=mysqli_fetch_assoc($result);
    $_SESSION["status"]="okk";
    $_SESSION["typeuser"]="admin";
    $_SESSION[]=$row["id"];
    $_SESSION[]=$row["name"];
    $_SESSION[]=$ro["email"];
    header("Location: ../index.php");
    exit();
}
else{
    $_SESSION["status"]="erorr";
    header("Location: ../login.php");
}

}

?>