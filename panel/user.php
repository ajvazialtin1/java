<?php
    include 'admindashboard.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>Test</title>
  </head>
<body>
   <div class="container my-5">
      <form action="userController.php" method="post">
         <div class="form-group">
             <label>Name</label>
             <input type="text" class="form-control"
            placeholder="Enter your name" 
            name="name" autocomplete="off">
            </div> 
            <div class="form-group">
             <label>Email</label>
             <input type="email" class="form-control"
            placeholder="Enter your email" 
            name="email" autocomplete="off">
            </div> 
            <div class="form-group">
             <label>password</label>
             <input type="text" class="form-control"
            placeholder="Enter your password" 
            name="password" autocomplete="off">
            </div>

  <button type="submit" class="btn 
  btn-primary" name="submit">Submit</button>
</form>
    </div>


  </body>
</html>