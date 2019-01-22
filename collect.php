<?php
 session_start();
if(!isset($_POST["recipe_ID"]))
{
    echo "請由正確路徑進入";
}
else
{

    $recipe_ID=$_POST['recipe_ID'];
    $b=$_POST['b'];
    $user=$_SESSION["username"];

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
    if($b%2==1)
        $sql = "INSERT INTO collect(user,recipe)VALUES($user,$recipe_ID)";
    else
        $sql = "DELETE FROM collect where recipe=$recipe_ID AND user=$user";

    mysqli_query($link,$sql);
    mysqli_close($link);
  }
 ?>
