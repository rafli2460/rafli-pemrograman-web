<?php
// phpinfo();

include_once("config.php");
$result = mysqli_query($mysqli ,"SELECT * FROM data_diri_rafli ORDER BY nomor DESC");
?>

<html>
    <head>
        <title>Data Jenis</title>
    </head>

    <body>
        <a href="add.php">Tambahkan data diri</a><br><br>
        <table width="80%" border=3 align="center">
            <tr>
                <th>no</th>
                <th>nama</th>
                <th>alamat</th>
                <th>no.rumah</th>
                <th>opsi</th>
            </tr>
            <?php 
                while($user_data = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>".$user_data['nomor']."</td>";
                    echo "<td>".$user_data['nama']."</td>";
                    echo "<td>".$user_data['alamat']."</td>";
                    echo "<td>".$user_data['no_rumah']."</td>";
                    echo "<td align='center'><a href='edit.php?nomor=$user_data[nomor]'>Edit</a> | <a href='delete.php?nomor=$user_data[nomor]'>Delete</a></td></tr>";
                }
            ?>
        </table>
    </body>
</html>

