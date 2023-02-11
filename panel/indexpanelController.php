<?php
    include_once '../config.php'
?>
<?php
    if(!isset($_POST['text1'], $_POST['text2'])){
        exit('Empty Fields');
    }

    if(empty($_POST['text1'] || empty($_POST['text2'])  )){
        exit('Values Empty');
    }


    if($informatat = $conn->prepare('SELECT id, text2 FROM about WHERE text1 = ?')) {
    $informatat->bind_param('s', $_POST['text1']);
    $informatat->execute();
    $informatat->store_result();

    if($informatat->num_rows>0){
        echo 'name eksizton';
    }
    else{
        if($informatat = $conn->prepare('INSERT INTO about (text1, text2) VALUES (?, ?)')){
        $informatat->bind_param('ss', $_POST['text1'], $_POST['text2']);
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