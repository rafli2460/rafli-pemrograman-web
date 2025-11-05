<?php
include_once("config.php");

if(isset($_POST['update'])) {
    $nomor = $_POST['nomor'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $no_rumah = $_POST['no_rumah'];

    $stmt = $mysqli->prepare("UPDATE data_diri_rafli SET nama=?, alamat=?, no_rumah=? WHERE nomor=?");
    $stmt->bind_param("sssi", $nama, $alamat, $no_rumah, $nomor);
    $stmt->execute();
    $stmt->close();

    header("Location: index.php");
    exit();
}

if(!isset($_GET['nomor'])) {
    header("Location: index.php");
    exit();
}

$nomor = $_GET['nomor'];

$stmt = $mysqli->prepare("SELECT * FROM data_diri_rafli WHERE nomor=?");
$stmt->bind_param("i", $nomor);
$stmt->execute();
$result = $stmt->get_result();

if($result->num_rows === 0) {
    header("Location: index.php");
    exit();
}

$user_data = $result->fetch_assoc();
$nama = $user_data['nama'];
$alamat = $user_data['alamat'];
$no_rumah = $user_data['no_rumah'];

$stmt->close();
?>

<html>
    <head>
        <title>Edit Data Diri</title>
    </head>
    <body>
        <a href="index.php">Home</a><br/><br/>
        <form name="update_user" action="edit.php" method="post">
            <table border="0">
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama" value="<?php echo htmlspecialchars($nama); ?>"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat" value="<?php echo htmlspecialchars($alamat); ?>"></td>
                </tr>
                <tr>
                    <td>No Rumah</td>
                    <td><input type="text" name="no_rumah" value="<?php echo htmlspecialchars($no_rumah); ?>"></td>
                </tr>
                <tr>
                    <td><input type="hidden" name="nomor" value="<?php echo $nomor; ?>"></td>
                    <td><input type="submit" value="Update" name="update"></td>
                </tr>
            </table>
        </form>
    </body>
</html>