<?php include "header.php"?>
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
   <div>
    <div class="text-center mb-4">
    <h3>Add New User</h3>
  </div>
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

            <div>
            <button type="submit" class="btn btn-success" name="submit" value="Register">Post</button>
            <a href="admindashboard.php" class="btn btn-danger">Cancel</a> 
            </div> 
</form>
    </div>

  <!-- Bootstrap CSS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>