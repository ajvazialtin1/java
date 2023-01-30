<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/stylelogin.css">
    <title>Login</title>
</head>
<body>
<form method="POST">
    <div class="katrori">
        <h1 class="h1">Login</h1>
        <div class="Email">  
             <label>Email : </label> 
             <input type="email"  name="email" placeholder="Shenoni Email" id="email"> 
             <label style="color: red;" id="emailMsg"></label></div>

      <div class="Password">
             <label>Password : </label>  
             <input type="password" name="password" placeholder="Shenoni Password" id="password"> 
             <label style="color: red;" id="passwordMsg"></label></div>

      <div class="log">
             <input class="login" type="submit" value="login now" name="loginButton">  &nbsp <p>Forgot <a class="butoni" a href="forgetpassword.html" > password? </a></p> </div>

    <div class="opsionregjister">Ende nuk keni llogari? <p> &nbsp <a class="butoni" href="register.php">Regjistrohu Ketu</a> </p> </div>
  


    <script>
        var button = document.getElementById("loginButton");

        var emailMsg = document.getElementById("emailMsg");

        var passwordMsg = document.getElementById("passwordMsg");

        var emailRegex = /^[A-Za-z]+[._-]?\w+[+]?[A-Za-z]+@[A-Za-z]+[-]?[A-Za-z]+\.[A-Za-z]{2,3}/;
        var passwordRegex = /^[A-Za-z]{0,1}\w+[!?]?\w+$/;
        

        button.addEventListener("click", function(event)){
            var emailMsg = document.getElementById("emailMsg");
            var password = document.getElementById("password").value;

                if(email == "" || email == null){
                    emailMsg.innerText="Ploteso Email!";
                    event.preventDefault();
                }else{
                    if(emailRegex.test(email)){
                        emailMsg.innerText="";
                    }else{
                        emailMsg.innerText="Email Gabim!";
                        event.preventDefault();
                    }
                }
            }

            if(password == "" || password == null){
                passwordMsg.innerText="Ploteso Password!";
                event.preventDefault();
            }else{
                if(passwordRegex.test(password)){
                    passwordMsg.innerText="";
                }else{
                    passwordMsg.innerText="Password Gabim!";
                    event.preventDefault();
                }
            }
    </script>
</body>
</html>

<?php 
include 'config.php';

if(isset($_POST['loginButton'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $password = ($_POST['password']);
   
   $select = " SELECT * FROM users WHERE email = '$email' && password = '$password' ";
   
   $result = mysqli_query($conn, $select);
   
   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'admin'){  

         $_SESSION['admin_1'] = $row['1'];
         header('location: ./panel/admindashboard.php'); 
         

      }elseif($row['user_type'] == 'user'){  

         $_SESSION['user_2'] = $row['2'];
         header('location: ./panel/dashboard.php');
      } 
   }
}
?>
