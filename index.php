<?php
$a = "Have you ever gone shopping and";
print(index($a));
function index($a)
{
	$data = str_split($a);
	// var_dump($data);die;
	$s = array_count_values($data);
	
	foreach ($s as $key => $value) {
		if($value>=3)
		{
			return $key;
		}
	}
}






?>
