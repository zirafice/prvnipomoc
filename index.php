<?php
    require("./inc/header_common.inc");
    require("./fnc/common.fnc");
    require("./conf/mysql.conf");

    if(isset($_GET["page"])){
	$_SESSION["page"] = $_GET["page"];
	header("Location: index.php");
	exit;
    }
    
    if(!isset($_SESSION["page"])){
	$_SESSION["page"] = "welcome";
    }
?>

<html>
<head>
  <link rel="stylesheet" href="./css/default.css">
</head>
<body>
 <div class="under">
  <div class="middle">
    <div class="top">
        <div class="logo"><a href="index.php?page=welcome"><img src="./img/logo.png" width=100></a></div>
        <div class="title">První pomoc Wattpadu</div>
    </div>
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
