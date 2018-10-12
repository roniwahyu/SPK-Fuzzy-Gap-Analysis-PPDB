<?php 
$siswaid= isset($_GET['id']) ? $_GET['id'] : '';
					if(!empty($siswaid) || isset($siswaid)){
						$sqlnet="select * from siswa where id_siswa='$siswaid'";
						$siswas=mysql_query($sqlnet)or die('Query net Error:'.mysql_error());
						while($siswa=mysql_fetch_array($siswas)){
							$nama_siswa=$siswa['nama_siswa'];
							$asal=$siswa['asal_sekolah'];
							$jkel=$siswa['j_kelamin'];
							$tmp_lahir=$siswa['tmp_lahir'];
							$tgl_lahir=$siswa['tgl_lahir'];
							$alamat=$siswa['alamat'];
							
						}
					}
 ?>
<form action="proses.php" method="POST" role="form">
				<legend>Form Siswa</legend>
				<input type="hidden" name="form" value="siswa">
				<input type="hidden" name="id_siswa" value="<?php echo (!empty($siswaid)?$siswaid:''); ?>">
			
			
				<div class="form-group">
					<label for="asal_sekolah">Asal Sekolah</label>
					<input name="asal_sekolah" type="text" class="form-control" id="asal_sekolah" required placeholder="Masukkan Asal Sekolah" value="<?php echo (!empty($asal)?$asal:''); ?>">
				</div>
				<div class="form-group">
					<label for="nama_siswa">Nama Siswa</label>
					<input name="nama_siswa" type="text" class="form-control" id="nama_siswa" required placeholder="Masukkan Nama Siswa" value="<?php echo (!empty($nama_siswa)?$nama_siswa:''); ?>">
				</div>
				<div class="form-group">
					<label for="tmp_lahir">Tempat Lahir</label>
					<input name="tmp_lahir" type="text" class="form-control" id="tmp_lahir" required placeholder="Masukkan Tempat Lahir" value="<?php echo (!empty($tmp_lahir)?$tmp_lahir:''); ?>">
				</div>
				<div class="form-group">
					<label for="tgl_lahir">Tanggal Lahir</label>
					<input name="tgl_lahir" type="text" class="form-control" id="tgl_lahir" required placeholder="Format Tahun-Bulan-Hari" value="<?php echo (!empty($tgl_lahir)?$tgl_lahir:''); ?>">
				</div>
				<div class="form-group">
					<label for="j_kelamin">Jenis Kelamin</label><br>
					<input class="" name="j_kelamin" type="radio"  id="j_kelamin" required  value="L" <?php if(!empty($jkel)&&$jkel=='L'){ echo "checked='checked'";} ?>> <span class="label label-default">Laki-laki</span>
					<input name="j_kelamin" type="radio"  id="j_kelamin" required  value="P" <?php if(!empty($jkel)&&$jkel=='P'){ echo "checked='checked'";} ?>> <span class="label label-default">Perempuan</span>
				</div>
				
				<div class="form-group">
					<label for="alamat">Alamat</label>
					<textarea name="alamat" type="text" class="form-control" id="alamat" placeholder="Masukkan Alamat Siswa"><?php echo (!empty($alamat)?$alamat:''); ?></textarea>
				</div>
				
				<div class="form-group">
					<label for="telp">Telpon</label>
					<input name="telp" type="text" class="form-control" id="telp"  placeholder="Masukkan Telpon Siswa" value="<?php echo (!empty($telp)?$telp:''); ?>">
				</div>
			
				<button name="<?php echo !empty($siswaid)?'save':'submit'; ?>" type="submit" class="btn btn-primary">Submit</button>
				<a href="siswa.php" class="btn btn-warning">Batal</a>
			</form>