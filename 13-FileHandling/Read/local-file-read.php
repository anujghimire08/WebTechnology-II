<?php

  $path = "abc.json";
  $file = fopen($path,"r") or die("unable to read file");
  print_r(fread($file,filesize($path)));
  // print_r(json_decode(file_get_contents($path)));
  // o/p = stdClass Object ( [name] => Anuj [age] => 30 [country] => Nepal )
  $data = json_decode(file_get_contents($path));
  // var_dump($data); object
  // echo $data->name;
  // echo $data->age;
  // echo $data->country;
  //  print_r($data);
  // foreach($data as $key => $val) echo $key . " is ".  $val . "\n";
  // $data = json_decode(file_get_contents($path),true);
  // var_dump($data); 
  // echo $data["name"];
  fclose($file);
?>