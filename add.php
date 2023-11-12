<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>CRUD PHP | Add</title>
</head>
<body class="p-3">
    <a class= "btn btn-success" href="index.php">Kembali ke Index</a>
    <form action="add.php" method="post">
        <table class="table table-striped table-hover">
            <tr>
                <td>Nama Barang</td>
                <td><input type="text" name="nama_barang"></td>
            </tr>
            <tr>
                <td>Jenis Barang</td>
                <td><input type="text" name="jenis_barang"></td>
            </tr>
            <tr>
                <td>Harga Barang</td>
                <td><input type="text" name="harga_barang"></td>
            </tr>
            <tr>
                <td></td>
                <td><button class="btn btn-success" type="submit" name="submit">Simpan</button></td>
            </tr>
        </table>
    </form>

    <?php
    if(isset($_POST["submit"])){
        $nama_barang = $_POST["nama_barang"];
        $jenis_barang = $_POST["jenis_barang"];
        $harga_barang = $_POST["harga_barang"];

        //gunakan file config.php
        include_once("config.php");

        //ambil data dan simpan ke dalam variabel result
        $result = mysqli_query($conn, "INSERT INTO tb_barang(nama_barang,jenis_barang,harga_barang) VALUES ('$nama_barang','$jenis_barang','$harga_barang')");

        //tampilkan pesan
        echo "Barang Telah Ditambahkan";
    }   
    ?>

</body>
</html>