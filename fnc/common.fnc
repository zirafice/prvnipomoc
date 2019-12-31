function save_cover_ask($ID,$data,$dblink){
    $title = mysql_escape_string($data["title"]);
    $author = mysql_escape_string($data["autor"]);
    $wp_user = mysql_escape_string($data["wpuser"]);
    $zanr = mysql_escape_string($data["zanr"]);
    $popis = mysql_escape_string($data["popis"]);
    $deploydate = (int)$data["deploydate"];
    
    $querystr  = "ID = ".$ID;
    $querystr .= ", title='".$title."'";
    $querystr .= ", author='".$author."'";
    $querystr .= ", popis='".$popis."'";
    $querystr .= ", wp_user='".$wp_user."'";
    $querystr .= ", zanr='".$zanr."'";
    $querystr .= ", deploydate='".$deploydate."'";
    if(strlen($data["pocit"]) > 0){
	$querystr .= ",pocit='".mysql_escape_string($data["pocit"])."'";
    }
    else{
	$querystr .= ",pocit=NULL";
    }

    if(strlen($data["info"]) > 0){
	$querystr .= ", info='".mysql_escape_string($data["info"])."'";
    }
    else{
	$querystr .= ", info=NULL";
    }
    if(strlen($data["email"]) > 0){
	$querystr .= ", email='".mysql_escape_string($data["email"])."'";
    }
    else{
	$querystr .= ", email=NULL";
    }
    
    $query="INSERT INTO `cover_request` SET " . $querystr;
    
    mysql_query($query,$dblink)
	or die("Chyba vlozeni - dotaz: ".$query);
}
