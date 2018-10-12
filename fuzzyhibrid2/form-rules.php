<?php 
$ruleid= isset($_GET['id']) ? $_GET['id'] : '';
					if(!empty($ruleid) || isset($ruleid)){
						$sqlrule="select * from rules where rule_id='$ruleid'";
						$rules=mysql_query($sqlrule)or die('Query Rule Error:'.mysql_error());
						while($rule=mysql_fetch_array($rules)){
							$rulename=$rule['rulename'];
							$ruleid=$rule['rule_id'];
							$tpa=$rule['tpa'];
							$jalur=$rule['jalur'];
							$nilai=$rule['nilai'];
							$fuzzy=$rule['fuzzy_output'];
						}
					}
 ?>
<form action="proses.php" method="POST" role="form">
				<legend>Form Rules</legend>
				<input type="hidden" name="form" value="rules">
				<input type="hidden" name="rule_id" value="<?php echo (!empty($ruleid)?$ruleid:''); ?>">
				<div class="form-group">
					<label for="rulename">Nama Rule</label>
					<input name="rulename" type="text" class="form-control" id="" placeholder="Masukkan Nama Rule" value="<?php echo (!empty($rulename)?$rulename:''); ?>">
				</div>
				<?php 
					$array_tpa=array('Sedikit','Sedang','Banyak');
					$array_jalur=array('Miskin','Reguler','Prestasi');
					$array_nilai=array('Buruk','Cukup','Baik'); 
				?>
				<div class="form-group">
					<label for="tpa">Range Nilai TPA</label>
					<select name="tpa" id="tpa" class="form-control" required="required">
						<option value='0' selected>Pilih Range Nilai TPA</option>
						<?php 
						foreach($array_tpa as $row){
							if(!empty($tpa)){
								if($tpa==$row){
								echo "<option value='".$row."' selected>".$row."</option>";
									}else{
								echo "<option value='".$row."' >$row</option>";
									$row='';
								}
							}else{
								echo "<option value='".$row."' >$row</option>";
									// $row='';
							}
							
						}
						 ?>
						
					</select>
				</div>
				<div class="form-group">
					<label for="jalur">Jalur Pendaftaran</label>
					<select name="jalur" id="jalur" class="form-control" required="required">
						<option value='0' selected>Pilih Jalur Pendaftaran</option>
						<?php 
						foreach($array_jalur as $row){
							if(!empty($jalur)){
								if($jalur==$row){
								echo "<option value='".$row."' selected>".$row."</option>";
									}else{
								echo "<option value='".$row."' >$row</option>";
									$row='';
								}
							}else{
								echo "<option value='".$row."' >$row</option>";
									// $row='';
							}
							
						}
						 ?>
						
					</select>
				</div>
				<div class="form-group">
					<label for="nilai">Range Nilai UN</label>
					<select name="nilai" id="nilai" class="form-control" required="required">
						<option value='0' selected>Pilih Range Nilai UN</option>
						<?php 
						foreach($array_nilai as $row){
							if(!empty($nilai)){
								if($nilai==$row){
								echo "<option value='".$row."' selected>".$row."</option>";
									}else{
								echo "<option value='".$row."' >$row</option>";
									$row='';
								}
							}else{
								echo "<option value='".$row."' >$row</option>";
									// $row='';
							}
							
						}
						 ?>
						
					</select>
				</div>
			<div class="form-group">
					<label for="fuzzy">Fuzzy Output</label>
					<input name="fuzzy" type="text" class="form-control" id="fuzzy" placeholder="Fuzzy Output" value="<?php echo (!empty($fuzzy)?$fuzzy:''); ?>">
				</div>
				
			
				<button name="<?php echo !empty($ruleid)?'save':'submit'; ?>" type="submit" class="btn btn-primary">Submit</button>
				<a href="rules.php" class="btn btn-warning">Batal</a>
			</form>