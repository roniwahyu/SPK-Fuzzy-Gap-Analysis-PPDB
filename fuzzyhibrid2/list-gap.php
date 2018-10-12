<?php 
// require('koneksi.php');
$sql="select * from standard_gap ";

$result=mysql_query($sql)or die('Maaf, Query GAP Salah:'.mysql_error());
$numrows=mysql_num_rows($result);
function show_fuzzy($show){
	global $result,$numrows;

	if($numrows>0){
		$i=1;
		while($row=mysql_fetch_array($result)):
			?>
				<tr>
					<td><?php echo $i; ?></td>
					<td><?php echo $row['minat'] ?></td>
					<td><?php echo $row['a_nun'] ?></td>
					<td><?php echo $row['b_rapor'] ?></td>
					<td><?php echo $row['c_tpa'] ?></td>
					
				<?php
					switch ($show) {
						case 'all':
							?>
							<td><div class="btn-group">
								<a href="proses_baru.php?form=gap&a=edit&id=<?php echo $row['id_gap'] ?>" class="btn btn-xs btn-success">Edit</a>
								<a href="proses_baru.php?form=gap&a=delete&id=<?php echo $row['id_gap'] ?>" class="btn btn-xs btn-danger">Delete</a>
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

