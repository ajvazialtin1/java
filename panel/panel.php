<?php include "header.php";
session_start();

if(!isset($_SESSION['admin_1'])){
   header('location: ../login.php');
}
// Connect to MySQL database
$pdo = pdo_connect_mysql();
// Get the page via GET request (URL param: page), if non exists default the page to 1
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;
// Number of records to show on each page
$records_per_page = 5;


// Prepare the SQL statement and get records from our contacts table, LIMIT will determine the page
$stmt = $pdo->prepare('SELECT * FROM indexpanel ORDER BY id LIMIT :current_page, :record_per_page');
$stmt->bindValue(':current_page', ($page-1)*$records_per_page, PDO::PARAM_INT);
$stmt->bindValue(':record_per_page', $records_per_page, PDO::PARAM_INT);
$stmt->execute();
// Fetch the records so we can display them in our template.
$contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);


// Get the total number of contacts, this is so we can determine whether there should be a next and previous button
$num_contacts = $pdo->query('SELECT COUNT(*) FROM indexpanel')->fetchColumn();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="panel.css">
    <title>Test</title>

  </head>
<body>
   <div class="container my-5">
   <div>
    <div class="text-center mb-4">
    <h3>Index Informatat</h3>
  </div>
  <form>
  <?php foreach ($contacts as $contact): ?>
            <div class="form-group">
             <label>Text 1</label>
             <br>
             <p><?=$contact['subject1']?></p>
             <br>
             <label>Text 2</label>
             <br>
             <p><?=$contact['subject2']?></p>
             <br>
             <a href="edit.php?id=<?=$contact['id']?>" class="btn btn-success">Edit </a>
            </div> 

            <?php endforeach; ?>
</form>
    </div>

  <!-- Bootstrap CSS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>