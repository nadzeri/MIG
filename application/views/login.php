<!-- application/view/login.php -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

    <title>Welcome!! </title>

    <!-- Core CSS - Include with every page -->
    <link href="<?php echo base_url();?>assets/templates/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/templates/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="<?php echo base_url();?>assets/templates/css/sb-admin.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/mainlogin.css" rel="stylesheet">

  </head>

  <body>

    <!-- +++++ Welcome Section +++++ -->
    <div id="ww">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 centered">
                    <h1>Code For Food!</h1>
                    <p>Our unlimited passion for technology, content and services, 
                        and relentless pursuit of innovation, drives us to deliver 
                        ground-breaking new excitement and entertainment in ways that only Sony can.
                        Creating unique new cultures and experiences.
                        Everything we do, is to move you emotionally..
                    </p>
                </div><!-- /col-lg-8 -->
            </div><!-- /row -->

        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <!-- <form role="form"> -->
                            <fieldset>
                                <?php echo validation_errors(); ?>
                                <?php echo form_open('user'); ?>
                                <div class="form-group">
                                    <input type="text" name="username" placeholder="Username" value="<?php echo set_value('username'); ?>" class="form-control" autofocus/>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" placeholder="Password" value="" class="form-control" autofocus/>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <div><input class="btn btn-lg btn-success btn-block" type="submit" value="Login" /></div>
                            </form>
                        </fieldset>
                    </div>
                </div>
                <a href="admin/home">GO TO ADMIN</a>
            </div>
        </div>

        </div> 
    </div><!-- /ww -->
    
        <div id="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h4>MIG</h4>
                    <p>
                        Tebet 987,<br/>
                        +34 9054 5455, <br/>
                        Jakarta, Indonesia.
                    </p>
                </div><!-- /col-lg-4 -->
                
                <div class="col-lg-4">
                    <h4>Contacts</h4>
                    <p>
                        <a href="#">Dribbble</a><br/>
                        <a href="#">Twitter</a><br/>
                        <a href="#">Facebook</a>
                    </p>
                </div><!-- /col-lg-4 -->
                
                <div class="col-lg-4">
                    <h4>About Us</h4>
                    <p>Creating unique new cultures and experiences..</p>
                </div><!-- /col-lg-4 -->
            
            </div>
        
        </div>
    </div>
    
    

    <!-- Core Scripts - Include with every page -->
    <script src="<?php echo base_url();?>assets/templates/js/jquery-1.10.2.js"></script>
    <script src="<?php echo base_url();?>assets/templates/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/templates/js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="<?php echo base_url();?>assets/templates/js/sb-admin.js"></script>

  </body>
</html>
