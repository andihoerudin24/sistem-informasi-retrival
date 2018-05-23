
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

    <title>Retrival</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">

     <link href="<?php echo base_url()?>assets/css/navbar-fixed-top.css"rel="stylesheet">

    <!-- Custom styles for this template -->
    
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    
    <link href="<?php echo base_url()?>assets/css/fontawesome-all.min.css" rel="stylesheet">
<style type="text/css">
    .navbar-inverse {
    background-color: #3b5998;
    font-size:18px;
    }
</style>
  </head>

  <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-btc"></span>Tugas Retrival</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
              <li><?php echo anchor('Dashboard','<span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home');?></li>
            <li ><?php echo anchor('Stopwad','<span class="glyphicon glyphicon-th" aria-hidden="true"></span>Stopwad'); ?></li>
            <li><?php echo anchor('Tokenisasi','<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>Tokenisasi');?></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <?php echo $contents ?>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url() ?>assets/sweetalert.min.js"></script>
    <script src="<?php echo base_url() ?>assets/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script type="text/javascript" src="<?php echo base_url() ?>ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>ckeditor/adapters/jquery.js"></script>
    <script>
          $('textarea.texteditor').ckeditor();
    </script>
  </body>
</html>
