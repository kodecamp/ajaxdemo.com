<?php

$name = $_POST['name'];
$address = $_POST['address'];

$fileDetailsArr = $_FILES['filename'];

$fileName = $fileDetailsArr['name'];
$fileSize = $fileDetailsArr['size'];
$fileTmpPath = $fileDetailsArr['tmp_name'];

$targetDir = "uploads/";
$targetFilePath = $targetDir.$fileName;

$uploadStatus = move_uploaded_file($fileTmpPath, $targetFilePath);

echo ($uploadStatus === 1?"Uploaded Successfully":"Upload Failed");

