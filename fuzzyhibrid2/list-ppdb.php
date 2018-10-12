<?php 
// require('koneksi.php');
$sql="select * from ppdb a left join siswa b on a.id_siswa=b.id_siswa ";

$result=mysql_query($sql)or die('Maaf, Query PPDB Salah: '.mysql_error());
$numrows=mysql_num_rows($result);
// show_fuzzy('all');

function show_fuzzy($show){
	global $result,$numrows;

	if($numrows>0){
		while($row=mysql_fetch_array($result)):
			?>
				<tr>
					<td><?php echo $row['id_ppdb'] ?></td>
					<td><?php echo $row['nama_siswa'] ?></td>
					<td><?php echo $row['tpa'] ?></td>
					<td><?php echo $row['jalur'] ?></td>
					<td><?php echo $row['nilai'] ?></td>
					<td><?php echo $row['tgl_daftar'] ?></td>
					
						
					
					
				<?php
					switch ($show) {
						case 'all':
							?>
							<td><div class="btn-group">
								<a href="proses.php?form=ppdb&a=edit&id=<?php echo $row['id_ppdb'] ?>" class="btn btn-xs btn-success">Edit</a>
								<a href="proses.php?form=ppdb&a=delete&id=<?php echo $row['id_ppdb'] ?>" class="btn btn-xs btn-danger">Delete</a>
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

