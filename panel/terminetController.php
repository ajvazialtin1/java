<?php
    include_once '../config.php'
?>
<?php
    if(!isset($_POST['name'], $_POST['email'], $_POST['phone'], $_POST['data'])){
        exit('Empty Fields');
    }

    if(empty($_POST['name'] || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['data']) )){
        exit('Values Empty');
    }


    if($informatat = $conn->prepare('SELECT id, email FROM terminet WHERE name = ?')) {
    $informatat->bind_param('s', $_POST['name']);
    $informatat->execute();
    $informatat->store_result();

    if($informatat->num_rows>0){
        echo 'name eksizton';
    }
    else{
        if($informatat = $conn->prepare('INSERT INTO terminet (name, email, phone, data) VALUES (?, ?, ?, ?)')){
        $informatat->bind_param('ssss', $_POST['name'], $_POST['email'], $_POST['phone'], $_POST['data']);
        $informatat->execute();
        echo 'Keni Rezervuar Terminin Me Sukses.';
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
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>

</body>
</html>