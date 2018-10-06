<?php

	session_start();
	include 'konek.php';
	$nim = $_SESSION['nimm'];
	$query = mysqli_query($conn, "SELECT * FROM t_ta5 WHERE nim = '$nim'");
	if($arr = mysqli_fetch_array($query)) {
		$nimx = $arr['nim'];
		$namax = $arr['nama'];
		$tanggalx = $arr['tanggal'];
		$jkx = $arr['jk'];
		$programstudix = $arr['programstudi'];
		$fakultasx = $arr['fakultas'];
		$emailx = $arr['email'];
		$komentarx = $arr['komentar'];
	} else {
		echo "GAGAL";
	}
?>


<form method="POST">
	<table>
		<tr>
			<td>NIM</td>
			<td><?php echo $nimx."<br>"; ?></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td><?php echo $namax."<br>"; ?></td>
		</tr>
		<tr>
			<td>Tanggal Lahir</td>
			<td><?php echo $tanggalx."<br>"; ?></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td><?php echo $jkx."<br>"; ?></td>
		</tr>
		<tr>
			<td>Program Studi</td>
			<td><?php echo $programstudix."<br>"; ?></td>
		</tr>
		<tr>
			<td>Fakultas</td>
			<td><?php echo $fakultasx."<br>"; ?></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><?php echo $emailx."<br>"; ?></td>
		</tr>
		<tr>
			<td>Komentar</td>
			<td><?php echo $komentarx."<br>"; ?></td>
		</tr>
		<tr>
			<td><input type="submit" name="keluar" value="Input Baru"> 
			</td>
		</tr>
	</table>
</form>

<?php 
	if (isset($_POST['keluar'])) {
		session_destroy();
		header("Location : 1.php");
	}
?>