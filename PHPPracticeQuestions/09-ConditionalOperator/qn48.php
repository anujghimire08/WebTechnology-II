<?php

  /*Nested Ternary -> Use nested ternary operators to display "Excellent", "Good", or "Needs Improvement" based on a score of 85.*/
  $score = 10;
  echo ($score >= 85)? "Excellent" : (($score >=50)? "Good" : "need improvement");