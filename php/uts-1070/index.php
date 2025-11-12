<?php
include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM tb_kuis1070 ORDER BY kode_kuis1070 DESC");
?>

<html>
<head>
    <title>Data Kuis 1070</title>
</head>

<body>
    <a href="add.php">Tambahkan Data Kuis Baru</a><br><br>

    <table width='80%' border=1>
        <thead>
            <tr>
                <th>Kode Kuis</th>
                <th>Jenis Kuis</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($user_data = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $user_data['kode_kuis1070'] . "</td>";
                echo "<td>" . $user_data['jenis_kuis1070'] . "</td>";
                echo "<td>" . $user_data['deskripsi_1070'] . "</td>"; 
                echo "<td>
                        <a href='edit.php?kode_kuis1070=" . $user_data['kode_kuis1070'] . "'>Edit</a> | 
                        <a href='delete.php?kode_kuis1070=" . $user_data['kode_kuis1070'] . "'>Delete</a>
                      </td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>