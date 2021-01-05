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

    function uploadGambar(){
        // $query = mysqli_query($this->do,"");
    }

}
    
?>