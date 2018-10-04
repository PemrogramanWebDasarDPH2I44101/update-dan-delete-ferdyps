<?php
    require_once("db.php");
    $id = $_GET['id'];

    $sql = mysqli_query($conn, "SELECT * FROM siswa WHERE id = '$id'");
    $row = mysqli_fetch_assoc($sql);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Update Data</title>
    </head>
    <body>
        <form method="post">
        Nama : <input type="text" name="nama" value="<?php echo $row['nama'] ?>"><br><br>
        NIM : <input type="text" name="nim" value="<?php echo $row['nim'] ?>"><br><br>
        Tanggal Lahir : <input type="date" name="tgl_lahir" value="<?php echo $row['tgl_lahir'] ?>"><br><br>
        <input type="submit" name="submit" value="Submit">
        </form>
    </body>
</html>
<?php
    if (isset($_POST['nama'])) {
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $tgl_lahir = $_POST['tgl_lahir'];

        $sql = "UPDATE siswa SET nama='$nama', nim='$nim', tgl_lahir='$tgl_lahir' WHERE id='$id'";

        if (mysqli_query($conn, $sql)) {
            header("location: list.php");
        }else {
            echo "Error: " . $sql . "<br?" . mysqli_error($conn);
        }
    
        mysqli_close($conn);
    }
?>