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
        <?php if(!$cabang){?>
        <h2 class="form-signin-heading">Belum ada cabang!</h2>
        <button type="button" class="btn btn-lg btn-primary btn-block">Tambah Cabang</button>      
        <?php }else{?>
        <h4 class="form-signin-heading" style="text-align:center;">Kurang cabang???</h4>
        <button type="button" class="btn btn-lg btn-primary" style="margin-left:21%;">Tambah Cabang</button>
        <h2 class="form-signin-heading">Detail Delivery Order</h2>
        <?php }?>
      </form>

      <form role="form" method="POST" action="#">
        <div id="cabang">
        </div>
        <?php if($cabang){?>
        <table class="table table-hover table-bordered">
          <thead>
            <tr>
              <th colspan="2">Cabang</th>
              <th>User/Bagian</th>
              <th>Jumlah</th>
              <th>PIC</th>
              <th>Keterangan</th>
            </tr>
          </thead>
          <?php $counter=0;foreach ($cabang as $cab) {$jumlahCabang[$counter]=1;$counter++;?>
          <tbody id="cabang<?php echo $counter-1;?>">
            <tr>
              <td style="vertical-align:middle;" id="a<?php echo $counter-1;?>"><label><?php echo $cab;?></label></td>
              <td style="vertical-align:middle;text-align:center;" width="20px" id="b<?php echo $counter-1;?>"><button type="button" onclick="addInput('<?php echo $counter-1;?>');"><img src='<?= base_url()?>../assets/gambar/addIcon.png' height='15px'></button></td>
              <td style="vertical-align:middle;text-align:center;"><input class="form-control" type="text" placeholder="User/Bagian" name="User[]"></td>
              <td style="vertical-align:middle;text-align:center;"><input class="form-control" type="text" placeholder="Jumlah" name="Jumlah[]"></td>
              <td style="vertical-align:middle;text-align:center;"><input class="form-control" type="text" placeholder="PIC" name="PIC[]"></td>
              <td style="vertical-align:middle;text-align:center;">
                <select name="Keterangan">
                  <option value="New">New</option>
                  <option value="Replace">Replace</option>
                </select><br>
              </td>
            </tr>
            <?php }?>
          </tbody>
        </table>
        <button type="button" class="btn btn-lg btn-primary" style="position:absolute;left:45%;width:10%;">Lanjut</button><br/><br/>
        <?php }?>
      </form> 
    </div> <!-- /container -->
  </body>
</html>