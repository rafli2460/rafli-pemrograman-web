<head>
    <title>Tambahkan Data</title>
    <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
</head>

<body>
    <div class="container">
        <a href="index.php">Beranda</a>
        <br/><br/>

        <form action="add.php" method="post" name="form1">
            <table width="10%" border="1">
                <tr> 
                    <td>No</td>
                    <td><input type="text" name="nomor"></td>
                </tr>
                <tr> 
                    <td>Nama</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr> 
                    <td>Alamat</td>
                    <td><input type="text" name="alamat"></td>
                </tr>
                <tr> 
                    <td>No.Rumah</td>
                    <td><input type="text" name="no_rumah"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="Submit" value="Add"></td>
                </tr>
            </table>
        </form>

        <?php

        include_once("config.php");

        if(isset($_POST['Submit']) && !empty($_POST['nomor'])) {
            $nomor = mysqli_real_escape_string($mysqli, $_POST['nomor']);
            $nama = mysqli_real_escape_string($mysqli, $_POST['nama']);
            $alamat = mysqli_real_escape_string($mysqli, $_POST['alamat']);
            $no_rumah = mysqli_real_escape_string($mysqli, $_POST['no_rumah']);
            
            $result = mysqli_query($mysqli, "INSERT INTO data_diri_rafli(nomor, nama, alamat, no_rumah) VALUES('$nomor','$nama', '$alamat', '$no_rumah')");

            echo "Data telah ditambahkan. <a href='index.php'> Tampilkan Data</a>";
        }
        ?>
    </div>
</body>