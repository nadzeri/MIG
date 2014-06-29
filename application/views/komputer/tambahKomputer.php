<form action = "<?= base_url('komputer/tahap1')?>" method = "post">
	<select name = "No_Komputer">		
		<?php 
			foreach ($data as $row) {
				//echo '<option id = "satu" value='. $row->Merk .'>' . $row->Merk . ' </option>';
				//echo '<input type="text" id='. $row->No_Komputer .' value = '. $row->Merk .'>';
				echo '<option value='. $row->No_Komputer .' >'. $row->Merk . ' - '.$row->Type . '</option>';
			}
			
		?>
		
		<input name = "Jumlah">
	</select>
</form>