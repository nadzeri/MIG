<!doctype html>
<html>
  <head>
    <title>Delivery Order</title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="<?=base_url()?>../assets/templates/css/bootstrap.min.css"/>
    <script src="<?=base_url()?>../assets/templates/js/jquery.min.js" type="text/javascript"></script>
    <script src="<?=base_url()?>../assets/templates/js/bootstrap.min.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>../assets/css/styledeliveryorder.css">
    <script language="Javascript" type="text/javascript">
      var counter = 1;
      var limit = 25;
      function addInput(divName){
           if (counter == limit)  {
                alert("Maksimal 25 cabang!");
           }
           else {
                if(counter == 1)
                {
                  var submit="<button id=\"submitCabang\" class=\"btn btn-lg btn-primary btn-block\">Lanjut</button>";
                  var title="<h2 id=\"titleCabang\" class=\"form-signin-heading\">Masukkan Cabang</h2>";
                  $('form button').remove();
                  $(title).insertAfter('form br');
                  $('form').append(submit);
                }
                var t1 = "<div id='cabang" + (counter-1) +"'>";
                var t2 = "Nama Cabang :<input type='text' class='form-control' placeholder='Nama Cabang' name='cabang[]'>";
                var t3 = "<button type='button' onClick=\"addInput('cabang" + (counter-1) +"');\"><img src='<?= base_url()?>../assets/gambar/addIcon.png' height='20px'></button><button type='button' onClick=\"removeInput('cabang" + (counter-1) +"');\"><img src='<?= base_url()?>../assets/gambar/deleteIcon.png' height='20px'></button><br/><br/></div>";
                var element = t1+t2+t3;
                $(element).insertAfter('#' + divName);
                counter++;
           }
      }
      function removeInput(divName){
            if(counter>1)
            {
                if(counter==2)
                {
                  var element = "<button type=\"button\" class=\"btn btn-lg btn-primary btn-block\" onClick=\"addInput('cabang');\">Lanjut</button>";
                  $(element).insertAfter('form br');
                  $('#titleCabang').remove();
                  $('#submitCabang').remove();
                }
                counter--;
                $('#' + divName).remove();
           }
           else
           {
                alert("Satu-satunya data tidak bisa dihapus!");
           }
      }
  </script>
  </head>
  <body>
    <div class="container">
      <form class="form-signin" method="GET" action="<?= base_url()?>deliveryOrder/tambahDeliveryOrder">
        <h2 class="form-signin-heading">Delivery Order</h2>
        Nomor Delivery Order :
        <input type="text" class="form-control" placeholder="Nomer Delivery Order" name="NO_DO">
        Tanggal Sewa :
        <input type="date" class="form-control" placeholder="Tanggal Sewa" name="TGL_SEWA">
        Tanggal Kirim :
        <input type="date" class="form-control" placeholder="Tanggal Kirim" name="TGL_KIRIM">
        Mata Uang :
        <select class="form-control" name="MATA_UANG">
          <option value="Rupiah">Rupiah</option>
          <option value="Dollar">Dollar</option>
        </select><br>
        <button type="button" class="btn btn-lg btn-primary btn-block" onClick="addInput('cabang');">Lanjut</button>
        <div id="cabang">
        </div>
      </form>
    </div> <!-- /container -->
  </body>
</html>