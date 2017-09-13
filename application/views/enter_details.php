<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url();?>assets/favicon.ico">

    <title>enter_details_here</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?php echo base_url();?>assets/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php echo base_url();?>assets/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body style="background-color:black;">
       
        <div class="container">
          <div class="col-lg-10">
              <fieldset>
                  <legend><em>please enter required details to access archives</em></legend>
                
                <?php echo validation_errors(); ?>
                <?php echo form_open('Lsm/enter_details'); ?>
                  <div class="form-group">
                    <label for="firstName">email</label>
                    
                    <input type="text" class="form-control" name="email" id="" value=""> 
                  </div>

                  <div class="form-group">
                    <label for="Email1msg">password</label>
                    
                    <input type="password" class="form-control" name="password" id="" value=""> 
                  </div>   
                  </div><br><br><br><br>

                  <div class="form-group">
                    <div class="col-lg-offset-3 col-lg-10">
                      <button type="submit" class="btn btn-success">proceed</button> <a href="<?= base_url();?>/" class="btn btn-primary">Cancel</a>
                    </div>
                  </div>
                <?php echo form_close(); ?>
              </fieldset>
            </div>
        </div>


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo base_url();?>assets/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
