<?php
     $DATABASE_HOST = "localhost";
     $DATABASE_USER = "root";
     $DATABASE_PASS = "";
     $DATABASE_NAME = "test";

   

    $con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

    if(mysqli_connect_error()){
        exit('Errore gjat lidhjes se databasese' . mysqli_connect_error());
    }

    if(!isset($_POST['username'], $_POST['password'], $_POST['email'])){
        exit('Empty Fields');
    }

    if(empty($_POST['username'] || empty($_POST['password']) || empty($_POST['email']))){
        exit('Values Empty');
    }


    if($informatat = $con->prepare('SELECT id, password FROM users WHERE username = ?')) {
    $informatat->bind_param('s', $_POST['username']);
    $informatat->execute();
    $informatat->store_result();

    if($informatat->num_rows>0){
        echo 'Username eksizton';
    }
    else{
        if($informatat = $con->prepare('INSERT INTO users (username, password, email) VALUES (?, ?, ?)')){
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $informatat->bind_param('sss', $_POST['username'], $password, $_POST['email']);
        $informatat->execute();
        echo 'Jeni Regjistruar me Sukses';
    }else{
        echo 'Keni Ber Ndonje Gabim';
        }
    }
    $informatat->close(); 
}
else{
    echo 'Error';
}
$con->close();
?>