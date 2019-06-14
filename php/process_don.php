<html>
<body>
<style>
 body {
   text-family:verdana;
  text-size:22px;
 }
a {
   font-family:verdana;
  font-size: 20px;
  color: black;
}
 </style>

<?php
 
require 'connection.php';
session_start();

$conn    = Connect();
$name    = mysqli_real_escape_string($conn,$_POST['name']);
$donid   = mysqli_real_escape_string($conn,$_POST['donid']);
$gsm	 = mysqli_real_escape_string($conn,$_POST['gsm']);
$sex     = mysqli_real_escape_string($conn,$_POST['sex']);
$dob     = mysqli_real_escape_string($conn,$_POST['dob']);
$address = mysqli_real_escape_string($conn,$_POST['address']);
$bgroup  = mysqli_real_escape_string($conn,$_POST['bgroup']);
$rh  = mysqli_real_escape_string($conn, $_POST['rh']);
$db      = "donreg";
$query   = "INSERT into donreg (name,donid,gsm,sex,dob,address,bgroup,rh) VALUES('" . $name . "','" . $donid . "','" . $gsm . "','" . $sex . "','" . $dob . "','" . $address . "','".$bgroup."','".$rh."')";
$success = mysqli_query($conn, $query);
 
if (!$success) {
    die("Couldn't enter data: ".$conn->error);
 
}
 
echo "Thank You For Registering! We will be contacting you shortly <br>";
echo "<a href='index.html'>Return to main page</a>"; 
header('Refresh: 5; URL=index.html');

die();
?>

</body>
</html>
