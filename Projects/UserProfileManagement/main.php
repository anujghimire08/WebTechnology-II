<?php require_once("config.php")?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UserProfileManagement</title>
</head>
<body>

<?php 

    $isLoggedin = flase;

    session_start();
    require_once("config.php");
    if(isset($_SESSION['id'])){

    $userid = $_SESSION['id'];
    $username = $_SESSION['username'];
    $useremail = $_SESSION['email'];


    $stmt = $connection->prepare("SELECT * FROM userimg WHERE email = ?");
    $stmt->execute([$useremail]);
    $data = $stmt->fetch(PDO::FETCH_ASSOC);

    if(!$data){


    }



    }else{
    echo "<h1>Login Section</h1>
    <form action='login.php' method='post'>
       <input type='text' name='username' placeholder='user name' />
       <input type='password' name='password' plaaceholder='password'/>
       <button type='submit' name='login' value='loggedin'>Login</button>
    </form>";
    }
?>

<h1>Upload Section</h1>
<form action="upload.php" method="post" enctype='multipart/form-data' >
  <input type="file" name="userprofile" />
  <button type='submit' name='picsubmit'>Upload Profile</button>
</form>
  

  <?php

  if(!$isLoggedin) {

  echo "<h1>Register Section</h1>
  <form action='register.php' method='post'>
    <input type='text' name='username' placeholder='user name'  />
    <input type='email' name='useremail' placeholder='user email'  />
    <input type='password' name='password' placeholder='password' />
    <button type='submit' name='register' value='registered'>Register</button>
  </form>";

  }

  ?>

  <button onclick="location.href='logout.php'">Logout</button>
</body>