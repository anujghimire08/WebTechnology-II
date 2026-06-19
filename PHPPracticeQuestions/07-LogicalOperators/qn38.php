<?php 

 /*OR Operator -> Check if a year (2024) is divisible by 4 OR by 400 to determine if it's a leap year. */

 $year = 2024;
 echo ($year % 4 ===0 || $year%400===0)? "leap yrs": "non leap year";