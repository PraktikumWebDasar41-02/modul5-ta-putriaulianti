<!DOCTYPE html>
<html>
<head>
	<title>TA 5 Putri Aulianti Maulida Rumi</title>
</head>
<body>
	<h1><center>Form Data Mahasiswa</center></h1>
	<table align="center" cellpadding="5">
		<form method="POST">
			<tr>
				<td>NIM</td>
				<td><input type="text" name="nim" size="36" placeholder="Masukkan NIM"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" size="36" placeholder="Masukkan Nama"></td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td><input type="date" name="tanggal" size="36"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>
					<input type="radio" name="jk" value="Laki-laki"> Laki-laki <br>
					<input type="radio" name="jk" value="Perempuan"> Perempuan
				</td>
			</tr>
			<tr>
				<td>Program Studi</td>
				<td><select name="programstudi">
					<option>---Pilih---</option>
					<option value="D3 Teknologi Telekomunikasi"> D3 Teknologi Telekomunikasi </option>
					<option value="D3 Rekayasa Perangkat Lunak Aplikasi"> D3 Rekayasa Perangkat Lunak Aplikasi </option>
					<option value="D3 Sistem Informasi"> D3 Sistem Informasi </option>
					<option value="Sistem Informasi Akuntansi"> D3 Sistem Informasi Akuntansi </option>
					<option value="D3 Teknologi Komputer"> D3 Teknologi Komputer </option>
					<option value="D3 Manajemen Pemasaran"> D3 Manajemen Pemasaran </option>
					<option value="D3 Perhotelan"> D3 Perhotelan </option>
					<option value="S1 Terapan Teknologi Rekayasa Multimedia"> S1 Terapan Teknologi Rekayasa Multimedia </option>
					<option value="S1 Teknik Telekomunikasi"> S1 Teknik Telekomunikasi </option>
					<option value="S1 Teknik Elektro"> S1 Teknik Elektro </option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Fakultas</td>
				<td><select name="fakultas">
					<option>---Pilih---</option>
					<option value="Fakultas Ilmu Terapan"> Fakultas Ilmu Terapan </option>
					<option value="Fakultas Teknik Elektro"> Fakultas Teknik Elektro </option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email" size="36" placeholder="example@gmail.com"></td>
			</tr>
			<tr>
				<td>Komentar</td>
				<td><textarea name="komentar"></textarea></td>
			</tr>
			<tr>
				<td colspan="3" align="center"><input type="submit" name="submit" value="Submit" style="margin-top: 10px; width: 100%; height: 30px; border-radius: 5px; background-color: black; border-width: 0px; color: white; cursor: pointer;"">
				</td>
			</tr>
		</form>
	</table>
</body>
</html>


<?php
	include 'konek.php';

	if(isset($_POST['submit'])) {

		if(strlen($_POST['nim'])==10 && $_POST['nim']!="" && is_numeric($_POST['nim'])) {
			$id = $_POST['nim'];
		} else {
			echo "NIM yang anda masukkan kurang <br>";
		}
		
		if (strlen($_POST['nama'])>30 || $_POST['nama']=="") {
			echo "Nama yang anda masukkan tidak valid <br>";
		} else {
			$nm = $_POST['nama'];
		}

		$tgl = $_POST['tanggal'];

		if(isset($_POST['jk'])) {
			$jenk = $_POST['jk'];
		}

		$ps = $_POST['programstudi'];
		$fklts = $_POST['fakultas'];
		
		if (!strpos($_POST['email'], "@") || !strpos($_POST['email'], ".com")) {
			echo "Email yang anda masukkan tidak valid <br>";
		} else {
			$mail = $_POST['email'];
		}

		if ($_POST['komentar']>20 || $_POST['komentar']=="") {
			echo "Komentar yang anda masukkan tidak valid";
		} else {
			$komen = $_POST['komentar'];
		}


		if(isset($id) && isset($nm) && isset($tgl) && isset($jenk) && isset($ps) && isset($fklts) && isset($mail) && isset($komen)) {
			session_start();
			$_SESSION['nimm'] = $id;
			$query = mysqli_query($conn, "INSERT INTO t_ta5 (nim, nama, tanggal, jk, programstudi, fakultas, email, komentar) VALUES ('$id','$nm','$tgl','$jenk','$ps','$fklts','$mail','$komen')");
			$queryy = mysqli_query($conn, "SELECT * FROM t_ta5");
			$arr = mysqli_fetch_array($queryy);

			if(isset($query)) {
				echo "DATA SAVED";
				header("Location : 2.php");
			} else {
				echo "DATA TIDAK TERSIMPAN";
			}
		}
	}
?>