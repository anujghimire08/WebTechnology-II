<?php

 /*Shopping Discount -> Calculate the final price after applying a 15% discount to an item costing Rs. 4500. Use assignment operators in the calculation. */

 $price = 4500;
 $dis = 15;
 $disAmount = $price * $dis / 100;

 $price-= $disAmount;

 echo $price;

