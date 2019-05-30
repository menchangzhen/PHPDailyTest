<?php 
function NumberOf1($n)
{
  $n = 	decbin($n);
  $a = substr_count($n,'1');
  return $a;
}
echo NumberOf1(10);



 ?>