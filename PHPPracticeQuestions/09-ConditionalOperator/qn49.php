<?php

 /* Discount with Ternary -> Apply a 20% discount if the total bill is greater than Rs. 5000,otherwise apply a 5% discount. Use ternary operator. */

 $totalBill = 1000;
 echo ($totalBill > 5000)?  ($totalBill * (20/100)) :  ($totalBill * (5/100)); 