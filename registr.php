<?php
require_once("config/headr.php");
session_start();
?>

   <style>
    html, body {
    height: 100%;

    .contact-form{
        width: 95%;
        padding-left: 4%;
    }
	
} 
   </style>
   <body style="background-image: url('images/b2.jpg');">
  <?php  require_once("config/nav.php") ?>
               <div class="title-sub text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">
               <h3 class="title clr mb-2">Регистратсия</h3>
               <div class="line-w3ls-title clr text-center mb-md-4 mb-sm-3 mb-3"></div>
               <p class="text-light">Если вы зарегистрырованы <a href="login.php" style="font-size: 15px;"><strong>войти</strong></a></p>
            <?php
            if(isset($_SESSION["status"]) && $_SESSION["status"]==="eror"){
             ?>
               <p style="font-size: 20px; color: red;">Ваши даные заняты</p>
            <?php
            }
               ?>
            </div>
   <div class="contact-form">
            
   <form action="student/insert.php" method="post">
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
                  <div class="sent-butnn text-center">
                     <button type="submit" class="btn " name="send">Зарегистророватся</button>
                  </div>
               </form>
            </div>
      
<?php
require_once("config/script.php");
?>