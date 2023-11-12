<?php
//gunakan file config.php
include_once("config.php");

//ambil data dan simpan ke dalam variabel result
$result = mysqli_query($conn, "SELECT * FROM tb_barang ORDER BY jenis_barang ASC");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>CRUD</title>
</head>

<body class="p-3">
    <h1>Database sederhana "TOKO SEMBAKO"</h1>
    <a class="btn btn-success" href="add.php">Tambah Barang</a>
    <table class="table table-striped table-hover">
        <tr>
            <th>Nama Barang</th>
            <th>Jenis Barang</th>
            <th>Harga Barang</th>
            <th>Aksi</th>
        </tr>

        <?php
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row["nama_barang"] . "</td>";
            echo "<td>" . $row["jenis_barang"] . "</td>";
            echo "<td>" . $row["harga_barang"] . "</td>";
            echo "<td>
                    <a class='btn btn-primary' href='update.php?id=$row[id]'>Update</a>
                    <a class='btn btn-danger' href='delete.php?id=$row[id]'>Delete</a> </td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>