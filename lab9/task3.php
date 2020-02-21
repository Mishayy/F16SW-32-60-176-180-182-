<?php

$arr = array(
	"Italy"=>"Rome","Luxembourg"=>"Luxembourg","Belgium"=>"Brussels",
	"Denmark"=>"Copenhagen","Pakistan"=>"Islamabad","India"=>"New Delhi","Srilanka"=>"Colombo",
	"South Africa"=>"Capetown","Australia"=>"Melborne"
);
asort($arr);
foreach ($arr as $key => $val) {
    echo "The capital of ".$key." is ".$val."<br>";
}
?>