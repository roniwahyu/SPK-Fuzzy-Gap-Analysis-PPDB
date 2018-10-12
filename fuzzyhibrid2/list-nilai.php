<?php 
// require('koneksi.php');
$sql="select * from nilai a left join siswa b on a.id_siswa=b.id_siswa ";

$result=mysql_query($sql)or die('Maaf, Query Nilai Salah: '.mysql_error());
$numrows=mysql_num_rows($result);
// show_fuzzy('all');

function show_fuzzy($show){
	global $result,$numrows;

	if($numrows>0){
		while($row=mysql_fetch_array($result)):
			?>
				<tr>
					<td><?php echo $row['id_nilai'] ?></td>
					<td><?php echo $row['nama_siswa'] ?></td>
					<td><?php echo $row['nilai_tpa'] ?></td>
					<td><?php echo $row['nilai_un'] ?></td>
					<td><?php echo $row['ipa1'] ?></td>
					<td><?php echo $row['ipa2'] ?></td>
					<td><?php echo $row['ipa3'] ?></td>
					<td><?php echo $row['ipa4'] ?></td>
					<td><?php echo $row['ipa5'] ?></td>
					<td><?php echo $row['ips1'] ?></td>
					<td><?php echo $row['ips2'] ?></td>
					<td><?php echo $row['ips3'] ?></td>
					<td><?php echo $row['ips4'] ?></td>
					<td><?php echo $row['ips5'] ?></td>
					<td><?php echo $row['bind1'] ?></td>
					<td><?php echo $row['bind2'] ?></td>
					<td><?php echo $row['bind3'] ?></td>
					<td><?php echo $row['bind4'] ?></td>
					<td><?php echo $row['bind5'] ?></td>
					
				<?php
					switch ($show) {
						case 'all':
							?>
							<td><div class="btn-group">
								<a href="proses.php?form=nilai&a=edit&id=<?php echo $row['id_nilai'] ?>" class="btn btn-xs btn-success">Edit</a>
								<a href="proses.php?form=nilai&a=delete&id=<?php echo $row['id_nilai'] ?>" class="btn btn-xs btn-danger">Delete</a>
							</div></td>
							<?php
							# code...
							break;
						case 'no-edit':
							?>
								<td></td>
							<?php
						break;
						
					}
				?>
				</tr>
			<?php
		endwhile;
	}else{
		?>
		<tr><td colspan="7" class="text-center">Tidak ada data dalam database</td></tr>
		<?php
	}
}


?>

