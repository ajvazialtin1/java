<?php

include '../config.php';

session_start();

if(!isset($_SESSION['user_2'])){
   header('location:login_form.php');
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
      <p>Pershendetje</p>
      <h1>Ky esht dashboardi i Userit</h1>
      <a href="logout.php" class="btn">logout</a>
   </div>

</div>

</body>
</html>