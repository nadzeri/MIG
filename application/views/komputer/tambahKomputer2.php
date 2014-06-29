<head>
	<script type="text/javascript">
		/*$(document).ready(function()
			{
				$(".pilihMerk").change(function()
					{
						var id = $(this).val();
						var datastring = 'No_Komputer=' + id;
						$.ajax
						(
							{
								type:"POST",
								url :  "<?= base_url('ajax/spesifikasi')?>",
								data : datastring,
								cache : false,
								success: function(html) 
								{
										$(".Type").html(html);
								}
							}
						);
					}
				);
			}	
		);*/

		$(document).ready(function()
	    {
	      $(".pilihMerk").change(function()
	    {
	    var id=$(this).val();
	    var datastring = 'No_Komputer=' + id;
	    $.ajax
	    ({
	    type: "POST",
	    url: "<?= base_url('ajax')?>",
	    data: dataString,
	    cache: false,
	    success: function(html)
	    {
	      $(".Type").html(html);
	    } 
	    });

	    });

	    });
	</script>
</head>



<form method = "post">
	<select class = 'pilihMerk' Name = 'pilihMerk'>
		<?php
			foreach ($data as $row) {
				//echo '<option id = "satu" value='. $row->Merk .'>' . $row->Merk . ' </option>';
				//echo '<input type="text" id='. $row->No_Komputer .' value = '. $row->Merk .'>';
				echo '<option value = ' . $row->No_Komputer . '>'. $row->Merk .'</option>';
				echo '<br>';
			}
		?>
	</select>

	<input class = "Merk" value = "asus">
	<input class = "Type" value = "a43s">
</form>