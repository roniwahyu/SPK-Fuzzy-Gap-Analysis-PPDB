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
			
		<?php include('minat-ipa.php'); ?>	
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			
		<?php include('minat-ips.php'); ?>	
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			
		<?php include('minat-bahasa.php'); ?>	
		</div>
	</div>

<?php
include('footer.php');

 ?>		
