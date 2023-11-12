<?php
    $id = $_GET['id'];
    //gunakan file config.php
    include_once("config.php");

    //delete data menggunakan query dan simpan ke dalam variabel result
    $result = mysqli_query($conn, "DELETE FROM tb_barang WHERE id=$id");

    //redirect ke halaman index
    header("Location: index.php");
?>