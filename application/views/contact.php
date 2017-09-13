<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Contact</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/dist/css/profiles.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?php echo base_url();?>assets/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php echo base_url();?>assets/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/carousel.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Lsm</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="<?php echo base_url();?>">home</a></li>
                <li><a href="<?php echo base_url();?>about_us">About</a></li>
                <li><a href="#contact">Contact</a></li><br>
                <li><a href="<?php echo base_url();?>Lsm/visionmore">Vision</a></li>
                <li><a href="<?php echo base_url();?>go_to_our_goal">Goal</a></li>
                <li><a href="<?php echo base_url();?>go_to_our_mission">Mission</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
    <br><br><br><br><br>


      <div class="container marketting>"
      <div class="row">
        <div class="col-lg-5">
          <h1 style="color:#ADFF2F;margin-left:00px;font-size: 40px;">Contact</h1>
          <h1 style="color:#FFE4E1;margin-left:00px;border: 2px #FFE4E1;border-radius: 5px;">Dear well wisher you can contact us here in anyway you wish to.<br>
          Email:lifesavermissionaries
          @gmail.com<br>
          Tel: +256 772 388 728<br>
          <i class="fa fa-facebook-square" style="font-size:48px;color:red;"></i>fb: Life Saver Missionaries-LSM<br>
          Twitter: (lifesavermision)<br>
          P.O.BOX 993 Entebbe Uganda</h1>
        </div>
          <div class="col-lg-7">
            <h1>lsm location</h1>
              <div id="googleMap" style="width:90%;height:300px;"></div>
                <script>
                  function myMap() {
                    var mapProp= {
                        center:new google.maps.LatLng(0.0688912,32.4765146),
                        zoom:5,
                    };
                    var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
                  }
                </script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBcnS-YML7NnqZAlPck8aDl7NXmgn5KPsM&callback=myMap"></script>
          </div>
        </div>
      </div>
      
     
      <div>
        <!-- FOOTER -->
          <footer class="blog-footer">
            <p>Lsm Organisation Website  by <a href="juxxymars@gmail.com">junior</a>.</p>
              <p>
                  <a href="#">Back to top</a>
              </p>
          </footer>
      </div>
     


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php echo base_url(); ?>assets/assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="<?php echo base_url(); ?>assets/dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="<?php echo base_url(); ?>assets/assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo base_url(); ?>assets/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
