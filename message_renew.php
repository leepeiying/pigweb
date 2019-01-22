<!DOCTYPE html>
<?php session_start();
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
?>
    <html lang="en">
      <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>修改評論</title>
    	<!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="css/business-frontpage.css" rel="stylesheet">
    	<script src="ckeditor.js"></script>
    	<script src="js/sample.js"></script>
    	<script src="https://libs.baidu.com/jquery/1.10.2/jquery.min.js"></script>

    	 <!--copy navbar css-->
        <style type="text/css">
            @media(min-width:992px){
                .navbar{
                    height: 50px;
                }
            }
        </style>
    	<script src="jQueryAssets/jquery-1.11.1.min.js"></script>
      </head>
      <body>
    <!--------------------------------------上方點選欄位----------------------------------------------------------------------------->
    <header class="business-header">
    	<nav class="navbar navbar-expand-lg navbar-light container-fluid" >

    	<div class="mx-auto my-2 order-0 order-md-0" >
    			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2" id="sun2"></button>

    	  </div>

    		 <div class="collapse w-100 dual-collapse2 ">
    		   <ul class="navbar-nav ml-auto text-center">
            	 <li class="nav-item ">
           	   		<a class="nav-link" href="index.php">首頁<span class="sr-only">(current)</span></a>
           		 </li>
        	  </ul>
    		</div>

          <div class="navbar-collapse collapse w-100 dual-collapse2 order-1 order-md-2 " id="top-icon1">
    			<ul class="navbar-nav ml-auto text-center">
    			  <li class="nav-item dropdown ">
    					<a class="nav-link dropdown-toggle " data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">豬肉介紹</a>
    					<div class="dropdown-menu" >
    						<a class="dropdown-item" href="knowledge.php">部位介紹</a>
    						<div class="dropdown-divider"></div>
    						<a class="dropdown-item" href="pork1_0.php" >肩胛部</a>
    						<a class="dropdown-item" href="pork2_0.php">背脊部</a>
    						<a class="dropdown-item" href="pork3_0.php">腹脇部</a>
    						<a class="dropdown-item" href="pork4_0.php">後腿部</a>
    					</div>
    			  </li>

    				<li class="nav-item ">
    					<a class="nav-link" href="recipe.php">食譜分享</a>
    				</li>
    			</ul>

    	  </div>
    	<div class="navbar-collapse collapse order-2 order-md-2 " >
    			<a class="sun" href="index.php" id="sun"></a>
    	 </div>

      <div class="navbar-collapse collapse w-100 dual-collapse2 order-3 order-md-2  " id="top-icon2">
    			<ul class="navbar-nav mr-auto text-center">
    				<li class="nav-item">
    					<a class="nav-link" href="game.php">小遊戲</a>
    				</li>
    				<li class="nav-item">
              <a class='nav-link' href='memberdata.php'>會員資料管理</a>
    				</li>
    			</ul>

    			<ul class="navbar-nav mr-auto text-center" id="top-icon3">
            <li class='nav-item' >
                <a class='nav-link' href='logout.php'>登出</a>
            </li>
    			</ul>

    					</div>
    				</li>
    			</ul>

    		</div>
    </nav>
    	<div class="box2" id="wood1"></div>
    	<div class="box2" id="wood2"></div>
    	<div class="box" id="box1"></div>
    	<div class="box" id="box2"></div>
    	<div class="box" id="sky1"></div>
    	<div class="box" id="sky2"></div>
    	<div class="box" id="pig1"></div>
    	<div class="box" id="pig2"></div>
    	</header>

    <header class="nothing">
    	<div class="nothing2" id="no1"></div>
    	<div class="nothing2" id="no2"></div>
    </header>
    <script src="js/js.js"></script>
    <!------------------------------輸入資訊欄位--------------------------------->
    	  <div class="card-header" align="center">修改評論</div>
        <?php
          $link=mysqli_connect("127.0.0.1","root","");

          if(!$link)
          {
            die("無法建立連線");
          }
          $message_ID=(int)($_REQUEST["messageid"]);
          $db_selected=mysqli_select_db($link,"pork_web");
          if(!$db_selected)
          {
            die("無法開啟資料庫<br>".mysql_error($link));
          }

          mysqli_query($link,"SET NAMES utf8");

          $sql = "select * from message where message_ID ='$message_ID'";
          $result=mysqli_query($link,$sql);
          while ($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
          {//while循環ingredient將$result中的結果找出來
            $content=$row["content"];
          }
          $content2=strip_tags($content);

        ?>

        <form align=center action="message_renew2.php" method="post" enctype="multipart/form-data">
          <input type="hidden" value="<?php echo $message_ID ;?>" name="messageid">
          <br>
          修改評論：<br><br><textarea  style="width:80%;height:200px;" name="content" maxlength="500" placeholder="限500字數內" required><?php echo"$content2"; ?></textarea><br><br><br>

           <input type="reset" id="submit3" onclick="formReset();" value="清除"><input type="submit" id="submit" value="確認修改"><br><br>
		<input type ="button" id="submit" onclick="history.back()" value="取消"></input><br><br>
         </form>
    <!-------------------------------------------------------------------------------->

    <footer>
      		<div class="card">
    				<div class="card-body2 text-center">
    					<br>
    					<address> <strong>輔仁大學軟創學程</strong> <br>
    						新北市新莊區中正路510號<br>
    					</address>

    					<address>
    						<h7>電話:</h7> (02)1234-4567<br>
    						<h7>Email:</h7>
    						<a href="mailto:#">name@example.com</a>
    					</address>
    				</div>
    		</div>
          <!-- /.container -->
    	</footer>
    <script>
    	initSample();
    </script>
    <script src="vendor/jquery/jquery.popper.min.js"></script>
    <script>
    function formReset(){
           document.getElementById("recipename").value="";
           document.getElementById("photo").value="";
           document.getElementById("ingredient").value="";
           document.getElementById("procedue").value="";
         }
    </script>
    <script>
        // sandbox disable popups
        if (window.self !== window.top && window.name!="view1")
    	{;
          window.alert = function(){/*disable alert*/};
          window.confirm = function(){/*disable confirm*/};
          window.prompt = function(){/*disable prompt*/};
          window.open = function(){/*disable open*/};
        }

        // prevent href=# click jump
        document.addEventListener("DOMContentLoaded", function()
    	{
    		var links = document.getElementsByTagName("A");
    		for(var i=0; i < links.length; i++)
    		{
    			if(links[i].href.indexOf('#')!=-1)
    			{
    				links[i].addEventListener("click", function(e)
    				{
    					console.debug("prevent href=# click");
    					if (this.hash)
    					{
    						if (this.hash=="#")
    						{
    							e.preventDefault();
    							return false;
    						}
    					}
    					return false;
              		})
    			}
    		}
    	}, false);
    	</script>
        <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>
<?php
}
?>
