<!DOCTYPE html>
<html>
    <head>
        <title>File Upload</title>
    </head>
    <body>
        <form action='upload.php' method='post' enctype='multipart/form-data'>
            <input type='file' name='fileToUpload' id='fileToUpload'>
            <input type='submit' value='Upload File' name='submit'>
        </form>
        <?php
        if (isset($_POST['submit'])){
            $targetDirectory ='uploads/';
            $targetFile = $targetDirectory . basename($_FILES['fileToUpload']['name']);
            $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

            $allowedExtensions = array('jpg', 'jpeg', 'png', 'gif');

            $maxFileSize = 5 * 1024 * 1024;

            if (in_array($fileType, $allowedExtensions) && $_FILES['filesToUpload']['size'] <= $maxFileSize) {
            if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $targetFile)){
                echo 'File berhasil diunggah.';
            } else {
                echo 'Gagal mengunggah file.';
            } 
        } else {
            echo "File tidak valid atau melebihi ukuran maksimum yang diberikan.";
        }
    }
        ?>
    </body>
</html>