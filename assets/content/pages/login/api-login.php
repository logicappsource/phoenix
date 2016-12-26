<?php
/*
session_start();

$sFile = file_get_contents('user-account.json');
echo $sFile;
$aJUsers = json_decode($sFile);


		if(isset($_GET['userName'])){
			$requestedUsername = $_GET['userName'];
		}

		if(isset($_GET['userPassword'])){
		$requestedPassword = $_GET['userPassword'];
		}


foreach($aJUsers as $jUser) {


	if($requestedUsername == $jUser->userName && $requestedPassword ==  $jUser->userPassword){

		$_SESSION['userName'] = $jUser->userName; 
		$_SESSION['userPassword'] = $jUser->userPassword; 

		$loggedUser = json_encode($jUser);

		echo $loggedUser;
	}
}







*/









 /*

session_start();
        //../data/user-account.json
		$sFile = file_get_contents("user-account.json");

        echo $sFile;
		//echo $sFile;

		$aJUsers = json_decode($sFile);

		//var_dump($aJUsers);

			if (isset($_GET['userName'])) {
			  $requestedUsername = $_GET['userName'];
			}

			if (isset($_GET['userPassword'])) {
			  $requestedPassword = $_GET['userPassword'];
			}


			foreach ($aJUsers as $jUser) {

			  if ($requestedUsername == $jUser->userName && $requestedPassword == $jUser->userPassword) {

			    $_SESSION['userName'] = $jUser->userName;
			    $_SESSION['userIcon'] = $jUser->userIcon;


			    /* SESSION EXPIRE -> index.php
			    //Session start taking Time
			     $_SESSION['start'] = time();
			     // Ending a session in 30 minutes from the starting time.
           		 $_SESSION['expire'] = $_SESSION['start'] + (1 * 1); //30*60
				

			    $loggedUser = json_encode($jUser);

			    echo $loggedUser;

			  }

			}
	*/

?>