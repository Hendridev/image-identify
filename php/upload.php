<?php 
    include('function.php');
    $db = new dbase;
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    input{
        display:block;
        margin: 6px 0;
        padding: 4px 0;
    }
</style>
<body>
    <form action="" method="post">
        <input type="text" placeholder="deskripsi" name="deskripsi">
        <input type="file" name="file">
        <button type="submit" name="submit">Upload</button>
    </form>
</body>
</html>