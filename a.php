<?php 
$array = [2,4,3,6,3,2,5,5];
print_r(FindNumsAppearOnce($array));
function FindNumsAppearOnce($array)
{
$str = [];
$data = array_count_values($array);
foreach ($data as $key => $value) {
	if($value == 1)
	{
		$str[] = $key;
	}
}
print_r($str);

}



 ?>