<style type="text/css">
<!--
.style1 {font-family: Georgia, "Times New Roman", Times, serif}
-->
</style>
<body onLoad="print()">
	<link rel='stylesheet' href='../bootstrap/css/bootstrap.min.css'>
		
		<link rel='stylesheet' href='../bootstrap/css/style.css'>
		
		<script src='../bootstrap/js/jquery-3.1.1.js'></script>
		<script src='../bootstrap/js/bootstrap.min.js'></script>
<?php
@session_start();
require_once "../koneksi.php";

?>
 <table width="1000" border="0" align="center" cellpadding="5" cellspacing="0">
    <tr>
        <td align="center" style="border-bottom:2px #000 solid"><b>Sistem Pakar Diagnosa Penyakit Pulpitis Pada Gigi Manusia</b><br />
         <b>Praktek Gigi Drg.Moreen</b><br><b>Padang, Sumatera Barat, Indonesia</b></td>
      </tr>
    </tr>
    </table><br><br>
<h1 align="center" class="style1">Daftar Hasil Konsultasi</h1>
<?php
$id=@$_GET['id'];
if($id==''){


	if($_SESSION['id_tipe'] == 1) {
	$kueri = mysqli_query($koneksi,"select * from tbhasil_konsultasi,penyakit where tbhasil_konsultasi.id_penyakit=penyakit.id_penyakit;");
	}
	else{
	$kueri = mysqli_query($koneksi,"select * from tbhasil_konsultasi,penyakit where tbhasil_konsultasi.id_penyakit=penyakit.id_penyakit and tbhasil_konsultasi.username='{$_SESSION['username']}' group by tbhasil_konsultasi.tgl_hasil;");
	}
	
	
	}else{
	if($_SESSION['id_tipe'] == 1) {
	$kueri = mysqli_query($koneksi,"select * from tbhasil_konsultasi,penyakit where tbhasil_konsultasi.id_penyakit=penyakit.id_penyakit and tbhasil_konsultasi.tgl_hasil like '$id%' group by tbhasil_konsultasi.tgl_hasil;");
	}
	else{
	$kueri = mysqli_query($koneksi,"select * from tbhasil_konsultasi,penyakit where tbhasil_konsultasi.id_penyakit=penyakit.id_penyakit and tbhasil_konsultasi.username='{$_SESSION['username']}' and tbhasil_konsultasi.tgl_hasil like '$id%' group by tbhasil_konsultasi.tgl_hasil;");
	}
	}
$no=1;
?>

<br>
<table class="table table-condensed table-bordered" width="100%" border="1">
<tr class="info">
	<td>No</td>
<?php
if($_SESSION['id_tipe'] == 1) echo "<td>Username</td>";
?>
	<td>ID User</td>
	<td>Nama penyakit</td>
	<td>Waktu</td>
</tr>
<?php
if(mysqli_num_rows($kueri) < 1) echo "<tr><td class='text-center' colspan=3><strong>Data Hasil Konsultasi Kosong...</strong></td></tr>";
		else {
			while ($isi=mysqli_fetch_array($kueri,MYSQLI_BOTH)){
				echo "
				<tr>
				<td>$no</td>";
				if($_SESSION['id_tipe'] == 1) echo "<td>{$isi['username']}</td>";
				echo "
				<td>{$isi['id_user']}</td>
				<td>{$isi['nm_penyakit']}</td>
				<td>{$isi['tgl_hasil']}</td>
				</tr>
				";
				$no++;
				}
			}
?>
</table>

<?php
echo "<table align='right'>";
$tgl = date('d M Y');
echo "<tr><td>Dharmasraya, $tgl</tr></td>";

if($_SESSION['id_tipe'] == 1) {
echo "<tr><td>Dokter Gigi,</tr></td>";
echo "<tr><td><em>&nbsp;</em></tr></td>";
echo "<tr><td><em>&nbsp;</em></tr></td>";
	echo "<tr><td>Drg.Moreen</tr></td>";
	}
	else{
	echo "<tr><td>Member,</tr></td>";
echo "<tr><td><em>&nbsp;</em></tr></td>";
echo "<tr><td><em>&nbsp;</em></tr></td>";
echo "<tr><td>$_SESSION[username]</tr></td>";	
	}

echo "</table>";
?>

