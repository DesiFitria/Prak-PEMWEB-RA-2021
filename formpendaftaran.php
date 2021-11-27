<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="formpendaftaran.css">
    <title> Form Pendaftaran </title>
</head>

<body>
    <ul>
        <li><a href="home.php"> HOME </a></li>
        <li class="active"><a href="formpendaftaran.php"> PENDAFTARAN </a></li>
        <li><a href="about.php"> ABOUT </a></li>
        <li style="float:right"> <a> M-Rakyat | PENGMAS HMIF </a></li>
    </ul>

        <header>
            <h1> Form Pendaftaran M-Rakyat </h1>
        </header>

        <center>
            <form action="datadaftar.php" method="POST">
                <p> 
                    <label for="nama"> Nama : </label> 
                    <input type="text" name="nama" placeholder="Nama Lengkap"/>
                </p>
                <p> 
                    <label for="nim"> NIM : </label> 
                    <input type="text" name="nim" />
                </p>
                <p> 
                    <label for="email"> Email : </label> 
                    <input type="text" name="email" placeholder="name@gmail.com" />
                </p>
                <p> 
                    <label for="link"> Link IGTV : </label> 
                    <input type="text" name="link" />
                </p>

                <p style="margin-top : 20px">
                    <input type="Submit" value="Submit" name="daftar" class="button"/>
                </p>
            </form>
        </center>
 
</body>
</html>