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
               <h3 class="title clr mb-2">Вход</h3>
               <div class="line-w3ls-title clr text-center mb-md-4 mb-sm-3 mb-3"></div>
               <p class="text-light">Если вы ешё не зарегистрырованы <a href="registr.php" style="font-size: 15px;"><strong>зарегистрироватся</strong></a></p>
               <?php
            if(isset($_SESSION["status"]) && $_SESSION["status"]==="erorr"){
             ?>
               <p style="font-size: 20px; color: red;">Пароль или другие не верные</p>
            <?php
            }
               ?>
            </div>
   <div class="contact-form">
            
   <form action="student/login.php" method="post">
                  
                     <div class="form-group contact-forms">
                        <input type="login" name="login" class="form-control" placeholder="Email,Имя поль.." required="">
                     </div>
                  
               
                 
                  <div class="form-group contact-forms">
                     <input type="password" name="password" class="form-control" placeholder="Пароль" required="">
                  </div>
                 
                  
                  <div class="sent-butnn text-center">
                     <button type="submit" class="btn " name="send">Вход</button>
                  </div>
               </form>
            </div>
            
<?php
require_once("config/script.php");
?>