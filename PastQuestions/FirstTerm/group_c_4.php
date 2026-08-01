<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    ['userCourse' => $course, 'userNumber' => $number] = $_POST;

    $course = trim($course);
    $number = trim($number);

    if ($course === '' || $number === '') {
        exit("<span style='color:red'>All fields are required.</span>");
    }

    if (!preg_match('/^(98|97)\d{8}$/', $number)) {
        exit("<span style='color:red'>Invalid Number</span>");
    }

    if (!preg_match('/^IT\d{3}$/', $course)) {
        exit("<span style='color:red'>Invalid Course ID</span>");
    }

    echo "<span style='color:green'>Valid Credentials</span>";
}

?>

<form method="post">
  <input type="text" name="userCourse" placeholder="course" />
  <input type="tel" name="userNumber" placeholder="phone number" />
  <button type="submit" name='submit'>Check Validation</button>
</form>