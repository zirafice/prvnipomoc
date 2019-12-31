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
    if(isset($_GET["action"])){
	$dblink=mysql_connect($db["host"],$db["user"],$db["pw"])
	    or die("Cann't connect or authenticate to mysql server");
	mysql_select_db($db["dbname"],$dblink)
	    or die("Cann't select database");
	mysql_set_charset('utf8',$dblink);
	switch ($_GET["action"]){
	    case "accept":{
		$query_update = "UPDATE cover_request SET state=1 WHERE ID=".$_GET["id"];
		mysql_query($query_update,$dblink)
		    or die("Error while update status".$query_update);
	    };break;
	    case "down":{
		$query_update = "UPDATE cover_request SET state=(state + 1) WHERE ID=".$_GET["id"];
		mysql_query($query_update,$dblink)
		    or die("Error while update status".$query_update);
	    };break;
	    case "up":{
		$query_update = "UPDATE cover_request SET state=(state - 1) WHERE ID=".$_GET["id"];
		mysql_query($query_update,$dblink)
		    or die("Error while update status".$query_update);
	    };break;
	    case "del":{
		$query_update = "UPDATE cover_request SET deleted=1, deleteDate='".date("Y-m-d")."', deletedBy='".$_SESSION["loggedIn"]."' WHERE ID=".$_GET["id"];
		mysql_query($query_update,$dblink)
		    or die("Error while update status".$query_update);
	    };break;
	    case "take":{
		$query_update = "UPDATE cover_request SET zpracovava=".$_SESSION["loggedIn"].", state=1 WHERE ID=".$_GET["id"];
		mysql_query($query_update,$dblink)
		    or die("Error while update status".$query_update);
	    };break;
	    case "leave":{
		$query_update = "UPDATE cover_request SET zpracovava=NULL, state=0 WHERE ID=".$_GET["id"];
		mysql_query($query_update,$dblink)
		    or die("Error while update status".$query_update);
	    };break;
	    case "signto":{
		if($_SESSION["admin"] == 1){
		    $query_update = "UPDATE cover_request SET zpracovava=".$_GET["whom2assign"].", state=1 WHERE ID=".$_GET["id"];
		    mysql_query($query_update,$dblink)
			or die("Error while update status".$query_update);
		}
	    };break;
	}
	mysql_close($dblink);
	header("Location: index.php");
	exit;
    }

    if(isset($_GET["page"])){
	$_SESSION["page"] = $_GET["page"];
	if(strcmp($_SESSION["page"],"editCR") == 0){
	    $_SESSION["ID"] = $_GET["id"];
	}
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
    <div class="top">
        <div class="logo"><a href="/index.php?page=welcome"><img src="./img/logo_admin.png" width=100></a></div>
        <div class="title">První pomoc Wattpadu <br><span style="font-size: 30px;"> Admin zone</span></div>
    </div>
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
