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
                    <a onclick="">
                      
                    </a>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /#modal -->
        </div>
        <!-- /#page-wrapper -->