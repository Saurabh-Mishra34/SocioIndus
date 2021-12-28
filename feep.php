<link rel="stylesheet" href='cent.css'>
<?php
$mail=$_REQUEST['email'];
if(mail($mail,'fee payment','fee payment successfull'))
{
    echo "<img src='payment-successful.png' class='center'>";   
}
else{
    echo    "Could not send verification mail";
}
?>