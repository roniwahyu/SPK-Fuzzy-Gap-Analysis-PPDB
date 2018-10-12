<?php 
$id= isset($_GET['id']) ? $_GET['id'] : '';
					if(!empty($id) || isset($id)){
						$sqlnet="select * from ppdb where id_ppdb='$id'";
						$ppdb=mysql_query($sqlnet)or die('Query PPDB Error:'.mysql_error());
						while($row=mysql_fetch_array($ppdb)){
							$idsiswa=$row['id_siswa'];
							$id=$row['id_ppdb'];
							$tpa=$row['tpa'];
							$jalur=$row['jalur'];
							$nilai=$row['nilai'];
							$tgldaftar=$row['tgl_daftar'];	
							$pilihan1=$row['pilihan1'];	
							$pilihan2=$row['pilihan2'];	
							
						}
					}
 ?>
<form action="proses.php" method="POST" role="form">
				<legend>Form PPDB</legend>
				<input type="hidden" name="form" value="ppdb">
				<input type="hidden" name="id_ppdb" value="<?php echo (!empty($id)?$id:''); ?>">
			
				<div class="form-group"><label for="id_siswa">Siswa</label>
					<div class="input-group">
 		<span class="input-group-btn">
        					<a class="btn btn-success " href="siswa.php"><i class="glyphicon glyphicon-plus"></i></a>

      </span>	
					<select name="id_siswa" id="id_siswa" class="form-control" required="required">
						<option value='0'>Pilih Siswa</option>
						<?php 
						
							$sql="select * from siswa";
							$hasil=mysql_query($sql) or die("Query Error:".$sql);
							if($hasil==true){
								while($row=mysql_fetch_array($hasil)){
									if(empty($idsiswa)){
										echo "<option value='".$row['id_siswa']."'>".$row['nama_siswa']."</option>";
									}elseif(!empty($idsiswa)){
										if($row['id_siswa']==$idsiswa){
									// }elseif($idsiswa==$row['id_siswa']){
									// }else{
										echo "<option value='".$idsiswa."' selected='selected'>".$row['nama_siswa']."</option>";
										$idsiswa='';
										}else{
										echo "<option value='".$idsiswa."'>".$row['nama_siswa']."</option>";
	
										}

									}
								}
							}
						
						 ?>
						
					</select>
					 
</div>
		
					 
				</div>
				
				<div class="form-group">
					<label for="tpa">Nilai TPA</label>
					<input name="tpa" type="text" class="form-control" id="tpa" required placeholder="Masukkan Nilai TPA" value="<?php echo (!empty($tpa)?$tpa:''); ?>">
				</div>
				<div class="form-group">
					<label for="jalur">Jalur Masuk</label>
					<select name="jalur" id="jalur" class="form-control" required="required">
						<option value='0'>Pilih Jalur Masuk</option>
						
							<?php if(isset($jalur)): ?>
								<?php if($jalur==33.3): ?>
								<option value='33.3' selected='selected'>Beasiswa Kurang Mampu </option>
								<option value='66.6'>Reguler </option>
								<option value='100'>Prestasi </option>
								<?php elseif($jalur==66.6): ?>
								<option value='33.3' >Beasiswa Kurang Mampu </option>
								<option value='66.6' selected='selected'>Reguler </option>
								<option value='100'>Prestasi </option>
								<?php elseif($jalur==100): ?>
								<option value='33.3' >Beasiswa Kurang Mampu </option>
								<option value='66.6' >Reguler </option>
								<option value='100' selected='selected'>Prestasi </option>
								<?php endif; ?>
							<?php else: ?>
							<option value='33.3'>Beasiswa Kurang Mampu </option>
							<option value='66.6'>Reguler </option>
							<option value='100'>Prestasi </option>
							<?php endif; ?>
							
					
					</select>
				</div>
				<div class="form-group">
					<label for="nilai">Nilai UN</label>
					<input name="nilai" type="text" class="form-control" id="nilai" required placeholder="Masukkan Nilai UN Calon Siswa" value="<?php echo (!empty($nilai)?$nilai:''); ?>">
				</div>
				<?php $array_pilihan=array('IPA','IPS','Bahasa'); ?>
				
				<div class="form-group">
					<label for="tgldaftar">Tanggal Daftar</label>
					<input name="tgldaftar" type="text" class="form-control" id="tgldaftar" required placeholder="Masukkan Tanggal Daftar Calon Siswa" value="<?php echo (!empty($tgldaftar)?$tgldaftar:''); ?>">
				</div>
				
				
			
				<button name="<?php echo !empty($id)?'save':'submit'; ?>" type="submit" class="btn btn-primary">Submit</button>
				<a href="ppdb.php" class="btn btn-warning">Batal</a>
			</form>