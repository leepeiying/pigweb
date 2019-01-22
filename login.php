<?php session_start();
if (!isset($_POST["username"]))
{
?>
  <script type="text/javascript">
    alert("用户名不存在");
  </script>
<?php
}
else {
      $username = $_POST["username"];
      $password = $_POST["password"];


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
      $sql = "select * from member where email ='$username'";
      $dbusername=null;
      $dbpassword=null;

      $result=mysqli_query($link,$sql);
      while ($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
      {//while循環將$result中的結果找出來
        $id = $row["member_ID"];
        $dbusername=$row["email"];
        $dbpassword=$row["password"];
      }
      mysqli_close($link);
        if ($dbpassword!=$password)
        {
  ?>
          <script type="text/javascript">
            alert("密碼錯誤");
          </script>
  <?php
        }
        else
        {
          $_SESSION["username"]=$id;
  ?>
          <script type="text/javascript">
          alert("登入成功");
          </script>
  <?php
        }
      }
   ?>
<script type='text/javascript'>window.location.href='index.php';</script>
