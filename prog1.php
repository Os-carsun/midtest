
<center><form action=prog1.php method=post>
  <input type="text" name="date"><br/>
  <input type="submit">
</form>

<?php
if(isset($_POST['date'])){
  $date = $_POST['date'];
  $y = substr($date,0,4);
  $m = substr($date,5,-3);
  $d = substr($date,8);
  if(mktime(0,0,0,$m,$d,$y)!=false){
    switch ($m) {
      case '01':
        if($d<21)
          echo "魔羯座";
        else
          echo "水瓶座";
        break;
      case '02':
        if($d>19)
          echo "雙魚座";
        else
          echo "水瓶座";
        break;
      case '03':
        if($d>20)
          echo "白羊座";
        else
          echo "雙魚座";
        break;
      case '04':
        if($d<20)
          echo "白羊座";
        else
          echo "金牛座";
        break;
      case '05':
        if($d>20)
          echo "雙子座";
        else
          echo "金牛座";
        break;
      case '06':
        if($d>21)
          echo "巨蟹座";
        else
          echo "雙子座";
        break;
      case '07':
        if($d>22)
          echo "獅子座";
        else
          echo "巨蟹座";
        break;
      case '08':
        if ($d>22)
          echo "處女座";
        else
          echo "獅子座";
        break;
      case '09':
        if($d>22)
          echo "天秤座";
        else
          echo "處女座";
        break;
      case '10':
        if($d>23)
          echo "天蠍座";
        else
          echo "天秤座";
        break;
      case '11':
        if($d>21)
          echo "射手座";
        else
          echo "天蠍座";
        break;
      case '12':
        if($d>20)
          echo "魔羯座";
        else
          echo "射手座";
        break;   
      default:
        # code...
        break;
    }


  }else{
    echo "invalid date $y/$m/$d";
  }
  //echo "$y/$m/$d";
}else{

  echo "input a date with yyyy-mm-dd\n";
}
 

?>