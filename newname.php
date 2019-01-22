<?php
  session_start();
  if(!isset($_POST["nickname"]))
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

  $userid=$_SESSION["username"];
  $newname=$_POST["nickname"];

  $sql="update member set nickname='$newname' where member_ID='$userid'";
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
  echo"<script type='text/javascript'>window.location.href='memberdata.php'</script>";
  mysqli_close($link);
}
?>
