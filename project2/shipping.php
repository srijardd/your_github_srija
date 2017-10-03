<?php

// define variables and set to empty values
$nameErr = $add1Err = $add2Err = $cityErr = $stateErr =$zipErr = $phoneErr= "";
$name = $add1 = $add2 = $city = $state =$zip = $phone = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["name"])) {
     $nameErr = "Name is required";
   } else {
     $name = test_input($_POST["name"]);
   }

   if (empty($_POST["add1"])) {
     $add1Err = "Address1 is required";
   } else {
     $add1 = test_input($_POST["Address1"]);
   }
     
   if (empty($_POST["add2"])) {
     $add2Err = "";
   } else {
     $add2 = test_input($_POST["Address2"]);
   }

   if (empty($_POST["city"])) {
     $cityErr = "City is required";
   } else {
     $city = test_input($_POST["city"]);
   }

   if (empty($_POST["state"])) {
     $stateErrErr = "State is required";
   } else {
     $stste = test_input($_POST["state"]);
   }
if (empty($_POST["zip"])) {
     $zipErrErrErr = "Zip is required";
   } else {
     $zip = test_input($_POST["zip"]);
   }
   if (empty($_POST["phone"])) {
     $phoneErrErrErr = "Phone number is required";
   } else {
     $phone = test_input($_POST["phone"]);
}}
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}


?>
