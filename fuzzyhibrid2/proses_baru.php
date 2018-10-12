<?php 

require('koneksi.php');
include('header.php');
?>


<?php
if(isset($_POST['submit'])){
	$form= isset($_POST['form']) ? $_POST['form'] : '';
		switch ($form) {
			case 'gap':
				$idgap= isset($_POST['id_gap']) ? clean(htmlspecialchars($_POST['id_gap'])) : '';
				$a_nun= isset($_POST['a_nun']) ? clean(htmlspecialchars($_POST['a_nun'])) : '';
				$b_rapor= isset($_POST['b_rapor']) ? clean(htmlspecialchars($_POST['b_rapor'])) : '';
				$c_tpa= isset($_POST['c_tpa']) ? clean(htmlspecialchars($_POST['c_tpa'])) : '';
				$minat= isset($_POST['minat']) ? clean(htmlspecialchars($_POST['minat'])) : '';
				$sql="insert into standard_gap (id_gap,a_nun,b_rapor,c_tpa,minat,datetime) values ('".$idgap."','".$a_nun."','".$b_rapor."','".$c_tpa."','".$minat."','".date('d-m-Y H:m:s')."')";
						// echo $sql;
						$insert=mysql_query($sql)or die('Insert Data gap Error:'.mysql_error());
						// $numrows=mysql_num_rows($insert);
						if($insert>0){
							// echo $sql;
							alert('success','insert','standard_gap.php');
							
						}else{
							alert('danger','insert','standard_gap.php');
						}
			break;
			case 'bobot':
				$idbobot= isset($_POST['id_bobot']) ? clean(htmlspecialchars($_POST['id_bobot'])) : '';
				$bobot= isset($_POST['bobot']) ? clean(htmlspecialchars($_POST['bobot'])) : '';
				$selisih= isset($_POST['selisih']) ? clean(htmlspecialchars($_POST['selisih'])) : '';
				$keterangan= isset($_POST['keterangan']) ? clean(htmlspecialchars($_POST['keterangan'])) : '';
				$sql="insert into bobot_profile (id_gap,bobot,selisih,keterangan,datetime) values ('".$idgap."','".$bobot."','".$selisih."','".$keterangan."','".date('d-m-Y H:m:s')."')";
						// echo $sql;
						$insert=mysql_query($sql)or die('Insert Data gap Error:'.mysql_error());
						// $numrows=mysql_num_rows($insert);
						if($insert>0){
							// echo $sql;
							alert('success','insert','bobot_profile.php');
							
						}else{
							alert('danger','insert','bobot_profile.php');
						}
			break;
		}
}elseif(!isset($_POST['submit'])){
	$form=isset($_GET['form']) ? $_GET['form'] : '';
	switch ($form) {
		case 'gap':
			$a= isset($_GET['a']) ? $_GET['a'] : '';
			$idgap= isset($_GET['id']) ? $_GET['id'] : '';
			switch ($a) {
				case 'edit':
					
					include('content-gap.php');


					# code...
					break;
				case 'delete':
					
					delete('standard_gap','id_gap',$idgap);
					break;
				default:
					# code...
					break;
			}
		break;
		case 'bobot':
			$a= isset($_GET['a']) ? $_GET['a'] : '';
			$idbobot= isset($_GET['id']) ? $_GET['id'] : '';
			switch ($a) {
				case 'edit':
					
					include('content-bobot.php');


					# code...
					break;
				case 'delete':
					
					delete('bobot_profile','id_bobot',$idbobot);
					break;
				default:
					# code...
					break;
			}
		break;
		// http://localhost/fuzzyhibrid2/proses.php?form=gap&a=delete&id=6
	}
}
if(isset($_POST['save'])){
	$form= isset($_POST['form']) ? $_POST['form'] : '';
	switch ($form) {
		case 'gap':
			$idgap= isset($_POST['id_gap']) ? clean(htmlspecialchars($_POST['id_gap'])) : '';
			$a_nun= isset($_POST['a_nun']) ? clean(htmlspecialchars($_POST['a_nun'])) : '';
			$b_rapor= isset($_POST['b_rapor']) ? clean(htmlspecialchars($_POST['b_rapor'])) : '';
			$c_tpa= isset($_POST['c_tpa']) ? clean(htmlspecialchars($_POST['c_tpa'])) : '';
			$minat= isset($_POST['minat']) ? clean(htmlspecialchars($_POST['minat'])) : '';
			
			if(isset($idgap)):
				$sql="update standard_gap set minat='".$minat."',a_nun='".$a_nun."',b_rapor='".$b_rapor."',c_tpa='".$c_tpa."' where id_gap=".$idgap;
					$update=mysql_query($sql)or die('Update Data Standard GAP Error:'.mysql_error());
						if($update==true){
							// echo $sql;
							alert('success','update','standard_gap.php');
						}else{
							alert('danger','update','standard_gap.php');
						}
					endif;
			break;
		case 'bobot':
			$idbobot= isset($_POST['id_bobot']) ? clean(htmlspecialchars($_POST['id_bobot'])) : '';
			$bobot= isset($_POST['bobot']) ? clean(htmlspecialchars($_POST['bobot'])) : '';
			$selisih= isset($_POST['selisih']) ? clean(htmlspecialchars($_POST['selisih'])) : '';
			$keterangan= isset($_POST['keterangan']) ? clean(htmlspecialchars($_POST['keterangan'])) : '';
			
			if(isset($idbobot)):
				$sql="update bobot_profile set bobot='".$bobot."',selisih='".$selisih."',keterangan='".$keterangan."' where id_bobot=".$idbobot;
					$update=mysql_query($sql)or die('Update Data Standard Bobot Profile Error:'.mysql_error());
						if($update==true){
							// echo $sql;
							alert('success','update','bobot_profile.php');
						}else{
							alert('danger','update','bobot_profile.php');
						}
					endif;
			break;
	}
}	


function alert($type=null,$action=null,$url=null){
	switch ($type) {
		case 'success':
			$alert_msg='berhasil...';
			$alert='alert-success';
			$alert_status='Sukses:';
			# code...
			break;
		case 'warning':
			$alert_msg='harus diperhatikan...';
			$alert='alert-warning';
			$alert_status='Perhatian!:';
			# code...
			break;
		case 'danger':
			$alert_msg='gagal dilakukan...';
			$alert='alert-danger';
			$alert_status='Kesalahan:';
			# code...
			break;
		
		default:
			# code...
			break;
	}
	switch ($action) {
		case 'insert':
		$alert_action='Input Data Baru';
		
			# code...
			break;
		case 'update':
			$alert_action='Update Data';
			# code...
			break;
		case 'delete':
			$alert_action='Hapus Data';
			# code...
			break;
		
		default:
			# code...
			break;
	}
	?>
	<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			

			<div class="alert <?php echo $alert ?>">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<strong><?php echo $alert_status; ?></strong> <?php echo $alert_action." ".$alert_msg; ?>
			</div>
			<a href="<?php echo $url ?>"  class="btn btn-info">Klik Disini Untuk Kembali </a>
		</div>
	</div>
	</div>
<?php
}

function clean($value){
   return mysql_real_escape_string($value);
}
function delete($table=null,$field=null,$id=null){
	$table=isset($table) ? $table : '';
	$field=isset($field) ? $field : '';
	$idsiswa=isset($id) ? $id : '';
	if(isset($idsiswa)):
						$sqldelete="delete from `".$table."` where ".$field."=".$idsiswa;
						// $sqldelete="delete from `kelas` where id_siswa=".$idsiswa;
						$hasil=mysql_query($sqldelete)or die("SQL Delete ERROR:".$sqldelete."-->".mysql_error());
						if($hasil==true){
							alert('success','delete',$table.".php");
						}
					endif;
}
include('footer.php');
 ?>
