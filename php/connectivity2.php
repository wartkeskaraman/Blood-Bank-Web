<?php
 require 'connection.php';
 $conn	= Connect();
 $uname = mysqli_real_escape_string($conn,$_POST['uname']);
 $psw	= mysqli_real_escape_string($conn,$_POST['psw']);
 $db 	= "admin";
 $sql 	= "SELECT * FROM admin where uname='" . $uname . "' and psw='" . $psw . "' ";
 $result= mysqli_query($conn,$sql);
 $num 	= mysqli_num_rows($result);
 if ($num > 0) {
	 echo "Successful LOGIN! Welcome " . $uname . " ";
	 header('Location: index.html');
 }
 else {
	 echo "Wrong username/password";
 }
 $conn->close();
 
?>