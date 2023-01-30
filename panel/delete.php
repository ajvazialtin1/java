<?php include "header.php";
$pdo = pdo_connect_mysql();
$msg = '';
// Check that the contact ID exists
if (isset($_GET['id'])) {
    // Select the record that is going to be deleted
    $stmt = $pdo->prepare('SELECT * FROM users WHERE id = ?');
    $stmt->execute([$_GET['id']]);
    $contact = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$contact) {
        exit('Kontakti nuk ekziston ne ket ID!');
    }
    if (isset($_GET['confirm'])) {
        if ($_GET['confirm'] == 'yes') {
            // User clicked the "Yes" button, delete record
            $stmt = $pdo->prepare('DELETE FROM users WHERE id = ?');
            $stmt->execute([$_GET['id']]);
            $msg = 'Ti ke fshir perdoruesin!';
        } else {
            header('Location: admindashboard.php');
            exit;
        }
    }
} else {
    exit('No ID specified!');
}
?>


<div class="content delete">
	<h2>Fshije ID <?=$contact['id']?></h2>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php else: ?>
    <div>
        <a href="delete.php?id=<?=$contact['id']?>&confirm=yes" class="btn btn-success" name="submit">Vazhdo</a>
        <a href="delete.php?id=<?=$contact['id']?>&confirm=no" class="btn btn-danger">Kthehu</a>
    </div>
    <?php endif; ?>
</div>
