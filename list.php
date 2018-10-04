<?php
    require_once("db.php");
?>

<table border=1>
	<thead>
		<td>Nama</td>
		<td>NIM</td>
		<td>Tanggal</td>
	</thead>
	<tbody>
		<?php
		$sql = "SELECT * FROM siswa";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			//output datanya
			while ($row = mysqli_fetch_assoc($result)) {
				?>
				<tr>
				<td><?php echo $row['nama']?></td>
				<td><?php echo $row['nim']?></td>
				<td><?php echo $row['tgl_lahir']?></td>
				<td><a href="delete.php?id=<?php echo $row['id']?>">Hapus</a> | <a href="formupdate.php?id=<?php echo $row['id']?>">Update</a></td>
				</tr>
				<?php
			}
		}else {
			echo "0 Result";
		}
		mysqli_close($conn);
		?>
	</tbody>
</table>
