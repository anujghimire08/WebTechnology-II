<?php

 /*Exponentiation -> Calculate the compound interest using the formula: A = P(1 + r)^n. Use P=10000, r=0.08, n=3. */
  $P= 10000; $r=0.08; $n=3;
  $A = pow($P*(1+ $r),$n); 
  echo $A;