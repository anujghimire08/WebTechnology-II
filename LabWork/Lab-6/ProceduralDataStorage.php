<?php

$array = [
  ["courseID" => 1, "Title" => "PHP", "courseHrs" => 24],
  ["courseID" => 2, "Title" => "Java", "courseHrs" => 14],
  ["courseID" => 3, "Title" => "DSA", "courseHrs" => 44]
];

function saveCourseToFile(string $path, array $data): bool
{
  $encodeData = json_encode($data, JSON_PRETTY_PRINT);
  return file_put_contents($path, $encodeData) !== false;
}

function loadCourseFromFile(string $path): array
{
  $encodeData = json_decode(file_get_contents($path), true);
  if (is_array($encodeData)) {
    return $encodeData;
  }
  return [];
}

$path = "courses_procedural.txt";
$isSaved = saveCourseToFile($path, $array);
$fetchData = loadCourseFromFile($path);

?>

<div>
  <h1>Fetched Data</h1>

  <?php
  if (!$fetchData) {
    echo "<h1>No data found</h1>";
  } else {
    foreach ($fetchData as $course) {
      echo "Course ID: {$course["courseID"]}<br>";
      echo "Course Title: {$course["Title"]}<br>";
      echo "Course Credit Hours: {$course["courseHrs"]}<br>";
    }
  }

  ?>
  <?= $isSaved ? "<strong style='color:green' > Data Saved Successfull</strong>" : "<strong style='color:red'> Data Saved Unsuccessfull</strong>" ?>
</div>