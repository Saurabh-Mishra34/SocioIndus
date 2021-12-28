<?php
$name=$_REQUEST['fname'];
$lname=$_REQUEST['lname'];
$mail=$_REQUEST['mail'];
$pass=$_REQUEST['pass'];
$roll=$_REQUEST['roll'];
require "welc.php";

$q="insert into register(fname,lname,mail,pass,roll) values('$name','$lname','$mail','$pass','$roll')";
$x=mysqli_query($c,$q);
echo "<h1>Registered Succesfull</h1>";

if(mail($mail,'Mail testing','This is my first mail from php code'))
{
    echo "Verification Mail sent";
}
else{
    echo    "Could not send verification mail";
}
sleep(5);

echo "<script>

   let rep = confirm('Confirm Registeration');
   if(rep)
   {
     header('Location: Login.html');
   }
   else
   {
     header('Location: Home.html');
   }


</script>";

?>