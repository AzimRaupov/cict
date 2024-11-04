<?php
session_start();
if(isset($_SESSION["typeuser"]) and $_SESSION["typeuser"]="admin"){
require_once("../config/adminheadr.php");
require_once("../config/adminnav.php");
?>
<br>
<form action="../admin/group/insert.php" method="POST" style="width: 30%;" enctype="multipart/form-data">

  <label for="exampleFormControlInput1" class="form-label">имя группы</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Имя группы" name="name">


  
  <label for="info" class="form-label">Описание</label>
  <textarea class="form-control" id="info" rows="3" name="discript"></textarea>

  <label for="image" class="form-label">Изображение</label>
  <input type="file" class="form-control" id="image" name="image">

  <br>
  <button type="submit" name="send" class="btn btn-primary mb-3">Создать</button>

</form>
<?php

}
else{

    require_once("../config/alertdanger.php");
}

?>