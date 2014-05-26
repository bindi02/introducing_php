<?php
//tht code for array 
$value = array('Bindi','Megha','pooja'); //tht how u take array in php
//if u want to print out array its always use print_r($value); 
print_r($value);
//o/p like
// Array ( [0] => Bindi [1] => Megha [2] => pooja )
echo $value[2];
//if u want to add more values on array 
$value[]='Ronak';//thts how u add value on array

print_r($value);
//tht above is called index array
//for associative erray store in pair
//as below
$valueass = array('BINDIYA' => 'WIS major',
                   'MEGHA' => 'Bio' );
$valueass['Ronak'] = 'civil';
print_r($valueass);
?>
