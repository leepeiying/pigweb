<?php
  session_start();
  if(!isset($_POST["recipe_name"]))
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

      $recipe_ID=$_SESSION["recipe"];
      $recipe_name=$_POST["recipe_name"];
      $ingredient=nl2br($_POST["ingredient"]);
      $procedue=nl2br($_POST["procedue"]);
      if(isset($_POST["part"]))
      {

        $part = $_POST["part"];

      $sql="update recipe set recipe_name='$recipe_name',ingredient='$ingredient',procedue='$procedue', part='$part' where recipe_ID=$recipe_ID";
      $update=mysqli_query($link,$sql);

      }
      else
      {
        $sql="update recipe set recipe_name='$recipe_name',ingredient='$ingredient',procedue='$procedue' where recipe_ID=$recipe_ID";
        $update=mysqli_query($link,$sql);
      }
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
