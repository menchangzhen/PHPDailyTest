<?php 
function Sum_Solution($n)
{
	$a = 0;
	
	($n>0)&&($a = Sum_Solution($n-1)+$n);
	return $a;

}
echo Sum_Solution(5);


 ?>