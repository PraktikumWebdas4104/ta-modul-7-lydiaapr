<?php 
include "koneksiDB.php";
$query = mysqli_query($conn,"SELECT * FROM mahasiswa ORDER BY nim ASC");
?>
<h1><b> DATA MAHASISWA </b></h1><hr/>
<form action="" method="post">
	<table border="1" cellpadding="0">
		<tr>
			<th>NO</th>
			<th>NIM</th>
			<th>NAMA</th>
			<th>AKSI</th>
		</tr>
		<?php if(mysqli_num_rows($query)>0){ ?>
		<?php 
		$no = 1;
		while ($data = mysqli_fetch_array($query)) {
		?>
		<tr>
			<td><<?php echo $no ?></td>
			<td><<?php echo $data ["nim"]; ?></td>
			<td><<?php echo $data ["nama"]; ?></td>
			<td>
				<a href="#">Delete</a>
				<a href="#">Update</a>
			</td>
		</tr>
		<?php $no++; } ?>
		<?php } ?>
	</table>
<br><input type="submit" name="tambahdata" value="INPUT DATA MAHASISWA BARU">
<form>
<?php 
	if(isset($_POST['tambahdata'])){
		header("location: input.php");
	} 
?>