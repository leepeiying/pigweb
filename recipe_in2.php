<?php
  session_start();
  $page=$_SESSION["page"];
  $type=$_SESSION["type"];
  if($type==3)
      $part=$_SESSION["part"];   //0首頁,1食譜,2我的食譜,3知識
        
  if($type==0)
    $per=5;
  else if($type==3)
    $per=4;
  else
    $per=6;
  $order=($page-1)*$per+1;

  $a=1;
  $link=mysqli_connect("127.0.0.1","root","");

  if(!$link)
  {
    die("無法建立連線");
  }

  $db_selected=mysqli_select_db($link,"pork_web");
  if(!$db_selected)
  {
    die("無法開啟資料庫<br>".mysql_error($link));
  }

  mysqli_query($link,"SET NAMES utf8");
  if($type==2)
  {
    $author=$_SESSION["username"];
    $sql = "select * from recipe where author='$author'";
  }
  else if($type==3)
  {
    $sql = "select * from recipe where part='$part' order by CTR DESC";
  }
  else
  {

    $sql = "select * from recipe order by CTR DESC";
  }

  $result = mysqli_query($link,$sql.' LIMIT '.$order.', '.$a) or die("Error");
  $row=mysqli_fetch_array($result, MYSQLI_ASSOC);
  $recipeid= $row["recipe_ID"];
  $_SESSION["recipe"]=$recipeid;

  mysqli_close($link);
  ?>
  <script type='text/javascript'>window.location.href='recipe_in.php'</script>
