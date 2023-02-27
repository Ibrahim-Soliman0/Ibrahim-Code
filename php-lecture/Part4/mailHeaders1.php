<?php
$to = 'ibrahimsoliman269@gmail.com';
$subject = 'Test Email';
$message =  'Welccome to  PHP';
$headers = "<table border ='1' width='50'>
            <th>x</th><th>y</th>
            <tr><td>11</td><td>20</td></tr>
            </table>";
$headers = "Content-type:text/html;charset=UTF-8"."\r\n";
$headers = 'From:non-reply@yourwebsite.com';
if(mail($to,$subject,$message,$headers)){
    echo "Mail sent Succcessfully"; 
} 
else {
    echo "Mail not sent";
}
