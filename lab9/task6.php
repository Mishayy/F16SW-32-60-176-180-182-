<?php
	$nums = array();
	for($i=0;$i<20;$i++){
		array_push($nums,rand(1,200));
	}
	
	foreach($nums as &$roll){
		if($roll==31){
			echo "Your Roll Number is F16SW".$roll."<br>";
			echo "Found You!";
		}if($roll==37){
			echo "Your Roll Number is F16SW".$roll."<br>";
			echo "Found You!";
		}
	}
?>