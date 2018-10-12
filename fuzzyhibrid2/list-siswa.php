<?php 
// require('koneksi.php');
$sql="select * from siswa ";

$result=mysql_query($sql)or die('Maaf, Query Siswa Salah:'.mysql_error());
$numrows=mysql_num_rows($result);
function show_fuzzy($show){
	global $result,$numrows;

	if($numrows>0){
		$i=1;
		while($row=mysql_fetch_array($result)):
			?>
				<tr>
					<td><?php echo $i; ?></td>
					<td><?php echo $row['nama_siswa'] ?></td>
					<td><?php echo $row['asal_sekolah'] ?></td>
					<td><?php echo $row['tmp_lahir'].", ".$row['tgl_lahir'] ?></td>
				
					
				<?php
					switch ($show) {
						case 'all':
							?>
							<td class="text-center" style="width:20%"><div class="btn-group">
								<a href="proses.php?form=siswa&a=edit&id=<?php echo $row['id_siswa'] ?>" class="btn btn-xs btn-success">Edit</a>
								<a href="proses.php?form=siswa&a=delete&id=<?php echo $row['id_siswa'] ?>" class="btn btn-xs btn-danger">Delete</a>
								<?php 
								$sql="select * from nilai where id_siswa='".$row['id_siswa']."'";
								$hasil=mysql_query($sql) or die ('Maaf Query Nilai Error: '.mysql_error());
								$numrows=mysql_num_rows($hasil);
								if($numrows>0){
									while($row=mysql_fetch_array($hasil)){
										// echo $row['id_nilai'];
										$url="proses.php?form=nilai&a=edit&id=".$row['id_nilai'];
										// header("Location:".$url);
										echo "<a href='".$url."' class='btn btn-xs btn-primary'>Nilai</a>";			
									}
								}else{
									echo "<a href='#' class='btn btn-xs btn-default'  disabled>Nilai</a>";			

								}

								 ?>
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
			$i++;
		endwhile;
	}else{
		?>
		<tr><td colspan="6" class="text-center">Tidak ada data dalam database</td></tr>
		<?php
	}
}


?>

