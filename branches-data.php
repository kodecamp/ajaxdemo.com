<?php
// defining constants
define("CS", 100);
define("ME", 200);
define("EE", 300);

function createStudent($name, $branch) {
	$stu = new stdClass();
	$stu->name = $name;
	$stu->branch = $branch;
	return $stu;
}

$studentsOfCs = array(
	createStudent("Chetan", CS),
	createStudent("Chirag", CS),
	createStudent("Chaya", CS));
$studentsOfMe = array(
	createStudent("Mahesh", ME),
	createStudent("Munna", ME),
	createStudent("Manish", ME));

$studentsOfEe = array(
	createStudent("Eshan", EE),
	createStudent("Eshita", EE),
	createStudent("Eklavya", EE));
$students = array(CS => $studentsOfCs, ME => $studentsOfMe, EE => $studentsOfEe);

return $students;
?>