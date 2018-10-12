<?php 
require('koneksi.php'); //dibutuhkan file koneksi.php untuk koneksi ke database

include('header.php'); //termasuk file header.php
?>
<div class="container">
	<div class="row" style="margin-bottom:10px;">
		<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
			<h3>Metode Profile Matching</h3>
			
			<hr>
		</div>
		<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
			<button type="button" class="print pull-right btn-lg btn btn-info no-print"><i class="glyphicon glyphicon-print"></i> Cetak</button>

		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<?php 
				if(isset($_GET['minat'])):
					$minat=$_GET['minat'];
					switch ($minat) {
						case 'ipa':
							# code...
							include('minat-ipa.php');
							break;
						case 'ips':
							# code...
							include('minat-ips.php');
							break;
						case 'bahasa':
							# code...
							include('minat-bahasa.php');
							break;
						
						
					}
				endif;
			 ?>
		
		</div>
	</div>


<?php
include('footer.php');

 ?>		
