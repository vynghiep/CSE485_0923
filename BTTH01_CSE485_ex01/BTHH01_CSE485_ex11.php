<?php
$array =array(1,2,3,4,5);
unset($array[2]);
$array=array_values($array);
print_r($array);
?>