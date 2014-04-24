<center><form  method=post>
  <input type="text" name="date"><br/>
  <input type="submit">
</form>

<?php
  if(isset($_POST['date'])){
    $date = $_POST['date'];
    $y = substr($date,0,4);
    $m = substr($date,5,-3);
    $d = substr($date,8);
    if(checkdate($m, $d, $y)){
      echo date("Y-M-d-l-W ",mktime(0,0,0,$m,$d,$y))."th week";
    }else{
      echo "invalid date $y-$m-$d";
    }
    
  }else{

    echo "input a date with yyyy-mm-dd\n";
  }
?>