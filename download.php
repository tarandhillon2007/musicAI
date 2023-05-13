<?php
// Retrieve the requested file name from the query string
$fileName = $_GET['file'];

// Validate and sanitize the file name
$fileName = basename($fileName);
$filePath = 'downloads/' . $fileName;

// Check if the file exists
if (file_exists($filePath)) {
    // Set appropriate headers for the file download
    header("Cache-Control: public");
    header("Content-Description: File Transfer");
    header("Content-Disposition: attachment; filename=$fileName");
    header("Content-Type: application/zip");
    header("Content-Transfer-Encoding: binary");

    // Read the file and output it to the browser for download
    readfile($filePath);
    exit;
} else {
    // File not found
    die("File not found.");
}
?>
