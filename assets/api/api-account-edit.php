<?php 

session_start();

$sFile = file_get_contents('../data/user-account.json');
$ajUsers = json_decode($sFile);

$userPassword = $_GET['userPassword']; 
$userPasswordNew = $_GET['userPasswordNew'];
$userName = $_GET['userName'];


foreach($ajUsers as $jUser) {
    //Error userId
    if($_SESSION['userId'] == $jUser->userId){

            $jUser->userPassword = $userPasswordNew;
            $jUser->userName  = $userName;
    }
}

$sFinalData = json_encode($ajUsers, JSON_PRETTY_PRINT);
file_put_contents("../data/user-account.json", $sFinalData);


?> 