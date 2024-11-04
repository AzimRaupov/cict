<?php
session_start();
if(isset($_SESSION["typeuser"]) and $_SESSION["typeuser"]="admin"){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../../bootstrap-5.3.3-dist/css/bootstrap.css" rel="stylesheet">

    <script src="../../bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script> 
</head>
<body>

<?php

require_once("../../config/adminnav.php");
?>
<br>
<form action="insert.php" method="POST" style="width: 30%;" enctype="multipart/form-data">

<label for="exampleFormControlInput1" class="form-label">Имя</label>
<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Имя учителя" name="name">



<label for="info" class="form-label">Информатсия</label>
<textarea class="form-control" id="info" rows="3" name="info"></textarea>

<label for="image" class="form-label">Фото</label>
<input type="file" class="form-control" id="image" name="image">

<br>
<button type="submit" name="send" class="btn btn-primary mb-3">Добавить</button>

</form>

<?php

}

?>