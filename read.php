<?php
$koneksi = mysqli_connect("localhost", "root", "", "siliwangi");
$statistik = query("SELECT * FROM daftar");

function query($data){
    global $koneksi;

    $hasil = mysqli_query($koneksi, $data);
    $rows = [];
    while ($row = mysqli_fetch_assoc($hasil)){
        $rows[] = $row;
    }

    return $rows;
}
?>
<?php
date_default_timezone_set("Asia/Bangkok");
?>


<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <!-- <title> Responsive Drop Down Navigation Menu | CodingLab </title>-->
    <link rel="stylesheet" href="stylepengaduan.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="website icon" type="png" href="assets/siliwangi.png">
    <title>Puskesmas Siliwangi | Pengaduan</title>
</head>

<body>
    <nav>
        <div class="navbar">
            <i class='bx bx-menu'></i>
            <div class="logo-garut"><img src="assets/grt.png"></img>
            </div>
            <div class="nav-links">
                <div class="sidebar-logo">
                    <span class="logo-name">siliwangi</span>
                    <i class='bx bx-x'></i>
                </div>
                <ul class="links">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="tentang.html">Tentang Kami</a></li>
                    <li>
                        <a href="#">Pelayanan</a>
                        <i class='bx bxs-chevron-down htmlcss-arrow arrow  '></i>
                        <ul class="htmlCss-sub-menu sub-menu">
                            <li><a href="jenispel.html">Jenis Pelayanan</a></li>
                            <li><a href="syaratpel.html">Syarat Pelayanan</a></li>
                            <li><a href="alurpel.html">Alur Pelayanan</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Pengaduan</a>
                        <i class='bx bxs-chevron-down js-arrow arrow '></i>
                        <ul class="js-sub-menu sub-menu">
                            <li><a href="alurpeng.html">Alur Pengaduan</a></li>
                            <li><a href="kontakpeng.html">Kontak Pengaduan</a></li>
                            <li><a href="pengaduan.html">Pengaduan Disini</a></li>
                        </ul>
                    </li>
                    <li><a href="artikel.html">Artikel</a></li>
                    <li><a href="daftar.php">Daftar Pasien</a></li>
                </ul>
            </div>
            <div class="logo-pkm">
                <img src="assets/pkm.png">
            </div>
        </div>
    </nav>
    <script src="script.js"></script>

    <!--Struktur body-->
    <h1>Riwayat Pendaftaran Pasien</h1>
    <table border=1 cellpadding=10 cellspacing=0>
        <tr>
            <th>Nama</th>
            <th>NIK</th>
            <th>Umur</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Telepon</th>
            <th>Alamat</th>
            <th>Waktu</th>
        </tr>
        <?php $y=1?>
        <?php foreach($statistik as $data):?>
        <tr>
            <td><?php echo $y; ?></td>
            <td><?php echo $data["nama"]; ?></td>
            <td><?php echo $data["nik"]; ?></td>
            <td><?php echo $data["umur"]; ?></td>
            <td><?php echo $data["jeniskelamin"]; ?></td>
            <td><?php echo $data["agama"]; ?></td>
            <td><?php echo $data["telepon"]; ?></td>
            <td><?php echo $data["alamat"]; ?></td>
            <td><?php echo $data["submit"]; ?></td>
        </tr>
        <?php $y++;?>
        <?php endforeach;?>
    </table>
    <br>
    <p>Jumlah Kunjungan : <?php echo ($y - 1);?></p>
    <a href="prosesdaftar.php">Daftar lagi</a>
    <!--close body-->

    <!--footer-->
    <div id="contact">
        <div class="wrapper">
            <div class="footer">
                <div class="footer-section">
                    <h3>About</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sint, culpa!</p>
                </div>
                <div class="footer-section">
                    <h3>Contact</h3>
                    <p>Alamat : Jl. Siliwangi, No. 13, Rt.13 Rw.08, Pakuwon, Kec. Garut Kota, Kabupaten Garut, Jawa
                        Barat</p>
                    <p>NoTelp : (0262)2800763</p>
                    <p>Kode Pos: 44117</p>
                    <p>Email : pkmsiliwangi@gmail.com</p>
                </div>
                <div class="footer-section">
                    <h3>Social Media</h3>
                    <div class="logo-social">
                        <ul>
                            <li>
                                <a href="https://www.facebook.com/PKMSILIWANGI/">
                                    <img src="assets/vector/fb.png">
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/puskesmassiliwangi/?hl=en">
                                    <img src="assets/vector/ig.png"></a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/@uptpuskesmassiliwangi5472">
                                    <img src="assets/vector/yt.png">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="copyright">
            <div class="wrapper">
                &copy; 2023. <b>Puskesmas Siliwangi</b> All Rights Reserved.
            </div>
        </div>
    </div>
    <!--close footer-->
</body>

</html>