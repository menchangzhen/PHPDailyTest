<?php 
$target = 14;
	$array=[[1,2,8,9],[2,4,9,12],[4,7,10,13],[6,8,11,15]];
	print_r(Find($target,$array));
function Find($target,$array)
{

	$result = array_reduce($array,'array_merge',array());
	// var_dump($result);die;
	if(in_array($target,$result))
	{
		return 1;
	}else
	{
		return 0;
	}
}
var_dump(Find($target,$array));


 ?>