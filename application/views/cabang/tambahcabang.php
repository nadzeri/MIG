<!doctype html>
<html>
  <head>
    <title>Delivery Order</title>
    <meta name="viewport" content="width=device-width">
<<<<<<< HEAD
    <link rel="stylesheet" href="<?=base_url()?>../assets/templates/css/bootstrap.min.css"/>
    <script src="<?=base_url()?>../assets/templates/js/jquery.min.js" type="text/javascript"></script>
    <script src="<?=base_url()?>../assets/templates/js/bootstrap.min.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>../assets/css/styledeliveryorder.css">
=======
    <link rel="stylesheet" href="<?=base_url()?>assets/templates/css/bootstrap.min.css"/>
    <script src="<?=base_url()?>assets/templates/js/jquery.min.js" type="text/javascript"></script>
    <script src="<?=base_url()?>assets/templates/js/bootstrap.min.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/styledeliveryorder.css">
>>>>>>> origin/master
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
<<<<<<< HEAD
                var t3 = "<button type='button' onClick=\"addInput('cabang" + (counter-1) +"');\"><img src='<?= base_url()?>../assets/gambar/addIcon.png' height='20px'></button><button type='button' onClick=\"removeInput('cabang" + (counter-1) +"');\"><img src='<?= base_url()?>../assets/gambar/deleteIcon.png' height='20px'></button><br/><br/></div>";
=======
                var t3 = "<button type='button' onClick=\"addInput('cabang" + (counter-1) +"');\"><img src='<?= base_url()?>assets/gambar/addIcon.png' height='20px'></button><button type='button' onClick=\"removeInput('cabang" + (counter-1) +"');\"><img src='<?= base_url()?>assets/gambar/deleteIcon.png' height='20px'></button><br/><br/></div>";
>>>>>>> origin/master
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
<<<<<<< HEAD
      <form class="form-signin" method="POST" action="<?= base_url()?>cabang/insertcabang">
=======
      <form class="form-signin" method="POST" action="<?= base_url()?>index.php/cabang/insertcabang">
>>>>>>> origin/master
        <h2 class="form-signin-heading">Tambah Cabang</h2>
        Nama Cabang :
        <input type="text" class="form-control" placeholder="Nama Cabang" name="Nama_Cabang">
        <br>
        <button class="btn btn-lg btn-primary btn-block">Simpan</button>
      </form>
    </div> <!-- /container -->
  </body>
</html>