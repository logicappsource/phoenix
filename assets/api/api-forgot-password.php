<?php 
//1. Implement the password $_GET and sent to user
//2. Add template as code email.php

$sFile = file_get_contents('../data/user-account.json');
$aJUser  = json_decode($sFile);




    if(isset($_GET['emailForgot'])) {

        $emailForgot = $_GET['emailForgot'];

        foreach($aJUser as $jUser) {

             if($emailForgot == $jUser->userEmail){

        $toEmail = $emailForgot;
        $subject = 'Forgotten password ';
        $sHtmlPage = file_get_contents( "./data/email-temp.htm" );  

        $headers = "Content-Type: text/html; charset=UTF-8\r\n";
        
        mail($toEmail, $subject, $sHtmlPage, $headers);
            echo "Email: {$emailForgot}"; 
    }

            

        }





      


  

  
}



 ?> 


<?php 
/*<?php 
//1. Implement the password $_GET and sent to user
//2. Add template as code email.php

$sFile = file_get_contents('../data/user-account.json');
$aJUser  = json_decode($sFile);



    if(isset($_GET['emailForgot'])) {
        $emailForgotten = $_GET['emailForgot'];
        if ($emailForgotten == $aJUser->userEmail){

        $toEmail = $emailForgotten;
        $subject = 'Forgotten password ';
        $sHtmlPage = file_get_contents( "" );  

        $headers = "Content-Type: text/html; charset=UTF-8\r\n";
        
        mail($toEmail, $subject, $sHtmlPage, $headers);
            echo "Email: {$emailForgotten}"; 

        }

       
    }


 ?> */

?> 