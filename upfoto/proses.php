<?php
include "koneksi.php";

if (isset($_POST['aksi'])) {
    if ($_POST['aksi'] == "add") {
        $foto = $_FILES['foto']['name'];
        $loc = "foto/";
        $tmpFiles =$_FILES['foto']['tmp_name'];
        move_uploaded_file($tmpFiles, $loc.$foto);
        $query = "INSERT INTO upfoto (foto)
        VALUES ('$foto')";
        mysqli_query($conn, $query);
    }
}

// header("location:index.php");
?>