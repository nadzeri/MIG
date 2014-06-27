<!doctype html>
<html>
  <head>
    <title>Delivery Order</title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js" type="text/javascript"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js" type="text/javascript"></script>
    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #eee;
      }
      
      .form-signin {
        max-width: 330px;
        padding: 15px;
        margin: 0 auto;
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin .checkbox {
        font-weight: normal;
      }
      .form-signin .form-control {
        position: relative;
        font-size: 16px;
        height: auto;
        padding: 10px;
        -webkit-box-sizing: border-box;
           -moz-box-sizing: border-box;
                box-sizing: border-box;
      }
      .form-signin .form-control:focus {
        z-index: 2;
      }
      .form-signin input[type="text"] {
        margin-bottom: -1px;
        border-bottom-left-radius: 0;
        border-bottom-right-radius: 0;
      }
      .form-signin input[type="password"] {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
      }
      .form-signin h2
      {
        text-align: center;
      }
    </style>
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
                  var submit="<button id=\"submitCabang\" type=\"button\" class=\"btn btn-lg btn-primary btn-block\" onClick=\"\">Lanjut</button>";
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
      <form class="form-signin" method="POST" action="<?= base_url()?>deliveryOrder/">
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