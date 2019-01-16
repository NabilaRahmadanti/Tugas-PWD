<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beranda</title>
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/style.css">
</head>
<body style="background: #16A085;
background: -webkit-linear-gradient(to right, #F4D03F, #16A085);
background: linear-gradient(to right, #F4D03F, #16A085);">
    <header class="ob">
        <div class="atas">
            <div id="logo"><h2>Hello</h2></div>
            <nav>
                <ul>
                    <b>
                    <li><a href="<?=base_url()?>index.php/welcome/utama">Home</a></li>
                    <li><a href="<?=base_url()?>index.php/welcome/gallery">Gallery</a></li>
                    <li><a href="<?=base_url()?>index.php/welcome/contact">Contact</a></li>
                    <li><a href="<?=base_url()?>index.php/welcome/profile">Profile</a></li>
                    </b>
                </ul>
            </nav>
        </div>
    </header>
    <img style="width: 180px; margin-left: 42.5%; margin-top: 5%;" src="<?=base_url()?>assets/foto.png" alt="">
    <h1> Selamat Datang <?= $nama_lengkap?>
    <br>
    Berperilakulah seperti <?=$jenis_kelamin?>
    </h1>
    <p style="font-size: 18px; margin-left: 56px; margin: 39px;">Saya Nabila Rahmadanti Noviasari sekolah di SMK Telkom Malang</p>
</body>
</html>