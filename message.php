<?php
 session_start();
if(!isset($_POST["message"]))
{
  ?>
      <script type="text/javascript">
      alert("請從正確路徑進入");
      </script>
      <script type='text/javascript'>window.location.href='recipe_in.php'</script>
<?php
}
else
{
  $date=date("Y-m-d H:i:s");
   $recipeid=$_SESSION["recipe"];
   $authorid=$_SESSION["username"];
   $content=nl2br($_POST["message"]);
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
   $sql="INSERT INTO message(ti,author,content,recipe)VALUES('$date',$authorid,'$content',$recipeid)";
   if($result=mysqli_query($link,$sql))
   {
  ?>
         <script type="text/javascript">
         alert("留言成功");
         </script>
         <script type='text/javascript'>window.location.href='recipe_in.php'</script>
  <?php
   }
   else{
     ?>
         <script type="text/javascript">
         alert("留言失敗");
         </script>
         <script type='text/javascript'>window.location.href='recipe_in.php'</script>
  <?php
   }
   mysqli_close($link);
}
?>
