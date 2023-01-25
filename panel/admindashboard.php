<?php include "header.php" ?>

<div class="container my-5">
  <a href="user.php" class="btn btn-dark mb-2">Add New</a>
  <table class="table table-hover text-center">
  <thead class="table-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

<?php
  // SQL query to select data from database
$sql = "SELECT * FROM users ORDER BY name";
$result = $conn->query($sql);
$conn->close(); 
?>
  <?php while($rows=$result->fetch_assoc())
   { ?>
      <tr>
      <th><?php echo $rows['id'];?></th>
      <th><?php echo $rows['name'];?></th>
      <th><?php echo $rows['email'];?></th>
      <th><?php echo $rows['password'];?></th>
      <th><a href="" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
      <a href="" class="link-dark"><i class="fa-solid fa-trash fs-5 me-3"></i></a>
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>

  </body>
</html>