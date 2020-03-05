<?php
if(isset($_POST['submit'])){
    $file = $_FILES['file'];
    
    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileError = $file['error'];
    $fileType = $file['type'];
    
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    $allowed = array('jpg', 'jpeg', 'png', 'pdf');
    if(in_array($fileActualExt, $allowed)){
        if($fileError === 0 ){
            if($fileSize < 500000){
                $fileNameNew = uniqid('', true).".".$fileActualExt;
                $filedestination = 'uploads/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $filedestination);
                header("Location: register.php?upload=success");
            }else{
                echo "file size big";
            }
        }else{
            echo "Error uploading file";
        }
    }else{
        echo "Unsupported file format";
    }
}