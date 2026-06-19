<?php
 
 /*Password Validator -> Check if a password length is greater than or equal to 8 characters.Test with "secure123". */

 $pass = "secure123";
echo (strlen($pass) >=8)? "Password Validated" : "Password not Validated";