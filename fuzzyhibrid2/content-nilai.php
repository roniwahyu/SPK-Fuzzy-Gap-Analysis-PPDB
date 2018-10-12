<div class="container">
	
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<?php include('form-nilai.php'); ?>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<table class="table table-hover table-condensed table-striped table-bordered datatables">
				<thead>
					<tr>
						<th rowspan="2" class="text-center" >ID</th>
						<th rowspan="2" class="text-center" >Nama Siswa</th>
						<th rowspan="2" class="text-center" >TPA</th>
						<th rowspan="2" class="text-center" >UN</th>
						<th colspan="5" class="text-center" >IPA</th>
						<th colspan="5" class="text-center">IPS</th>
						<th colspan="5" class="text-center">Bahasa</th>
						<th rowspan="2" class="text-center">Aksi</th>
					</tr>
					<tr class="small">
						<th>I</th>
						<th>II</th>
						<th>III</th>
						<th>IV</th>
						<th>V</th>
						<th>I</th>
						<th>II</th>
						<th>III</th>
						<th>IV</th>
						<th>V</th>
						<th>I</th>
						<th>II</th>
						<th>III</th>
						<th>IV</th>
						<th>V</th>
					</tr>
				</thead>
				<?php include('list-nilai.php'); 
					show_fuzzy('all');
					//rule_fuzzy();
				?>
			</table>
		</div>
	</div>

</div>
