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
    <style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
} 
nav{
  display: flex;
  height: 100px;
  width: 100%;
  background: #1b1b1b;
  align-items: center;
  justify-content: space-between;
  padding: 0 50px 0 100px;
  flex-wrap: wrap;
}
nav .logo{
  color: #fff;
  font-size: 35px;
  font-weight: 600;
}
nav ul{
  display: flex;
  flex-wrap: wrap;
  list-style: none;
}
nav ul li{
  margin: 0 50px;
}
nav ul li a{
  color: #f2f2f2;
  text-decoration: none;
  font-size: 18px;
  font-weight: 500;
  padding: 8px 15px;
  border-radius: 5px;
  letter-spacing: 1px;
  transition: all 0.3s ease;
}
nav ul li a.active,
nav ul li a:hover{
  color: #111;
  background: #fff;
}
nav .menu-btn i{
  color: #fff;
  font-size: 22px;
  cursor: pointer;
  display: none;
}
input[type="checkbox"]{
  display: none;
}
@media (max-width: 1000px){
  nav{
    padding: 0 40px 0 50px;
  }
}
@media (max-width: 920px) {
  nav .menu-btn i{
    display: block;
  }
  #click:checked ~ .menu-btn i:before{
    content: "\f00d";
  }
  nav ul{
    position: fixed;
    top: 80px;
    left: -100%;
    background: #111;
    height: 100vh;
    width: 100%;
    text-align: center;
    display: block;
    transition: all 0.3s ease;

  }
  #click:checked ~ ul{
    left: 0;
  }
  nav ul li{
    width: 100%;
    margin: 40px 0;
 
  }
  nav ul li a{
    width: 100%;
    margin-left: -100%;
    display: block;
    font-size: 20px;
    transition: 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
   
  }
  #click:checked ~ ul li a{
    margin-left: 0px;
  }
  nav ul li a.active,
  nav ul li a:hover{
    background: none;
    color: cyan;
  }
}
.content{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
  z-index: -1;
  width: 100%;
  padding: 0 30px;
  color: #1b1b1b;
}
.content div{
  font-size: 40px;
  font-weight: 700;
}
    </style>
  </head>
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
            <button type="submit" class="btn btn-success" name="submit" value="Register">Post</button>
            <a href="admindashboard.php" class="btn btn-danger">Cancel</a> 
            </div> 
        </div>  
    </form>
</body>
</html>