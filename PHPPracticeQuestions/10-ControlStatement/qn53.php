<?php


    /* switch with Default -> Create a menu system using switch: Option 1 (Add), Option 2 (Edit),Option 3 (Delete), Default (Invalid Option).*/

    $option = 2;

    switch ($option) {
      case 1:
      echo "Add";
      break;

      case 2:
      echo "Edit";
      break;

      case 3:
      echo "Delete";
      break;

      default:
      echo "Invalid Option";
}