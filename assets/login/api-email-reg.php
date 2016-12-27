<?php

$sFile = file_get_contents('../data/user-account.json'); 
$aJuser = json_decode($sFile);


//Data frontend 
$sUsername = $_GET['userNameReg'];
$sUserEmail = $_GET['userEmailReg'];

//$aJuser = new stdClass(); //new Class 
//Data backend 
 $aJuser->userName = $sUsernameB; 
 $aJuser->userEmail = $sUserEmailB; 


//isset($_GET['userNameReg'] == $aJuser->userName && isset(['userEmailReg']) == $aJuser->userEmail

if(isset($_GET['userEmailReg']) && ($_GET['userEmailReg']) == $sUserEmailB ){

        $toEmail = $sUserEmailB;
        $subject = 'Signed up $sUserName ';
        $sHtmlPage = file_get_contents( "" );  
        $headers = "Content-Type: text/html; charset=UTF-8\r\n";
        
        mail($toEmail, $subject, $sHtmlPage, $headers);
            echo "Email: {$emailForgotten}"; 

}




  
  

?> 