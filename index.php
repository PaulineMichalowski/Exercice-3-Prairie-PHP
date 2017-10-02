<?php
function impair($num)
{
 if($num % 2 != 0)
  return true;
 return false;
}

for($i= 0; $i <= 300; $i++)
{
 if(impair($i))
  echo $i;
 }
 ?>
