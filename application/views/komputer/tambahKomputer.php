<?php  
	
	foreach ($data as $row) {
		/*echo $row->Merk;
		echo '-';
		echo $row->Type;
		echo "\n\n";*/
		$spesifikasi[$row->No_Komputer]['Merk'] = $row->Merk;
		$spesifikasi[$row->No_Komputer]['Type'] = $row->Type;
	}
	
?>

<head>
	
</head>
<body>

	<select onclick = "changeValue(this)">
		<?php 
			foreach ($data as $row) {
				//echo '<option id = "satu" value='. $row->Merk .'>' . $row->Merk . ' </option>';
				//echo '<input type="text" id='. $row->No_Komputer .' value = '. $row->Merk .'>';
				echo '<option id='. $row->No_Komputer .' onclick = "changeValue(this)" onblur = "changeValue(this)">'. $row->Merk .'</option>';
				echo '<br>';
			}
			
		?>
	</select>

	<!--div  onclick = "changeValue(this)" >hai</div-->
	<div>
		<input id = "Merk" value = "asus">
		<input id = "Type" value = "acer">
	</div>




	<script> 
		function changeValue(id){	
		var nilai = document.getElementById('id');
		var nilainilai = nilai.value;
		{
		var Merk = document.getElementById("Merk"); 
		Merk.value = nilainilai;}
		
		}
	</script>
</body>


<?php
	
	/*foreach ($data as $row) {
		if ($spesifikasi[0] == $row->No_Komputer)
			echo $row->Type;
	}*/

?>