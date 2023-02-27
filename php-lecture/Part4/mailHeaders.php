<?php
$to = 'ibrahimsoliman269@gmail.com';
$subject = 'Test Email';
$message =  'Welccome to  PHP';
$headers = 'From:non-reply@yourwebsite.com';
if(mail($to,$subject,$message,$headers)){
    echo "Mail sent Succcessfully"; 
} 
else {
    echo "Mail not sent";
}
?>