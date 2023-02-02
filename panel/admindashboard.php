<?php include "header.php";
session_start();

if(!isset($_SESSION['admin_1'])){
   header('location: ../login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title></title>


</head>
<body>
<div class="mesazhi">
	<h2>Home</h2>
	<p>Mirsevini ne Admindashboard!</p>
</div>

</body>
</html>