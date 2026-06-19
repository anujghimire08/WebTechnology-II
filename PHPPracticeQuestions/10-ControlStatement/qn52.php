<?php


    /*switch Statement -> Use switch to display the day name based on a number (1-7).Monday=1, Tuesday=2, etc*/

    $val = 4;

    switch ($val) {
      case '1':
        echo "Monday";
        break;
      case '2':
        echo "Tuesday";
        break;
      case '3':
        echo "Wednesday";
        break;
      case '4':
        echo "Thrsday";
        break;
      case '5':
        echo "Friday";
        break;
      case '6':
        echo "Saturday";
        break;
      case '7':
        echo "Sunday";
        break;
      default:
        echo "Invalid day number";
    }