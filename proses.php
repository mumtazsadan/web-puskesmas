<?php
$koneksi = mysqli_connect("localhost", "root", "", "siliwangi");

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
$keluhan = $_POST['keluhan'];
$submit = $_POST['submit'];

$query = "INSERT INTO pengaduan VALUES ('$nama','$alamat','$telepon','$keluhan','$submit')";

mysqli_query($koneksi, $query);
?>