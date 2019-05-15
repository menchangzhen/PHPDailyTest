<?php 
$str = [1,2,3,4,5,6];
print_r(index($str));
function index($array)
{
	$jishu = [];
	$oushu = [];
	foreach ($array as $key => $value) {
		if($value%2 == 1)
		{
			$jishu[] = $value;
		}else
		{
			$oushu[] = $value;
		}
	}
	return array_merge($jishu,$oushu);
}



 ?>