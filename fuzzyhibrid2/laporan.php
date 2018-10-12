<?php 
require('koneksi.php'); //dibutuhkan file koneksi.php untuk koneksi ke database

include('header.php'); //termasuk file header.php
?>
<div class="container">
	<div class="row" style="margin-bottom:10px;">
		<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
			<h3>SISTEM REKOMENDASI PPDB</h3>
			<h4>Menggunakan Metode Fuzzy TSK dan Analisis Gap</h4>
			<hr>
		</div>
		<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
			<button type="button" class="print pull-right btn-lg btn btn-info no-print"><i class="glyphicon glyphicon-print"></i> Cetak</button>

		</div>
	</div>
	<?php 
	$sql="select * from `08-view-fuzzy-sugeno`";
	$hasil=mysql_query($sql)or die('Query Fuzzy Sugeno Error:'.mysql_error());
	?>
	<table class="table table-hover table-bordered table-striped table-condensed">
		<thead>
			<tr>
				<th>No.</th>
				<th>Nama Siswa</th>
				<th>Asal Sekolah</th>
				<th>Nilai TPA</th>
				<th>Jalur Pendaftaran</th>
				<th>Nilai UN</th>
				<th>Hasil Fuzzy Sugeno</th>
				<th class="no-print">Aksi</th>
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
			echo "<td>".$row['tpa']."</td>";
			echo "<td>".($row['jalur']==33.3?'Kurang Mampu':($row['jalur']==66.6?'Reguler':'Prestasi'))."</td>";
			echo "<td>".$row['nilai']."</td>";
			echo "<td>".$row['fuzzy_output']."</td>";
			echo "<td class='no-print'><div class='btn-group'><a class='btn btn-xs btn-success' href='proses.php?form=ppdb&a=edit&id=".$row['id_ppdb']."'><i class='glyphicon glyphicon-pencil'></i> Edit</a>
			<a class='btn btn-danger btn-xs' href='proses.php?form=ppdb&a=delete&id=".$row['id_ppdb']."'><i class='glyphicon glyphicon-remove'></i> Hapus</a></td>";
			echo "</tr>";
			$i++;
		}
	}
	?>
		</tbody>
	</table>


<?php
include('footer.php');

 ?>		
