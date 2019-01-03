<?php
 function password_match($plainpw,$dbpw){
    $match=0;
    $pw_array=preg_split("/[{}]/",$dbpw);
    $pwtype = $pw_array[1];
    $pwvalue = $pw_array[2];

    switch($pwtype) {
	case "PLAIN":{
	    if(strcmp($plainpw,$pwvalue) == 0)  {
		$match = 1;
	    }
	};break;
    } 
    return $match;
 }

