<?php 
$gapid= isset($_GET['id']) ? $_GET['id'] : '';
					if(!empty($gapid) || isset($gapid)){
						$sqlnet="select * from standard_gap where id_gap='$gapid'";
						$gaps=mysql_query($sqlnet)or die('Query net Error:'.mysql_error());
						while($gap=mysql_fetch_array($gaps)){
							$minat=$gap['minat'];
							$a_nun=$gap['a_nun'];
							$b_rapor=$gap['b_rapor'];
							$c_tpa=$gap['c_tpa'];
							
							
						}
					}
 ?>
<form action="proses_baru.php" method="POST" role="form">
				<legend>Form Standar GAP</legend>
				<input type="hidden" name="form" value="gap">
				<input type="hidden" name="id_gap" value="<?php echo (!empty($gapid)?$gapid:''); ?>">
			
			
				
				<div class="form-group">
					<label for="minat">Minat</label>
					<input name="minat" type="text" class="form-control" id="minat" required placeholder="Masukkan Minat" value="<?php echo (!empty($minat)?$minat:''); ?>">
				</div>
				<div class="form-group">
					<label for="a_nun">Aspek A (NUN)</label>
					<input name="a_nun" type="text" class="form-control" id="a_nun" required placeholder="Masukkan Aspek A(NUN)" value="<?php echo (!empty($a_nun)?$a_nun:''); ?>">
				</div>
				<div class="form-group">
					<label for="b_rapor">Aspek B (Rapor)</label>
					<input name="b_rapor" type="text" class="form-control" id="b_rapor" required placeholder="Masukkan Aspek B(Rapor)" value="<?php echo (!empty($b_rapor)?$b_rapor:''); ?>">
				</div>
				<div class="form-group">
					<label for="c_tpa">Aspek C (TPA)</label>
					<input name="c_tpa" type="text" class="form-control" id="c_tpa" required placeholder="Masukkan Aspek C(TPA)" value="<?php echo (!empty($c_tpa)?$c_tpa:''); ?>">
				</div>
				
				
			
				<button name="<?php echo !empty($gapid)?'save':'submit'; ?>" type="submit" class="btn btn-primary">Submit</button>
				<a href="gap.php" class="btn btn-warning">Batal</a>
			</form>