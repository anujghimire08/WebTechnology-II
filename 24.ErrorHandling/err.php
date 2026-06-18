<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Error Reporting and Debugging</title>
</head>
<body>
    <?php
        error_reporting(E_ALL);
        // ini_set("display_errors",1);
        ini_set("display_errors",0);
        function errHandler($errno,$errstr,$errfile,$errline) : bool  {
          $errmsg =  "Error: [$errno] $errstr - $errfile , at line: $errline";
          error_log($errmsg . PHP_EOL,3,"err.txt");
          return true;
        }

        set_error_handler("errHandler");
        echo $notdefined;
    
    ?>
</body>
</html>