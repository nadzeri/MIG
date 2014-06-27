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
        <a href="#cabang" class="btn btn-lg btn-primary btn-block">Lanjutkan</a>
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