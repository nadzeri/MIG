<head>
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/templates/css/bootstrap.min.css">
	<script type="text/javascript">
		function pilih (chosen){
			if (chosen == 1){
				document.getElementById('CPU').style.visibility = "visible";
 				document.getElementById('DLL').style.visibility = "hidden";
 				document.getElementById('Monitor').style.visibility = "visible";
 				document.getElementById('CPU').style.margin = "0";
 				document.getElementById('DLL').style.margin = "0";
 				document.getElementById('Monitor').style.margin = "0";

			}
			else if (chosen == 2){
				document.getElementById('CPU').style.visibility = "visible";
				document.getElementById('Monitor').style.visibility = "hidden";
				document.getElementById('DLL').style.visibility = "hidden";
				document.getElementById('CPU').style.margin = "0";
 				document.getElementById('DLL').style.margin = "0";
 				document.getElementById('Monitor').style.margin = "0";
			}
			else if (chosen == 3){
				document.getElementById('CPU').style.visibility = "hidden";
				document.getElementById('Monitor').style.visibility = "visible";
				document.getElementById('Monitor').style.margin = "-45px 0 0 0";
				document.getElementById('DLL').style.visibility = "hidden";
				document.getElementById('CPU').style.margin = "0";
 				document.getElementById('DLL').style.margin = "0";
 				
			}
			else if (chosen == 4){
				document.getElementById('CPU').style.visibility = "hidden";
				document.getElementById('Monitor').style.visibility = "hidden";
				document.getElementById('DLL').style.visibility = "visible";
				document.getElementById('DLL').style.margin = "-90px 0 0 0";
				document.getElementById('CPU').style.margin = "0";
 				document.getElementById('Monitor').style.margin = "0";
			}
		}
	</script>
</head>	

<div class = "panel panel-default">
	<div class="panel-body">
		<h3 align="center"><b>Purchase Order</b></h3></br>
		<form enctype="multipart/form-data" method="POST" action="create" name = "PO">
		<div class="form-group">
			<label class="control-label">Tanggal PO</label>
			<div class="controls">
				<input class="form-control" type="date" name="">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label">Vendor</label>
			<div class="controls">
				<input class="form-control" type="text" name="">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label">Nomor PO</label>
			<div class="controls">
				<input class="form-control" type="text" name="">
				<input class="form-control" type="text" name="">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label">Jenis Pembelian</label>
			<div class="controls">
				<select name = "jenis" onchange="pilih(document.PO.jenis.options[document.PO.jenis.selectedIndex].value);">
					<option >-----</option>
					<option value = "1">PC</option>
					<option value = "2">CPU</option>
					<option value = "3">Monitor</option>
					<option value = "4">Dan Lain- Lain</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label">Jumlah Unit</label>
			<div class="controls">
				<input class="form-control" type="text" name="">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label">Perihal</label>
			<div class="controls">
				<input class="form-control" type="textarea" name="">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label">Jumlah Unit</label>
			<div class="controls">
				<select>
					<option>RP</option>
					<option>USD</option>
				</select>
				<input class="form-control" type="text" name="">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label">Garansi</label>
			<div class="controls">
				<select>
					<option>1 tahun</option>
					<option>2 tahun</option>
					<option>3 tahun</option>
				</select>
			</div>
		</div>

		<div class="form-group" id = "CPU" style = "visibility : hidden;">
			<label class="control-label">CPU</label>
			<div class="controls">
				<select id = "CPUS">
					<option value = "Asus">Asus</option>
					<option value = "Acer">Acer</option>
				</select>
				<input type = "button" id = 'buttons' value = "configure">
			</div>
		</div>
		<div class="form-group" id = "Monitor" style = "visibility : hidden;">
			<label class="control-label">Monitor</label>
			<div class="controls">
				<select>
					<option>Asus</option>
					<option>USD</option>
				</select>

			</div>
		</div>
		<div class="form-group" id = "DLL" style = "visibility : hidden;">
			<label class="control-label">DLL</label>
			<div class="controls">
				<select>
					<option>RP</option>
					<option>USD</option>
				</select>
			</div>
		</div>
		</form>
		<div id = "ajaxDiv"></div>
	</div>
</div>




<script src = "http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript">
	$('input#buttons').on('click', function(){
			var id = $('select#CPUS').val();
			$.post('<?php echo base_url("admin/POspesifikasi"); ?>', {id : id}, function(data){
				alert(data);
				
			});
	});
</script>