<?php 
$n = 3;
print(calSteps($n));
function calSteps($data)
{
	if($data == 0)
	{
		return 1;
	}
	$str = [0,1,2];
	if($data<3)
	{
		return $str[$data];
	}
	return calSteps($data-1)+calSteps($data-2);
}




 ?>