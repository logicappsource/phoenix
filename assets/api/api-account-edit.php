<?php 

session_start();

$sFile = file_get_contents('../data/user-account.json');
$ajUsers = json_decode($sFile);

$userPassword = $_GET['userPassword']; 
$userPasswordNew = $_GET['userPasswordNew'];
$userName = $_GET['userName'];

$deleteAccount = $_GET['deleteAccount'];





foreach($ajUsers as $jUser) {
    //Error userId

    if($_SESSION['userId'] == $jUser->userId){

       

            if(isset($_GET['deleteAccount'])) {
                unset($ajUsers[$jUser]);

            }
           
            if(isset($_GET['userName'])) {
                    $jUser->userName  = $userName;
            }

           if(isset($_GET['userPasswordNew']) && isset($_GET['userPassword'])) {
                $jUser->userPassword = $userPasswordNew;
           }

          
            //var_dump  ($jUser);
    }
}

$sFinalData = json_encode($ajUsers, JSON_PRETTY_PRINT);
file_put_contents("../data/user-account.json", $sFinalData);


?> 