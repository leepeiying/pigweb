<?php
session_start();
if(!isset($_REQUEST["image"]))
{
?>
        <script type="text/javascript">
          alert("請從正確路徑進入");
          window.location.href='index.php';
        </script>
<?php
}
else
{
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
    $recipe_ID=$_SESSION["recipe"];
    mysqli_query($link,"SET NAMES utf8");

    $sql = "DELETE FROM recipe where recipe_ID=$recipe_ID";
    $result=mysqli_query($link,$sql);

    $image = $_REQUEST["image"];
    $str="upload/"."$recipe_ID"."."."$image";
    unlink($str);
    if($result)
    {
?>
        <script type="text/javascript">
        alert("刪除成功");
        </script>
<?php
    }
    else{
?>
        <script type="text/javascript">
        alert("刪除失敗");
        </script>
<?php
        }
        mysqli_close($link);
    echo"<script type='text/javascript'>window.location.href='recipe.php'</script>";
}
?>
