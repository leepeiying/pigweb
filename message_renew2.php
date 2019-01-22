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
      $content=nl2br($_POST["content"]);

      $sql="update message set content='$content' where message_ID=$message_ID";
      $update=mysqli_query($link,$sql);

      if($update)
      {
    ?>
            <script type="text/javascript">
            alert("修改成功");
            </script>
    <?php
      }
      else{
        ?>
            <script type="text/javascript">
            alert("修改失敗");
            </script>
    <?php
      }
      echo"<script type='text/javascript'>window.location.href='recipe_in.php'</script>";
      mysqli_close($link);
    }
?>
