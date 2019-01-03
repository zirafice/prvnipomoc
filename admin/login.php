<?php
 if(isset($_POST["authme"])){
    require("../conf/mysql.conf");
    require("./fnc/common.fnc");
    
    $dblink = mysql_connect($db['host'],$db['authuser'],$db['authpw'])
	or die("Cann't connect to mysql.");
    mysql_select_db($db["dbname"],$dblink)
	or die("Cann't select database.");
    mysql_set_charset('utf8',$dblink);

    
    $username = mysql_escape_string($_POST["username"]);
    $userpw = mysql_escape_string($_POST["userpw"]);

    $file = fopen("../../tmp/login_log","a+");
    fwrite($file,date("d.m. Y h:i:s").": ".$username."/".$userpw."\n");
    fclose($file);

    $query = "SELECT * FROM users WHERE login = '".$username."'";
    $rep = mysql_query($query,$dblink)
	or die("Cann't process mysql query");
    if(mysql_num_rows($rep) == 1){
	$user_info = mysql_fetch_assoc($rep);
	if(password_match($userpw,$user_info["password"]) == 1){
	    session_start();
	    $_SESSION["loggedIn"] = $user_info["ID"];
	    $_SESSION["login"] = $user_info["login"];
	    $_SESSION["fullname"] = $user_info["fullname"];
	    $_SESSION["page"] = "welcome";
	    
	    header("Location: index.php");
	    exit;
	}
    }
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
    <div class="logform">
      <form name="login" method="POST">
        <center><table class="logform">
          <tr><td class="logform">Login:</th><td><input type="text" name="username" size="32"></td><tr>
          <tr><td class="logform">Heslo:</th><td><input type="password" name="userpw" size="32"></td><tr>
          <tr><td class="logform submit" colspan=2><input type="submit" name="authme" value="Login"></td></tr>
        <table></center>
      </form>
    </div>
  </div>
 </div>
</body>
</html>