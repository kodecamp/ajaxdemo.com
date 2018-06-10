<?php
$person1 = new stdClass();
$person1->name = "Dinesh";
$person1->address = "Delhi";

$person2 = new stdClass();
$person2->name = "Suresh";
$person2->address = "Sultanpur";

// hello
$person3 = new stdClass();
$person3->name = "Mahesh";
$person3->address = "Manipur";

$person4 = new stdClass();
$person4->name = "Sushil";
$person4->address = "Lucknow";

$people = array();
array_push($people, $person1);
array_push($people, $person2);
array_push($people, $person3);
array_push($people, $person4);

$dataObj = array("people" => $people);

echo json_encode($dataObj);
