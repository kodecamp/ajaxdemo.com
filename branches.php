<?php
$branchCode = $_POST["branchCode"];
// $branchCode = "100";
$students = require "./branches-data.php";
$filteredStudents = ($branchCode != null || $branchCode != "") ? $students[$branchCode] : array();
echo json_encode($filteredStudents);
?>