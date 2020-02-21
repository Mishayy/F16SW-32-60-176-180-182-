<?php

	$name = "AliWaris";
	$things = array("Stairs","Apple","Orange","Wheel","Queen","Red","Duck","Jeep","Mango");
	for($i=0;$i<strlen($name);$i++){
		foreach($things as &$t){
			if(strtoupper(substr($name[$i],0,1))==substr($t,0,1)){
				echo $t." ";
				break;
			}
		}
	}


?>