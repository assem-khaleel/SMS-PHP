<?php

$con = new mysqli('localhost', 'root', 'root', 'sms');

if($con->connect_error){
    die($con->connect_error);
}

//else{
//    echo "connected";
//}



// TWilio test credentials
return $config = [
    'account_sid'=> '',
    'auth_token'=> '',
    'twilio_number'=> ''
];