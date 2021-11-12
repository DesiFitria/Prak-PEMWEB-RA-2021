<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tugas Praktikum 4</title>
    <script type = "text/javascript" src="jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="indexStyle.css">
</head>

<body>
    <h1 align="center">CRUD</h1>
    <hr>
    
    <form action="" method="POST" id="form_mahasiswa">
        <label for="id" id="id_label" hidden> id : </label>
        <input type="text" name="id" id="id" hidden readonly> <br> <br>
        <label for="">NIM :</label><br>
        <input type="text" name="nim" id=""> <br> <br>
        <label for="">Nama :</label><br>
        <input type="text" name="nama" id=""> <br> <br>
        <label for="">Prodi :</label><br>
        <select name="prodi" id="">
            <option value="IF">Teknik Informatika</option>
            <option value="GL">Teknik Geologi</option>
            <option value="TIP">Teknologi Industri Pertanian</option>
        </select> <br> <br>
        <label for="">Angkatan :</label><br>
        <input type="text" name="angkatan" id=""> <br> <br> <br>

        <button class="btn_tampil" id="submit">Submit</button>
        <button class="btn_update" id="update">Update</button>
        <button class="btn_delete" id="delete">Delete</button>
    </form>

    <div id = "tampil_data"></div>

    <script>
        $('#tampil_data').load("tampil.php");
        $(document).ready(function()
        {
            $('#btn_tampil').click(function()
            {
                var data=$('#form_mahasiswa').serialize();
                $.ajax(
            {
                url : "insert.php",
                type : 'POST',
                data : data,
                cache : false,
                success : function(data)
                {
                    $('#tampil_data').load("tampil.php");
                }
            })
            })
        })

        $(document).ready(function()
        {
            $('#btn_update').click(function()
            {
                var data=$('#form_mahasiswa').serialize();
                $.ajax(
            {
                url : "update.php",
                type : 'POST',
                data : data,
                cache : false,
                success : function(data)
                {
                    $('#tampil_data').load("tampil.php");
                }
            })
            })
        })

        $(document).ready(function()
        {
            $('#btn_delete').click(function()
            {
                var data=$('#form_mahasiswa').serialize();
                $.ajax(
            {
                url : "delete.php",
                type : 'POST',
                data : data,
                cache : false,
                success : function(data)
                {
                    $('#tampil_data').load("tampil.php");
                }
            })
            })
        })
        </script>
</body>

<br><br><br><br><br>

<footer>
    Desi Fitria Yudanto - 119140028 - RA <br>
    -Saya Sudah Berusaha Semaksimal Mungkin-
</footer>

</html>