<?php 

require('koneksi.php');
include('header.php');
?>


<?php
if(isset($_POST['submit'])){
	$form= isset($_POST['form']) ? $_POST['form'] : '';
		switch ($form) {
			case 'ppdb':
					$idsiswa= isset($_POST['id_siswa']) ? clean(htmlspecialchars($_POST['id_siswa'])) : '';
					$tpa= isset($_POST['tpa']) ? clean(htmlspecialchars($_POST['tpa'])) : '';
					$jalur= isset($_POST['jalur']) ? clean(htmlspecialchars($_POST['jalur'])) : '';
					$nilai= isset($_POST['nilai']) ? clean(htmlspecialchars($_POST['nilai'])) : '';
					$tgldaftar= isset($_POST['tgldaftar']) ? clean(htmlspecialchars($_POST['tgldaftar'])) : '';
					$pilihan1= isset($_POST['pilihan1']) ? clean(htmlspecialchars($_POST['pilihan1'])) : '';
					$pilihan2= isset($_POST['pilihan2']) ? clean(htmlspecialchars($_POST['pilihan2'])) : '';
					
								
						$sql="insert into ppdb (id_siswa,tpa,jalur,nilai,tgl_daftar,pilihan1,pilihan2) values ('".$idsiswa."','".$tpa."','".$jalur."','".$nilai."','".$tgldaftar."','".$pilihan1."','".$pilihan2."')";
						// echo $sql;
						$insert=mysql_query($sql)or die('Insert Data PPDB Error:'.mysql_error());
						if($insert==true){
							// echo $sql;
							alert('success','insert','ppdb.php');
							$sql1="insert into nilai (id_siswa,nilai_tpa,nilai_un) values ('".$idsiswa."','".$tpa."','".$nilai."')";
							$insert1=mysql_query($sql1)or die('Insert Data Nilai Error:'.mysql_error());
							if($insert1==true){
								// echo $sql;
								// alert('success','insert','nilai.php');
								
							}else{
								alert('danger','insert','nilai.php');
							}
						}else{
							alert('danger','insert','ppdb.php');
						}
					
				break;
				case 'nilai':
					$idsiswa= isset($_POST['id_siswa']) ? clean(htmlspecialchars($_POST['id_siswa'])) : '';
					$tpa= isset($_POST['nilai_tpa']) ? clean(htmlspecialchars($_POST['nilai_tpa'])) : '';
					$un= isset($_POST['nilai_un']) ? clean(htmlspecialchars($_POST['nilai_un'])) : '';
					$ipa1= isset($_POST['nipa1']) ? clean(htmlspecialchars($_POST['nipa1'])) : '';
					$ipa2= isset($_POST['nipa2']) ? clean(htmlspecialchars($_POST['nipa2'])) : '';
					$ipa3= isset($_POST['nipa3']) ? clean(htmlspecialchars($_POST['nipa3'])) : '';
					$ipa4= isset($_POST['nipa4']) ? clean(htmlspecialchars($_POST['nipa4'])) : '';
					$ipa5= isset($_POST['nipa5']) ? clean(htmlspecialchars($_POST['nipa5'])) : '';
					$ips1= isset($_POST['nips1']) ? clean(htmlspecialchars($_POST['nips1'])) : '';
					$ips2= isset($_POST['nips2']) ? clean(htmlspecialchars($_POST['nips2'])) : '';
					$ips3= isset($_POST['nips3']) ? clean(htmlspecialchars($_POST['nips3'])) : '';
					$ips4= isset($_POST['nips4']) ? clean(htmlspecialchars($_POST['nips4'])) : '';
					$ips5= isset($_POST['nips5']) ? clean(htmlspecialchars($_POST['nips5'])) : '';
					$bind1= isset($_POST['bind1']) ? clean(htmlspecialchars($_POST['bind1'])) : '';
					$bind2= isset($_POST['bind2']) ? clean(htmlspecialchars($_POST['bind2'])) : '';
					$bind3= isset($_POST['bind3']) ? clean(htmlspecialchars($_POST['bind3'])) : '';
					$bind4= isset($_POST['bind4']) ? clean(htmlspecialchars($_POST['bind4'])) : '';
					$bind5= isset($_POST['bind5']) ? clean(htmlspecialchars($_POST['bind5'])) : '';
													
						$sql="insert into nilai (id_siswa,nilai_tpa,nilai_un,ipa1,ipa2,ipa3,ipa4,ipa5,ips1,ips2,ips3,ips4,ips5,bind1,bind2,bind3,bind4,bind5) values ('".$idsiswa."','".$tpa."','".$un."','".$ipa1."','".$ipa2."','".$ipa3."','".$ipa4."','".$ipa5."','".$ips1."','".$ips2."','".$ips3."','".$ips4."','".$ips5."','".$bind1."','".$bind2."','".$bind3."','".$bind4."','".$bind5."')";
						// echo $sql;
						$insert=mysql_query($sql)or die('Insert Data Nilai Error:'.mysql_error());
						// $numrows=mysql_num_rows($insert);
						if($insert>0){
							// echo $sql;
							alert('success','insert','nilai.php');
							
						}else{
							alert('danger','insert','nilai.php');
						}
						// echo $insert;
					
				break;
			
				
			case 'siswa':
					$idsiswa= isset($_POST['id_siswa']) ? clean(htmlspecialchars($_POST['id_siswa'])) : '';
					$asal= isset($_POST['asal_sekolah']) ? clean(htmlspecialchars($_POST['asal_sekolah'])) : '';
					$nim= isset($_POST['nim']) ? clean(htmlspecialchars($_POST['nim'])) : '';
					$namasiswa= isset($_POST['nama_siswa']) ? clean(htmlspecialchars($_POST['nama_siswa'])) : '';
					$tmplahir= isset($_POST['tmp_lahir']) ? clean(htmlspecialchars($_POST['tmp_lahir'])) : '';
					$tglahir= isset($_POST['tgl_lahir']) ? clean(htmlspecialchars($_POST['tgl_lahir'])) : '';
					$jkel= isset($_POST['j_kelamin']) ? clean(htmlspecialchars($_POST['j_kelamin'])) : '';
					$alamat= isset($_POST['alamat']) ? clean(htmlspecialchars($_POST['alamat'])) : '';
					$telp= isset($_POST['telp']) ? clean(htmlspecialchars($_POST['telp'])) : '';
					$sqlcheck="select * from siswa where id_siswa='".$idsiswa."'";
					
					$check=mysql_query($sqlcheck) or die('SQL Check Siswa Error:'.mysql_error());
					$numcheck=mysql_num_rows($check);

					if($numcheck==0){
						
						
						$sql="insert into siswa (nama_siswa,asal_sekolah,tmp_lahir,tgl_lahir,j_kelamin,alamat,telp) values ('".$namasiswa."','".$asal."','".$tmplahir."','".$tglahir."','".$jkel."','".$alamat."','".$telp."')";
						
						$insert=mysql_query($sql)or die('Insert Data Siswa Error:'.mysql_error());
						if($insert==true){
							// echo $sql;
							alert('success','insert','siswa.php');
						}
					}elseif($numcheck>0){
						//echo $sqlcheck;
						alert('danger','insert','siswa.php');
					}
			break;
			case 'rules':
					
					$rulename= isset($_POST['rulename']) ? clean(htmlspecialchars($_POST['rulename'])) : '';
					$tpa= isset($_POST['tpa']) ? clean(htmlspecialchars($_POST['tpa'])) : '';
					$jalur= isset($_POST['jalur']) ? clean(htmlspecialchars($_POST['jalur'])) : '';
					$nilai= isset($_POST['nilai']) ? clean(htmlspecialchars($_POST['nilai'])) : '';
					$fuzzy= isset($_POST['fuzzy']) ? clean(htmlspecialchars($_POST['fuzzy'])) : '';
					$rid= isset($_POST['rule_id']) ? clean(htmlspecialchars($_POST['rule_id'])) : '';
					$sqlcheck="select * from rules where rulename='".$rulename."'";
					// echo $tpa;

					$check=mysql_query($sqlcheck) or die('SQL Check Rule Error:'.mysql_error());
					$numcheck=mysql_num_rows($check);

					if($numcheck==0){
						
						
						$sql="insert into rules (rulename,tpa,jalur,nilai,fuzzy_output) values ('".$rulename."','".$tpa."','".$jalur."','".$nilai."','".$fuzzy."')";
						
						$insert=mysql_query($sql)or die('Insert Data Rule Error:'.mysql_error());
						if($insert==true){
							// echo $sql;
							alert('success','insert','rules.php');
						}
					}elseif($numcheck>0){
						// echo $sqlcheck;
						alert('danger','insert','rules.php');
					}
			break;
			default:
				# code...
				break;
		}
					
}
if(isset($_POST['save'])){
	$form= isset($_POST['form']) ? $_POST['form'] : '';
	switch ($form) {
		
		case 'siswa':
					$namasiswa= isset($_POST['nama_siswa']) ? clean(htmlspecialchars($_POST['nama_siswa'])) : '';
					$idsiswa= isset($_POST['id_siswa']) ? clean(htmlspecialchars($_POST['id_siswa'])) : '';
					$asal= isset($_POST['asal_sekolah']) ? clean(htmlspecialchars($_POST['asal_sekolah'])) : '';
					$tglahir= isset($_POST['tgl_lahir']) ? clean(htmlspecialchars($_POST['tgl_lahir'])) : '';
					$tmplahir= isset($_POST['tmp_lahir']) ? clean(htmlspecialchars($_POST['tmp_lahir'])) : '';
					$jkel= isset($_POST['j_kelamin']) ? clean(htmlspecialchars($_POST['j_kelamin'])) : '';
					$alamat= isset($_POST['alamat']) ? clean(htmlspecialchars($_POST['alamat'])) : '';
					$telp= isset($_POST['telp']) ? clean(htmlspecialchars($_POST['telp'])) : '';
					
					
					if(isset($idsiswa)):
						
							
							
							$sql="update siswa set nama_siswa='".$namasiswa."',tmp_lahir='".$tmplahir."',tgl_lahir='".$tglahir."',asal_sekolah='".$asal."',j_kelamin='".$jkel."',alamat='".$alamat."',telp='".$telp."' where id_siswa=".$idsiswa;
							
							$update=mysql_query($sql)or die('Update Data Siswa Error:'.mysql_error());
							if($update==true){
								// echo $sql;
								alert('success','update','siswa.php');
							
							}else{
								alert('danger','update','siswa.php');
							}
					endif;
			break;
		
		case 'rules':
					$rid= isset($_POST['rule_id']) ? clean(htmlspecialchars($_POST['rule_id'])) : '';
					$rulename= isset($_POST['rulename']) ? clean(htmlspecialchars($_POST['rulename'])) : '';
					$tpa= isset($_POST['tpa']) ? clean(htmlspecialchars($_POST['tpa'])) : '';
					$jalur= isset($_POST['jalur']) ? clean(htmlspecialchars($_POST['jalur'])) : '';
					$nilai= isset($_POST['nilai']) ? clean(htmlspecialchars($_POST['nilai'])) : '';
					$fuzzy= isset($_POST['fuzzy']) ? clean(htmlspecialchars($_POST['fuzzy'])) : '';
					
					if(isset($rid)):
						
							
							
							$sql="update rules set rulename='".$rulename."',tpa='".$tpa."',jalur='".$jalur."',nilai='".$nilai."',fuzzy_output='".$fuzzy."' where rule_id=".$rid;
							
							$update=mysql_query($sql)or die('Update Data Rule Error:'.mysql_error());
							if($update==true){
								// echo $sql;
								alert('success','update','rules.php');
							
						}
					endif;
		break;
		case 'ppdb':
					$idppdb= isset($_POST['id_ppdb']) ? clean(htmlspecialchars($_POST['id_ppdb'])) : '';
					$idsiswa= isset($_POST['id_siswa']) ? clean(htmlspecialchars($_POST['id_siswa'])) : '';
					$tpa= isset($_POST['tpa']) ? clean(htmlspecialchars($_POST['tpa'])) : '';
					$jalur= isset($_POST['jalur']) ? clean(htmlspecialchars($_POST['jalur'])) : '';
					$nilai= isset($_POST['nilai']) ? clean(htmlspecialchars($_POST['nilai'])) : '';
					$tgldaftar= isset($_POST['tgldaftar']) ? clean(htmlspecialchars($_POST['tgldaftar'])) : '';
					$pilihan1= isset($_POST['pilihan1']) ? clean(htmlspecialchars($_POST['pilihan1'])) : '';
					$pilihan2= isset($_POST['pilihan2']) ? clean(htmlspecialchars($_POST['pilihan2'])) : '';
					
					
					if(isset($idppdb)):
						
							
							
							$sql="update ppdb set id_siswa='".$idsiswa."',tpa='".$tpa."',jalur='".$jalur."',nilai='".$nilai."',tgl_daftar='".$tgldaftar."',pilihan1='".$pilihan1."',pilihan2='".$pilihan2."' where id_ppdb=".$idppdb;
							
							$update=mysql_query($sql)or die('Update Data PPDB Error:'.mysql_error());
							//echo $update;
							if($update=true){
								$sql2="select id_siswa,nilai_tpa,nilai_un from nilai where id_siswa='".$idsiswa."'";
								$hasil=mysql_query($sql2)or die('Check Data Nilai Error:'.mysql_error());
								$numrows2=mysql_num_rows($hasil);
								if($numrows2>0){
									$sql1="update nilai set nilai_tpa='".$tpa."',nilai_un='".$nilai."' where id_siswa='".$idsiswa."'";
									$update1=mysql_query($sql1)or die('Update Data Nilai Error:'.mysql_error());
									//echo $update1;
								}else{
									$sql3="insert into nilai (nilai_tpa,nilai_un,id_siswa) values ('".$tpa."','".$nilai."','".$idsiswa."')";
									$update3=mysql_query($sql3)or die('Insert Data Nilai Error:'.mysql_error());
									//echo $update3;
								}
								
								
								// echo $sql;
								
								alert('success','update','ppdb.php');
								
								// $numrows=mysql_num_rows($update1);

								if($update1=true){
									// alert('success','update','nilai.php');
								}else{
									$sql2="insert into nilai (id_siswa,nilai_tpa,nilai_un) values('".$idsiswa."','".$tpa."','".$nilai."')";
									$insert1=mysql_query($insert1) or die('Insert Nilai Error: '.mysql_error());
									alert('danger','update','nilai.php');
								}
							}else{
								alert('danger','update','ppdb.php');
							}
					endif;
		break;
		case 'nilai':
					$idnilai= isset($_POST['id_nilai']) ? clean(htmlspecialchars($_POST['id_nilai'])) : '';
					$idsiswa= isset($_POST['id_siswa']) ? clean(htmlspecialchars($_POST['id_siswa'])) : '';
					$tpa= isset($_POST['nilai_tpa']) ? clean(htmlspecialchars($_POST['nilai_tpa'])) : '';
					$un= isset($_POST['nilai_un']) ? clean(htmlspecialchars($_POST['nilai_un'])) : '';
					$ipa1= isset($_POST['nipa1']) ? clean(htmlspecialchars($_POST['nipa1'])) : '';
					$ipa2= isset($_POST['nipa2']) ? clean(htmlspecialchars($_POST['nipa2'])) : '';
					$ipa3= isset($_POST['nipa3']) ? clean(htmlspecialchars($_POST['nipa3'])) : '';
					$ipa4= isset($_POST['nipa4']) ? clean(htmlspecialchars($_POST['nipa4'])) : '';
					$ipa5= isset($_POST['nipa5']) ? clean(htmlspecialchars($_POST['nipa5'])) : '';
					$ips1= isset($_POST['nips1']) ? clean(htmlspecialchars($_POST['nips1'])) : '';
					$ips2= isset($_POST['nips2']) ? clean(htmlspecialchars($_POST['nips2'])) : '';
					$ips3= isset($_POST['nips3']) ? clean(htmlspecialchars($_POST['nips3'])) : '';
					$ips4= isset($_POST['nips4']) ? clean(htmlspecialchars($_POST['nips4'])) : '';
					$ips5= isset($_POST['nips5']) ? clean(htmlspecialchars($_POST['nips5'])) : '';
					$bind1= isset($_POST['bind1']) ? clean(htmlspecialchars($_POST['bind1'])) : '';
					$bind2= isset($_POST['bind2']) ? clean(htmlspecialchars($_POST['bind2'])) : '';
					$bind3= isset($_POST['bind3']) ? clean(htmlspecialchars($_POST['bind3'])) : '';
					$bind4= isset($_POST['bind4']) ? clean(htmlspecialchars($_POST['bind4'])) : '';
					$bind5= isset($_POST['bind5']) ? clean(htmlspecialchars($_POST['bind5'])) : '';								
						$sql="update nilai set id_siswa='".$idsiswa."',nilai_tpa='".$tpa."',ipa1='".$ipa1."',ipa2='".$ipa2."',ipa3='".$ipa3."',ipa4='".$ipa4."',ipa5='".$ipa5."',ips1='".$ips1."',ips2='".$ips2."',ips3='".$ips3."',ips4='".$ips4."',ips5='".$ips5."',bind1='".$bind1."',bind2='".$bind2."',bind3='".$bind3."',bind4='".$bind4."',bind5='".$bind5."' where id_nilai='".$idnilai."'";
						// echo $sql;
						$insert=mysql_query($sql)or die('Insert Data Nilai Error:'.mysql_error());
						if($insert==true){
							// echo $sql;
							alert('success','update','nilai.php');
							$sql1="update ppdb set tpa='".$tpa."',nilai='".$un."' where id_siswa='".$idsiswa."'";
							$update1=mysql_query($sql1)or die('Update Data PPDB Error:'.mysql_error());
								if($update1==true){
									alert('success','update','ppdb.php');
								}else{
									alert('danger','update','ppdb.php');
								}
						}else{
							alert('danger','update','nilai.php');
						}
					
				break;
		default:
			# code...
			break;
	}
					
}
if(!isset($_POST['submit'])){
	$form= isset($_GET['form']) ? $_GET['form'] : '';
	switch ($form) {
		
		
		case 'siswa':
			$a= isset($_GET['a']) ? $_GET['a'] : '';
			$idsiswa= isset($_GET['id']) ? $_GET['id'] : '';
			switch ($a) {
				case 'edit':
					
					include('content-siswa.php');


					# code...
					break;
				case 'delete':
					
					delete('siswa','id_siswa',$idsiswa);
					break;
				default:
					# code...
					break;
			}
		break;
		case 'rules':
			$a= isset($_GET['a']) ? $_GET['a'] : '';
			$rid= isset($_GET['id']) ? $_GET['id'] : '';
			switch ($a) {
				case 'edit':
					
					include('content-rules.php');


					# code...
					break;
				case 'delete':
					
					delete('rules','rule_id',$rid);
					break;
				default:
					# code...
					break;
			}
		break;
		case 'ppdb':
			$a= isset($_GET['a']) ? $_GET['a'] : '';
			$idppdb= isset($_GET['id']) ? $_GET['id'] : '';
			switch ($a) {
				case 'edit':
					
					include('content-ppdb.php');


					# code...
					break;
				case 'delete':
					
					delete('ppdb','id_ppdb',$idppdb);
					break;
				default:
					# code...
					break;
			}
		break;
		case 'nilai':
			$a= isset($_GET['a']) ? $_GET['a'] : '';
			$idnilai= isset($_GET['id']) ? $_GET['id'] : '';
			switch ($a) {
				case 'edit':
					
					include('content-nilai.php');


					# code...
					break;
				case 'delete':
					$sql="select id_siswa,nilai_tpa,nilai_un from nilai where id_nilai='".$idnilai."'";
					$hasil=mysql_query($sql)or die('Select Nilai Error:'.mysql_error());
					$numrows=mysql_num_rows($hasil);
					if($numrows>0){
						while($row=mysql_fetch_array($hasil)){
							$sql1="update ppdb set tpa='',nilai='' where id_siswa='".$row['id_siswa']."'";
							$update=mysql_query($sql1)or die('Select PPDB Error:'.mysql_error());
							}
					}								
					delete('nilai','id_nilai',$idnilai);
					
					break;
				default:
					# code...
					break;
			}
		break;
		default:
			# code...
			break;
	}
	
	?>
	
	<?php
}	
?>


<?php
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
