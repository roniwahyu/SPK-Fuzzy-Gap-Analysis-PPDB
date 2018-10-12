<?php 
$bobotid= isset($_GET['id']) ? $_GET['id'] : '';
					if(!empty($bobotid) || isset($bobotid)){
						$sqlnet="select * from bobot_profile where id_bobot='$bobotid'";
						$bobots=mysql_query($sqlnet)or die('Query net Error:'.mysql_error());
						while($row=mysql_fetch_array($bobots)){
							$selisih=$row['selisih'];
							$bobote=$row['bobot'];
							$keterangan=$row['keterangan'];
														
						}
					}
 ?>
<form action="proses_baru.php" method="POST" role="form">
				<legend>Form Standar Bobot Profile</legend>
				<input type="hidden" name="form" value="bobot">
				<input type="hidden" name="id_bobot" value="<?php echo (!empty($bobotid)?$bobotid:''); ?>">
			
			
				
				<div class="form-group">
					<label for="selisih">Selisih</label>
					<input name="selisih" type="text" class="form-control" id="selisih" required placeholder="Masukkan selisih" value="<?php echo (!empty($selisih)?$selisih:''); ?>">
				</div>
				<div class="form-group">
					<label for="bobot">Bobot</label>
					<input name="bobot" type="text" class="form-control" id="bobot" required placeholder="Masukkan Nilai Bobot" value="<?php echo (!empty($bobote)?$bobote:''); ?>">
				</div>
				<div class="form-group">
					<label for="keterangan">Keterangan</label>
					<textarea name="keterangan" class="form-control" id="keterangan" placeholder="Masukkan Keterangan"><?php echo (!empty($keterangan)?$keterangan:''); ?></textarea> 
				</div>
								
			
				<button name="<?php echo !empty($bobotid)?'save':'submit'; ?>" type="submit" class="btn btn-primary">Submit</button>
				<a href="bobot_profile.php" class="btn btn-warning">Batal</a>
			</form>