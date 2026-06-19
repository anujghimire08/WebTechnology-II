<?php

  /*else-if Ladder -> Convert a numerical grade (0-100) to a leter grade: A (80-100), B (60-79),C (40-59), D (20-39), E (0-19). */

  $marks = 60;

  if($marks >= 80 && $marks <=100){
    echo "Grade: A";
  }elseif($marks >= 60 && $marks <=79){
    echo "Grade: B";
  }elseif($marks >= 40 && $marks <=59){
    echo "Grade: C";
  }elseif($marks >= 20 && $marks <=39){
    echo "Grade: D";
  }elseif($marks >= 0 && $marks <=19){
    echo "Grade: E";
  }else{
    echo "Invalid Grade";
  }