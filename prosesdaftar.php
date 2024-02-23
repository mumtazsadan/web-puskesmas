<?php
$koneksi = mysqli_connect("localhost", "root", "", "siliwangi");

$nama = $_POST['nama'];
$nik = $_POST['nik'];
$umur = $_POST['umur'];
$jeniskelamin = $_POST['jeniskelamin'];
$agama = $_POST['agama'];
$telepon = $_POST['telepon'];
$alamat = $_POST['alamat'];
$submit = $_POST['submit'];

$query = "INSERT INTO daftar VALUES ('$nama','$nik','$umur','$jeniskelamin','$agama','$telepon','$alamat','$submit')";

mysqli_query($koneksi, $query);

if (isset($_POST["submit"])){
    header('Location: read.php');
    exit;
}
?>