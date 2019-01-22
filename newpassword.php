<?php
  session_start();
  if(!isset($_POST["opassword"]))
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
      $userid=$_SESSION["username"];
      $opassword=$_POST["opassword"];
      $npassword=$_POST["npassword"];
      $check = $_POST["check"];

      if($check==$npassword)
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



        $sql = "select * from member where member_ID ='$userid'";
        $dbpassword=null;
        $result=mysqli_query($link,$sql);
        while ($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
        {//while循環將$result中的結果找出來
          $dbpassword=$row["password"];
        }
        if($dbpassword==$opassword)
        {
          $sql="update member set password='$npassword' where member_ID='$userid'";
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
          }
         else
         {
    ?>
           <script type="text/javascript">
              alert("密碼輸入錯誤");
           </script>
    <?php
         }
        mysqli_close($link);
      }
      else
      {
    ?>
          <script type="text/javascript">
            alert("密碼輸入不同");
          </script>
<?php
      }
      echo"<script type='text/javascript'>window.location.href='memberdata.php'</script>";
    }
?>
