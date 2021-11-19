<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Prak Pemweb Mg-6</title>
    <link rel="stylesheet" type="text/css" href="indexStyle.css">
</head>

<body>
    <header> 
        Tugas Praktikum Pemrograman Web Minggu-6 <br>
        oleh <br>
        Desi Fitria Yudanto - RA - 119140028 
    </header>

    <section>
        <div>
            <h2> Form Belanja </h2>
            <form action="Anggaran.php" method="POST" id="anggaran" name="anggaran" enctype="multipart/form">
                <label for=""> Buah Mangga Rp 15.000/kg : </label>
                <input type="number" id="mangga" onchange="setValue()" name="mangga"> <br> <br>
                <label for=""> Buah Jambu Rp 13.000/kg : </label>
                <input type="number" id="jambu" onchange="setValue()" name="jambu"> <br><br>
                <label for=""> Buah Salak Rp 10.000/kg : </label>
                <input type="number" id="salak" onchange="setValue()" name="salak"> <br><br>
                <label for=""> Total Harga = </label>
                <input type="text" id="total" name="total" readonly> <br><br>
                <button type="hitung" name=""> Hitung </button>
            </form>
        </div>
    </section>    
</body>

<script>
    function setValue(){
        var total = document.getElementById("total");
        var mangga = document.getElementById("mangga").value*15000;
        var jambu = document.getElementById("jambu").value*13000;
        var salak = document.getElementById("salak").value*10000;
        console.log(mangga + jambu + salak);
        var hasil = mangga + jambu + salak;
        total.value = hasil;
    }
</script>

</html>