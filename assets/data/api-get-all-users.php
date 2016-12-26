<?php

session_start();

echo $_SESSION['userEmail'];

$sFile = file_get_contents("user-account.json");

$aJUsers = json_decode($sFile);


foreach ($aJUsers as $jUser) {

	if ($_SESSION['userEmail'] ==  $jUser->userEmail) {
	 echo $jUser->userName;
		
	}

}


?>