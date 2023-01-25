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
   <link rel="stylesheet" href="css/admindashboard.css">
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


<form action="editUserController.php" method="POST">
        <div class="container">
            <fieldset class="user-cont">
                <legend><strong>User</strong></legend>
                <p><strong><u>Firstname:</u></strong></p>
                <input id="user" type="text" name="firstname" value="<?php echo $_SESSION["user"][1]; ?>">
                <p><strong><u>Lastname:</u></strong></p>
                <input id="user" type="text" name="lastname" value="<?php echo $_SESSION["user"][2]; ?>">
                <p><strong><u>Email:</u></strong></p>
                <input id="user" type="email" name="email" value="<?php echo $_SESSION["user"][3]; ?>">
                <p><strong><u>Age:</u></strong></p>
                <input id="user" type="number" name="age" value="<?php echo $_SESSION["user"][6]; ?>">
            </fieldset>
            <div class="edit-cont">
                <button id="f" name="editUser"><strong>Edit</strong></button>
            </div>
        </div>
    </form>
    <form class="delete-form    " action="deleteUserController.php" method="POST">
        <button id="s" name="deleteUser"><strong>Delete</strong></button>
    </form>

</body>
</html>