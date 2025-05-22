<?php
session_start();
require_once "koneksi.php";
include "library.php";
head('Sistem Pakar Diagnosa Penyakit Pulpitis Pada Gigi Manusia',1);
style(1); ?>
<body style="background-image: url('gambar/bg-gigi.png'); background-size: cover; background-position: center; background-repeat: no-repeat;">
<?php
menu();
?>
<?php
include "template/kiri.php";
?>

<div style=" font-family:serif;" >
<h1><center><small></small></center></h1>
  <p align='justify'>
<center><strong></strong></center>
  <p align='justify'>

    <!-- Slideshow Container -->
    <div class="slideshow-container" class="gambar-page">
        <div class="slides">
            <img src="gambar/gigi01.png" class="slide img-responsive" alt="Slide 1">
            <img src="gambar/gigi02.png" class="slide img-responsive" alt="Slide 2">
            <img src="gambar/gigi03.png" class="slide img-responsive" alt="Slide 3">
            <img src="gambar/gigi04.png" class="slide img-responsive" alt="Slide 4">
            <img src="gambar/gigi05.png" class="slide img-responsive" alt="Slide 5">
        </div>
    </div>

    <br>
<b>Salam Kesehatan Gigi !</b>
<br/>
<t><t>Pencegahan yang harus anda kenali, hindari makanan yang terlalu panas atau dingin, tingkatkan kebersihan mulut dengan menyikat gigi setelah makan dan sebelum tidur, jangan menggosok gigi terlalu keras sebab bisa berdampak buruk, menjaga pola makan sehat dengan kadar karbohidrat yang cukup.
<br/>
<br/>
    <b>Seberapa umum kondisi pulpitis terjadi?</b>
<br/>
Kondisi ini cukup umum terjadi. Sering kali terjadi pada pasien yang kurang menjaga kebersihan gigi dan mulut serta pasien dengan sayatan medis pada rongga mulut. Selain menyebabkan rasa sakit dan tidak nyaman, radang pulpa gigi ini dapat menyebar dan menyebabkan
 komplikasi yang berpotensi mengancam nyawa, seperti infeksi pada ruang fasia dalam di kepala dan leher. Pulpitis dapat ditangani dengan mengurangi faktor-faktor risiko. Diskusikan dengan dokter untuk informasi lebih lanjut.

<br/>
<br/>
<b>Apa yang menyebabkan pulpitis itu terjadi?</b>
<br/>
Pulpitis tidak hanya disebabkan oleh bakteri, tapi juga akibat trauma atau cedera pada gigi atau rahang yang membuka rongga pulpa dan mengakibatkan bakteri masuk. Beberapa penyebab pulpitis adalah sebagai berikut: 
    <p>Infeksi bakteri
Cedera saat operasi gigi dan mulut
Trauma, misalnya akar atau crown (gigi tiruan) yang retak serta abrasi gigi. Bisa juga disebabkan oleh bruxism, yaitu kebiasaan menggemeretakkan atau menggesekkan gigi saat tidur.
Kecacatan bentuk gigi</p>

<br/>
Dalam pengumpulan data kami mengambil data dari dokter spesalis gigi yaitu Drg.Fahreni
</p>
</div>

<?php
include "template/kanan.php";
include "template/footer.php";
?>

<!-- Sertakan file CSS dan JS eksternal -->
<link rel="stylesheet" href="style/slideshow.css">
<script src="bootstrap/js/slideshow.js"></script>
