<?php
include "header.php";
session_start();

if(!isset($_SESSION['admin_1'])){
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
    <title>Panel</title>

  </head>
  <body>

   <div class="container my-5">
   <div>
    <div class="text-center mb-4">
    <h3>Shto te dhenat ne databaz</h3>
  </div>
  <form action="indexpanelController.php" method="post">
         <div class="form-group">
             <label>Emri i faqes</label>
             <input type="text" class="form-control"
            placeholder="Shenoni Emri" 
            name="name" id="name" autocomplete="off">
            </div> 
            <div class="form-group">
             <label>Text 1</label>
             <input type="text" class="form-control"
            placeholder="Shenoni Tekstin" 
            name="subject1" id="subject1" autocomplete="off">
            </div> 
            <div class="form-group">
             <label>Text 1</label>
             <input type="text" class="form-control"
            placeholder="Shenoni Tekstin" 
            name="subject2" id="subject2" autocomplete="off">
            </div> 
            <button type="submit" class="btn btn-success" name="submit" value="Register">Posto</button>
            <a href="admindashboard.php" class="btn btn-danger">Kthehu</a> 
            </div> 
        </div>  
    </form>
</body>
</html>