<head>
  <link rel="stylesheet" href="style.css">
  <title>User Profile Management System</title>
</head>
<body>
<?php 
session_start();
    $isLoggin = false;

if(isset($_SESSION['id'])){

    $userid = $_SESSION['id'];
    $usermail = $_SESSION['email'];
    $username = $_SESSION['username'];

    include_once("config.ini.php");

    $stmt = $connection->prepare("SELECT path, username FROM dp WHERE userid = ?");
    $stmt->execute([$userid]);
    $data = $stmt->fetch(PDO::FETCH_ASSOC);

    $path = $data['path'] ?? "uploads/defaultprofile.jpg";
    $name = $username ?? "User";
    echo $name;

    $parts = explode("@", $usermail);

    echo "logged in as " . substr($parts[0],0,1) . str_repeat('*',strlen($parts[0])-1) . "@" . $parts[1];

    echo "
    <div class='profile-card'>
        <img src='$path'>
        <h2>$name</h2>
    </div>
    ";


    echo "
    <h1>Upload Section</h1>
    <form action='upload.php' method='post' enctype='multipart/form-data'>
        <input type='file' name='userimg'>
        <button type='submit'>Upload</button>
    </form>
    ";

    echo "<button onclick=\"location.href='logout.php'\">Logout</button>";
    $isLoggin = true;

} else {
?>

<h1>Login Section</h1>
<form action="login.php" method="post">
    <input type="email" name="email" placeholder="email">
    <input type="password" name="password" placeholder="passcode">
    <button type="submit" name="login">Login</button>
</form>

<?php } ?>

 <?php 
  if(!$isLoggin){?>
  <h1>Register Section</h1>
<form action="register.php" method="post">
    <input type="text" name="fname" placeholder="firstname">
    <input type="text" name="lname" placeholder="lastname">
    <input type="text" name="username" placeholder="username">
    <input type="email" name="email" placeholder="email">
    <input type="password" name="password" placeholder="passcode">
    <button type="submit" name="register">Register</button>
</form>
    
  <?php } ?>

</body>