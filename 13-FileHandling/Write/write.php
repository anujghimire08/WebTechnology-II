<?php 

 $path = "zytz.txt";
 $content ="Spring Boot is an open-source Java framework built on top of the traditional Spring Framework. It removes the need for heavy XML configurations and complex setup. It uses preset defaults so you can run applications with minimum effort.";
 $file = fopen($path, "w");
//  fwrite($file, $content);
// OR
file_put_contents($path, $content);


fclose($file);
 