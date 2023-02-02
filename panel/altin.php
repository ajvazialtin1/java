<?php
    session_start();
    if (isset($_SESSION["users"])) {
        if ($_SESSION["users"] == 'user') {
            header("Location: altin.php"); 
        }   
    } else {
        header("Location: login.php"); 
    }
?>
value="<?php echo $_SESSION["users"][0]; ?>"
<!doctype html>
<html lang="en">
  <head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/userprofile.css">
    <title>Profile</title>
  </head>

  <body>
  <nav class="navtop">
<div>
        <h1>Logo</h1>
        <a class="active" href="/java/panel/dashboard.php"></i>Home</a>
        <a class="active" href="/java/panel/terminet.php"></i>Terminet</a>
        <a href="..//logout.php"></i>Log Out</a>    

   	</div>
</nav>
<div class="container my-5">
   <div>
    <div class="text-center mb-4">
    <h3>Add New Post</h3>
  </div>
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
        <div>
            <button type="submit" class="btn btn-success" name="submit" value="Register">Posto</button>
            <a href="admindashboard.php" class="btn btn-danger">Kthehu</a> 
            </div> 
        </div>  
    </form>


  <!-- Bootstrap CSS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
