<?php

 /*Multiple Parameters -> Write a function calculateDiscount(price, discountPercent) that returns the discounted price. */

 function calculateDiscount($price, $discountPercent){
      return $price - ($price * $discountPercent/100);
 }

echo calculateDiscount(2000,15);