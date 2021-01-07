<?php 
    class dbase {
        var $host = "localhost";
        var $usr = "root";
        var $pw = "";
        var $d_base = "imageIdentify";
        var $do = "";
        
        function __construct(){
            $this->do = mysqli_connect($this->host,$this->usr,$this->pw,$this->d_base);
        if(mysqli_connect_error()){
            echo "connection fail ! cause :" . mysqli_connect_error() ;
        }
    }
    
    function ambilGambar(){
        $query = mysqli_query($this->do,"SELECT * FROM daftarfoto");
        while($dummy = mysqli_fetch_array($query)){
            $result[] = $dummy;
        }
        return $result;
    }

    function uploadGambar($deskripsi,$gambar){
        $temporary = $gambar['tmp_name'];
        $namagambar = "[" . rand(0,999)  ."]". $gambar['name'];
        $ukuran = $gambar['size'] / 1000;
        $tipe = $gambar['type'];
        $folder = "upload/";
        if($ukuran < 5000 && ($tipe == 'image/png' || $tipe == 'image/jpeg' ||  $tipe == 'image/jpg' ||  $tipe == 'image/svg+xml')){
            move_uploaded_file($temporary,$folder . $namagambar);
            mysqli_query($this->do,"INSERT INTO daftarfoto (deskripsi,nama_asli,tipe_gambar,ukuran) VALUES('$deskripsi','$namagambar','$tipe','$ukuran')");
            header('location:index.php');
        }
        else{
            echo "<script>alert('cant handle image size or type')</script>";
        }
    }
    

}
    
?>