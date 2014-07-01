<head>
	<script type="text/javascript">
		function pilih(chosen){

			if (chosen == 1){
 			document.getElementById('PC').style.visibility = "visible";
 			document.getElementById('DLL').style.visibility = "hidden";
 			document.getElementById('Monitor').style.visibility = "visible";
 			}
 			else if (chosen == 2){
 			document.getElementById('PC').style.visibility = "hidden";
 			document.getElementById('DLL').style.visibility = "hidden";
 			document.getElementById('Monitor').style.visibility = "visible";
 			}
 			else if (chosen == 3){
 			document.getElementById('PC').style.visibility = "visible";
 			document.getElementById('DLL').style.visibility = "hidden";
 			document.getElementById('Monitor').style.visibility = "hidden";
 			}
 			else if (chosen == 4){
 			document.getElementById('PC').style.visibility = "hidden";
 			document.getElementById('DLL').style.visibility = "visible";
 			document.getElementById('Monitor').style.visibility = "hidden";
 			}
		}
		function detail(Merk){
			//alert("<?php foreach ($spesifikasi as $row) {echo $row->Merk;}?> ");
			//var Merk = Merk;
			var data['<?php  ?>']
		}
	</script>
</head>

<form name = "PO">  
	<label>tanggal</label>
	<input type = "date" name = "tanggal">
	<label>Vendor</label>
	<input type = "text" name = "vendor">
	<label>Nomor PO</label>
	<input type = "text" name = "nomorPO">
	<label>Jenis</label>
	<select name = "jenis" onchange="pilih(document.PO.jenis.options[ document.PO.jenis.selectedIndex].value);">
		<option value = "0" >-----</option>
		<option value = "1" >Personal Computer</option>
		<option value = "2" >Monitor</option>
		<option value = "3" >CPU</option>
		<option value = "4" >DLL</option>
	</select>
	<label>Prihal</label>
	<input type = "textarea" name = "prihal">
	<label>Harga</label>
	<input type = "textarea" name = "harga">
	<label>Garansi</label>
	<input type = "textarea" name = "garansi">
	<select id = "PC" style = "visibility : hidden;" onchange="detail(this.value);">
		<?php 
			foreach ($spesifikasi as $row) {
			echo "<option value = \"$row->Merk\" > ". $row->Merk ."</option>";

			};

		?>
		<!--input id = "tombol" style = "visibility:hidden;" type = 'button' value = 'detail' onclick = "detail();"-->
	</select>
	<select id = "Monitor" style = "visibility : hidden;">
		<?php 
			foreach ($spesifikasi as $row) {
			echo "<option value = <?php ?> > ". $row->Type ."</option>";
			};
		?>
	</select>
	<select id = "DLL" style = "visibility : hidden;">
		<option>VGA</option>
		<option>RAM</option>
	</select>
</form>

<!--head>
	<script type="text/javascript">
		function setOptions(chosen) {
var selbox = document.myform.opttwo;
 
 if (chosen == 1){
 		document.getElementById('myDiv').style.visibility = "visible";
 }
 else if (chosen == 2){
 	document.getElementById('myDiv').style.visibility = "hidden";
 }
}
	</script>
</head>

<form name="myform"><div class="centre">
<select name="optone" size="1"
onchange="setOptions(document.myform.optone.options[ document.myform.optone.selectedIndex].value);">
<option value=" " selected="selected"> </option>
<option value="1">First Choice</option>
<option value="2">Second Choice</option>
<option value="3">Third Choice</option>
</select><br /> <br />
<div id="myDiv" style = " visibility : hidden">jajaj</div>
<input type="button" name="go" value="Value Selected"
onclick="alert(document.myform.opttwo.options[ document.myform.opttwo.selectedIndex].value);">
</div></form-->

<!--head>
	<script type="text/javascript">
  

	function deleteElement(){
		var ni = document.getElementById('my1Div');
		ni.innerHTML = "jaja";
	}
	</script>
</head>

<input type="hidden" value="0" id="theValue" />

<p><a href="javascript:;" onclick="addElement();">Add Some Elements</a></p>
<p onclick="deleteElement();">hapus</p>

<-div id="myDiv"> </div>

<head>
	<script type="text/javascript">
		function addPaket() {

	  var ni = document.getElementById('myDiv');

	  var numi = document.getElementById('theValue');

	  var num = (document.getElementById('theValue').value -1)+ 2;

	  numi.value = num;

	  var newdiv = document.createElement('input');

	  var divIdName = 'my'+num+'Div';

	  newdiv.setAttribute('id',divIdName);

	  newdiv.innerHTML = 'Element Number '+num+' has been added! <a href=\'#\' onclick=\'removeElement('+divIdName+')\'>Remove the div "'+divIdName+'"</a>';

	  ni.appendChild(newdiv);

}
	</script>
</head>
<p><a href="javascript:;" onclick="addElement();">Add Some Elements</a></p>
<input type = "button" onclick = "addPaket();" style = "height: 30px; width : 30px; background-color:red;">paket</input>
<input type = "button" onclick = "addsatuan();" style = "height: 30px; width : 30px; background-color:red;">satuan</input>

<div id="myDiv"> </div>
<div id="satuan"> </div-->