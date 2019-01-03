<?php
    require("./inc/header_common.inc");
    require("./conf/mysql.conf");

    if(isset($_GET["page"])){
	$_SESSION["page"] = $_GET["page"];
	header("Location: index.php");
	exit;
    }
?>

<html>
<head>
  <link rel="stylesheet" href="./css/default.css">
</head>
<body>
 <div class="under">
  <div class="middle">
    <img src="./img/web_banner.jpg" usemap="#logomap">
    <map name="logomap">
      <area shape="rect" coords="0,0,93,93" href="index.php" alt="Home">
    </map>
    <div class="space"></div>
    <div class="menu">
	<?php require("./inc/menu.inc");?>
    </div>
    <div class="bodytext">
	<?php 
	    if(strcmp($_SESSION["page"],"admin") == 0){
	    	header("Location: admin/index.php");
	    	exit;
	    }
	    else{
		include("./pages/".$_SESSION["page"].".page");
	    }
	?>
    </div>
  </div>
 </div>
</body>
</html>
