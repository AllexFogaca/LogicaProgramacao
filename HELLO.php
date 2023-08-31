<?php
//Código PHP!
$helloWorld = ['H','-','E','-','L','-','L','-','O'];
$string = '';
for($i = 0; $i < count($helloWorld); $i++){
	if($helloWorld[$i] == "-"){
		continue;
	}
	$string.=$helloWorld[$i];
}
echo $string;

?>