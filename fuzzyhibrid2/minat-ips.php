	
	<?php 
	$sql="select * from `20-peminatan-ips`";
	$hasil=mysql_query($sql)or die('Query Fuzzy Sugeno Error:'.mysql_error());
	?>
	<h4>Peminatan IPS<a class="no-print btn btn-primary btn-sm pull-right" href="profile-cetak.php?minat=ips">Cetak Peminatan IPS</a></h4>
	<hr>
	<table class="table table-hover table-bordered table-striped table-condensed small">
		<thead>
			<tr class=''>
				<th>No.</th>
				<th>Nama Siswa</th>
				<th>Asal Sekolah</th>
				<th>JK</th>
				<th>Kelayakan</th>
				<th>Jalur Masuk</th>
				<th>A (UN)</th>
				<th>B (Rapor IPS)</th>
				<th>C (TPA)</th>
				<th>NCF</th>
				<th>SCF</th>
				<th>N</th>
				<th>Rank</th>
			</tr>
		</thead>
		<tbody>
			
		
	<?php
	if($hasil!=null){
		$i=1;
		
		while($row=mysql_fetch_array($hasil)){
			echo "<tr>";
			echo "<td>".$i."</td>";
			echo "<td>".$row['nama_siswa']."</td>";
			echo "<td>".$row['asal_sekolah']."</td>";
			echo "<td>".$row['j_kelamin']."</td>";
			echo "<td>".$row['fuzzy_output']."</td>";
			echo "<td>".($row['jalur']==33.3?'Kurang Mampu':($row['jalur']==66.6?'Reguler':'Prestasi'))."</td>";

			echo "<td>".$row['aspek_a_un']."</td>";
			echo "<td>".$row['aspek_b_rapor']."</td>";
			echo "<td>".$row['aspek_c_tpa']."</td>";
			echo "<td>".$row['ncf_ips']."</td>";
			echo "<td>".$row['scf_ips']."</td>";
			echo "<td>".$row['nilai_n']."</td>";
			echo "<td class='text-center'>";
			if($i==1){
				echo "<span class='label label-success'>".$i."</label>";
			}elseif($i==2){
				echo "<span class='label label-warning'>".$i."</label>";
			}elseif($i==3){
				echo "<span class='label label-danger'>".$i."</label>";
			}else{
				echo "<span class='label label-default'>".$i."</label>";
			}
			echo "</td>";
			echo "</tr>";
			$i++;
		}
	}
	?>
		</tbody>
	</table>