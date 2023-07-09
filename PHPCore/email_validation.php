<?php
$email = 'tasibur_rahmangmail.com';
if(filter_var($email, FILTER_VALIDATE_EMAIL))
{
    echo $email." This Email is Valid ";
}else{
    echo "Email is not Valid :".$email;
}


?>