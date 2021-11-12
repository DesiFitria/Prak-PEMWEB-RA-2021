<?php
    include "koneksi.php";
?>

<br> 
<table id="data_mahasiswa" border="1"><br>
    <thead>
        <th>NIM</th>
        <th>Nama</th>
        <th>Prodi</th>
        <th>Angkatan</th>
    </thead>

    <?php
    $Hasil = mysqli_query($con, "SELECT * FROM mahasiswa order by nim asc");
    ?>