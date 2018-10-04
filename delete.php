<?php
    require_once("db.php");

    $id = $_GET['id'];

    $sql = "DELETE FROM siswa WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        header("location: list.php");
    }else {
        echo "Error: " . $sql . "<br?" . mysqli_error($conn);
    }

    mysqli_close($conn);
?>