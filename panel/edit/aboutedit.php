<?php include "../header.php";
$pdo = pdo_connect_mysql();
$msg = '';
// Check if the contact id exists, for example update.php?id=1 will get the contact with the id of 1
if (isset($_GET['id'])) {
    if (!empty($_POST)) {
        // This part is similar to the create.php, but instead we update a record and not insert
        $id = isset($_POST['id']) ? $_POST['id'] : NULL;
        $text1 = isset($_POST['text1']) ? $_POST['text1'] : '';
        $text2 = isset($_POST['text2']) ? $_POST['text2'] : '';
        $text3 = isset($_POST['text3']) ? $_POST['text3'] : '';
        $text4 = isset($_POST['text4']) ? $_POST['text4'] : '';
        $text5 = isset($_POST['text5']) ? $_POST['text5'] : '';

        
        // Update the record
        $stmt = $pdo->prepare('UPDATE about SET id = ?, text1 = ?, text2 = ?, text3 = ? , text4 = ?, text5 = ? WHERE id = ?');
        $stmt->execute([$id, $text1, $text2,$text3,$text4,$text5, $_GET['id']]);
        $msg = 'Updated esht kryer me Sukses';
    }
    // Get the contact from the contacts table
    $stmt = $pdo->prepare('SELECT * FROM about WHERE id = ?');
    $stmt->execute([$_GET['id']]);
    $contact = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$contact) {
        exit('Kontakti nuk eksizon me ket ID!');
    }
} else {
    exit('No ID specified!');
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
  background-color: #3f69a8;
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
<body>
   <div class="container my-5">
   <div>
    <div class="text-center mb-4">
    <h3>Përditsimi i te dhënave</h3>
  </div>
  <form action="aboutedit.php?id=<?=$contact['id']?>" method="post">

            <div class="form-group">
             <label>Teksti About</label>
             <input type="text" class="form-control" name="text1" value="<?=$contact['text1']?>" id="text1">
            </div> 
            <div class="form-group">
             <label>Mjeku I Pare</label>
             <input type="text" class="form-control" name="text2" value="<?=$contact['text2']?>" id="text2">
            </div> 
            <div class="form-group">
             <label>Mjeku I Dyte</label>
             <input type="text" class="form-control" name="text3" value="<?=$contact['text3']?>" id="text3">
            </div> 
            <div class="form-group">
             <label>Mjeku I Tret</label>
             <input type="text" class="form-control" name="text4" value="<?=$contact['text4']?>" id="text4">
            </div> 
            <div class="form-group">
             <label>Mjeku I Katert</label>
             <input type="text" class="form-control" name="text5" value="<?=$contact['text5']?>" id="text5">
            </div> 


            <div>
            <button type="submit" class="btn btn-success" name="submit" value="Update">Vazhdo</button>
            <a href="aboutshow.php" class="btn btn-danger">Kthehu</a> 
            </div> 
            <div>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php endif; ?>
</div>
</form>
    </div>

  <!-- Bootstrap CSS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>