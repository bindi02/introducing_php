<?php
/*
for  loop
 for(initialize;condition;increment){
 }*/
$value = array('a','b','c','d','e');
for ($i=0;$i < count($value); $i++){
	echo $value[$i];
	if($value[$i] == 'b'){
		break;
		}

	}
?>