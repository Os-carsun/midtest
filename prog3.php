<form action="prog3.php" method="post">
num1:<input type="text" name="num1"><br/>
num2:<input type="text" name="num2"><br/>
<input type="submit">
</form>

<?php
// public function floatNumber($number)
//  {
//       $number_array = explode('.',$number);
//       $left = $number_array[0];
//       $right = $number_array[1];
//       return number_format($number,strlen($right));
 // }

if(isset($_POST['num1'])&&isset($_POST['num2'])){
  $num1 = $_POST['num1'];
  $num2 = $_POST['num2'];
  echo "$num1";
  echo "+";
  echo "$num2";
  echo "=";
  echo $num1+$num2;
  echo "<br/>";
  echo "$num1";
  echo "-";
  echo "$num2";
  echo "=";
  echo $num1-$num2;
  echo "<br/>";
  echo $num1."*".$num2."=".$num1*$num2;
  echo "<br/>";
  if($num2!=0)
  echo $num1."/".$num2."=".number_format(round($num1/$num2*1000)/1000,3);
  else
    echo "false because of zero";

}

?>