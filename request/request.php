<?php
session_start();
if(isset($_POST["send"])){
    require_once("../config/connect.php");
    require_once("send.php");
    $name=$_POST["name"];
    $number=$_POST["number"];
    $subject=$_POST["subject"];

    $sql="";
    $mess="Имя:$name\nНомер:$number\nПредмет:$subject\n";
    $result=mysqli_query($con,$sql);
    send_message("5636271256",$mess);
}
      

?>