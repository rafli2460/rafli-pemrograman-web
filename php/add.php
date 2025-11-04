<head>
    <title>Tambahkan Data</title>
</head>

<body>
    <a href="index.php">Beranda</a>
    <br/><br/>

    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Kode</td>
                <td><input type="text" name="kode_jenis"></td>
            </tr>
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="nama_jenis"></td>
            </tr>
                        <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php

    // Check If form submitted, insert form data into jenis table.
    if(isset($_POST['Submit'])) {
        $kode = $_POST['kode_jenis'];
        $nama = $_POST['nama_jenis'];
        

        // Include file koneksi, di dalamnya ada $pdo
        include_once("connection.php");

        $result = mysql_query("INSERT INTO tb_jenis(kode_jenis, nama_jenis) VALUES('$kode','$nama')");

        echo "Data telah ditambahkan. <a href='index.php'> Tampilkan Data</a>";
        // Gunakan prepared statements untuk keamanan dan fungsionalitas
        try {
            $sql = "INSERT INTO tb_jenis(kode_jenis, nama_jenis) VALUES(:kode, :nama)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(['kode' => $kode, 'nama' => $nama]);
            
            echo "Data telah ditambahkan. <a href='index.php'> Tampilkan Data</a>";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    ?>
</body>