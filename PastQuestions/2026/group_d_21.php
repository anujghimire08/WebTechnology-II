<?php

$errs = [];

$book = "";
$title = "";
$author = "";
$publisher = "";
$year = "";
$feedback = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $book = trim($_POST["book"]);
    $title = trim($_POST["title"]);
    $author = $_POST["author"];
    $publisher = $_POST["publisher"];
    $year = trim($_POST["year"]);
    $feedback = trim($_POST["feedback"]);

    if ($book == "") {
        $errs[] = "Book Name is required.";
    } elseif (strlen($book) < 3) {
        $errs[] = "Book Name must be at least 3 characters long.";
    }

    if ($title == "") {
        $errs[] = "Title is required.";
    }

    if ($author == "") {
        $errs[] = "Author is required.";
    }

    if ($publisher == "") {
        $errs[] = "Publisher is required.";
    }

    if ($year == "") {
        $errs[] = "Year of Publication is required.";
    } elseif (!is_numeric($year)) {
        $errs[] = "Year of Publication must be a number.";
    }

    if (count($errs) > 0) {
        echo "<h3>Validation Errors:</h3>";
        foreach ($errs as $err) {
            echo $err . "<br>";
        }
    } else {
        echo "<h3>Form Data:</h3>";
        echo "Book Name: $book <br>";
        echo "Title: $title <br>";
        echo "Author: $author <br>";
        echo "Publisher: $publisher <br>";
        echo "Year of Publication: $year <br>";
        echo "Feedback: $feedback <br>";
    }
}
?>

<form method="POST">

    <input type="text" name="book" placeholder="Book Name">
    <br><br>
    <input type="text" name="title" placeholder="Title">
    <br><br>
    <select name="author">
        <option value="">Select Author</option>
        <option value="jkl">jkl</option>
        <option value="stuf">stuf</option>
    </select>
    <br><br>
    <select name="publisher">
        <option value="">Select Publisher</option>
        <option value="xyz">xyz</option>
        <option value="abc">abc</option>
    </select>
    <br><br>
    <input type="number" name="year" placeholder="Year of Publication">
    <br><br>
    <textarea name="feedback" placeholder="Feedback (Optional)"></textarea>
    <br><br>
    <button type="submit">Submit</button>
</form>