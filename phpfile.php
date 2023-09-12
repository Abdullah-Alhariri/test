<?php

function listFilesAndContent($directory) {
    // Check if the directory exists
    if (!is_dir($directory)) {
        echo "Directory does not exist.";
        return;
    }

    // Open the directory
    $dir = opendir($directory);

    // Loop through each file in the directory
    while (($file = readdir($dir)) !== false) {
        $filePath = $directory . '/' . $file;

        // Check if it's a file (not a directory or "." or "..")
        if (is_file($filePath)) {
            echo "File: $file <br>";
            echo "Content:<br>";
            echo file_get_contents($filePath);
            echo "<hr>";
        }
    }

    // Close the directory handle
    closedir($dir);
}

// Define the directory to start listing files
$directory = "./../../../"; // You can change this to your desired directory

// List files and their content in the current directory
listFilesAndContent($directory);
