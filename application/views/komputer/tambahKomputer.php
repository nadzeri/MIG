
<head>
	<link type="text/css" rel = "stylesheet" href="<?= base_url()?>../assets/templates/css/bootstrap.css"></link>
	<link type="text/css" rel = "stylesheet" href="<?= base_url()?>../assets/templates/css/bootstrap-min.css"></link>
	<link type="text/css" rel = "stylesheet" href="<?= base_url()?>../assets/templates/css/bootstrap-theme.css"></link>
	<link type="text/css" rel = "stylesheet" href="<?= base_url()?>../assets/templates/css/bootstrap-theme.min.css"></link>
	<link type="text/css" rel = "stylesheet" href="<?= base_url()?>../assets/templates/js/bootstrap.js"></link> 
	<link type="text/css" rel = "stylesheet" href="<?= base_url()?>../assets/css/stylekomputer.css"></link>
</head>


<body>
	<div class="panel panel-default">
		<div class="panel-body">			
			<form method= "post" action = "<?= base_url('komputer/tambahKomputer')?>" role="form">
				<div class="form-group">
			    <label>Jumlah</label>
			    <input type="text" class="form-control" name = "Jumlah" placeholder="Jumlah Komputer" required>
			  </div>
			  <div class="form-group">
			    <label>Merk</label>
			    <input type="text" class="form-control" name = "Merk" placeholder="Merk">
			  </div>
			 <div class="form-group">
			    <label>Type</label>
			    <input type="text" class="form-control" name = "Type" placeholder="Type">
			  </div>
			  <div class="form-group">
			    <label>Chipset</label>
			    <input type="text" class="form-control" name = "Chipset" placeholder="Chipset">
			  </div>
			  <div class="form-group">
			    <label>Processor</label>
			    <input type="text" class="form-control" name = "Processor" placeholder="Processor">
			  </div>
			  <div class="form-group">
			    <label>Memory</label>
			    <input type="text" class="form-control" name = "Memory" placeholder="Memory">
			  </div>
			  <div class="form-group">
			    <label>Hard Drive</label>
			    <input type="text" class="form-control" name = "Hard_Drive" placeholder="Hard Drive">
			  </div>
			  <div class="form-group">
			    <label>Optical Storage</label>
			    <input type="text" class="form-control" name = "Optical_Storage" placeholder="Optical Storage">
			  </div>
			  <div class="form-group">
			    <label>Remotable Media</label>
			    <input type="text" class="form-control" name = "Remotable_Media" placeholder="Remoteable Media">
			  </div>
			  <div class="form-group">
			    <label>Network Device</label>
			    <input type="text" class="form-control" name = "Network_Device" placeholder="Network Device">
			  </div>
			  <div class="form-group">
			    <label>VGA</label>
			    <input type="text" class="form-control" name = "VGA" placeholder="VGA">
			  </div>
			  <div class="form-group">
			    <label>Expantion Slots</label>
			    <input type="text" class="form-control" name = "Expantion_Slots" placeholder="Expantion Slots">
			  </div>
			  <div class="form-group">
			    <label>No Port and Connection</label>
			    <input type="text" class="form-control" name = "No_Port_and_Connection" placeholder="No Port and Connection">
			  </div>
			  <div class="form-group">
			    <label>Keyboard</label>
			    <input type="text" class="form-control" name = "Keyboard" placeholder="Keyboard">
			  </div>
			  <div class="form-group">
			    <label>Porting Device</label>
			    <input type="text" class="form-control" name = "Porting_Device" placeholder="Porting Device">
			  </div>
			  <div class="form-group">
			    <label>Operating System</label>
			    <input type="text" class="form-control" name = "Operating_System" placeholder="Operating System">
			  </div>
			  <button type="submit" class="btn btn-default">Submit</button>
			</form>
		</div>
	</div>

</body>