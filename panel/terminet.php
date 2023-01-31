<?php
include "dashboardheader.php";
session_start();

if(!isset($_SESSION['user_2'])){
   header('location: ../login.php');
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="terminet.css">
    <title>Test</title>

  </head>
  <body>

   <div class="container my-5">
   <div>
    <div class="text-center mb-4">
    <h3>Rezervo Terminin</h3>
  </div>
      <form action="terminetController.php" method="post">
         <div class="form-group">
             <label>Emri i Plote</label>
             <input type="text" class="form-control"
            placeholder="Shenoni Emri" 
            name="name" id="name" autocomplete="off">
            </div> 
                     <div class="form-group">
             <label>Email</label>
             <input type="text" class="form-control"
            placeholder="Shenoni Email" 
            name="email" id="email" autocomplete="off">
            </div> 
                     <div class="form-group">
             <label>Telefoni</label>
             <input type="phone" class="form-control"
            placeholder="Shenoni Telefoni" 
            name="phone" id="phone" autocomplete="off">
            </div> 
                     <div class="form-group">
             <label>Data</label>
             <input type="date" class="form-control"
            placeholder="Shenoni Data" 
            name="data" id="data" autocomplete="off">
            </div> 
        <div>
            <button type="submit" class="btn btn-success" name="submit" value="Register">Posto</button>
            <a href="admindashboard.php" class="btn btn-danger">Kthehu</a> 
            </div> 
        </div>  
    </form>
</body>
</html>