<?php
    include_once 'config.php'
?>
<?php
    if(!isset($_POST['name'], $_POST['email'], $_POST['subject'])){
        exit('Empty Fields');
    }

    if(empty($_POST['name'] || empty($_POST['email']) || empty($_POST['subject']))){
        exit('Values Empty');
    }


    if($informatat = $conn->prepare('SELECT id, email FROM kontakt WHERE name = ?')) {
    $informatat->bind_param('s', $_POST['name']);
    $informatat->execute();
    $informatat->store_result();

    if($informatat->num_rows>0){
        echo 'name eksizton';
    }
    else{
        if($informatat = $conn->prepare('INSERT INTO kontakt (name, email, subject) VALUES (?, ?, ?)')){
            $informatat->bind_param('sss', $_POST['name'], $_POST['email'], $_POST['subject']);
        $informatat->execute();
        echo 'Keni derguar emailin me sukses';
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