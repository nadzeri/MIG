    <!--script language="Javascript" type="text/javascript">
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
    </script-->
    <script language="Javascript" type="text/javascript">
      var counter=0;
      function addInputCabang(){
          var new1="<tbody id=\"cabang"+counter+"\"><tr><td style=\"vertical-align:middle;\" id=\"a"+counter+"\"><input class=\"form-control\" type=\"text\" placeholder=\"Cabang\" name=\"Cabang[]\"</td><td style=\"vertical-align:middle;text-align:center;\" width=\"20px\" id=\"b"+counter+"\"><button type=\"button\" onclick=\"addInput("+counter+");\"><img src='<?= base_url()?>asets/gambar/addIcon.png' height='15px'></button></td>";
          var new2="<td style=\"vertical-align:middle;text-align:center;\"><input class=\"form-control\" type=\"text\" placeholder=\"User/Bagian\" name=\"User[]\"></td><td style=\"vertical-align:middle;text-align:center;\"><input class=\"form-control\" type=\"text\" placeholder=\"Jumlah\" name=\"Jumlah[]\"></td><td style=\"vertical-align:middle;text-align:center;\"><input class=\"form-control\" type=\"text\" placeholder=\"PIC\" name=\"PIC[]\"></td>";
          var new3="<td style=\"vertical-align:middle;text-align:center;\"><select name=\"Keterangan\"><option value=\"New\">New</option><option value=\"Replace\">Replace</option></select><br></td></tr></tbody>";
          if(counter==0)$(new1+new2+new3).insertAfter('#thead');
          else 
          {
              alert('#cabang' + (counter-1));
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
          <div id="page-wrapper">
            <form role="form">
            <div class="row text-center">
                <div class="col-lg-12">
                    <h1 class="page-header">Delivery Order</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row col-md-offset-3">
                <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Nomor Delivery Order</label>
                                            <input type="text" class="form-control" placeholder="Nomor Delivery Order" name="NO_DO">
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Sewa</label>
                                            <input type="date" class="form-control" placeholder="Tanggal Sewa" name="TGL_SEWA">
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Kirim</label>
                                            <input type="date" class="form-control" placeholder="Tanggal Kirim" name="TGL_KIRIM">
                                        </div>
                                        <div class="form-group">
                                            <label>Mata Uang</label>
                                            <select class="form-control" name="MATA_UANG">
                                                <option value="">--- Pilih Mata Uang ---</option>
                                                <option value="Rupiah">Rupiah</option>
                                                <option value="Dollar">Dollar</option>
                                            </select>
                                        </div>
                                        <button type="reset" class="btn btn-default">Reset</button>
                                </div>
                                <!-- /.col-lg-12 -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row text-center">
                <div class="col-lg-12">
                    <h1 class="page-header">Detail Delivery Order</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div id="cabang">
                                    </div>
                                    <table class="table table-hover table-bordered">
                                      <thead id="thead">
                                        <tr>
                                          <!--th colspan="2">Cabang <button type="button" onclick="addInputCabang();" ><img src='<?= base_url()?>assets/gambar/addIcon.png' height='15px'></button></th-->
                                          <th colspan="2" class="text-center"><button type="button" data-toggle="modal" data-target="#myModal"><img src='<?= base_url()?>assets/gambar/addIcon.png' height='15px'></button> Cabang</th>
                                          <th class="text-center">User/Bagian</th>
                                          <th class="text-center">Jumlah</th>
                                          <th class="text-center">PIC</th>
                                          <th class="text-center">Keterangan</th>
                                        </tr>
                                      </thead>
                                    </table>
                                    <button type="submit" class="btn btn-default col-md-offset-11">Simpan</button>
                                </div>
                                <!-- /.col-lg-12 -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            </form>
            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            <h4 class="modal-title" id="myModalLabel">Daftar Cabang</h4>
                        </div>
                        <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        DataTables Advanced Tables
                                    </div>
                                    <!-- /.panel-heading -->
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                                <thead>
                                                    <tr>
                                                        <th>Rendering engine</th>
                                                        <th>Browser</th>
                                                        <th>Platform(s)</th>
                                                        <th>Engine version</th>
                                                        <th>CSS grade</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="odd gradeX">
                                                        <td>Trident</td>
                                                        <td>Internet Explorer 4.0</td>
                                                        <td>Win 95+</td>
                                                        <td class="center">4</td>
                                                        <td class="center">X</td>
                                                    </tr>
                                                    <tr class="even gradeC">
                                                        <td>Trident</td>
                                                        <td>Internet Explorer 5.0</td>
                                                        <td>Win 95+</td>
                                                        <td class="center">5</td>
                                                        <td class="center">C</td>
                                                    </tr>
                                                    <tr class="odd gradeA">
                                                        <td>Trident</td>
                                                        <td>Internet Explorer 5.5</td>
                                                        <td>Win 95+</td>
                                                        <td class="center">5.5</td>
                                                        <td class="center">A</td>
                                                    </tr>
                                                    <tr class="even gradeA">
                                                        <td>Trident</td>
                                                        <td>Internet Explorer 6</td>
                                                        <td>Win 98+</td>
                                                        <td class="center">6</td>
                                                        <td class="center">A</td>
                                                    </tr>
                                                    <tr class="odd gradeA">
                                                        <td>Trident</td>
                                                        <td>Internet Explorer 7</td>
                                                        <td>Win XP SP2+</td>
                                                        <td class="center">7</td>
                                                        <td class="center">A</td>
                                                    </tr>
                                                    <tr class="even gradeA">
                                                        <td>Trident</td>
                                                        <td>AOL browser (AOL desktop)</td>
                                                        <td>Win XP</td>
                                                        <td class="center">6</td>
                                                        <td class="center">A</td>
                                                    </tr>
                                                    <tr class="gradeA">
                                                        <td>Gecko</td>
                                                        <td>Firefox 1.0</td>
                                                        <td>Win 98+ / OSX.2+</td>
                                                        <td class="center">1.7</td>
                                                        <td class="center">A</td>
                                                    </tr>
                                                    <tr class="gradeA">
                                                        <td>Gecko</td>
                                                        <td>Firefox 1.5</td>
                                                        <td>Win 98+ / OSX.2+</td>
                                                        <td class="center">1.8</td>
                                                        <td class="center">A</td>
                                                    </tr>
                                                    <tr class="gradeA">
                                                        <td>Gecko</td>
                                                        <td>Firefox 2.0</td>
                                                        <td>Win 98+ / OSX.2+</td>
                                                        <td class="center">1.8</td>
                                                        <td class="center">A</td>
                                                    </tr>
                                                    <tr class="gradeA">
                                                        <td>Gecko</td>
                                                        <td>Firefox 3.0</td>
                                                        <td>Win 2k+ / OSX.3+</td>
                                                        <td class="center">1.9</td>
                                                        <td class="center">A</td>
                                                    </tr>
                                                    <tr class="gradeA">
                                                        <td>Gecko</td>
                                                        <td>Camino 1.0</td>
                                                        <td>OSX.2+</td>
                                                        <td class="center">1.8</td>
                                                        <td class="center">A</td>
                                                    </tr>
                                                    <tr class="gradeA">
                                                        <td>Gecko</td>
                                                        <td>Camino 1.5</td>
                                                        <td>OSX.3+</td>
                                                        <td class="center">1.8</td>
                                                        <td class="center">A</td>
                                                    </tr>
                                                    <tr class="gradeA">
                                                        <td>Gecko</td>
                                                        <td>Netscape 7.2</td>
                                                        <td>Win 95+ / Mac OS 8.6-9.2</td>
                                                        <td class="center">1.7</td>
                                                        <td class="center">A</td>
                                                    </tr>
                                                    <tr class="gradeA">
                                                        <td>Gecko</td>
                                                        <td>Netscape Browser 8</td>
                                                        <td>Win 98SE+</td>
                                                        <td class="center">1.7</td>
                                                        <td class="center">A</td>
                                                    </tr>
                                                    <tr class="gradeA">
                                                        <td>Gecko</td>
                                                        <td>Netscape Navigator 9</td>
                                                        <td>Win 98+ / OSX.2+</td>
                                                        <td class="center">1.8</td>
                                                        <td class="center">A</td>
                                                    </tr>
                                                    <tr class="gradeA">
                                                        <td>Gecko</td>
                                                        <td>Mozilla 1.0</td>
                                                        <td>Win 95+ / OSX.1+</td>
                                                        <td class="center">1</td>
                                                        <td class="center">A</td>
                                                    </tr>
                                                    <tr class="gradeA">
                                                        <td>Gecko</td>
                                                        <td>Mozilla 1.1</td>
                                                        <td>Win 95+ / OSX.1+</td>
                                                        <td class="center">1.1</td>
                                                        <td class="center">A</td>
                                                    </tr>
                                                    <tr class="gradeA">
                                                        <td>Gecko</td>
                                                        <td>Mozilla 1.2</td>
                                                        <td>Win 95+ / OSX.1+</td>
                                                        <td class="center">1.2</td>
                                                        <td class="center">A</td>
                                                    </tr>
                                                    <tr class="gradeA">
                                                        <td>Gecko</td>
                                                        <td>Mozilla 1.3</td>
                                                        <td>Win 95+ / OSX.1+</td>
                                                        <td class="center">1.3</td>
                                                        <td class="center">A</td>
                                                    </tr>
                                                    <tr class="gradeA">
                                                        <td>Gecko</td>
                                                        <td>Mozilla 1.4</td>
                                                        <td>Win 95+ / OSX.1+</td>
                                                        <td class="center">1.4</td>
                                                        <td class="center">A</td>
                                                    </tr>
                                                    <tr class="gradeA">
                                                        <td>Gecko</td>
                                                        <td>Mozilla 1.5</td>
                                                        <td>Win 95+ / OSX.1+</td>
                                                        <td class="center">1.5</td>
                                                        <td class="center">A</td>
                                                    </tr>
                                                    <tr class="gradeA">
                                                        <td>Gecko</td>
                                                        <td>Mozilla 1.6</td>
                                                        <td>Win 95+ / OSX.1+</td>
                                                        <td class="center">1.6</td>
                                                        <td class="center">A</td>
                                                    </tr>
                                                    <tr class="gradeA">
                                                        <td>Gecko</td>
                                                        <td>Mozilla 1.7</td>
                                                        <td>Win 98+ / OSX.1+</td>
                                                        <td class="center">1.7</td>
                                                        <td class="center">A</td>
                                                    </tr>
                                                    <tr class="gradeA">
                                                        <td>Gecko</td>
                                                        <td>Mozilla 1.8</td>
                                                        <td>Win 98+ / OSX.1+</td>
                                                        <td class="center">1.8</td>
                                                        <td class="center">A</td>
                                                    </tr>
                                                    <tr class="gradeA">
                                                        <td>Gecko</td>
                                                        <td>Seamonkey 1.1</td>
                                                        <td>Win 98+ / OSX.2+</td>
                                                        <td class="center">1.8</td>
                                                        <td class="center">A</td>
                                                    </tr>
                                                    <tr class="gradeA">
                                                        <td>Gecko</td>
                                                        <td>Epiphany 2.20</td>
                                                        <td>Gnome</td>
                                                        <td class="center">1.8</td>
                                                        <td class="center">A</td>
                                                    </tr>
                                                    <tr class="gradeA">
                                                        <td>Webkit</td>
                                                        <td>Safari 1.2</td>
                                                        <td>OSX.3</td>
                                                        <td class="center">125.5</td>
                                                        <td class="center">A</td>
                                                    </tr>
                                                    <tr class="gradeA">
                                                        <td>Webkit</td>
                                                        <td>Safari 1.3</td>
                                                        <td>OSX.3</td>
                                                        <td class="center">312.8</td>
                                                        <td class="center">A</td>
                                                    </tr>
                                                    <tr class="gradeA">
                                                        <td>Webkit</td>
                                                        <td>Safari 2.0</td>
                                                        <td>OSX.4+</td>
                                                        <td class="center">419.3</td>
                                                        <td class="center">A</td>
                                                    </tr>
                                                    <tr class="gradeA">
                                                        <td>Webkit</td>
                                                        <td>Safari 3.0</td>
                                                        <td>OSX.4+</td>
                                                        <td class="center">522.1</td>
                                                        <td class="center">A</td>
                                                    </tr>
                                                    <tr class="gradeA">
                                                        <td>Webkit</td>
                                                        <td>OmniWeb 5.5</td>
                                                        <td>OSX.4+</td>
                                                        <td class="center">420</td>
                                                        <td class="center">A</td>
                                                    </tr>
                                                    <tr class="gradeA">
                                                        <td>Webkit</td>
                                                        <td>iPod Touch / iPhone</td>
                                                        <td>iPod</td>
                                                        <td class="center">420.1</td>
                                                        <td class="center">A</td>
                                                    </tr>
                                                    <tr class="gradeA">
                                                        <td>Webkit</td>
                                                        <td>S60</td>
                                                        <td>S60</td>
                                                        <td class="center">413</td>
                                                        <td class="center">A</td>
                                                    </tr>
                                                    <tr class="gradeA">
                                                        <td>Presto</td>
                                                        <td>Opera 7.0</td>
                                                        <td>Win 95+ / OSX.1+</td>
                                                        <td class="center">-</td>
                                                        <td class="center">A</td>
                                                    </tr>
                                                    <tr class="gradeA">
                                                        <td>Presto</td>
                                                        <td>Opera 7.5</td>
                                                        <td>Win 95+ / OSX.2+</td>
                                                        <td class="center">-</td>
                                                        <td class="center">A</td>
                                                    </tr>
                                                    <tr class="gradeA">
                                                        <td>Presto</td>
                                                        <td>Opera 8.0</td>
                                                        <td>Win 95+ / OSX.2+</td>
                                                        <td class="center">-</td>
                                                        <td class="center">A</td>
                                                    </tr>
                                                    <tr class="gradeA">
                                                        <td>Presto</td>
                                                        <td>Opera 8.5</td>
                                                        <td>Win 95+ / OSX.2+</td>
                                                        <td class="center">-</td>
                                                        <td class="center">A</td>
                                                    </tr>
                                                    <tr class="gradeA">
                                                        <td>Presto</td>
                                                        <td>Opera 9.0</td>
                                                        <td>Win 95+ / OSX.3+</td>
                                                        <td class="center">-</td>
                                                        <td class="center">A</td>
                                                    </tr>
                                                    <tr class="gradeA">
                                                        <td>Presto</td>
                                                        <td>Opera 9.2</td>
                                                        <td>Win 88+ / OSX.3+</td>
                                                        <td class="center">-</td>
                                                        <td class="center">A</td>
                                                    </tr>
                                                    <tr class="gradeA">
                                                        <td>Presto</td>
                                                        <td>Opera 9.5</td>
                                                        <td>Win 88+ / OSX.3+</td>
                                                        <td class="center">-</td>
                                                        <td class="center">A</td>
                                                    </tr>
                                                    <tr class="gradeA">
                                                        <td>Presto</td>
                                                        <td>Opera for Wii</td>
                                                        <td>Wii</td>
                                                        <td class="center">-</td>
                                                        <td class="center">A</td>
                                                    </tr>
                                                    <tr class="gradeA">
                                                        <td>Presto</td>
                                                        <td>Nokia N800</td>
                                                        <td>N800</td>
                                                        <td class="center">-</td>
                                                        <td class="center">A</td>
                                                    </tr>
                                                    <tr class="gradeA">
                                                        <td>Presto</td>
                                                        <td>Nintendo DS browser</td>
                                                        <td>Nintendo DS</td>
                                                        <td class="center">8.5</td>
                                                        <td class="center">C/A<sup>1</sup>
                                                        </td>
                                                    </tr>
                                                    <tr class="gradeC">
                                                        <td>KHTML</td>
                                                        <td>Konqureror 3.1</td>
                                                        <td>KDE 3.1</td>
                                                        <td class="center">3.1</td>
                                                        <td class="center">C</td>
                                                    </tr>
                                                    <tr class="gradeA">
                                                        <td>KHTML</td>
                                                        <td>Konqureror 3.3</td>
                                                        <td>KDE 3.3</td>
                                                        <td class="center">3.3</td>
                                                        <td class="center">A</td>
                                                    </tr>
                                                    <tr class="gradeA">
                                                        <td>KHTML</td>
                                                        <td>Konqureror 3.5</td>
                                                        <td>KDE 3.5</td>
                                                        <td class="center">3.5</td>
                                                        <td class="center">A</td>
                                                    </tr>
                                                    <tr class="gradeX">
                                                        <td>Tasman</td>
                                                        <td>Internet Explorer 4.5</td>
                                                        <td>Mac OS 8-9</td>
                                                        <td class="center">-</td>
                                                        <td class="center">X</td>
                                                    </tr>
                                                    <tr class="gradeC">
                                                        <td>Tasman</td>
                                                        <td>Internet Explorer 5.1</td>
                                                        <td>Mac OS 7.6-9</td>
                                                        <td class="center">1</td>
                                                        <td class="center">C</td>
                                                    </tr>
                                                    <tr class="gradeC">
                                                        <td>Tasman</td>
                                                        <td>Internet Explorer 5.2</td>
                                                        <td>Mac OS 8-X</td>
                                                        <td class="center">1</td>
                                                        <td class="center">C</td>
                                                    </tr>
                                                    <tr class="gradeA">
                                                        <td>Misc</td>
                                                        <td>NetFront 3.1</td>
                                                        <td>Embedded devices</td>
                                                        <td class="center">-</td>
                                                        <td class="center">C</td>
                                                    </tr>
                                                    <tr class="gradeA">
                                                        <td>Misc</td>
                                                        <td>NetFront 3.4</td>
                                                        <td>Embedded devices</td>
                                                        <td class="center">-</td>
                                                        <td class="center">A</td>
                                                    </tr>
                                                    <tr class="gradeX">
                                                        <td>Misc</td>
                                                        <td>Dillo 0.8</td>
                                                        <td>Embedded devices</td>
                                                        <td class="center">-</td>
                                                        <td class="center">X</td>
                                                    </tr>
                                                    <tr class="gradeX">
                                                        <td>Misc</td>
                                                        <td>Links</td>
                                                        <td>Text only</td>
                                                        <td class="center">-</td>
                                                        <td class="center">X</td>
                                                    </tr>
                                                    <tr class="gradeX">
                                                        <td>Misc</td>
                                                        <td>Lynx</td>
                                                        <td>Text only</td>
                                                        <td class="center">-</td>
                                                        <td class="center">X</td>
                                                    </tr>
                                                    <tr class="gradeC">
                                                        <td>Misc</td>
                                                        <td>IE Mobile</td>
                                                        <td>Windows Mobile 6</td>
                                                        <td class="center">-</td>
                                                        <td class="center">C</td>
                                                    </tr>
                                                    <tr class="gradeC">
                                                        <td>Misc</td>
                                                        <td>PSP browser</td>
                                                        <td>PSP</td>
                                                        <td class="center">-</td>
                                                        <td class="center">C</td>
                                                    </tr>
                                                    <tr class="gradeU">
                                                        <td>Other browsers</td>
                                                        <td>All others</td>
                                                        <td>-</td>
                                                        <td class="center">-</td>
                                                        <td class="center">U</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>                            
                                    </div>
                                    <!-- /.panel-body -->
                                </div>
                                <!-- /.panel -->
                            </div>
                            <!-- /.col-lg-12 -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.modal-body -->
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /#modal -->