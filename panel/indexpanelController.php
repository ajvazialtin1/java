<?php
    include_once '../config.php'
?>
<?php
    if(!isset($_POST['name'], $_POST['subject1'], $_POST['subject2'])){
        exit('Empty Fields');
    }

    if(empty($_POST['name'] || empty($_POST['subject1']) || empty($_POST['subject2']) )){
        exit('Values Empty');
    }


    if($informatat = $conn->prepare('SELECT id, subject1 FROM indexpanel WHERE name = ?')) {
    $informatat->bind_param('s', $_POST['name']);
    $informatat->execute();
    $informatat->store_result();

    if($informatat->num_rows>0){
        echo 'name eksizton';
    }
    else{
        if($informatat = $conn->prepare('INSERT INTO indexpanel (name, subject1, subject2) VALUES (?, ?, ?)')){
        $informatat->bind_param('sss', $_POST['name'], $_POST['subject1'], $_POST['subject2']);
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