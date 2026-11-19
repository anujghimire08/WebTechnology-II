<?php
$file = "data.txt";
file_put_contents($file, "Welcome to PHP File Handling.\n");
file_put_contents($file, "This is appended text.\n", FILE_APPEND);
echo "<h3>Using file()</h3>";
$lines = file($file);
foreach ($lines as $line) {
    echo htmlspecialchars($line) . "<br>";
}
echo "<h3>Using readfile()</h3>";
readfile($file);

echo "<h3>Using Stream Methods</h3>";
$fp = fopen($file, "w");
fwrite($fp, "Stream-based file handling.\n");
fwrite($fp, "Writing and reading files.");
fclose($fp);
$fp = fopen($file, "r");
while (!feof($fp)) {
    echo htmlspecialchars(fgets($fp)) . "<br>";
}
fclose($fp);