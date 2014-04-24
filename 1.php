<html>
 <body>
 <form method="POST">
 <input type="text" name="birthday"/>
 <input type="submit" name="submit" value="確定">
 </form>
 </body>
 </html>
 
 <?php

 if (isset($_POST['birthday'])){
 $birthday = $_POST['birthday'];
 if (ereg('^[0-9][0-9][0-9][0-9]-[0-9][0-9]-[0-9][0-9]$', $birthday)){
  $y = substr($birthday, 0, 4);
  $m = substr($birthday, 5, 2);
  $d = substr($birthday, 8, 2);
  if (checkdate($y, $m, $d)){
   echo $birthday;
   
  }
  else{
   echo "日期錯誤".$y.$m.$d;
  }
 }
 else {
  echo "重新輸入";
 }
 
 
}