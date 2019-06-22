<?php
// Different types of Arrays
// Indexed arrays
$data = array("Geoff", "Phillip", "Gregory", "Peter");
// echo $data[0];
// Associative Arrays
$assoc = array(
    "id" => 1,
    "firstName" => "Stephen",
    "lastName" => "Smith",
    "dob" => "1/8/1994"
);
echo $assoc["dob"] . "<br>";
// get array keys
$assocKeys = array_keys($assoc);
echo $assocKeys[1] . "<br>";
// Multidimensional Arrays
$multiDimensional = array(
    array("Newham", "Crewe", "Northampton"),
    "Cambridge",
    "Norwich"
);
// print_r($multiDimensional);
echo $multiDimensional[0][1];
