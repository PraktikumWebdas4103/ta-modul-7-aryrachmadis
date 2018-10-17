<!DOCTYPE html>
<html>
<head>
	<title>Mahasiswa Baru</title>
</head>
<body>

<form action="" method="POST">
	<table>
		<tr>
			<td><b>Mahasiswa Baru</b></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama"></td>
		</tr>

		<tr>
			<td>NIM</td>
			<td>:</td>
			<td><input type="text" name="nim"></td>
		</tr>

		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td><input type="radio" name="jeniskelamin" value="Pria" checked>Pria<br/>  
 				<input type="radio" name="jeniskelamin" value="Wanita">Wanita<br/></td>
		</tr>

		<tr>
			<td>Program Studi</td>
			<td>:</td>
			<td>
			<select name="programstudi">
 		    <option value="D3 Manajement Informatika">D3 Manajement Informatika</option>
 		    <option value="D3 Teknik Informatika">D3 Teknik Informatika</option>
 		    <option value="D3 Sistem Informasi">D3 Sistem Informasi</option>
			</select>
		</td>
		</tr>

		<tr>
			<td>Fakultas</td>
			<td>:</td>
			<td><select name="fakultas">
 		    <option value="Fakultas Ilmu Terapan">Fakultas Ilmu Terapan</option>
 		    <option value="Fakuktas Informatika">Fakultas Informatika</option>
 		    <option value="Fakultas Apa aja">Fakultas Industri Kreatif</option></td>
		</tr>

		<tr>
			<td>Asal</td>
			<td>:</td>
			<td>
			<textarea name="asal"></textarea><br />
		<tr>

		<tr>
			<td>Moto Hidup</td>
			<td>:</td>
			<td>
			<textarea name="motohidup"></textarea>
		<tr>
<br>
			<td><input type="submit" name="submit" value="Submit"></td>
		</tr>
	</table>
</form>

</body>
</html>

<?php
if (isset($_POST['submit'])){
include 'koneksi.php';
$nama= $_POST['nama'];
$nim = $_POST['nim'];
$jeniskelamin = $_POST['jeniskelamin'];
$programstudi = $_POST['programstudi'];
$fakultas = $_POST['fakultas'];
$asal = $_POST['asal'];
$motohidup = $_POST['motohidup'];
$sql ="INSERT INTO jurnal7 (nama,nim,jeniskelamin,programstudi,fakultas,asal,motohidup) values ('$nama','$nim','$jeniskelamin','$programstudi','$fakultas','$asal','$motohidup')";
if (mysqli_query($con,$sql)){
	header("location: http://localhost/jurnal7/lihatdata.php");
}else{
	echo "Gagal Regis";
}
}
?>
