<form method="post">
num:<input type="text" name="num"><br/>
<input type="submit">
</form>
<?php
  if(isset($_POST['num'])){
    $n = $_POST['num'];
    for ($i=0; $i < $_POST['num']; $i++) { 
     echo "*";
    }
    
  }


?>