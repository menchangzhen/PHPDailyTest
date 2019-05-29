<?php 
$arr = [1,3,6,9];
$arr1 = [2,4,5,8,20];
function Combine($arr,$arr1)
{
	$i = 0 ;
	$j = 0 ;
	$int = [];
	while($int<count($arr[$i++]) && $int<count($arr1[$j++]))
	{
		$int[] = $arr[$i++] ? $arr1[$j++] &  $arr[$i++] :$arr1[$j++]; 
	}

}
var_dump(Combine($arr,$arr1));



 ?>