<?php
include_once("config.php");
if(isset($_POSTp['update']));
{
    $kode=$_POST['kode_jenis'];
    $nama=$_POST['nama_jenis'];
    $result= mysqli_query($mysqli, "UPDATE tabel_jenis SET nama_jenis='$nama' WHERE kode_jenis=$kode");
}
?>

<?php
    $kode = $_GET['kode_jenis'];
    $result = mysqli_query($mysqli, "SELECT * FROM tabel_jenis WHERE kode_jenis=$kode");
    while ($user_data = mysqli_fetch_array($result));
    {
        $nama = $user_data['nama_jenis'];
    }
?>

<html>
    <head>
        <title>Edit Data Jenis</title>
    </head>
    <body>
        <a href="">Home</a><br/><br/>
        <form name="update_user" action="edit.php" method="post">
            <table border="0">
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama_jenis" value=<?php echo $nama; ?>></td>
                </tr>
                <tr>
                    <td><input type="hidden" name="kode_jenis" value=<?php echo $_GET['kode_jenis'];?>></td>
                    <td><input type="submit" value="Update" name="update"></td>
                </tr>
            </table>
        </form>
    </body>
</html>