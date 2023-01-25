<?php
    include_once '../config.php'
?>
<?php
    if(!isset($_POST['name'], $_POST['email'], $_POST['password'])){
        exit('Empty Fields');
    }

    if(empty($_POST['name'] || empty($_POST['email']) || empty($_POST['password']))){
        exit('Values Empty');
    }


    if($informatat = $conn->prepare('SELECT id, email FROM users WHERE name = ?')) {
    $informatat->bind_param('s', $_POST['name']);
    $informatat->execute();
    $informatat->store_result();

    if($informatat->num_rows>0){
        echo 'name eksizton';
    }
    else{
        if($informatat = $conn->prepare('INSERT INTO users (name, email, password) VALUES (?, ?, ?)')){
        $informatat->bind_param('sss', $_POST['name'], $_POST['email'], $_POST['password']);
        $informatat->execute();
        echo 'Keni Krijuar Userin me sukses';
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