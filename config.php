<?php
$host = 'localhost';
$db = 'toko_sembako';
$user = 'aryadi';
$pwd = '12345';

$conn = mysqli_connect($host, $user, $pwd, $db); //true | false

if (!$conn) {
    die('Gagal terhubung ke database'. mysqli_connect_error());
}