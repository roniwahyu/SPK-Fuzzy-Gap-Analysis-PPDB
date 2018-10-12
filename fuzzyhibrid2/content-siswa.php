<div class="container">
	
	<div class="row">
		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
			<?php include('form-siswa.php'); ?>
		</div>
		<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
			<table class="table table-hover table-condensed table-striped table-bordered">
				<thead>
					<tr>
						<th>No.</th>
						<th>Nama Siswa</th>
						<th>Asal Sekolah</th>
						<th>TTL</th>
						
						<th style="width:20%">Aksi</th>
					</tr>
				</thead>
				<?php include('list-siswa.php'); 
					show_fuzzy('all');
					//rule_fuzzy();
				?>
			</table>
		</div>
	</div>

</div>
