<?php 
$sFile = file_get_contents("../data/user-account.json");
$ajUsers = json_decode($sFile);


$regUserName =  $_GET['userNameReg'];
$regPassword = $_GET['userPasswordReg'];
$userEmailrReg = $_GET['userEmailReg'];
$regFirstname = $_GET['firstNameReg'];
$regLastname = $_GET['lastNameReg'];


$jUser = new stdClass(); //new Class 
$jUser->userName = $regUserName;
$jUser->userPassword = $regPassword;
$jUser->userEmail = $userEmailrReg;
$jUser->userFirstName = $regFirstname;
$jUser->userLastName = $regLastname;
array_push($ajUsers, $jUser);


$sUser = json_encode($jUser);

$sFinalData = json_encode($ajUsers, JSON_PRETTY_PRINT); 
file_put_contents("../data/user-account.json", $sFinalData);

echo $sUser;


?> 