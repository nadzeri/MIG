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
      var counter=0;
      function addInputCabang(){
          var new1="<tbody id=\"cabang"+counter+"\"><tr><td style=\"vertical-align:middle;\" id=\"a"+counter+"\"><button class=\"btn btn-primary btn-lg\" data-toggle=\"modal\" data-target=\"#myModal\">Launch demo modal</button><td style=\"vertical-align:middle;text-align:center;\" width=\"20px\" id=\"b"+counter+"\"><button type=\"button\" onclick=\"addInput("+counter+");\"><img src='<?= base_url()?>../assets/gambar/addIcon.png' height='15px'></button></td>";
          var new2="<td style=\"vertical-align:middle;text-align:center;\"><input class=\"form-control\" type=\"text\" placeholder=\"User/Bagian\" name=\"User[]\"></td><td style=\"vertical-align:middle;text-align:center;\"><input class=\"form-control\" type=\"text\" placeholder=\"Jumlah\" name=\"Jumlah[]\"></td><td style=\"vertical-align:middle;text-align:center;\"><input class=\"form-control\" type=\"text\" placeholder=\"PIC\" name=\"PIC[]\"></td>";
          var new3="<td style=\"vertical-align:middle;text-align:center;\"><select name=\"Keterangan\"><option value=\"New\">New</option><option value=\"Replace\">Replace</option></select><br></td></tr></tbody>";
          if(counter==0)$(new1+new2+new3).insertAfter('#thead');
          else 
          {
              $(new1+new2+new3).insertAfter('#cabang' + (counter-1))  ;
          }
          counter++;
        }

      function addInput(divName){
        var table = document.getElementById('cabang'+divName);
        var index = parseInt(divName);
        var rowCount = table.rows.length;
        var row = table.insertRow(rowCount);
        var colCount = table.rows[0].cells.length;
        document.getElementById('a'+divName).rowSpan=rowCount+1;
        document.getElementById('b'+divName).rowSpan=rowCount+1;
        for(var i=0; i<colCount-2; i++) { 
          var newcell = row.insertCell(i);
          newcell.innerHTML = table.rows[0].cells[i+2].innerHTML;
          newcell.setAttribute('style','vertical-align:middle;text-align:center;');
        }
        
      }
    </script>
  </head>
  <body>
    <div class="container">
      <form class="form-signin">
        <h2 class="form-signin-heading">Delivery Order</h2>
        Nomor Delivery Order :
        <label class="form-control"><?php echo $NO_DO;?></label>
        <input type="hidden" name="NO_DO" value="<?php echo $NO_DO;?>">
        Tanggal Sewa :
        <label class="form-control"><?php echo $TGL_SEWA;?></label>
        <input type="hidden" name="TGL_SEWA" value="<?php echo $TGL_SEWA;?>">
        Tanggal Kirim :
        <label class="form-control"><?php echo $TGL_KIRIM;?></label>
        <input type="hidden" name="TGL_KIRIM" value="<?php echo $TGL_KIRIM;?>">
        Mata Uang :
        <label class="form-control"><?php echo $MATA_UANG;?></label><br/>
        <input type="hidden" name="MATA_UANG" value="<?php echo $MATA_UANG;?>">
        <h2 class="form-signin-heading">Detail Delivery Order</h2>
        
      </form>

      <form method="POST" action="#">
        <div id="cabang">
        </div>
        <table class="table table-hover table-bordered">
          <thead id="thead">
            <tr>
              <th colspan="2">Cabang <button type="button" onclick="addInputCabang();"><img src='<?= base_url()?>../assets/gambar/addIcon.png' height='15px'></button></th>
              <th>User/Bagian</th>
              <th>Jumlah</th>
              <th>PIC</th>
              <th>Keterangan</th>
            </tr>
          </thead>
        </table>
        <button type="button" class="btn btn-lg btn-primary" style="position:absolute;left:45%;width:10%;">Lanjut</button><br/><br/>
      </form> 
    </div> <!-- /container -->
<!-- Modal -->
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
  </body>
</html>