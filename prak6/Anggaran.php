<?php
    include "index.php";

    class Buah{
        var $TotalMangga, $TotalJambu, $TotalSalak;

        public function __construct($Mangga, $Jambu, $Salak){
            $this -> mangga = $Mangga;
            $this -> jambu = $Jambu;
            $this -> salak = $Salak;
            echo "<br><br> <h2> Total Tagihan </h2>";
        }

        public function getMangga(){
            $this -> TotalMangga = $this -> mangga*15000;
            echo " Harga Total Buah Mangga = ".$this -> TotalMangga;
        }

        public function getJambu(){
            $this -> TotalJambu = $this -> jambu*13000;
            echo "<br><br> Harga Total Buah Jambu = ".$this -> TotalJambu;
        }

        public function getSalak(){
            $this -> TotalSalak = $this -> salak*10000;
            echo "<br><br> Harga Total Buah salak = ".$this -> TotalSalak;
        }

        public function total(){
            $total = $this -> TotalMangga + $this -> TotalJambu + $this -> TotalSalak;
            echo "<br><br> Total Keseluruhan = " . $total;
        }
    }

$Mangga = $_POST["mangga"];
$Jambu = $_POST["jambu"];
$Salak = $_POST["salak"];
$transaksi = new buah($Mangga,$Jambu,$Salak);
$transaksi -> getMangga();
$transaksi -> getJambu();
$transaksi -> getSalak();
$transaksi -> total();
?>