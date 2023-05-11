<?php
// check if a file was uploaded
$postData = json_decode(file_get_contents("php://input"), true);
 
$file = $postData['file'];
$fileName = $postData['file_name'];

  echo $postData;

  // get file data
  $fileTmpName = $file;

  // move uploaded file to desired directory
  $uploadPath = 'uploads/' . $fileName;
  if (move_uploaded_file($fileTmpName, $uploadPath)) {
    echo 'File uploaded successfully';
  } else {
    echo 'Error uploading file';
  }
?>