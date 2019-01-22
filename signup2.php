<?php
if(!isset($_POST["mail"]))
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
      $mail = $_POST["mail"];
      $password = $_POST["pass"];
      $check = $_POST["check"];
      $nickname = $_POST["nickname"];

      if($check!=$password)
      {
    ?>
          <script type="text/javascript">
            alert("密碼輸入不同，請重新輸入");
          </script>
          <script type='text/javascript'>window.location.href='signup.php'</script>
    <?php
      }
      else{
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

        $sql = "select * from member where email ='$mail'";
        $dbusername=null;
        $result=mysqli_query($link,$sql);
        while ($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
        {//while循環將$result中的結果找出來
          $dbusername=$row["email"];
        }
        if(isset($dbusername))
        {
          ?>
                <script type="text/javascript">
                  alert("此帳號已註冊過,請重新輸入");
                </script>
                <script type='text/javascript'>window.location.href='signup.php'</script>
          <?php

        }
        else {
            $sql = "INSERT INTO member(email,nickname,password)VALUES('$mail','$nickname','$password')";

            $signed=mysqli_query($link,$sql);
            if($signed)
            {
          ?>
                  <script type="text/javascript">
                  alert("會員加入成功");
                  </script>
          <?php
            }
            else{
              ?>
                  <script type="text/javascript">
                  alert("會員加入失敗");
                  </script>
          <?php
            }
            echo"<script type='text/javascript'>window.location.href='index.php'</script>";
            mysqli_close($link);
            }
    }
  }
  ?>
