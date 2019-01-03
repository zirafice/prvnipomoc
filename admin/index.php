<?php
    require("./inc/header_common.inc");
    require("./fnc/common.fnc");
    require("../conf/mysql.conf");

    if(isset($_GET["isdone"])){
	$dblink=mysql_connect($db["host"],$db["user"],$db["pw"])
	    or die("Cann't connect or authenticate to mysql server");
	mysql_select_db($db["dbname"],$dblink)
	    or die("Cann't select database");
	mysql_set_charset('utf8',$dblink);
    
	$set_query="UPDATE cover_request SET state=".$_GET["status"]." WHERE ID=".$_GET["isdone"];
	mysql_query($set_query,$dblink);
	mysql_close($dblink);
    }
    if(isset($_GET["page"])){
	$_SESSION["page"] = $_GET["page"];
	header("Location: index.php");
	exit;
    }
?>
<html>
<head>
  <link rel="stylesheet" href="../css/default.css">
  <link rel="stylesheet" href="./css/default.css">
</head>
<body>
 <div class="under">
  <div class="middle">
    <img src="./img/web_banner_admin.jpg" usemap="#logomapadmin">
    <map name="logomapadmin">
      <area shape="rect" coords="0,0,93,93" href="/index.php" alt="Home">
    </map>
    <div class="space"></div>
    <div class="menu">
	<?php 
	    include("./inc/menu.inc");
	?>
    </div>
    <div class="space"></div>
    <div class="bodytext">
<?php
    include("./pages/".$_SESSION["page"].".page");
?>
    </div>
  </div>
 </div>
</body>
</html>
