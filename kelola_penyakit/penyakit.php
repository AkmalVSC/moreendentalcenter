<?php
session_start();
require_once "../koneksi.php";
include "../library.php";
cek_akses();
head('Daftar penyakit',2);
style(2); ?>
<link rel="stylesheet" href="style/penyakit.css">
<link rel="stylesheet" href="/pakar/style/slideshow.css">

<style type="text/css">
<!--
.style1 {font-family: Georgia, "Times New Roman", Times, serif}
-->
</style>
<body style="background-image: url('/pakar/gambar/bg-gigi.png'); background-size: cover; background-position: center; background-repeat: no-repeat;">
<?php
menu();
include "../template/kiri.php";
?>
<h1 class="style1">Daftar Penyakit</h1>
<?php
$kueri = mysqli_query($koneksi,"select * from penyakit");
$no=1;
?>
<a href="tambah.php" class="btn btn-success">Tambah Daftar Penyakit</a>
<table class="table table-condensed table-bordered">
<tr class="info">
	<td>No</td>
	<td>Nama Penyakit</td>
	<td>Keterangan</td>
	<td>Aksi</td>
</tr>
<?php
if(mysqli_num_rows($kueri) < 1) echo "<tr><td class='text-center' colspan=5><strong>Data penyakit Kosong...</strong></td></tr>";
		else {
			while ($isi=mysqli_fetch_array($kueri,MYSQLI_BOTH)){
				echo "
				<tr>
				<td>$no</td>
				<td>{$isi['nm_penyakit']}</td>
				<td>{$isi['keterangan']}</td>
				<td>
				<a href='edit.php?id_penyakit={$isi['id_penyakit']}' class='btn btn-primary'>Edit</a>
				<button type='button' class='btn btn-danger' data-toggle='modal' data-target='#konfirmasi{$isi['id_penyakit']}'>
				<span class='glyphicon glyphicon-remove'></span> Hapus
				</button>
				<div id='konfirmasi{$isi['id_penyakit']}' class='modal fade' role='dialog'><div class='modal-dialog'><div class='modal-content'>
				<div class='modal-header'>
				<button type='button' class='close' data-dismiss='modal'>&times;</button>
				<h4 class='modal-title'>Peringatan!</h4>
				</div>
				<div class='modal-body'>
				<p>Apakah Anda yakin ingin menghapus penyakit <b>{$isi['nm_penyakit']}</b>?</p>
				</div>
				<div class='modal-footer float-right'>
				<a href='hapus.php?id_penyakit={$isi['id_penyakit']}' class='btn btn-danger'>    Ya    </a>
				<button type='button' class='btn btn-default' data-dismiss='modal'>Tidak</button>
				</div></div></div></div>
				</td>
				</tr>
				";
				$no++;
				}
			}
?>
</table>
</body>
<?php
include "../template/kanan.php";
include "../template/footer.php";
?>
