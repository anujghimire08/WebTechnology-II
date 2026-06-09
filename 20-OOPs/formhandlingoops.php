<?php 
 if(isset($_POST["username"])){

      class User{
        function displayName($name) : string { 
          return $name;
        }
      }
      $obj = new User();
      echo "Username: " . htmlspecialchars($obj->displayName($_POST["username"]));
 
 }
  

?>
<form action="" method="post">
  <input type="text" name="username" placeholder="username" />
  <input type="submit" value="Done" />
</form>