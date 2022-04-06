<?php

include 'config.php';

session_start();

if(!isset($_SESSION['admin_1'])){
   header('location:login.php');
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


   <div>
      <h3>Pershendetje</h3>
      <h1>Ky esht dashboardi i Administratorit</h1>
      <a href="login.php" class="btn">login</a>
      <a href="register.php" class="btn">register</a>
      <a href="logout.php" class="btn">logout</a>
   </div>

</div>

</body>
</html>