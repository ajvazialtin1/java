<?php
include "dashboardheader.php";
session_start();

if(!isset($_SESSION['user_2'])){
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
<div class="content">
	<h2>Home</h2>
	<p>Mirsevini ne Userdashboard!</p>
</div>

</body>
</html>