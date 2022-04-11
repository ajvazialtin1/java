<?php
    include 'admindashboard.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/post.css">
    <title>Document</title>
</head>

<body>
    <form action="postController.php" method="post">  
        <div class="katrori">
            <div>
                <h1 class="h1">Register i Produktit</h1>
            </div>
        <div class="Emri" >
            <label>Emri: </label>   
            <input class="input" type="text" placeholder="Shenoni Emri" name="name" id="name"> 
        </div>
        
        <div class="emriDoktorrit">
            <label>Emri i Doktorrit : </label>   
            <input class="input" type="text" placeholder="Shenoni emriDoktorrit" name="nameDoctor" id="nameDoctor"> 
        </div>
        <div>
            <label>Max Persona : </label>   
            <input class="input" type="number" placeholder="Shenoni Max Persona" name="maxPersona" id="maxPersona"> 
        </div>
        <div>
            <label>Minutat : </label>   
            <input class="input" type="number" placeholder="Shenoni Max Persona" name="minute" id="minute"> 
        </div>
        <div>
            <label>Kostoja : </label>   
            <input class="input" type="number" placeholder="Shenoni Koston" name="price" id="price"> 
        </div>
            <div class="log">
            <button class="login" type="number" value="Register">Post</button>
            </div> 
        </div>  
    </form>
</body>
</html>