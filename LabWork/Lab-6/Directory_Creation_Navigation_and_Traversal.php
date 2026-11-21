<?php
echo "Current Directory: " . getcwd() . "<br>";
$folder = "myfolder";
if (!is_dir($folder)) {
    mkdir($folder);
    echo "Directory created.<br>";
}
chdir($folder);
echo "Changed Directory: " . getcwd() . "<br>";
file_put_contents("sample.txt", "Hello PHP");
echo is_dir(".") ? "Directory exists.<br>" : "Directory not found.<br>";
echo is_file("sample.txt") ? "File exists.<br>" : "File not found.<br>";
echo "<h3>Using opendir()</h3>";
$dir = opendir(".");
while (($item = readdir($dir)) !== false) echo $item . "<br>";
closedir($dir);

echo "<h3>Using scandir()</h3>";
$files = scandir(".");
foreach ($files as $item) echo $item . "<br>";
chdir("..");
unlink($folder . "/sample.txt");
rmdir($folder);
echo "Directory removed successfully.";