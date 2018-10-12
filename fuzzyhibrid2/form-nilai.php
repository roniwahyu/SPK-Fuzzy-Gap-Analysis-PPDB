<?php 
$id= isset($_GET['id']) ? $_GET['id'] : '';
					if(!empty($id) || isset($id)){
						$sqlnet="select * from nilai where id_nilai='$id'";
						$result=mysql_query($sqlnet)or die('Query Nilai Error:'.mysql_error());
						while($row=mysql_fetch_array($result)){
							$idsiswa=$row['id_siswa'];
							$id=$row['id_nilai'];
							$tpa=$row['nilai_tpa'];
							$un=$row['nilai_un'];
							$ipa1=$row['ipa1'];
							$ipa2=$row['ipa2'];
							$ipa3=$row['ipa3'];
							$ipa4=$row['ipa4'];
							$ipa5=$row['ipa5'];
							$ips1=$row['ips1'];
							$ips2=$row['ips2'];
							$ips3=$row['ips3'];
							$ips4=$row['ips4'];
							$ips5=$row['ips5'];
							$bind1=$row['bind1'];
							$bind2=$row['bind2'];
							$bind3=$row['bind3'];
							$bind4=$row['bind4'];
							$bind5=$row['bind5'];
							
							
							
						}
					}
 ?>
<div class="row" style="margin-top:20px;margin-bottom:20px">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<form action="proses.php" method="POST" role="form">
			<legend>Form Nilai</legend>
	</div>
	
	<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
		
				<input type="hidden" name="form" value="nilai">
				<input type="hidden" name="id_nilai" value="<?php echo (!empty($id)?$id:''); ?>">
			
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
					<label for="nilai_tpa">Nilai TPA</label>
					<input name="nilai_tpa" type="text" class="form-control" id="nilai_tpa" required placeholder="Masukkan Nilai TPA" value="<?php echo (!empty($tpa)?$tpa:''); ?>">
				</div>	
				<div class="form-group">
					<label for="nilai_un">Nilai UN</label>
					<input name="nilai_un" type="text" class="form-control" id="nilai_un" required placeholder="Nilai UN Calon Siswa" value="<?php echo (!empty($un)?$un:''); ?>">
				</div>
				
	</div>
	
	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
		
				<div class="form-group">
				<label for="nilai_ipa">Nilai Rapor IPA</label>
					<div class="row">
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
							<label for="nilai_ipa">Semester I</label>
							<input name="nipa1" type="text" class="form-control" id="ipa1" placeholder="Nilai IPA" value="<?php echo (!empty($ipa1)?$ipa1:''); ?>">
						</div>
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
							<label for="nilai_ipa">Semester II</label>
							<input name="nipa2" type="text" class="form-control" id="ipa2" placeholder="Nilai IPA" value="<?php echo (!empty($ipa1)?$ipa2:''); ?>">
						</div>
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
							<label for="nilai_ipa">Semester III</label>
							<input name="nipa3" type="text" class="form-control" id="ipa3" placeholder="Nilai IPA" value="<?php echo (!empty($ipa1)?$ipa3:''); ?>">
						</div>
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
							<label for="nilai_ipa">Semester VI</label>
							<input name="nipa4" type="text" class="form-control" id="ipa4" placeholder="Nilai IPA" value="<?php echo (!empty($ipa1)?$ipa4:''); ?>">
						</div>
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
							<label for="nilai_ipa">Semester V</label>
							<input name="nipa5" type="text" class="form-control" id="ipa5" placeholder="Nilai IPA" value="<?php echo (!empty($ipa1)?$ipa5:''); ?>">
						</div>
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
							<label for="nilai_ipa">Nilai Rata-rata</label>
							<div class="input-group">
								
								<?php $niparata=(((!empty($ipa1)?$ipa1:0)+(!empty($ipa2)?$ipa1:0)+(!empty($ipa3)?$ipa1:0)+(!empty($ipa4)?$ipa1:0)+(!empty($ipa5)?$ipa1:0))/5); ?>
								<input disabled name="niparata" type="text" class=" form-control" id="ipa6" placeholder="Nilai IPA" value="<?php echo (!empty($niparata)?$niparata:''); ?>">
									
				      		</div>
						</div>
						<hr>

					</div>
				</div><div class="form-group">
					<label for="nilai_ips">Nilai Rapor IPS</label>
					<div class="row">
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
							<label for="nilai_ipa">Semester I</label>
							<input name="nips1" type="text" class="form-control" id="ips1" placeholder="Nilai Rapor IPS" value="<?php echo (!empty($ips1)?$ips1:''); ?>">
						</div>
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
							<label for="nilai_ipa">Semester II</label>
							<input name="nips2" type="text" class="form-control" id="ips2" placeholder="Nilai Rapor IPS" value="<?php echo (!empty($ips2)?$ips2:''); ?>">
						</div>
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
							<label for="nilai_ipa">Semester III</label>
							<input name="nips3" type="text" class="form-control" id="ips3" placeholder="Nilai Rapor IPS" value="<?php echo (!empty($ips3)?$ips3:''); ?>">
						</div>
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
							<label for="nilai_ipa">Semester VI</label>
							<input name="nips4" type="text" class="form-control" id="ips4" placeholder="Nilai Rapor IPS" value="<?php echo (!empty($ips4)?$ips4:''); ?>">
						</div>
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
							<label for="nilai_ipa">Semester V</label>
							<input name="nips5" type="text" class="form-control" id="ips5" placeholder="Nilai Rapor IPS" value="<?php echo (!empty($ips5)?$ips5:''); ?>">
						</div>
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
							<label for="nilai_ipa">Nilai Rata-rata</label>
							<div class="input-group">
								<?php $nipsrata=(((!empty($ips1)?$ips1:0)+(!empty($ips2)?$ips1:0)+(!empty($ips3)?$ips1:0)+(!empty($ips4)?$ips1:0)+(!empty($ips5)?$ips1:0))/5); ?>

								<input disabled name="nipsrata" type="text" class=" form-control" id="ips6" placeholder="Nilai Rapor IPS" value="<?php echo (!empty($nipsrata)?$nipsrata:''); ?>">
								
				      		</div></div>
						<hr>

					</div>
				</div><div class="form-group">
					<label for="nilai_bahasa">Nilai Rapor Bahasa</label>
						<div class="row">
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
							<label for="bind1">Semester I</label>
							<input name="bind1" type="text" class="form-control" id="bind1" placeholder="Nilai B. Indonesia" value="<?php echo (!empty($bind1)?$bind1:''); ?>">
						</div>
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
							<label for="bind2">Semester II</label>
							<input name="bind2" type="text" class="form-control" id="bind2" placeholder="Nilai B. Indonesia" value="<?php echo (!empty($bind2)?$bind2:''); ?>">
						</div>
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
							<label for="bind3">Semester III</label>
							<input name="bind3" type="text" class="form-control" id="bind3" placeholder="Nilai B. Indonesia" value="<?php echo (!empty($bind3)?$bind3:''); ?>">
						</div>
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
							<label for="bind4">Semester VI</label>
							<input name="bind4" type="text" class="form-control" id="bind4" placeholder="Nilai B. Indonesia" value="<?php echo (!empty($bind4)?$bind4:''); ?>">
						</div>
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
							<label for="bind5">Semester V</label>
							<input name="bind5" type="text" class="form-control" id="bind5" placeholder="Nilai B. Indonesia" value="<?php echo (!empty($bind5)?$bind5:''); ?>">
						</div>
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
							<label for="bindrata">Nilai Rata-rata</label>
							<div class="input-group">
								<?php $bindrata=(((!empty($bind1)?$bind1:0)+(!empty($bind2)?$bind2:0)+(!empty($bind3)?$bind3:0)+(!empty($bind4)?$bind4:0)+(!empty($bind5)?$bind5:0))/5); ?>
								<input disabled name="bindrata" type="text" class=" form-control" id="bindrata" placeholder="Nilai B. Indonesia" value="<?php echo (!empty($bindrata)?$bindrata:''); ?>">
								
				      		</div>			


				      	</div>
						<hr>

					</div>				
				</div>
	</div>
	<button name="<?php echo !empty($id)?'save':'submit'; ?>" type="submit" class="btn btn-primary">Submit</button>
				<a href="nilai.php" class="btn btn-warning">Batal</a>
			</form>
</div>

				
				
				
				
				
			
				