<?php
session_start();
require_once("../config/connect.php");
if(isset($_SESSION["typeuser"]) && $_SESSION["typeuser"]==="admin"){
require_once("../config/adminheadr.php");
require_once("../config/adminnav.php");
require_once("../config/adminfooter.php");
}
else{
    require_once("../config/alertdanger.php");
    
    exit();
}


?>