<?php
      session_start();
      if(!isset($_POST["recipename"]))
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

            $recipename = $_POST["recipename"];
            $ingredient = nl2br($_POST["ingredient"],FALSE);
            $procedue = nl2br($_POST["procedue"],FALSE);
            $part = $_POST["part"];

            $size=$_FILES['photo']['size'];
            $name=$_FILES['photo']['name'];
            $tmp_name=$_FILES['photo']['tmp_name'];

            $sizemb = round($size/1024000,2);
            $file=explode(".",$name);

            if($sizemb <= 5)
            {
              $author=$_SESSION["username"];
               $sql = "INSERT INTO recipe(recipe_name,author,ingredient,procedue,image,CTR,part)VALUES('$recipename',$author,'$ingredient','$procedue','$file[1]',0,'$part')";
               if($result=mysqli_query($link,$sql))
               {
                 $sql = "select MAX(recipe_ID) from recipe";
                 if($result1=mysqli_query($link,$sql))
                 {
                   while ($row=mysqli_fetch_array($result1, MYSQLI_ASSOC))
                   {
                     $nums=$row["MAX(recipe_ID)"];
                   }
                   move_uploaded_file($tmp_name,"upload/".(string)($nums).".".$file[1]);
                    $_SESSION["recipe"]=$nums;
                    mysqli_close($link);
?>
                     <script type="text/javascript">
                     alert("食譜上傳成功");
                     </script>
                     <script type='text/javascript'>window.location.href='recipe_in.php'</script>
<?php
                  }
                  else
                  {
                    mysqli_close($link);
?>
                      <script type="text/javascript">
                      alert("食譜上傳失敗");
                      </script>
                      <script type='text/javascript'>window.location.href='recipe_upload.php'</script>
                    <?php
                  }
               }
               else{
                    mysqli_close($link);
?>
                     <script type="text/javascript">
                     alert("食譜上傳失敗");
                     </script>
                     <script type='text/javascript'>window.location.href='recipe_upload.php'</script>
  <?php
               }

            }
            else
            {
                  mysqli_close($link);
?>
                    <script type="text/javascript">
                      alert("圖片檔案過大");
                    </script>
                    <script type='text/javascript'>window.location.href='recipe_upload.php'</script>
<?php
            }
    }
?>
