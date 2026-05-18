<?php  

//number using for loop.
echo "number using for loop.<br>";
for ($x = 5; $x <= 10; $x++) {
  echo " $x <br>";
}

//number using foreach loop.
echo "number using foreach loop.<br>";
 $a = range(5,10); 
foreach($a as $array)
{
    echo $array."<br>";
}
?>  