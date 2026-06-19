<?php 

 /* Float Operations -> Calculate the total cost of 5 items priced at Rs. 199.99 each, including
13% VAT. Display the subtotal, VAT amount, and total */

 $item = 5;
 $price = 199.99;
 $vatrate = 13;
 $subtotal = $item * $price;
 $vatamt =  ($vatrate/100) * $subtotal;
 $total = $subtotal + $vatamt;

 echo "Subtotal: {$subtotal} , Vat Amount: {$vatamt}, Total: {$total}";
 
