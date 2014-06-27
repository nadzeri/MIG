<!doctype html>
<html>
  <head>
    <title>Sign In</title>
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

      #cabang
      {
        visibility: hidden;
      }

      #cabang:target
      {
        visibility: visible;
      }
    </style>
    <script language="Javascript" type="text/javascript">
      var counter = 1;
      var limit = 25;
      function addInput(divName){
           if (counter == limit)  {
                alert("Tidak Bisa! Sudah melebihi batas tambah");
           }
           else {
                var newdiv = document.createElement('div');
                var t1 = "<div id='hapus" + counter + "'>Tambah Komputer " + (counter + 1) + " <br><br/>";
                var t2 = "<div class='ui-widget'><label for='Lantai'>Lantai : </label><input id='Lantai' name='Lantai[]'></div><br/>";
                var t3 = "<div class='ui-widget'><label for='Nama_UnitKerja'>Unit Kerja : </label><input id='Nama_UnitKerja' name='Nama_UnitKerja[]'></div><br/>";
                var t4 = "<label>No. PC : </label><input type='text' name='No_PC[]'><br/><br/><label>OS : </label><br/><input type='radio' name='OS" + counter + "' value='Windows 7'>Windows 7<input type='radio' name='OS" + counter + "' value='Windows 8'>Windows 8<input type='radio' name='OS" + counter + "' value='Windows XP'>Windows XP<input type='radio' name='OS" + counter + "' value='Linux'>Linux<br/><br/>";
                var t5 = "<label>Original : </label><br/><input type='radio' name='Ori" + counter + "' value='Ya'>Ya<input type='radio' name='Ori" + counter + "' value='Tidak'>Tidak<br/><br/><label>COA : </label><br/><input type='radio' name='COA" + counter + "' value='Ya'>Ya<input type='radio' name='COA" + counter + "' value='Tidak'>Tidak<br/><br/><label>Keterangan : </label><br/><textarea rows='4' cols='50' name='Keterangan[]'></textarea><br/><br/></div></div>";
                newdiv.innerHTML = t1 + t2 + t3 + t4 + t5;
                document.getElementById(divName).appendChild(newdiv);
                counter++;
           }
      }
      function removeInput(divName){
            if(counter>1)
            {
                counter--;
                var index = "hapus" + counter;
                var parent = document.getElementById(divName);
                var child = document.getElementById(index);
                child.parentNode.removeChild(child);

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

      <form class="form-signin" method="POST">
        <h2 class="form-signin-heading">Delivery Order</h2>
        Nomor Delivery Order :
        <input type="text" class="form-control" placeholder="Nomer Delivery Order">
        Tanggal Sewa :
        <input type="date" class="form-control" placeholder="Tanggal Sewa">
        Tanggal Kirim :
        <input type="date" class="form-control" placeholder="Tanggal Kirim">
        Mata Uang :
        <select class="form-control">
          <option value="Rupiah">Rupiah</option>
          <option value="Dollar">Dollar</option>
        </select><br/>
        <button class="btn btn-lg btn-primary btn-block" onClick="addInput('cabang');">Lanjutkan</button>
        <div id="cabang"><br/>
          Nama Cabang :
          <input type="text" class="form-control" placeholder="Nama Cabang">
          <!--input type="text" class="form-control" placeholder="User/Bagian">
          <input type="text" class="form-control" placeholder="Jumlah"> 
          <input type="text" class="form-control" placeholder="PIC">
          <input type="text" class="form-control" placeholder="Keterangan"-->    
        </div>  
      </form>


    </div> <!-- /container -->

  </body>
</html>