<?php

if (isset($_POST['submit'])) {
    $file = $_FILES['file'];

    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    // Breaks up string into array seperated by .
    $fileExt = explode('.', $fileName);
    // Converts last item of array to lowercase
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png', 'pdf');

    if (in_array($fileActualExt, $allowed)) {
        // Checks no errors occured
        if ($fileError === 0) {
            // Sets file limit
            if ($fileSize < 500000) {
                // Renames image and give it a unique id
                $fileNameNew = uniqid('', true) . "." . $fileActualExt;
                // Sets destination of files to be uploaded
                $fileDestination = '../uploads/' . $fileNameNew;
                // Moves temp file into file destination
                move_uploaded_file($fileTmpName, $fileDestination);
                // Returns to previous page
                header("Location: ../uploadfile.php?uploadsuccess");
            } else {
                echo "Max file size exceeded. 500MB limit";
            }
        } else {
            echo "An error occured uploading your file";
        }
    } else {
        echo "You cannot upload files of this type";
    }
}
