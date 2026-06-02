<?php

    // print_r($_POST);

    if($_SERVER["REQUEST_METHOD"]==="POST" && isset($_POST["submitbtn"])){

      $name = $_POST["user_name"] ?? "";
      if(!empty($name)){
       echo "UserName: " . $name;
       echo "<br/>";
      }else{ 
       echo "UserName: not mentioned!" ;
       echo "<br/>";
      }
        
      $mail = $_POST["user_mail"] ?? "";
      if(!empty($mail)){
       echo "UserMail: " . $mail;
       echo "<br/>";
      }else{
       echo "UserMail: not mentioned!";
       echo "<br/>";
      }

      $techs = $_POST["techstack"] ?? [];
      if(!empty($techs) && is_array($techs)){
        echo  $name . "'s Tech Stack: " . implode(", ", $techs);
        echo "<br/>";
      }else{
        echo  $name . "'s Tech Stack:  not mentioned!";
        echo "<br/>";
      }

      $gender = $_POST["user_gender"] ?? "";
      if(!empty($gender)){
       echo "User Gender: " . $gender;
       echo "<br/>";
      }else{
       echo "User Gender: not mentioned!";
       echo "<br/>";
      }

      $country = $_POST["country"] ?? "";
      if(!empty($country)){
       echo "User Nation: " . $country;
       echo "<br/>";
      }else{
       echo "User Nation: not mentioned!";
       echo "<br/>";
      }

      $user_message = $_POST["description"] ?? "";
      if(!empty($user_message)){
       echo "User Message:  " .$user_message;
       echo "<br/>";
      }else{
       echo "User Message: not mentioned!";
       echo "<br/>";
      }
      
      
    }   

?>