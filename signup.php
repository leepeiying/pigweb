<!doctype html>
<?php session_start();
  if(isset($_SESSION["username"]))
  {
  ?>
          <script type="text/javascript">
            alert("請先登出");
            window.location.href='index.php';
          </script>
<?php
}
else
{
?>
    <html>
    <head>
     	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>加入會員</title>
        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="css/business-frontpage.css" rel="stylesheet">
    	<script src="https://libs.baidu.com/jquery/1.10.2/jquery.min.js"></script>
        <!--copy navbar css-->
        <style type="text/css">
            @media(min-width:992px){
                .navbar{
                    height: 50px;
                }
            }
        </style>
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
    				<div class="dropdown-menu">
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
    					<a class="nav-link" href="signup.php">加入會員</a>
    				</li>
    			</ul>

    			<ul class="navbar-nav mr-auto text-center" id="top-icon3">
    	    		<li class="nav-item dropdown " >
    					<a class="nav-link dropdown-toggle " data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" >登入</a>
    					<div class="dropdown-menu" >
                <form align=center action="login.php" method="post">
                  <input style="float:left; margin-bottom:15px; margin-right:5px; width:148px;" placeholder="Username" id="username" name="username" type="text">
                  <input style="float:left; margin-bottom:15px; margin-right:5px; width:148px;" placeholder="Password" id="password" name="password" type="password">
                  <input class="btn btn-info btn-block" id="sign-in" value="Sign In" type="submit">
                </form>
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
    <!--------------------------------------上方點選欄位----------------------------------------------------------------------------->


    <div class="card-header" align="center">加入會員<font size="4">(請填寫以下欄位)</font></div>
    	<br><br>

    	<form align="center" name="form1"  action="signup2.php" method="post"　　　　　　　　>

    		<br>
        　帳號：　 　 <input type='text' name="mail" id="mail"  maxlength="16" minlength="6" placeholder="字數限6至16個" required><br><br>
    		　暱稱：　　　<input type='text' name="nickname" id="nickname" maxlength="10" placeholder="限10字數內" required><br><br>
    		　密碼：　　　<input type="password" name="pass" id="pass" maxlength="16" minlength="6" placeholder="字數限6至16個" required><br><br>
    		　確認密碼：　<input type="password" name="check" id="check" maxlength="16" required><br><br>

              	<input type="reset" id="submit3"　onclick="formReset();" value="清除">
    		<input type="submit" id="submit">
    	</form>

    	<br>    <!--抓間距用-->

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
    <script src="vendor/jquery/jquery.popper.min.js"></script>
    <script>
    function formReset(){
           document.getElementById("mail").value="";
           document.getElementById("pass").value="";
           document.getElementById("check").value="";
           document.getElementById("nickname").value="";
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
