<div class="container">
	
	<div class="row">
		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
			<?php include('form-ppdb.php'); ?>
		</div>
		<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
			<table class="table table-hover table-condensed table-striped table-bordered">
				<thead>
					<tr>
						<th>ID</th>
						<th>Nama Siswa</th>
						<th>Nilai TPA</th>
						<th>Jalur Masuk</th>
						<th>Nilai UN</th>
						<th>Tgl Daftar</th>
						
						<th>Aksi</th>
					</tr>
				</thead>
				<?php include('list-ppdb.php'); 
					show_fuzzy('all');
					//rule_fuzzy();
				?>
			</table>
		</div>
	</div>

</div>
