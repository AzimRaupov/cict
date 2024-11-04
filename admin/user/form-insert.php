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
<div class="contact-form">
            
            <form action="insert.php" method="post">
                           <div class="row text-center contact-wls-detail">
                              <div class="col-md-6 form-group contact-forms">
                                 <input type="text" name="name" class="form-control" placeholder="Имя и фамилия" required="">
                              </div>
                        
                              <div class="col-md-6 form-group contact-forms">
                                 <input type="email" name="email" class="form-control" placeholder="Email" required="">
                              </div>
                           </div>
                           <div class="row text-center contact-wls-detail">
                           <div class="col-md-6 form-group contact-forms">
                              <input type="text" class="form-control" name="username" placeholder="Имя пользователя">
                           </div>
                           <div class="col-md-6 form-group contact-forms">
                              <input type="number" name="old" class="form-control" placeholder="Возраст">
                           </div>
                           </div>
                           <div class="row text-center contact-wls-detail">
                           <div class="col-md-6 form-group contact-forms">
                              <input type="password" name="password" class="form-control" placeholder="Пароль" required="">
                           </div>
                           <div class="col-md-6 form-group contact-forms">
                              <input type="number" name="number" class="form-control" placeholder="Номер" required="">
                           </div>
                           </div>
                           <br>
                           <select name="typeuser" class="form-select" aria-label="Default select example">
  <option selected>Выбрать Тип пользователя</option>
  <option value="1">Ученик</option>
  <option value="2">Учитель</option>
  <option value="3">Админ</option>
</select><br>
                           <div class="text-center">
                              <button type="submit" class="btn btn-primary" name="send">Зарегистророватся</button>
                           </div>
                        </form>
                     </div>
               
                     

<?php

}

?>