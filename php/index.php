<?php
// phpinfo();

include_once("connection.php");
$statement = $pdo->query("SELECT * FROM tb_jenis ORDER BY kode_jenis DESC");
?>

<html>
    <head>
        <title>Data Jenis</title>
    </head>

    <body>
        <a href="add.php">Tambahkan data jenis</a><br><br>
        <table width="80%" border=3>
            <tr>
                <th>kode</th>
                <th>nama</th>
                <th>Update</th>
            </tr>
            <?php 
                while($user_data = $statement->fetch(PDO::FETCH_ASSOC)) {
                    echo "<tr>";
                    echo "<td>".$user_data['kode_jenis']."</td>";
                    echo "<td>".$user_data['nama_jenis']."</td>";
                    echo "<td><a href='edit.php?kode_jenis=$user_data[kode_jenis]'>Edit</a> | <a href='delete.php?kode_jenis=$user_data[kode_jenis]'>Delete</a></td></tr>";
                }
            ?>
        </table>
    </body>
</html>

