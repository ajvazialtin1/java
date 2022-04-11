<?php

include '../config.php';

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
   <link rel="stylesheet" href="css/admindashboard.css">
   <title></title>
</head>
<body>
<div class="menu">
<nav class="navMenu">
      <a class="a1" href="admindashboard.php">Dashboard</a>
      <a class="a1" href="logout.php">Log Out</a>
      <a class="a1" href="post.php">Create Post</a>
    </nav>

   <h1 class="h11">Administator</h1>
</div>

</body>
</html>