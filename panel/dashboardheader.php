<?php
include "../config.php"; 
?>
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
    
    <title>System</title>
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



  <!-- Bootstrap CSS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>

<style>
    .navtop {
  	background-color: #3f69a8;
  	height: 60px;
  	width: 100%;
  	border: 0;
}
.navtop div {
  	display: flex;
  	margin: 0 auto;
  	width: 1000px;
  	height: 100%;
}
.navtop div h1, .navtop div a {
  	display: inline-flex;
  	align-items: center;
}
.navtop div h1 {
  	flex: 1;
  	font-size: 24px;
  	padding: 0;
  	margin: 0;
  	color: #ecf0f6;
  	font-weight: normal;
}
.navtop div a {
  	padding: 0 20px;
  	text-decoration: none;
  	color: #c5d2e5;
  	font-weight: bold;
}
.navtop div a i {
  	padding: 2px 8px 0 0;
}
.navtop div a:hover {
  	color: #ecf0f6;
}
</style>