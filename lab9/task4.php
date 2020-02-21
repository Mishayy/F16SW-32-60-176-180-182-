<?php

$clr = array(
	"color"=>array("a"=>"Red","b"=>"Green","c"=>"White"),
	"numbers"=>array(1,2,3,4,5,6),"holes"=>array("First",5=>"Second","Third")
	);
	
	echo $clr["color"]["c"]."<br>";
	echo $clr["numbers"][1]."<br>";
	echo $clr["holes"][0]."<br>";
?>