<?php
    include_once 'config.php'
?>
<?php
    if(!isset($_POST['name'], $_POST['password'], $_POST['email'])){
        exit('Empty Fields');
    }

    if(empty($_POST['name'] || empty($_POST['password']) || empty($_POST['email']))){
        exit('Values Empty');
    }


    if($informatat = $conn->prepare('SELECT id, password FROM users WHERE name = ?')) {
    $informatat->bind_param('s', $_POST['name']);
    $informatat->execute();
    $informatat->store_result();

    if($informatat->num_rows>0){
        echo 'name eksizton';
    }
    else{
        if($informatat = $conn->prepare('INSERT INTO users (name, password, email) VALUES (?, ?, ?)')){
        $informatat->bind_param('sss', $_POST['name'], $_POST['password'], $_POST['email']);
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
$conn->close();
?>