<?php
    include_once '../config.php'
?>
<?php
    if(!isset($_POST['name'], $_POST['nameDoctor'], $_POST['maxPersona'], $_POST['minute'], $_POST['price'])){
        exit('Empty Fields');
    }

    if(empty($_POST['name'] || empty($_POST['nameDoctor']) || empty($_POST['maxPersona']) || empty($_POST['minute']) || empty($_POST['price']))){
        exit('Values Empty');
    }


    if($informatat = $conn->prepare('SELECT id, nameDoctor FROM paketat WHERE name = ?')) {
    $informatat->bind_param('s', $_POST['name']);
    $informatat->execute();
    $informatat->store_result();

    if($informatat->num_rows>0){
        echo 'name eksizton';
    }
    else{
        if($informatat = $conn->prepare('INSERT INTO paketat (name, nameDoctor, maxPersona, minute, price) VALUES (?, ?, ?, ?, ?)')){
        $informatat->bind_param('sssss', $_POST['name'], $_POST['nameDoctor'], $_POST['maxPersona'], $_POST['minute'], $_POST['price']);
        $informatat->execute();
        echo 'Keni Postuar me sukses';
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