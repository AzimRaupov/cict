<?php
session_start();
require_once("../../config/connect.php");

if(isset($_POST["send"])){

$name=$_POST["name"];

$discript=$_POST["discript"];

$file = $_FILES['image'];

$filename = uniqid() . '_' . basename($file['name']);

$upload_dir = '../../group/image';


move_uploaded_file($file['tmp_name'], $upload_dir . $filename);



$sql="";
}

?>