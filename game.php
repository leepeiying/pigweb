<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en-us"><head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>小遊戲</title>
	<!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	  <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/business-frontpage.css" rel="stylesheet">
	<script src="https://libs.baidu.com/jquery/1.10.2/jquery.min.js"></script>
	<!--Unity webGL-->
    <link rel="shortcut icon" href="TemplateData/favicon.ico">
    <!--<link rel="stylesheet" href="TemplateData/style.css">-->
    <script src="TemplateData/UnityProgress.js"></script>
    <script src="Build/UnityLoader.js"></script>
    <script>
      var gameInstance = UnityLoader.instantiate("gameContainer", "Build/game.json", {onProgress: UnityProgress});
    </script>
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
           <?php
             if(isset($_SESSION["username"]))
               echo "<a class='nav-link' href='memberdata.php'>會員資料管理";

             else
               echo "<a class='nav-link' href='signup.php'>加入會員";
             ?>
         </a>
       </li>
     </ul>

     <ul class="navbar-nav mr-auto text-center" id="top-icon3">
       <?php
         if(isset($_SESSION["username"]))
           {
           echo"<li class='nav-item' >
                 <a class='nav-link' href='logout.php'>登出</a>";
           }
           else
           {
         ?>
             <li class="nav-item dropdown " >
             <a class="nav-link dropdown-toggle " data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" >登入</a>
             <div class="dropdown-menu" >
               <form align=center action="login.php" method="post">
               <input style="float:left; margin-bottom:15px; margin-right:5px; width:148px;" placeholder="Username" id="username" name="username" type="text">
               <input style="float:left; margin-bottom:15px; margin-right:5px; width:148px;" placeholder="Password" id="password" name="password" type="password">
               <input class="btn btn-info btn-block" id="sign-in" value="Sign In" type="submit">
             </form>
         <?php
             }
           ?>
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
<!--------------------------------------上方點選欄位----------------------------------------------------------------------------->
    <div class="row" id="ad">
	<div class="col-md-6">
	  <div id="carousel1" class="carousel slide" data-ride="carousel">

		  <ol class="carousel-indicators">
	      <li data-target="#carousel1" data-slide-to="0" class="active"></li>
	      <li data-target="#carousel1" data-slide-to="1"></li>
	      <li data-target="#carousel1" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner" role="listbox">
              <div class="item active"><a href = "https://www.plurk.com/p/n2cd0k"><img src="image/L2.jpg"  alt="First slide image" ></a></div>
              <div class="item"><a href = "https://kids.coa.gov.tw/view.php?func=knowledge&subfunc=kids_knowledge&category=A21&id=13"><img src="image/L3.png"  alt="Second slide image" ></a></div>
              <div class="item"><a href = "https://www.baphiq.gov.tw/view.php?catid=17543"><img src="image/L1.jpg"  alt="Third slide image" ></a></div>
              </div>

            <a class="left carousel-control" href="#carousel1" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              </a>
          <a class="right carousel-control" href="#carousel1" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          </a>

          </div>
          </div>

          <div class="col-md-6">
          <div id="carousel2" class="carousel slide" data-ride="carousel">

            <ol class="carousel-indicators">
              <li data-target="#carousel2" data-slide-to="0" class="active"></li>
              <li data-target="#carousel2" data-slide-to="1"></li>
              <li data-target="#carousel2" data-slide-to="2"></li>
                  </ol>

            <div class="carousel-inner" role="listbox">
              <div class="item active"><a href = "https://www.owlting.com/market/vendor/7419/4182?utm_source=Google+Adwords&utm_medium=GA7419_4182&utm_content=7419_4182&utm_campaign=Google+Adwords&gclid=CjwKCAiA9K3gBRA4EiwACEhFewYLt2D6batxSX0q3hDBsHuyNqOG4vcATtTCXPHvgyHrMVYmK57R-xoCy8QQAvD_BwE"><img src="image/R1.jpg"  alt="First slide image" ></a></div>
              <div class="item"><a href = "https://www.sjpork.com.tw/ProductList.aspx?sortby=Time&view=List&catid=All"><img src="image/R2.png"  alt="Second slide image" ></a></div>
              <div class="item"><a href = "http://www.ego888.com.tw/FrontviewController.do?action=Category&catalogid=314"><img src="image/R3.png" alt="Third slide image" ></a></div>
              </div>

	    <a class="left carousel-control" href="#carousel2" role="button" data-slide="prev">
          	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        </a>
		<a class="right carousel-control" href="#carousel2" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		</a>
		</div>
	</div>
	</div>
		<script src="js/js.js"></script>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery-1.11.3.min.js"></script>

		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.js"></script>



	  <div class="card-header" align="center">piggame</div>
		<div class="webgl-content" align="center">
		  <div id="gameContainer" style="width: 800px; height: 600px"></div>
		  <div class="footer">
			<!--<div class="webgl-logo"></div>
			<div class="fullscreen" onclick="gameInstance.SetFullscreen(1)"></div>
			<div class="title">gamefinal</div>-->
		  </div>
		</div>

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
