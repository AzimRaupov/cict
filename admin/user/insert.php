<?php
session_start();
if(isset($_SESSION["typeuser"]) and $_SESSION["typeuser"]="admin"){

if(isset($_POST["send"])){
   
if(isset($_POST["typeuser"])){
    switch ($_POST["typeuser"]){
    case '1':
        include("insert-students.php");
        break;
    case '2':
        include("insert-teaher.php");
        break;
    case '3':
        include("insert-admin.php");
        break;
    default:
        header("Localtion: form-insert.php");
}

}

}
else{
    require_once("../config/alertdanger.php");
    
    exit();
}
}
?>