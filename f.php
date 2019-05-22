<?php 
$str = 'student. a am I';
print_r(ReverseSentence($str));
function ReverseSentence($str)
{
	// $arr = strrev($str);
	// var_dump($arr);die;
	$arr = explode(' ',$str);
	// var_dump($arr);die;
	// $a = strrev($arr);
	// var_dump($a);die;
	$array = [];
	for ($i=0; $i<count($arr) ; $i++) { 
		array_unshift($array,$arr[$i]);
		 var_dump($a);die;

	}
	echo ReverseSentence($str);
	
}


 ?>