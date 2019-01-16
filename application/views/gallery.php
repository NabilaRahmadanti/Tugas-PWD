<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/gallery.css" alt="">
    <title>Profil Admin</title>
    <style>
        .judul {
            margin-bottom: 51px;
            font-size: larger;
            margin-top: 35px;
        }
    </style>
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

    <h1>My Galeri</h1>
    
    <div class=malasngoding-slider>
		<div class=isi-slider>
			<img src="<?=base_url()?>assets/ft1.jpg" alt="Gambar 1">
			<img src="<?=base_url()?>assets/ft2.jpg" alt="Gambar 2">
            <img src="<?=base_url()?>assets/ft3.jpg" alt="Gambar 3">
            <img src="<?=base_url()?>assets/ft6.jpg" alt="Gambar 6">
		</div>
	</div>
    
</body>
</html>