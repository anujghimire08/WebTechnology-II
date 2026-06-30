<?php 
$val = "sdjsdk";
$val1 = 2;
$val2 = 3;
$isNumber = is_numeric($val)? true : false;

echo "use of +:" . $val1 + $val2 . "<br/>";
echo "use of -:" . $val1 - $val2 . "<br/>";
echo "use of *:" . $val1 * $val2 . "<br/>";
echo "use of /:" . round( $val1 / $val2) . "<br/>";
echo "use of %:" . $val1 % $val2 . "<br/>";


$val1+=$val2;
echo "use of +=:" . $val1 . "<br/>";


$val1-=$val2;
echo "use of -=:" . $val1 . "<br/>";

if($val1 % 2 === 0 && $val2 % 2 === 0 ) echo "even number<br>";
if(!$val1 % 2 === 0 && !$val2 % 2 === 0 ) echo "odd number<br>";
if($val1 % 2 === 0 || $val2 % 2 === 0 ) echo "both number<br>";


echo "before:" . $val1 . "<br>";
$val1++;
echo 'after $val++: ' . $val1 . "<br>";

echo "before:" . $val1 . "<br>";
--$val1;
echo 'after --$val: ' . $val1;


