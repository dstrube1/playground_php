<?php

//What is the biggest number?
$i = 1;
while($i != INF){
	$i *= 10;
	echo $i . "; ";
}
//1.0E+308 * 10 = INF
echo "\n";

//What is the smallest number?
$i = 1;
while($i != 0){
	$i /= 10;
	echo $i . "; ";
}
//1.0E-310 / 10 = 9.9999999999995E-312
//9.8813129168249E-324 / 10 = 0
echo "\n";

//if we do this:
//exit("Goodbye");

//is the rest of this igored?
//not exactly: statements must still be well formed (e.g., end with semicolons), 
//and uncommented free form text will still throw an error

//how to catch a warning? not like this:
try {
	$j = 1/0;
	echo $j;
} catch(Exception $e) {
	echo "Caught Exception $e";
}
echo "\n";

//catch a warning like this:
set_error_handler("warning_handler", E_WARNING);

function warning_handler($errno, $errstr) { 
	echo "Caught warning with errno = $errno & errstr = $errstr";
	echo "\n";
}

$j = 1/0;
echo $j;
echo "\n";


?>