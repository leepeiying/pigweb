<?php
session_start();
if(!isset($_REQUEST["messageid"]))
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
    mysqli_query($link,"SET NAMES utf8");

    $message_ID=(int)($_REQUEST["messageid"]);

    $sql = "DELETE FROM message where message_ID=$message_ID";
    $result=mysqli_query($link,$sql);
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
    echo"<script type='text/javascript'>window.location.href='recipe_in.php'</script>";
}
    ?>
