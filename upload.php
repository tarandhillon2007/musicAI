<?php
// Check if a file was uploaded
if (isset($_FILES['file'])) {
    $file = $_FILES['file'];

    // File details
    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileError = $file['error'];

    // Additional info
    $songName = $_POST['song_name'];
    $realSinger = $_POST['real_singer'];
    $username = $_POST['username'];

    // Determine the destination directory
    $uploadDir = 'uploads/'; // Change this to your desired directory

    // Generate a unique filename to avoid overwriting existing files
    $uniqueFileName = uniqid() . '_' . $fileName;

    // Set the destination path
    $destination = $uploadDir . $uniqueFileName;

    // Check for any file upload errors
    if ($fileError === UPLOAD_ERR_OK) {
        // Move the uploaded file to the desired destination
        if (move_uploaded_file($fileTmpName, $destination)) {
            // Perform any additional actions with the uploaded file, e.g., store the info in a database
            // Here, we're just echoing the uploaded file's details
            echo 'File uploaded successfully.<br>';
            echo 'Song Name: ' . $songName . '<br>';
            echo 'Real Singer: ' . $realSinger . '<br>';
            echo 'Username: ' . $username . '<br>';
        } else {
            echo 'Failed to move the uploaded file.';
        }
    } else {
        echo 'Error uploading the file. Error code: ' . $fileError;
    }
}
?>
