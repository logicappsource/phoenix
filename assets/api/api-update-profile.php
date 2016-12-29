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
$userIdFront = $_GET['userId'];

  //$_SESSION['userId'] = $userIdFront; 


foreach($ajUsers as $jUser) {

    $iUserIdBackend = $jUser->userId; 

    if($userIdFront == $iUserIdBackend) {

        $jUser->userFirstName = $userFirstName;

        $sUser = json_encode($jUser);

    }

}


$sFinalData = json_encode($ajUsers, JSON_PRETTY_PRINT);
$save = file_put_contents("../data/user-account.json", $sFinalData);



//$sFinalData = json_encode($ajUsers, JSON_PRETTY_PRINT )







?> 