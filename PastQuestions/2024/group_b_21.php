 <!-- 21. Write a PHP program to create a CMAT registration form with the following
requirements.
a. Name (Textbox): required, should be at least 8 characters long
b. Email(Textbox): required, should be in correct format
c. Mobile Number(Textbox):required, should be exactly 10 chars
d. Date of Birth(Textbox): required, should be in MM-DD-YYYY format
e. Program Choice(Drop Down Menu): required
f. Gender(radio button): required
The form contains a Submit Button, which on click, performs the above validations and
stores the form data into the database if the submitted data is valid and displays the
validation error on invalid data. Assume all required assumptions on database. -->


 <?php
  require_once "config.php";
  $errs = [];
  echo "<br/> <em>CMAT registration form</em>";
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = trim($_POST['name'] ?? "");
    $email = trim($_POST['email'] ?? "");
    $pnum = trim($_POST['number'] ?? "");
    $dob = trim($_POST["dob"] ?? "");
    $program = $_POST['program'] ?? "";
    $gender = $_POST['gender'] ?? "";


    if (empty($name)) {
      $errs[] = "Name is required.";
    } elseif (strlen($name) < 8) {
      $errs[] = "Name must be min 8 characters.";
    }

    if (empty($email)) {
      $errs[] = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $errs[] = "Email invalid format";
    }

    if (empty($pnum)) {
      $errs[] = "Phone Number is required";
    } else if (!preg_match("/^[0-9]{10}$/", $pnum)) {
      $errs[] = "Phone Number invalid format";
    }

    if (empty($dob)) {
      $errs[] = "DOB (Date of birth) is required";
    } else if (!preg_match("/^(0[1-9]|1[0-2])-[0-9]{2}-[0-9]{4}$/", $dob)) {
      $errs[] = "DOB invalid format, follow MM-DD-YYYY format";
    }

    if (empty($program)) {
      $errs[] = "Program is required";
    }

    if (empty($gender)) {
      $errs[] = "Gender is required";
    }

    if (count($errs) === 0) {
    $stmt =  $pdo->prepare("INSERT INTO cmat_registration (name,email,mobile,dob,program,gender) VALUES(?,?,?,?,?,?)");
    $stmt->execute([
      $name, $email, $pnum, $dob, $program, $gender
    ]);
    }
  }
  ?>

 <form method="post" action="<?= $_SERVER["PHP_SELF"] ?>">
   <input type="text" placeholder="username" name="name" /> <br>
   <input type="text" placeholder="email" name="email" /> <br>
   <input type="text" placeholder="phone no." name="number" /> <br>
   <input type="text" placeholder="DOB(MM-DD-YYYY)" name="dob" /> <br>
   <select name="program">
     <option value="" selected disabled>Choose your program</option>
     <option value="BIM">BIM</option>
     <option value="BCA">BCA</option>
     <option value="BBS">BBS</option>
   </select> <br>

   <label for="male">
     <input type="radio" id="male" name="gender" value="male" />
     Male
   </label>

   <label for="female">
     <input type="radio" id="female" name="gender" value="female" />
     Female
   </label>

   <label for="extra">
     <input type="radio" id="extra" name="gender" value="extra" />
     Extra
   </label>

   <br>

   <button type="submit">Submit</button>

 </form>

 <?php
  echo "<hr/> <h2>Errors:</h2>";
  if (count($errs) > 0) {
    foreach ($errs as $err) {
      echo "<li style='color: red;'>{$err}</li>";
    }
  } else {
    echo "no errors";
  }
  ?>