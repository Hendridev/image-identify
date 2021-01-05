<?php 
    include('php/function.php');
    $db = new dbase;
    $parse = $db->ambilGambar();

    $identify = 1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1>image gallery</h1>
        <a href="php/upload.php">Upload here</a>
        <?php foreach($parse as $ps) :?>
        <div class="raw">
            <h3><span><?= $identify++ ?>.</span><?= $ps['deskripsi'] ?></h3>
            <p><?= $ps['nama_asli'] ?></p>
            <div class="image">
                <img src="upload/raww.jpg" alt="">
            </div>
            <p>Ukuran: <?= $ps['ukuran'] ?>kb</p> 
            <p>Type: <?= $ps['tipe_gambar']?></p>
        </div>
        <?php endforeach; ?>
    </div>
    <script src="js/script.js"></script>
</body>
</html>