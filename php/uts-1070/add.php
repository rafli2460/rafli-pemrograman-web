<html>
<head>
    <title>Tambahkan Data Kuis 1070</title>
</head>

<body>
    <a href="index.php">Beranda</a>
    <br/><br/>

    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Kode Kuis</td>
                <td><input type="text" name="kode_kuis1070"></td>
            </tr>
            <tr> 
                <td>Jenis Kuis</td>
                <td><input type="text" name="jenis_kuis1070"></td>
            </tr>
            <tr> 
                <td>Deskripsi</td> 
                <td><input type="text" name="deskripsi_1070"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php
    // Sertakan file koneksi
    include_once("config.php");

    if(isset($_POST['Submit'])) {
        $kode_kuis = mysqli_real_escape_string($mysqli, $_POST['kode_kuis1070']);
        $jenis_kuis = mysqli_real_escape_string($mysqli, $_POST['jenis_kuis1070']);
        $deskripsi = mysqli_real_escape_string($mysqli, $_POST['deskripsi_1070']);
        $result = mysqli_query($mysqli, "INSERT INTO tb_kuis1070(kode_kuis1070, jenis_kuis1070, deskripsi_1070) VALUES('$kode_kuis','$jenis_kuis', '$deskripsi')");

        echo "Data telah ditambahkan. <a href='index.php'> Tampilkan Data</a>";
    }
    ?>
</body>
</html>