<?php
// List files and directories
$directory = '.';
$files = scandir($directory);

echo "<h1>Directory listing for $directory</h1>";
echo "<ul>";

foreach ($files as $file) {
    if ($file === '.' || $file === '..') continue;
    echo "<li><a href='$file'>$file</a></li>";
}

echo "</ul>";
