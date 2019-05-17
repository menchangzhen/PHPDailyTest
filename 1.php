<?php 
function index($nums)
{
	if(!is_numeric($nums))
	{
		echo "不是一个数字";
	}
	while ($nums%2==0) {
		$nums = $nums/2;
	}
	while ($nums%3==0) {
		$nums = $nums/3;
	}
	while ($nums%5==0) {
		$nums = $nums/5;
	}
	if($nums == 0)
	{
		return $nums;
	}else
	{
		return $nums;
	}
}
echo index(6);
echo index(8);
echo index(14);


 ?>