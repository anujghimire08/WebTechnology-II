<?php
session_start();

$_SESSION['user'] = "Anuj";

if(!isset($_SESSION["csrf"])){
$_SESSION['csrf'] = bin2hex(random_bytes(32));
}


 $sessioncsrf = $_SESSION["csrf"] ?? "";
 $postcsrf = $_POST["csrf"] ?? "";

 var_Dump(hash_equals($sessioncsrf,$postcsrf));

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(!isset($_POST["csrf"]) ||!hash_equals($sessioncsrf,$postcsrf)){
      die("CSRF blocked");
    }else{
      $amount = htmlspecialchars($_POST['amount']);
      $to = htmlspecialchars($_POST['to']);
      echo "Transferred Rs.$amount to $to";
      $_SESSION["csrf"] = bin2hex(random_bytes(32));
      exit;
    }
}
?>

  <form method="POST">
    <input type="hidden" name="csrf" value="<?= $_SESSION["csrf"] ?>">
    Amount: <input type="text" name="amount"><br>
    To: <input type="text" name="to"><br>
    <button>Transfer</button>
  </form> 
