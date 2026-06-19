<?php

 /* Building HTML -> Use string concatenation to build an HTML table row with columns:Name, Age, City.*/


/* Building HTML -> Create a table row using concatenation */

$name = "Anuj";
$age = 50;
$city = "Kathmandu";
 
 $table =  "<table rules='all' frame='box' cellpadding='20'> 
              <tr>
                <td>{$name}</td>
                <td>{$age}</td>
                <td>{$city}</td>
              </tr>
            </table>";

echo $table;





