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
      <form action="postController.php" method="post">
         <div class="form-group">
             <label>Emri</label>
             <input type="text" class="form-control"
            placeholder="Shenoni Emri" 
            name="name" id="name" autocomplete="off">
            </div> 
            <div class="form-group">
             <label>Emri i Doktorrit :</label>
             <input type="text" class="form-control"
            placeholder="Shenoni emriDoktorrit" 
            name="nameDoctor" id="nameDoctor" autocomplete="off">
            </div> 
            <div class="form-group">
             <label>Max Persona</label>
             <input type="number" class="form-control"
            placeholder="Shenoni Max Persona" 
            name="maxPersona" id="maxPersona" autocomplete="off">
            </div>
            <div class="form-group">
             <label>Minutat</label>
             <input type="number" class="form-control"
            placeholder="Shenoni Minutat" 
            name="minute" id="minute" autocomplete="off">
            </div>
            <div class="form-group">
             <label>Kostoja</label>
             <input type="number" class="form-control"
            placeholder="Shenoni Kostoja" 
            name="price" id="price" autocomplete="off">
            </div>

            <button type="submit" class="btn btn-primary" name="submit" value="Register">Submit</button>
            </div> 
        </div>  
    </form>
</body>
</html>