<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url(); ?>/assets/favicon.ico">

    <title>lsm page</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/dist/css/custom.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?php echo base_url(); ?>assets/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php echo base_url(); ?>assets/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
     <![endif]-->

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>assets/carousel.css" rel="stylesheet">
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
              <li class="active"><em><a class="navbar-brand" href="#"><b></fontcolor="black">LIFE SAVER MISSIONARIES</font></b></a></em></li>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="<?php echo base_url();?>about_us">About</a></li>
                <li><a href="<?php echo base_url();?>click_here_to_contact_us">Contact</a></li>
                <li><a href="<?php echo base_url();?>click_here_for_archives">Archives</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">More <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">our core values</a></li>
                    <li><a href="#">our programs</a></li>
                    <li><a href="#">Lsm ploicy</a></li>
                    <li role="separator" class="divider"></li>
                  </ul>
                </li><br>
                <li><a href="<?php echo base_url();?>Lsm/visionmore">Vision</a></li>
                <li><a href="<?php echo base_url();?>go_to_our_goal">Goal</a></li>
                <li><a href="<?php echo base_url();?>go_to_our_mission">Mission</a></li>
              </ul>
            </div>
          </div>
        </nav>
       <p><a class="btn btn-lg btn-primary" href="<?php echo base_url();?>view_candidates_profiles" role="button"><i>Profiles</i></a></p>
      </div>
    </div>


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="<?php echo base_url();?>images/book-1936547_1280.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
             
              <h1><I>VISION</I></h1>
              <p><a class="btn btn-lg btn-primary" role="button" href="<?php echo base_url();?>Lsm/visionmore"><i>Our Vision</i></a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide"  src="<?php echo base_url();?>images/book-1936547_1280.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              
              <h1><em>Goal</em></h1>
              <p><a class="btn btn-lg btn-primary" href="<?php echo base_url();?>go_to_our_goal" role="button"><i>Our Goal</i></a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="<?php echo base_url();?>images/book-1936547_1280.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              
              <h1><em>Mission</em></h1>
              <p><a class="btn btn-lg btn-primary" href="<?php echo base_url();?>go_to_our_mission" role="button"><i>Our Mission</i></a></p>
            </div>
          </div>
        </div>
      </div>
      
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="<?php echo base_url();?>images/IMG-20170613-WA0022.jpg" alt="Generic placeholder image" width="160" height="160">
          
          <h2>Chairperson</h2>
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">View roles <span class="caret"></span></a>
                  <textarea cols="50" rows="20" class="dropdown-menu">
                    -	Report directly to the board.
                    -	Accountable for all the funds 
                      and support from donors.
                    -	Should know all the employees 
                      of the project and should inform the 
                      board of new members.
                    -	Oversees all the projects’ activities.
                    -	Works hand in hand with the Manager 
                      to plan for the projects’ activities 
                      which is submitted to the board for 
                      approval.
                    -	Monitors and evaluates the performance 
                      of the Manager, Finance manager and 
                      project manager.
                    -	Responsible for allocation of duties 
                      to the project members.
                  </textarea>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="<?php echo base_url();?>images/IMG-20170613-WA0027.jpg" alt="Generic placeholder image" width="150" height="150">
          
          <h2>Vice Chairperson</h2>
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">View roles <span class="caret"></span></a>
                  <textarea cols="50" rows="20" class="dropdown-menu">
                    -	Reports to the Chairperson directly 
                      and only.
                    -	In charge of recruiting new members, 
                      whom 
                      he / she introduces to the CEO. 
                    -	Ensures that all staff reports on 
                      time.
                    - Ensure that activities are done and 
                      delivered on time.
                    -	In charge of the support staff after 
                      the project manager.
                    -	Supervises the work of the project 
                      manager.
                    -	Responsible for the projects’ 
                      documentation 
                      which he/she should submit to the CEO 
                      upon request.
                  </textarea>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="<?php echo base_url();?>images/IMG-20170613-WA0026.jpg" alt="Generic placeholder image" width="140" height="140">
          
          <h2>Project Coordinator </h2>
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">View roles <span class="caret"></span></a>
                  <textarea cols="50" rows="20" class="dropdown-menu">
                    -	Reports to the Chairperson and board 
                      whenever called upon.
                    -	In charge of all the financial 
                      documentation of the project.
                    -	Accountable for each and every 
                      bit of money that is used to run 
                      the project. How, where and when 
                      it goes to the allocated activities.
                    - Identifies potential service providers.
                    -	In charge of making the necessary 
                      purchases for the organization.
                    -	Writes out checks, receives invoices 
                      and makes payments to the service 
                      providers after they have been 
                      endorsed by the signatories. 
                    -	Purchasing the necessary equipment 
                      for the running of the project e.g. cameras.
                  </textarea>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Psalm 15:2-3.<span class="text-muted"><br>The truth will blow your mind.</span></h2>
          <p class="lead">The one whose walk is blameless,
                          who does what is righteous,
                          who speaks the truth from their heart;
                      
                          whose tongue utters no slander,
                          who does no wrong to a neighbor,
                          and casts no slur on others;
          </p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="<?php echo base_url(); ?>images/5ec8ba6a96e0c5bb6c80debe2b1e5e96.gif" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">Zechariah 8:16. <span class="text-muted"><br>discover for yourself.</span></h2>
          <p class="lead"> These are the things that you shall do: Speak the truth to one another; 
          render in your gates judgments that are true and make for peace;

          </p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" src="<?php echo base_url();?>images/5ec8ba6a96e0c5bb6c80debe2b1e5e96.gif" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">John 16:13. <span class="text-muted"><br>Checkmate.</span></h2>
          <p class="lead">But when he, the Spirit of truth, comes, he will guide you into all the truth. 
                          He will not speak on his own; 
                          he will speak only what he hears, and he will tell you what is yet to come.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="<?php echo base_url();?>images/5ec8ba6a96e0c5bb6c80debe2b1e5e96.gif" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


        <div class="container">
          <div class="col-lg-10">
              <fieldset>
                  <legend><em>please leave a comment</em></legend>
                
                <?php echo validation_errors(); ?>
                <?php echo form_open('Lsm/commenthere'); ?>
                  <div class="form-group">
                    <label for="firstName">Name</label>
                    
                      <input type="text" class="form-control" name="Name" id="" value="">
                   
                  </div>

                  <div class="form-group">
                    <label for="Email1msg">Email</label>
                    
                      <input type="text" class="form-control" name="Email" id="" value="">
                   
                  </div>

                  <div class="form-group">
                    <label for="Email1msg">Comment</label>
                    
                      <textarea name="Leave_comment" class="form-control inputstl" rows="5"></textarea>   
                    
                  </div><br><br><br><br>

                  <div class="form-group">
                    <div class="col-lg-offset-3 col-lg-10">
                      <button type="submit" class="btn btn-success">Save</button> <a href="<?= base_url();?>/" class="btn btn-primary">Cancel</a>
                    </div>
                  </div>
                <?php echo form_close(); ?>
              </fieldset>
            </div>
        </div>

         <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2017 Organisation, Inc. &middot; <a href="#">LSM</a> &middot; <a href="#">Terms</a></p>
              
      </footer>

      </div><!-- /.container -->


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
