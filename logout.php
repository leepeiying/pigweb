<?php session_start();
if(!isset($_SESSION["username"]))
{
  ?>
  <script type="text/javascript">
    alert("您尚未登入");
    window.location.href="index.php";
  </script>

  <?php
}
else
{
      session_destroy();
  ?>
    <script type="text/javascript">
      alert("登出完成");
      window.location.href="index.php";
    </script>
<?php
}
 ?>
