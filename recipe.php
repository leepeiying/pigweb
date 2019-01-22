<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>食譜</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	  <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/business-frontpage.css" rel="stylesheet">
	<link href="css/btn.css" rel="stylesheet">
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






    <!-- Page Content -->
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

      <!-- /.row -->
<div class="card-header" align="center">食譜分享</div>

<div class="row">

	<div class="col-lg-12" id="recipe-btn">
	  	<div class="btn-group btn-group-lg" role="group" aria-label="Basic example" >
        <button type="button" class="btn btn-secondary" onclick="location.href='recipe.php'">熱門</button>
  			<button type="button" class="btn btn-secondary" onclick="location.href='collections.php'">收藏</button>
  			<button type="button" class="btn btn-secondary" onclick="location.href='myrecipe.php'">我的食譜</button>
  			<button type="button" class="btn btn-secondary" onclick="location.href='recipe_upload.php'">上傳食譜</button>
		</div>
	</div>


	<div class="col-sm-1"></div>
	<div class="right col-sm-10" align="center">
  <?php

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
    $i=-1;
    if(isset($_SESSION["username"]))
    {
          $user_ID=$_SESSION["username"];

          $sql = "select * from collect where user=$user_ID";
          $result=mysqli_query($link,$sql)or die("Error");
          while ($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
          {
              $collect_rid[++$i]=$row["recipe"];
          }
    }

    $sql = "select * from recipe order by CTR DESC";
    $result=mysqli_query($link,$sql);
    $data_nums = mysqli_num_rows($result); //統計總比數
    $per = 6; //每頁顯示項目數量
    $pages = ceil($data_nums/$per); //取得不小於值的下一個整數
    if (!isset($_GET["page"])){ //假如$_GET["page"]未設置
        $page=1; //則在此設定起始頁數
    } else {
        $page = intval($_GET["page"]); //確認頁數只能夠是數值資料
    }
    $start = ($page-1)*$per; //每一頁開始的資料序號
    $result = mysqli_query($link,$sql.' LIMIT '.$start.', '.$per) or die("Error");

    $count=0;
    while ($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
    {//while循環將$result中的結果找出來
      $recipe_ID= $row["recipe_ID"];
      $recipename = $row["recipe_name"];
      $procedue=$row["procedue"];
      $image=$row["image"];

      $_SESSION["page"]=$page;
      $_SESSION["type"]=1;
      $p = explode("<",$procedue);
      $count++;
      $in=$count-1;
      if($count==4)
      {
        echo"	</div>";
      }
      if($count%3==1)
      {
        echo"	<div class='card-deck'>";
      }
      $b=0;
      if($i>=0)
      {
        for($j=0;$j<=$i;$j++)
        {
          if($recipe_ID==$collect_rid[$j])
          {
            $b=1;
            break;
          }
        }
      }
    ?>
    <div class="card">
    <div class="card-5">
      <img class="card-img-top" src="<?php echo "upload/$recipe_ID.$image"; ?>" alt="Card image cap">
      <div class="card-body">
        <h4 class="card-title"><?php echo "$recipename"; ?></h4>
        <p class="card-text"><?php echo "$p[0]"; ?></p>
      </div>
      <div class="card-footer">
        <form>
        <?php
            if(!isset($_SESSION["username"]))
            {
              echo"<a href='recipe_in$count.php' class='btn btn-info'>查看更多</a>
              <input type=button class='colora' id='btn$count' href='javacript:return false;' onclick='unlogin();' value='♥ 收藏'>";
            }
            else if($b==0)
            {
                echo"<a href='recipe_in$count.php' class='btn btn-info'>查看更多</a>
                <input type=button class='colora' id='btn$count' href='javacript:return false;' onclick='collect($recipe_ID,$b,$count);' value='♥ 收藏'>";
            }
            else
            {
                echo"<a href='recipe_in$count.php' class='btn btn-info'>查看更多</a>
                <input type=button class='colorb' id='btn$count' href='javacript:return false;' onclick='collect($recipe_ID,$b,$count);' value='♥ 收藏'>";
            }
      ?>
        </form>
      </div>
     </div>
    </div>
    <?php
    }

    if($pages==$page)
    {
      while($count<6)
      {
        $count++;
        if($count==4)
        {
          echo"	</div>";
        }
        if($count%3==1)
        {
          echo"	<div class='card-deck'>";
        }
        ?>
          <div class="card">
          <div class="card-8">
           </div>
          </div>
          <?php
      }
    }
    ?>
  </div>


  <?php
      //分頁頁碼
      echo '共 '.$data_nums.' 筆<br>在第 '.$page.' 頁 (共 '.$pages.' 頁)';
      echo "<br /><a href=?page=1>首頁</a> ";
      echo "第 ";
      for( $i=1 ; $i<=$pages ; $i++ ) {
          if ( $page-3 < $i && $i < $page+3 ) {
              echo "<a href=?page=".$i.">".$i."</a> ";
          }
      }
      echo " 頁 <a href=?page=".$pages.">末頁</a><br /><br />";

  ?>

	<div class="col-md-12" align="center" id="top">
		<a href="recipe.php">
			<img src="image/top.png">
		</a>
	</div>
  </div>
  </div>


    <!-- Footer -->
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

    <!--copy navbar script-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="vendor/jquery/popper.min.js"></script>
<script src="js/btn.js"></script>

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
<script src="js/jquery.smoove.js"></script>
<script src="js/jquery.smoove.min.js"></script>
<script src="js/card.js"></script>
</body>
</html>
