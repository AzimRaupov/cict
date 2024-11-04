<?php

require_once("config/connect.php");

$result=mysqli_query($con,"CREATE TABLE ff(
    NAME VARCHAR(23)
);
");
?>