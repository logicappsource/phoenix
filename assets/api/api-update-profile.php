<?php

session_start();
$sFile = file_get_contents('../data/user-account.json');
$ajUsers = json_decode($sFile);





//Implement if isset -> 
$userFirstName = $_GET['userFirstName'];
$userLastName = $_GET['userLastName'];
$playerType = $_GET['playerType'];
$avail = $_GET['avail'];
$userProfileTxt = $_GET['userProfileTxt']; 


 $userIdFront = $_SESSION['userid'];


foreach($ajUsers as $jUser) {

   // $iUserIdBackend = $jUser->userId;  b4

    if($userIdFront == $jUser->userId) {

        $jUser->userFirstName = $userFirstName;
        $jUser->userLastName = $userLastName;
        $jUser->playerType = $playerType;
        $jUser->avail = $avail;
        $jUser->userProfileTxt = $userProfileTxt;

        //$sUser = json_encode($jUser); b4

    }

}


$sFinalData = json_encode($ajUsers, JSON_PRETTY_PRINT);
 file_put_contents("../data/user-account.json", $sFinalData);


?> 