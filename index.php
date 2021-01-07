<?php 
    include('php/function.php');
    $db = new dbase;
    $parse = $db->ambilGambar();
    if(isset($_POST["submit"])){
        $desc = $_POST["deskripsi"];
        $gambar = $_FILES["file"];
        $db->uploadGambar($desc,$gambar);
        // header('location:index.php');
    }
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
        <div class="upload-toggle">
            <h3>upload here</h3>
            <form action="" method="POST" enctype="multipart/form-data" id="form">
                <input type="text" name="deskripsi" placeholder="deskripsi" required>
                <input type="file" name="file" required>
                <input type="submit" value="submit" name="submit">
            </form>
            <p class="error"></p>
        </div>
        <?php foreach($parse as $ps) :?>
        <div class="raw">
            <h3><span><?= $identify++ ?>.</span><?= $ps['deskripsi'] ?></h3>
            <p><?= $ps['nama_asli'] ?></p>
            <div class="image">
                <img src="upload/<?= $ps['nama_asli'] ?>" alt="<?= $ps['nama_asli'] ?>">
            </div>
            <a href="upload/<?= $ps['nama_asli'] ?>">download</a>
            <p>Ukuran: <?= $ps['ukuran'] ?>kb</p> 
            <p>Type: <?= $ps['tipe_gambar']?></p>
        </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
