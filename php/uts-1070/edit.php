<?php
include_once("config.php");
if(isset($_POST['update']))
{   
    $kode_kuis = mysqli_real_escape_string($mysqli, $_POST['kode_kuis1070']);
    $jenis_kuis = mysqli_real_escape_string($mysqli, $_POST['jenis_kuis1070']);
    $deskripsi = mysqli_real_escape_string($mysqli, $_POST['deskripsi_1070']);
    $result = mysqli_query($mysqli, "UPDATE tb_kuis1070 SET 
                                        jenis_kuis1070='$jenis_kuis', 
                                        deskripsi_1070='$deskripsi' 
                                    WHERE kode_kuis1070='$kode_kuis'");
    header("Location: index.php");
    exit();
}
?>

<?php
$kode_kuis = $_GET['kode_kuis1070'];
$result = mysqli_query($mysqli, "SELECT * FROM tb_kuis1070 WHERE kode_kuis1070='$kode_kuis'");
$user_data = mysqli_fetch_array($result);
$jenis = $user_data['jenis_kuis1070'];
$deskripsi = $user_data['deskripsi_1070'];
?>

<html>
<head>
    <title>Edit Data Kuis 1070</title>
</head>

<body>
    <a href="index.php">Home</a>
    <br/><br/>

    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Jenis Kuis</td>
                <td><input type="text" name="jenis_kuis1070" value="<?php echo $jenis; ?>"></td>
            </tr>
            <tr> 
                <td>Deskripsi</td>
                <td><input type="text" name="deskripsi_1070" value="<?php echo $deskripsi; ?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="kode_kuis1070" value="<?php echo $_GET['kode_kuis1070']; ?>"></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>