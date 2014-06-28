<?php  
	
	$num = 0;
	foreach ($data as $row) {
		/*echo $row->Merk;
		echo '-';
		echo $row->Type;
		echo "\n\n";*/
		$spesifikasi[$num] = $row->No_Komputer;
		$num++;
	}
?>

<head>
	
</head>
<body>

	<select>
		<?php 
			foreach ($data as $row) {
				//echo '<option id = "satu" value='. $row->Merk .'>' . $row->Merk . ' </option>';
				echo '<input type="text" id="example" value = '. $row->Merk .'>';
			}
			
		?>
	</select>



	
	<script> 
		var elem = document.getElementById("example"); // Get text field
		elem.value = "My default value"; // Change field
	</script>
</body>


<?php
	
	/*foreach ($data as $row) {
		if ($spesifikasi[0] == $row->No_Komputer)
			echo $row->Type;
	}*/

?>