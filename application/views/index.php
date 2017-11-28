<?php
  /*foreach ($records as $row) {
    echo $row->memberID."  ".$row->account."   ".$row->name;
  }*/

 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>frontpage</title>

    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/parallax.min.js'); ?>"></script>
    <script type="text/javascript" src="js/parallax.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style3.css'); ?>">
    <link href="css/style3.css" rel="stylesheet">
  </head>
  <body>
    <div class="parallax-window" data-parallax="scroll" data-image-src="<?php echo base_url('assets/images/2.jpg'); ?>">
        <div  style="padding-top:200px;" class="text-center">
          <h1 style="color:white; font-weight:bloder;">Hello World!</h1>
          <a href="#" class="btn btn-success">Learn More</a>
          <a href="#" class="btn btn-primary">Download</a>
          <a href="#" class="btn btn-danger">Domes</a>
        </div>
    </div>
    <div class="window-wrapper">
      <div class="container">
        <h2>456</h2>
        <p>123</p>

      </div>
    </div>
    <div class="parallax-window" data-parallax="scroll" data-image-src="<?php echo base_url('assets/images/3.jpg'); ?>"></div>
    <div class="window-wrapperr">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="list-group">
              <a href="#" class="list-group-item active">
                Cras justo odio
              </a>
              <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
              <a href="#" class="list-group-item">Morbi leo risus</a>
              <a href="#" class="list-group-item">Porta ac consectetur ac</a>
              <a href="#" class="list-group-item">Vestibulum at eros</a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="list-group">
              <a href="#" class="list-group-item active">
                Cras justo odio
              </a>
              <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
              <a href="#" class="list-group-item">Morbi leo risus</a>
              <a href="#" class="list-group-item">Porta ac consectetur ac</a>
              <a href="#" class="list-group-item">Vestibulum at eros</a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="list-group">
              <a href="#" class="list-group-item active">
                Cras justo odio
              </a>
              <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
              <a href="#" class="list-group-item">Morbi leo risus</a>
              <a href="#" class="list-group-item">Porta ac consectetur ac</a>
              <a href="#" class="list-group-item">Vestibulum at eros</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="parallax-window" data-parallax="scroll" data-image-src="461775.jpeg"></div>
    <div class="window-wrapper">
      <div class="container text-center">
        <div class="jumbotron">
          <h1 class="display-3">Hello, world!</h1>
          <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
          <hr class="my-4">
          <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
          <p class="lead">
            <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
          </p>
        </div>
      </div>
    </div>
    <div class="parallax-window" data-parallax="scroll" data-image-src="4.jpg"></div>
    <div class="window-wrapper">
      <div class="container text-center">
          <p>Copyright &copy; 2017 by test demo </p>
      </div>
    </div>

    <script>
      $('.parallax-window').parallax();
    </script>
  </body>
</html>
