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
          $image = $_REQUEST["image"];
          $recipe_ID = $_SESSION["recipe"];
          $size=$_FILES['photo']['size'];
          $name=$_FILES['photo']['name'];
          $tmp_name=$_FILES['photo']['tmp_name'];

          $sizemb = round($size/1024000,2);
          $file=explode(".",$name);
          if($sizemb <= 5)
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
              $sql = "update recipe set image='$file[1]' where recipe_ID=$recipe_ID";
              if($result=mysqli_query($link,$sql))
              {
                  $str="upload/"."$recipe_ID"."."."$image";
                  unlink($str);
                  move_uploaded_file($tmp_name,"upload/".(string)($recipe_ID).".".$file[1]);
                  ?>
                      <script type="text/javascript">
                      alert("圖片更新成功");
                      </script>
                    <?php
              }
              else
              {
                mysqli_close($link);
              ?>
                  <script type="text/javascript">
                  alert("圖片更新失敗");
                  </script>
                <?php
              }

              mysqli_close($link);

          }
          else
          {
        ?>
                  <script type="text/javascript">
                    alert("圖片檔案過大");
                  </script>
        <?php
          }
              echo"<script type='text/javascript'>window.location.href='recipe_in.php'</script>";
        }
?>
