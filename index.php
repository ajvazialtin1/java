<?php
  
  $conn = mysqli_connect('localhost','root','','web');
  
// Checking for connections
if ($conn->connect_error) {
    die('Connect Error (' . 
    $conn->connect_errno . ') '. 
    $conn->connect_error);
}
  
// SQL query to select data from database
$sql = "SELECT * FROM indexpanel ORDER BY id";
$result = $conn->query($sql);
$conn->close(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/product.css">
    <title>Home</title>
    <?php
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/mystyle.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">


	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
<?php
  include "./header.html"
?>
</head>
<?php while($rows=$result->fetch_assoc())
   { ?> 
<body>
<aside class="bg">
	<div class="center">
		<div class="cc">
<h1>Paragraf</h1>
<p><?php echo $rows['subject1'];?></p>
<div class="button">
		<a href="register.php">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        Le Nje Takim Me Mjekun
		</a>
</div>
</div>
</div>
</div>

<header class="header">
	<div class="div1">
		<i class="fas fa-heartbeat"></i><span>Health &
Safety</span>
</div>
	<div class="div1"><i class="fas fa-briefcase"></i><span>Health &
Safety</span>
</div>
	
		<div class="div1"><i class="fas fa-book-medical"></i><span>Work &
Childcare</span><br></div>
		<div class="div1">
<i class="fas fa-heartbeat"></i><span>Love &
Marriage</span><br></div>
<div class="div11">
<i class="far fa-calendar-alt"></i><span>Family
Planning</span><br>
</header>
</span>
</div>
</aside>
<main class="main">
	<div class="inside">
		<div>
			<h1>We`ll surround your
kids with love & care!</h1>
		</div>
		<div> 
			<p><?php echo $rows['subject2'];?></p>
		</div>
		<div><p class="pp">
			Maybe we are one of the lucky ones who was raised in a happy and secure family with two loving parents. Maybe we weren’t, and growing up was tough withoutthe love and support we longed for. Likely, as an adult you want a happy home for your family.
		</p><br>
	</div>
			<div class="bor">
			<a href="">Kids & parents </a>
			<a href="">Health & beauty</a>
			<a href=""> Teen center</a>
		</div>
					<div class="bor">
			<a href="">Strong relationships </a>
			<a href="">Tips & advice</a>
		</div>
					<div class="bor">
			<a href="">Marriage center </a>
			<a href="">Parenting</a>
			<a href=""> Healthy families</a>
		</div>
							<div class="bor">
			<a href="">Healing from trauma </a>
			<a href="">Succeed at school</a>
		</div>
		<?php } ?>
</main>
</body>
<?php
  include "./footer.html"
?>
</html>